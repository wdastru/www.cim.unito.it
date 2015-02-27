<?php

function html_apostrophes($arg) {
    return str_replace("'", "&#39", $arg);
}

unset($hostname);
exec('hostname', $hostname);
if ($hostname[0] == "EPTADONE") {
    session_save_path('D:\Temp');
}
session_start();

$_SESSION['searchAfterEdit'] = 1;

//print_r($_SESSION);

foreach ($_POST as $key => $value)
{
    $_POST[$key] = str_replace("\'", "'", $value);
}

$_POST['name_UK2edit']  = html_apostrophes($_POST['name_UK2edit']);          
$_POST['name_IT2edit']  = html_apostrophes($_POST['name_IT2edit']);        
$_POST['place2edit']    = html_apostrophes($_POST['place2edit']);       
$_POST['quantity2edit'] = html_apostrophes($_POST['quantity2edit']);        
$_POST['lab2edit']      = html_apostrophes($_POST['lab2edit']);
$_POST['note2edit']     = html_apostrophes($_POST['note2edit']);
$_POST['CAS2edit']      = html_apostrophes($_POST['CAS2edit']);
$_POST['phrase_H2edit'] = html_apostrophes($_POST['phrase_H2edit']);
$_POST['phrase_R2edit'] = html_apostrophes($_POST['phrase_R2edit']);
$_POST['link2edit']     = html_apostrophes($_POST['link2edit']);

$localizer = "../../../";

?>

<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
<head>
<meta name="generator"
	content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />

<title>Molecular Imaging Center - University of Torino</title>


<meta name="description"
	content="University of Torino. Website of the Molecular Imaging Center." />

meta-google
<meta http-equiv="Content-Type" content="text/php; charset=us-ascii" />
meta-keywords
link-style
<link href="../catalog.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="script.js"></script>
</head>
<link rel="icon" href="images/favicon.gif" type="image/gif" />
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
				<div class='padding'>
				</div>
			</div>
			<div id='content-large'>
				<div class='paddingOuter'>
					<div id='band'>
						<h1 id='subsectionTitle'>
							<!-- InstanceBeginEditable name="subsection title" -->
							CHEMICALS CATALOG
							<!-- InstanceEndEditable -->
						</h1>
					</div>
					<div class='paddingInner'>
					    
                    <?php
                        require 'db_fields_sizes.inc.php';
                    ?>

					<form name='edit' method='post' enctype='multipart/form-data' action='<?php echo $localizer; ?>private/cataloghi/index.php'>
					    <table>
                            <tr>
                                <td>Name (<img src="../en.png" alt="UK" />):</td>
                                <td><input type='text' name='newname_UK' size='70' maxlength='<?php echo $name_UK_maxlength; ?>' value='<?php echo $_POST['name_UK2edit']; ?>'/></td>
                            </tr>
                            <tr>
                                <td>Name (<img src="../it.jpg" alt="IT" />):</td>
                                <td><input type='text' name='newname_IT' size='70' maxlength='<?php echo $name_IT_maxlength; ?>' value='<?php echo $_POST['name_IT2edit']; ?>'/></td>
                            </tr>
                        	<tr>
                        	    <td>Place :</td>
                        	    <td><input type='text' name='newplace' maxlength='<?php echo $place_maxlength; ?>' value='<?php echo $_POST['place2edit']; ?>'/></td>
                            </tr>
                            <tr>
                                <td>Quantity :</td>
                                <td><input type='text' name='newquantity' maxlength='<?php echo $quantity_maxlength; ?>' value='<?php echo $_POST['quantity2edit']; ?>'/></td>
                            </tr>
                            <tr>
                                <td>Laboratory :</td>
                                <td><input type='text' name='newlab' maxlength='<?php echo $lab_maxlength; ?>' value='<?php echo $_POST['lab2edit']; ?>'/></td>
                            </tr>
                            <tr>
                                <td>Note :</td>
                                <td><input type='text' name='newnote' maxlength='100' size='<?php echo $note_maxlength; ?>' value='<?php echo $_POST['note2edit']; ?>'/></td>
                            </tr>
                            
                            <tr>
                                <td>CAS n&deg; :</td>
                                <td><input type='text' name='newCAS' maxlength='20' size='<?php echo $CAS_maxlength; ?>' value='<?php echo $_POST['CAS2edit']; ?>'/></td>
                            </tr>
                            <tr>
                                <td>Hazard statements (H):</td>
                                <td><input type='text' name='newphrase_H' maxlength='50' size='<?php echo $phrase_H_maxlength; ?>' value='<?php echo $_POST['phrase_H2edit']; ?>'/></td>
                            </tr>
                            <tr>
                                <td>Risk statements (R) :</td>
                                <td><input type='text' name='newphrase_R' maxlength='50' size='<?php echo $phrase_R_maxlength; ?>' value='<?php echo $_POST['phrase_R2edit']; ?>'/></td>
                            </tr>
                            <tr>
                                <td>Link to the safety info :</td>
                                <td class='data scheda'><a href='../safety_info/<?php echo $_POST['link2edit']; ?>'><?php echo $_POST['link2edit']; ?></a></td>
                            </tr>
                            <tr>
                                <td>Change the safety info :</td>
                                <td>
                                    	<!--<input type='text' size='70' name='newlink'>-->
                            			<!--<label for='file1'>Filename:</label>-->
										<input type='file' name='newlink' id='newlink' />
										<input type='hidden' name='dir' value='<?php echo $localizer . 'private/cataloghi/safety_info/'; ?>' />                                    	
								    </td>
                            </tr>
                        </table>
                        <input type='hidden' name='edited' value='yes' />
                        <input type='hidden' name='oldname_UK'    value='<?php echo $_POST['name_UK2edit' ]; ?>'/>
                        <input type='hidden' name='oldname_IT'    value='<?php echo $_POST['name_IT2edit' ]; ?>'/>
                        <input type='hidden' name='oldplace'      value='<?php echo $_POST['place2edit'   ]; ?>'/>
                        <input type='hidden' name='oldquantity'   value='<?php echo $_POST['quantity2edit']; ?>'/>
                        <input type='hidden' name='oldlab'        value='<?php echo $_POST['lab2edit'     ]; ?>'/>
                        <input type='hidden' name='oldnote'       value='<?php echo $_POST['note2edit'    ]; ?>'/>
                        <input type='hidden' name='oldCAS'        value='<?php echo $_POST['CAS2edit'     ]; ?>'/>
                        <input type='hidden' name='oldphrase_H'   value='<?php echo $_POST['phrase_H2edit']; ?>'/>
                        <input type='hidden' name='oldphrase_R'   value='<?php echo $_POST['phrase_R2edit']; ?>'/>
                        <input type='hidden' name='oldlink'       value='<?php echo $_POST['link2edit'    ]; ?>'/>
                        <br />                         
                        <input type='submit' name='submit' value='Edit' />
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
				Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY <br />
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
