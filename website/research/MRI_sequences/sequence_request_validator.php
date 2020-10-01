<?php
$file2save = "../../research/MRI_sequences/MRI_sequences_form.txt";
$handle = fopen($file2save, 'a');
if($handle)
{
    $str = "\xEF\xBB\xBF". date("d/m/Y") . " - " . date("H:i:s") . "\n" . 
            "name                = " . $_POST['name'] . "\n" . 
            "organization        = " . $_POST['organization'] . "\n" . 
            "country             = " . $_POST['country'] . "\n" .
            "area of research    = " . $_POST['area_res'] . "\n" .
            "downloaded sequence = " . $_POST['sequence_name'] . "\n" .
            "email               = " . $_POST['email'] . "\n=================\n";
    
    fwrite($handle, $str);
} else {
    echo "Il file " . $file2save . " non &eacute; apribile!";
    exit();
}
fclose($handle);

if ( $_POST['sequence_name'] == 'CEST_single_slice_PV6.0.1' ) {
    $file = "package_CEST_single_slice_PV6.0.1.zip";
} else if ( $_POST['sequence_name'] == 'CEST_multi_slice_PV6.0.1' ) {
    $file = 'package_CEST_multislice_PV6.0.1.zip';
} else if ( $_POST['sequence_name'] == 'CEST_multi_slice_PV360.1.1' ) {
    $file = 'package_CEST_mslice_PV360.1.1.zip';
} else {
    die('sequence name not found');
}

if(!file_exists($file)){ // file does not exist
    die('file not found');
} else {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");
    
    // read the file from disk
    readfile($file);
}

?>