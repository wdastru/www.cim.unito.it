<?php

/* script variables */
$localizer = "../../../";
$table = "COST_WG_docs";
$DBName = "cimdb";
$WG='';
/* script variables */

if (preg_match('/^[1-5]$/', $_GET['WG'])) {
	$WG = $_GET['WG'];
} else {
	header("Location: " . $localizer . "COST/private/error.php?error=not_valid_WG");
	exit();
}

$title[1] = "Workgroup 1 - Imaging reporters for theranostic agents";
$title[2] = "Workgroup 2 - Nanocarrires for theranostic agents";
$title[3] = "Workgroup 3 - Preparation and selection of targeting vectors";
$title[4] = "Workgroup 4 - Theranostic agents responsive to endogenous and external stimuli";
$title[5] = "Workgroup 5 - Set-up of preclinical theranostic protocols";

$con = mysql_connect("localhost", "cim_adm", "vpsyyAR4jp");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}

$sql = "SELECT * FROM `" . $DBName . "`.`" . $table . "` WHERE `WG` = '" . $WG . "' ORDER BY `date` DESC";
$result = mysql_query($sql, $con);
?>

<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
		<title>Molecular Imaging Center - University of Torino</title>
        <meta name="description" content="University of Torino. Website of the Molecular Imaging Center." />
        <link href="<?php echo $localizer;?>COST/cost.css" rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="<?php echo $localizer;?>COST/private/cost.js"></script>
    </head>
    <body>
        <div id='confirmDeletionHiddenBox' style="visibility: hidden">
            <h1>WARNING !!!</h1>
            <p style="font-weight: bold;">
                The file will be deleted.
            </p>
            <form method='post' id='confirmDeletion' action=''>
                <input type='button' id='deleteButton' value='Delete'
                onclick='sendFormWGs();' />
                <input type='button' value='Cancel'
                onclick="hideBox();" />
                <input type='hidden' name='Id' value='' />
                </fieldset>
            </form>
        </div>
        <div id='section5'>
            <?php
            require ($localizer . 'includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection4">
                <!-- InstanceEndEditable -->
                <div id='sidebar'>
                    <?php
                    require $localizer . 'COST/include/COST-sidebar.php';
                    ?>
                </div>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 class='subsectionTitle'>COST Action TD1004</h1>
                        </div>
                        <div class='paddingInner'>
                            <h2 id="mgmtTitle"><?php echo $title[$WG];?></h2>
                            <div id='docsContainer'>
                                <ul>
                                    <?php
                                    $i = 0;
                                    while ($temp = mysql_fetch_array($result)) {
                                        echo "  
                                        <li>
											<input class='deleteButton' type='submit' value='-' onclick='showConfirmBox(\"del_$i\")'>
											<a href='" . $temp['path'] . $temp['filename'] . "'>" . $temp['desc'] . " (" . $temp['date'] . ")</a>
											<form class='deleteForm' action='" . $localizer . "COST/private/WGs/db.php' method='post' id='del_$i'>
												<input type='hidden' name='filename' value='" . $temp['filename'] . "' />
												<input type='hidden' name='desc' value='" . $temp['desc'] . "'>
												<input type='hidden' name='date' value='" . $temp['date'] . "'>
												<input type='hidden' name='path' value='" . $temp['path'] . "'>
												<input type='hidden' name='WG' value='" . $temp['WG'] . "'>
												<input type='hidden' name='table' value='" . $table . "'>
												<input type='hidden' name='type' value='del'>
											</form>
										</li>";
                                        $i++;
                                    }
                                    ?>
                                </ul>
                                <input type="submit" class="uploadButton" value="+" onclick="changeUploadFormVisibility('uploadFormWG<?php echo $WG;?>');" />
                                <form id="uploadFormWG<?php echo $WG;?>" class="uploadForm" 
                                	action="<?php echo $localizer;?>COST/private/WGs/db.php" method="post" enctype="multipart/form-data" >
                                    Description:
                                    <input type="text" id="description" name="desc" />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;File:
                                    <input type="file" id ="filename" name="filename" />
                                    <input type="button" value="Upload" onclick="validateFormWGs('<?php echo $WG;?>');"/>
                                    <input type="hidden" id="date" name="date" value="<?php echo date("Y-m-d");?>" />
                                    <input type="hidden" name="WG" value="<?php echo $WG;?>" />
                                    <input type="hidden" name="type" value="add" />
                                    <input type="hidden" name="table" value="<?php echo $table;?>" />
                                    <input type="hidden" name="path" value="<?php echo $localizer;?>COST/private/WGs/WG<?php echo $WG;?>_docs/" />
                                </form>
                            </div>
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
                    <br>
                    Fax. Tel. Mail
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
