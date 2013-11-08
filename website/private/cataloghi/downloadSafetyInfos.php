<?php
    
    exec('tar -zcvf safety_info.tar.gz safety_info/');
    
    //header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
    //header("Content-type:   application/x-msexcel; charset=utf-8");
    //header("Content-Disposition: attachment; filename=".$file_name.".xls"); 
    //header("Expires: 0");
    //header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    //header("Cache-Control: private",false);
    //print "$header\n$data";
    //exit;
   
    
    /*
    $zipFile = "./safety_info/safety_info.zip";
    $zipArchive = new ZipArchive();

    if (!$zipArchive->open($zipFile, ZIPARCHIVE::OVERWRITE))
        die("Failed to create archive\n");

    $zipArchive->addGlob("./safety_info/*.*");
    if (!$zipArchive->status == ZIPARCHIVE::ER_OK)
        echo "Failed to write files to zip\n";

    $zipArchive->close();
    exit;
     * 
     */
?>