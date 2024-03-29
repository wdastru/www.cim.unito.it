<?php
unset($hostname);
exec('hostname', $hostname);
if ($hostname[0] == "EPTADONE") {
    session_save_path('D:\Temp');
}
session_start();
$localizer = "../../../";

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
        <link href="<?php echo $localizer; ?>private/cataloghi/catalog.css" rel='stylesheet' type='text/css' />
	</head>
    <body>
        <div id='section7'>
            <?php
            require ($localizer . 'includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection0">
                <!-- InstanceEndEditable -->
                <div id='sidebar-narrow'>
                    <div class='padding'></div>
                </div>
                <div id='content-large'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 class='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" --> CHEMICALS CATALOG <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            
                            <?php
                                require 'db_fields_sizes.inc.php';
                            ?>
                            
                            <form name='add' method='post' enctype="multipart/form-data" action="<?php echo $localizer; ?>private/cataloghi/index.php">
                            <table>
                                
                                <input type='hidden' name='newcode' value='' />
                                <input type='hidden' name='newsupplier' value='' />
                                <tr>
                                    <td>CAS n&deg; :</td>
                                    <td><input type='text' maxlength='<?php echo $CAS_maxlength; ?>' size='70' name='newCAS'/></td>
                                </tr>
                                <tr>
                                    <td>Product name (<img src="../en.png" alt="UK" />)</td>
                                    <td><input type='text' maxlength='<?php echo $name_UK_maxlength; ?>' size='70' name='newname_UK'/></td>
                                </tr>
                                <tr>
                                    <td>Product name (<img src="../it.jpg" alt="IT" />):</td>
                                    <td><input type='text' maxlength='<?php echo $name_IT_maxlength; ?>' size='70' name='newname_IT'/></td>
                                </tr>
                                <tr>
                                    <td>Place :</td>
                                    <td><input type='text' maxlength='<?php echo $place_maxlength; ?>' size='70' name='newplace'/></td>
                                </tr>
                                <tr>
                                    <td>Quantity :</td>
                                    <td><input type='text' maxlength='<?php echo $quantity_maxlength; ?>' size='70' name='newquantity'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Laboratory : </td>
                                    <td><input type='text' maxlength='<?php echo $lab_maxlength; ?>' size='70' name='newlab'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Note : </td>
                                    <td><input type='text' maxlength='<?php echo $note_maxlength; ?>' size='70' name='newnote'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Risk Statements (R) : </td>
                                    <td><input type='text' maxlength='<?php echo $phrase_R_maxlength; ?>' size='70' name='newphrase_R'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hazard Statements (H) : </td>
                                    <td><input type='text' maxlength='<?php echo $phrase_H_maxlength; ?>' size='70' name='newphrase_H'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Link to the safety info : </td>
                                    <td>
                                    	<!--<input type='text' size='70' name='newlink'>-->
                            			<!--<label for='file1'>Filename:</label>-->
                            			<input type='file' name='newlink' id='newlink' />
										<input type='hidden' name='dir' value='<?php echo $localizer . 'private/cataloghi/safety_info/'; ?>' />                                    	
								    </td>
                                </tr>
                            </table>
                            <input type='hidden' name='added' value='yes' />
                            <br>
                            <input type='submit' name='submit' value='Add' />
                            </form>
                            <!-- InstanceEndEditable name="subsection content" -->
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
