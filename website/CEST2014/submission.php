<?php 
$localizer = "../";

if (isset($_POST['submitted']))
{
    $submitted = $_POST['submitted'];
    if ($submitted == 1) // da submission.php
    {
        if ($_FILES["file1"]["name"] != "")
        {
            $submitted = "0";
                   
            if (move_uploaded_file($_FILES["file1"]["tmp_name"], "uploads/" . $_FILES["file1"]["name"])) {$submitted = "0";
                $where = "Location: ".$localizer."CEST2014/submissionOK.php";
                header($where);    
            } else {
                $where = "Location: ".$localizer."CEST2014/submissionError.php";
                header($where);    
            }
        }
        else
        {
            $where = "Location: ".$localizer."CEST2014/missingFileError.php";
            header($where);
        }
        $submitted = "0";
    }
}
else
{
    $submitted = 0;
}
?>

<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
    <head>
        <meta name="generator"
        content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />
        <!-- InstanceBeginEditable name="title" -->
        <title>Molecular Imaging Center - University of Torino</title>
        <!-- InstanceEndEditable -->
        <!-- InstanceBeginEditable name="meta description" -->
        <meta name="description"
        content="University of Torino. Website of the Molecular Imaging Center." />
        <!-- InstanceEndEditable -->
        <meta name="google-site-verification"
        content="q6BWA8Ypxz6kFHheH3kr6xrFvLXopTTQNMlEEV3vGF0" />
        <meta http-equiv="Content-Type" content="text/php; charset=us-ascii" />
        <meta name="keywords"
        content="NMR, MRI, Imaging Molecolare, Molecular Imaging, Molecular, Imaging, Hyperpolarization, Liposomes, Targeting, Contrast Agents, Positron Emission Tomography, PET, microPET, Diagnostic Imaging, Optical Imaging, CIM, Torino, Italy, Liposomi, risonanza, magnetica, Italia" />
        <link href="<?php echo $localizer; ?>stylesheet.css" rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="script.js"></script>
        <script type="text/javascript">
            function checkSizeAndExtension()
            {
                var max_img_size = 2*1024*1024;
                var input = document.getElementById("file1");
                // check for browser support (may need to be modified)
                if(input.files && input.files.length == 1)
                {     
                    // check size      
                    if (input.files[0].size > max_img_size) 
                    {
                        alert("The file must be less than " + (max_img_size/1024/1024) + "MB");
                        return false;
                    }
                    
                    // check extension
                    if (document.getElementById) {
                        if (document.getElementById('file1') != null) {
                            var id = document.getElementById('file1');
                            var splitLength = parseInt(id.value.split('.').length)
                            var extensionCaseInsensitive = id.value.split('.')[splitLength-1];
                            
                            if (extensionCaseInsensitive.toUpperCase() != 'DOC' && extensionCaseInsensitive.toUpperCase() != 'DOCX' && extensionCaseInsensitive.toUpperCase() != 'PDF') {
                                alert("The file has to be a WORD or PDF document");
                                return false;
                            } else {
                                return true;
                            }
                        }
                    }
                } else 
                    return false;
            }
        </script>
    </head>
    <link rel="icon" href="images/favicon.gif" type="image/gif" />
    <body>
        <?php require_once($localizer . 'includes/analyticstracking.php') ?>
        <div id='section0'>
            <?php
            require ($localizer . 'includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection0">
                <!-- InstanceEndEditable -->
                <?php
                require ($localizer . 'includes/home-side-nav.php');
                ?>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div id='band'>
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" --> Molecular Imaging Center <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>

                            <h1 style="line-height: 28px; text-align: center;">Abstract submission</h1>
                            
                            <br/>
                            
                            <p>
                                The Scientific Committee calls for abstract submission on original work for oral/poster presentations.
                            </p>
                            <p>
                                Deadline for submission is 15 February 2014.    
                            </p> 
                            <p>
                                The corresponding author will be notified of the acceptance of his/her abstract and type of presentation 
                                (oral/poster) by the end of February.
                            </p>
                            
                            <b>Submission rules</b>
                            <br/>
                            
                            <ul>
                                <li>size limit: 1 page (max 2 MB)</li>
                                <li>only Word (DOC or DOCX) or PDF documents are allowed</li>
                                <li>you strictly have to follow the scheme: Introduction, Methods, Results, Discussion, Conclusions, References</li>
                                <li>see the <a href="documents/ABSTRACT_TEMPLATE.docx"><u>abstract template</u></a></li>
                                <li>you will be able to make changes on your submission until the submission deadline (15 February 2014)</li>
                            </ul>
                            
                            <br/>
                            <br/>
                                              
                            <b>Online submission</b>
                            
                            <?php
                                echo "
                                <form action='submission.php' method='post' enctype='multipart/form-data' onsubmit='return checkSizeAndExtension()'>
                                    <!--<label for='file1'>Filename:</label>-->
                                    <br/>
                                    <input type='file' name='file1' id='file1' style='width:100%'/>
                                    <input type='hidden' name='dir' value='" . $localizer;
                                echo "/uploads/' style='width:100%'/>
                                    <br /><br /> 
                                    <input type='hidden' name='submitted' value='1' />
                                    <input type='submit' name='submit' value='Submit' />
                                </form>";
                            ?>
                        </div>
                    </div>
                </div>
                <!-- subsection closing -->
            </div>
            <!-- subsection closing -->
            <div id='after'></div>
            <div id='footer'>
                <p>
                    Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY
                    <br />
                    Fax. Tel. Mail
                </p>
            </div>
            <div id='validators'>
                <p>
                    <a href="http://validator.w3.org/check?uri=referer"> <img
                    src="images/valid-xhtml10-blue_opt.png"
                    alt="Valid XHtml 1.0 Transitional" height="31" width="88" /> </a>
                </p>
                <p>
                    <a href="http://jigsaw.w3.org/css-validator/check?uri=referer"> <img
                    style="border: 0; width: 88px; height: 31px"
                    src="images/vcss-blue_opt.gif" alt="CSS Valido!" /> </a>
                </p>
            </div>
            <!-- section closing -->
        </div>
        <!-- section closing -->
        <script type="text/javascript">
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
        <!-- InstanceEnd -->
    </body>
</html>
