<?php
function uploadFile($filename, $dir) {
    
    //echo 'in uploadFile($filename, $dir)<br/>';
    //print_r($filename);
    
    if ($filename["name"] != "")
    {
        move_uploaded_file($filename["tmp_name"], $dir . $filename["name"]);
        
        //shell_exec("cp " . $_POST['dir'] . $_FILES["file1"]["name"] . " " . $relocate_string . "/777/filesGazzetta/excel_files/."); // backup copy of excel file
        //
        //$_SESSION['uploaded_file'] = $_FILES["file1"]["name"];
        //$submitted = "0";
        //
        //$where = "Location: ".$relocate_string."excel/fromExcel2Txt.php";
        //header($where);
    }
    else
    {
        //$where = "Location: ".$relocate_string."errors/error.php?error=missingFile";
        //header($where);
    }   
}

function html_apostrophes($arg) {
    return str_replace("'", "&#39", $arg);
}

unset($hostname);
exec('hostname', $hostname);
if ($hostname[0] == "EPTADONE") {
    session_save_path('D:\Temp');
}
session_start();

foreach ($_POST as $key => $value) 
{
    $_POST[$key] = str_replace("\'", "'", $value);
}

$_FILES['newlink']['name'] = str_replace("\'", "", $_FILES['newlink']['name']);
$_FILES['newlink']['name'] = str_replace("'", "", $_FILES['newlink']['name']);
$_POST['oldlink'] = str_replace("\'", "", $_POST['oldlink']);
$_POST['oldlink'] = str_replace("'", "", $_POST['oldlink']);
$_POST['oldlink'] = str_replace("\\", "", $_POST['oldlink']);

//print_r($_FILES);
//echo "<br>";
//print_r($_POST);
//echo "<br>";
//print_r($_SESSION);

$localizer = "../../";

if (!isset($_SESSION['nfields']))
	$_SESSION['nfields'] = "";
if (!isset($_POST['add']))
	$_POST['add'] = "";
if (!isset($_POST['delete']))
	$_POST['delete'] = "";
if (!isset($_POST['edited']))
	$_POST['edited'] = "";
if (!isset($_POST['newname_UK']))
    $_POST['newname_UK'] = "";
if (!isset($_POST['newname_IT']))
    $_POST['newname_IT'] = "";
    if (!isset($_POST['removed']))
	$_POST['removed'] = "";
if (!isset($_POST['added']))
	$_POST['added'] = "";
if (!isset($_POST['searching']))
	$_POST['searching'] = "";

if ($_SESSION['nfields'] == "") {
	$_SESSION['nfields'] = 1;
} else {
	$_SESSION['nfields'] = $_SESSION['nfields'] + $_POST['add'] - $_POST['delete'];
	if ($_SESSION['nfields'] == 0) {	$_SESSION['nfields'] = 1;
	}
}

$_POST['add'] = 0;
$_POST['delete'] = 0;

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
				<div class='padding'>
					<dl id='list'>
					</dl>
				</div>
			</div>
			<div id='content-larger'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>
							<!-- InstanceBeginEditable name="subsection title" -->
							CHEMICALS CATALOG
							<!-- InstanceEndEditable -->
						</h1>
					</div>
					<div class='paddingInner'>
						<!-- InstanceBeginEditable name="subsection content" -->
						<h2>Search</h2>
						<table>
							<tr>
								<td class='plusButton'>
									<form name="addfield" method="post"
										action="<?php echo $_SERVER['PHP_SELF'];?>">
										<input type="hidden" name="add" value="1" /> <input
											type="submit" name="addfield" value="+" />
									</form>
								</td>
								<td class='minusButton'>
									<form name="deletefield" method="post"
										action="<?php echo $_SERVER['PHP_SELF'];?>">
										<input type="hidden" name="delete" value="1" /> <input
											type="submit" name="deletefield" value="-" />
									</form>
								</td>
								<td>
									<form name="search" method="post" 
										action="<?php echo $_SERVER['PHP_SELF'];?>">
										<?php
    										for ($i = 0; $i < $_SESSION['nfields']; $i++) {
    
    											if (!isset($_POST['find' . $i])) {
    												$_POST['find' . $i] = "";
    											}
    
    											echo "
                                					<input type='text' size='50'name='find" . $i . "' value='" . html_apostrophes($_POST['find' . $i]) . "'/> in 
                                					<Select NAME='field" . $i . "'>
                                    					<Option VALUE='name_UK'>Name (UK)</option>
                                                        <Option VALUE='name_IT'>Name (IT)</option>
                                                        <Option VALUE='place'>Place</option>
                                    					<Option VALUE='quantity'>Quantity</option>
                                    					<Option VALUE='lab'>Laboratory</option>
                                    					<Option VALUE='note'>Note</option>
                                                        <Option VALUE='CAS'>CAS n&deg;</option>
                                                        <Option VALUE='phrase_R'>Risk Statements (R)</option>
                                                        <Option VALUE='phrase_H'>Hazard statements (H)</option>
                                                        <Option VALUE='link'>link</option>
                                					</Select>
                                					<br>
                                				";
    										}
										?>
										<input type="hidden" name="searching" value="yes" /> 
										<br> 
										<input type="submit" name="search" value="Submit" />
									</form>
								</td>
							</tr>
						</table>
						<br>
						<form name="add" method="post" action="admin/add.php">
							<input type="submit" name="add" value="Add a compound" />
						</form>
                        <form name="print" method="post" action="downloadCatalog.php">
                            <input type="submit" name="print" value="Download catalog" />
                        </form>
                        <form name="print" method="post" action="downloadSafetyInfos.php">
                            <input type="submit" name="print" value="Download Safety Infos" />
                        </form>

						<?php

						require ("connect.php");
						require ("variables.php");

						mysql_select_db($DBName, $con) or die('Not connected : ' . mysql_error());
						mysql_query('ALTER TABLE  `catalogo` CHANGE  `name` `name_UK` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL');
                        mysql_query('ALTER TABLE  `catalogo` CHANGE  `phrase_S` `phrase_H` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL');
                        //mysql_query('ALTER TABLE  `catalogo` ADD  `CAS` VARCHAR( 50 ) NOT NULL');
                        //mysql_query('ALTER TABLE  `catalogo` ADD  `phrase_H` VARCHAR( 50 ) NOT NULL');
                        mysql_query('ALTER TABLE  `catalogo` ADD  `name_IT` VARCHAR( 100 ) NOT NULL');
                        mysql_query('ALTER TABLE  `catalogo` ADD  `link` VARCHAR( 100 ) NOT NULL');
                        //mysql_query('ALTER TABLE  `catalogo` CHANGE  `CAS`  `CAS` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL');
                        //mysql_query('ALTER TABLE  `catalogo` CHANGE  `phrase_H`  `phrase_H` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL');
                        //mysql_query('ALTER TABLE  `catalogo` CHANGE  `phrase_R`  `phrase_R` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL');
                        
                        //print_r($_SESSION);
                        //print_r($_POST);
                        
                        if ($_POST['edited'] == "yes") {
								
							if ($_POST['newname_UK'] != "" || $_POST['newname_IT'] != "") {
							        
                                    if ($_FILES['newlink']['name'] != "") {
                                        
                                        $sql = "UPDATE catalogo
                								SET 	
                									name_UK='"  . mysql_real_escape_string($_POST['newname_UK'])       . "',
                                                    name_IT='"  . mysql_real_escape_string($_POST['newname_IT'])       . "',
                                                    place='"    . mysql_real_escape_string($_POST['newplace'])         . "',
                									quantity='" . mysql_real_escape_string($_POST['newquantity'])      . "',
                									lab='"      . mysql_real_escape_string($_POST['newlab'])           . "',
                									note='"     . mysql_real_escape_string($_POST['newnote'])          . "',
                                                    CAS='"      . mysql_real_escape_string($_POST['newCAS'])           . "',
                                                    phrase_H='" . mysql_real_escape_string($_POST['newphrase_H'])      . "',
                                                    phrase_R='" . mysql_real_escape_string($_POST['newphrase_R'])      . "',
                					          		link='"     . mysql_real_escape_string($_FILES['newlink']['name']) . "'
                								WHERE 	
                									name_UK='"  . mysql_real_escape_string($_POST['oldname_UK'])    . "' AND
                                                    name_IT='"  . mysql_real_escape_string($_POST['oldname_IT'])    . "' AND
                                                    place='"    . mysql_real_escape_string($_POST['oldplace'])      . "' AND
                									quantity='" . mysql_real_escape_string($_POST['oldquantity'])   . "' AND
                									lab='"      . mysql_real_escape_string($_POST['oldlab'])        . "' AND
                									note='"     . mysql_real_escape_string($_POST['oldnote'])       . "' AND
                                                    CAS='"      . mysql_real_escape_string($_POST['oldCAS'])        . "' AND
                                                    phrase_H='" . mysql_real_escape_string($_POST['oldphrase_H'])   . "' AND									
                									phrase_R='" . mysql_real_escape_string($_POST['oldphrase_R'])   . "' AND
                									link='"     . mysql_real_escape_string($_POST['oldlink'])       . "'";
        							} else {
        							    
                                        $sql = "UPDATE catalogo
                                                SET     
                                                    name_UK='"  . mysql_real_escape_string($_POST['newname_UK'])     . "',
                                                    name_IT='"  . mysql_real_escape_string($_POST['newname_IT'])     . "',
                                                    place='"    . mysql_real_escape_string($_POST['newplace'])       . "',
                                                    quantity='" . mysql_real_escape_string($_POST['newquantity'])    . "',
                                                    lab='"      . mysql_real_escape_string($_POST['newlab'])         . "',
                                                    note='"     . mysql_real_escape_string($_POST['newnote'])        . "',
                                                    CAS='"      . mysql_real_escape_string($_POST['newCAS'])         . "',
                                                    phrase_H='" . mysql_real_escape_string($_POST['newphrase_H'])    . "',
                                                    phrase_R='" . mysql_real_escape_string($_POST['newphrase_R'])    . "' 
                                                WHERE   
                                                    name_UK='"  . mysql_real_escape_string($_POST['oldname_UK'])  . "' AND
                                                    name_IT='"  . mysql_real_escape_string($_POST['oldname_IT'])  . "' AND
                                                    place='"    . mysql_real_escape_string($_POST['oldplace'])    . "' AND
                                                    quantity='" . mysql_real_escape_string($_POST['oldquantity']) . "' AND
                                                    lab='"      . mysql_real_escape_string($_POST['oldlab'])      . "' AND
                                                    note='"     . mysql_real_escape_string($_POST['oldnote'])     . "' AND
                                                    CAS='"      . mysql_real_escape_string($_POST['oldCAS'])      . "' AND
                                                    phrase_H='" . mysql_real_escape_string($_POST['oldphrase_H']) . "' AND                                 
                                                    phrase_R='" . mysql_real_escape_string($_POST['oldphrase_R']) . "' AND
                                                    link='"     . mysql_real_escape_string($_POST['oldlink'])     . "'";
                                }
                                                    
                                //echo $sql;
								mysql_query($sql);
								
                                if (mysql_errno() != 0) 
                                {
                                    echo "<br>" . $sql . "<br>";
                                    echo "<br>" . mysql_errno() . ": " . mysql_error(). "<br>";    
                                }
								
								if ($_FILES['newlink']['name'] != "")
								{
                                    uploadFile($_FILES["newlink"], './safety_info/');
                                }
								
							} else {
								echo "<br><b>Sorry, it seems that you forgot to insert the name. Nothing has been added to the database!</b>";
							}

							$_POST['edited'] = "no";
						}

						if ($_POST['removed'] == "yes") {
                            
                            $sql= "DELETE FROM catalogo
                                    WHERE   
                                        name_UK='"   . mysql_real_escape_string($_POST['oldname_UK'])   . "' AND
                                        name_IT='"   . mysql_real_escape_string($_POST['oldname_IT'])   . "' AND
                                        place='"     . mysql_real_escape_string($_POST['oldplace'])     . "' AND
                                        quantity='"  . mysql_real_escape_string($_POST['oldquantity'])  . "' AND
                                        lab='"       . mysql_real_escape_string($_POST['oldlab'])       . "' AND
                                        note='"      . mysql_real_escape_string($_POST['oldnote'])      . "' AND
                                        CAS='"       . mysql_real_escape_string($_POST['oldCAS'])       . "' AND
                                        phrase_H='"  . mysql_real_escape_string($_POST['oldphrase_H'])  . "' AND                                                                 
                                        phrase_R='"  . mysql_real_escape_string($_POST['oldphrase_R'])  . "' AND                                                                 
                                        link='"      . mysql_real_escape_string($_POST['oldlink'])      . "'";

							mysql_query($sql);
                            
                            if (mysql_errno() != 0) 
                            {
                                echo "<br>" . $sql . "<br>";
                                echo "<br>" . mysql_errno() . ": " . mysql_error(). "<br>";    
                            }

							$_POST['removed'] = "no";
						}

						if ($_POST['added'] == "yes") {							
							if ($_POST['newname_UK'] != "" || $_POST['newname_IT'] != "") {
							        
							    $sql = "INSERT INTO catalogo ( name_UK, name_IT, place, quantity, lab, note, CAS, phrase_H, phrase_R, link )
                                    VALUES ( '" 
                                    . mysql_real_escape_string($_POST['newname_UK'])        . "', '" 
                                    . mysql_real_escape_string($_POST['newname_IT'])        . "', '"
                                    . mysql_real_escape_string($_POST['newplace'])          . "', '"
                                    . mysql_real_escape_string($_POST['newquantity'])       . "', '"
                                    . mysql_real_escape_string($_POST['newlab'])            . "', '"
                                    . mysql_real_escape_string($_POST['newnote'])           . "', '"
                                    . mysql_real_escape_string($_POST['newCAS'])            . "', '"
                                    . mysql_real_escape_string($_POST['newphrase_H'])       . "', '"
                                    . mysql_real_escape_string($_POST['newphrase_R'])       . "', '"
                                    . mysql_real_escape_string($_FILES['newlink']['name'])  . "' )";
                                    
                                //echo $sql;
								mysql_query($sql);
								echo mysql_error();
								
								uploadFile($_FILES["newlink"], './safety_info/');
								
							} else {
								echo "<br><b>Sorry, it seems that you forgot to insert the name. Nothing has been added to the database!</b>";
							}

							$_POST['added'] = "no";
						}

						//This is only displayed if they have submitted the form
						if ($_POST['searching'] == "yes" || $_SESSION['searchAfterEdit'] == 1) {
							echo "<h2>Results";
							
							if ($_SESSION['searchAfterEdit'] == 0) 
							{
								
								//And we remind them what they searched for
								echo "&nbsp;for:&nbsp;";
								for ($i = 0; $i < $_SESSION['nfields']; $i++) {
									if ($i != 0) {	echo " AND ";
									}
									echo "<i>" . $_POST['find' . $i] . "</i>";
								}
								echo"</h2><br/>";
	
								//If they did not enter a search term we give them an error
								$totalinputs = "";
								for ($i = 0; $i < $_SESSION['nfields']; $i++) {
									$totalinputs .= $_POST["find" . $i];
								}
	
								if ($totalinputs == "") {
									echo "<p>You forgot to enter a search term";
									$_SESSION['searchAfterEdit'] = 0;
									exit ;
								}
	
								// Otherwise we connect to our Database
								mysql_select_db($DBName) or die(mysql_error());
	
								// We preform a bit of filtering
								for ($i = 0; $i < $_SESSION['nfields']; $i++) {
									$_POST["find" . $i] = strtoupper($_POST["find" . $i]);
									$_POST["find" . $i] = strip_tags($_POST["find" . $i]);
									$_POST["find" . $i] = trim($_POST["find" . $i]);
	                                $_POST["find" . $i] = mysql_real_escape_string($_POST["find" . $i]);
								}
	
								//Now we search for our search term, in the field0 the user specified
								$conditions = "";
								for ($i = 0; $i < $_SESSION['nfields']; $i++) {
									if ($i != 0) {	$conditions .= " AND ";
									}
	
									$conditions .= "upper(" . $_POST["field" . $i] . ") LIKE'%" . $_POST["find" . $i] . "%'";
								}
							
                            	$sql = "SELECT * FROM catalogo WHERE " . $conditions . " ORDER BY name_UK, name_IT";
								$data = mysql_query($sql);
								$_SESSION['lastSQL'] = $sql;
								
                            } 
                            else 
                            {
                            	$data = mysql_query($_SESSION['lastSQL']);
								$_SESSION['searchAfterEdit'] = 0;
							}
							
							//And we display the results
							echo "<table id='catalog' border='1' frame='box' cellspacing='0' rules='all'>
							         <tr>
                            			<th class='headerButtonEdit'></th>
                            			<th class='headerButtonRemove'></th>
                            			<th class='headerName_UK'>Name <!--<img src='./en.png' alt='UK' />--></th>
                                        <!--<th class='headerName_IT'>Name <img src='./it.jpg' alt='IT' /></th>-->
                                        <th class='headerPlace'>Place</th>
                            			<th class='headerQuantity'>Qt</th>
                            			<th class='headerLab'>Lab</th>
                            			<th class='headerNote'>Note</th>
                            			<th class='headerCAS'>CAS n&deg;</th>
                            			<th class='headerPhraseH'>Phrase H</th>
                            			<th class='headerPhraseR'>Phrase R</th>
                            			<th class='headerLink'>Scheda</th>
                            		</tr>
                            		<tr>
                            			<td class='void'>&nbsp;</td>
                            			<td class='void'>&nbsp;</td>
                            			<!--<td class='void'>&nbsp;</td>-->
                                        <td class='void'>&nbsp;</td>
                                        <td class='void'>&nbsp;</td>
                                        <td class='void'>&nbsp;</td>
                                        <td class='void'>&nbsp;</td>
                                        <td class='void'>&nbsp;</td>
                                        <td class='void'>&nbsp;</td>
                                        <td class='void'>&nbsp;</td>
                                        <td class='void'>&nbsp;</td>
                                        <td class='void'>&nbsp;</td>
                            		</tr>
                            	";

							while ($result = mysql_fetch_array($data)) {
							    
								echo "<tr>
                                        <td>
                        					<form name='edit' method='post' action='admin/edit.php'>
                        						<input type='hidden' name='name_UK2edit' value='"  .  html_apostrophes($result['name_UK'])  . "' />
                                                <input type='hidden' name='name_IT2edit' value='"  .  html_apostrophes($result['name_IT'])  . "' />
                                                <input type='hidden' name='place2edit' value='"    .  html_apostrophes($result['place'])    . "' />
                        						<input type='hidden' name='quantity2edit' value='" .  html_apostrophes($result['quantity']) . "' />
                        						<input type='hidden' name='lab2edit' value='"      .  html_apostrophes($result['lab'])      . "' />
                                                <input type='hidden' name='note2edit' value='"     .  html_apostrophes($result['note'])     . "' />
                                                <input type='hidden' name='CAS2edit' value='"      .  html_apostrophes($result['CAS'])      . "' />
                        						<input type='hidden' name='phrase_H2edit' value='" .  html_apostrophes($result['phrase_H']) . "' />
                                                <input type='hidden' name='phrase_R2edit' value='" .  html_apostrophes($result['phrase_R']) . "' />
                                                <input type='hidden' name='link2edit' value='"     .  html_apostrophes($result['link'])     . "' />
                                                <input type='submit' name='edit' value='Edit' />
                        					</form>
                        				</td>
                        				<td>
                        					<form name='remove' method='post' action='admin/remove.php'>
                        						<input type='hidden' name='name_UK2remove' value='"  .  html_apostrophes($result['name_UK'])  . "' />   
                                                <input type='hidden' name='name_IT2remove' value='"  .  html_apostrophes($result['name_IT'])  . "' />   
                                                <input type='hidden' name='place2remove' value='"    .  html_apostrophes($result['place'])    . "' />   
                        						<input type='hidden' name='quantity2remove' value='" .  html_apostrophes($result['quantity']) . "' />   
                        						<input type='hidden' name='lab2remove' value='"      .  html_apostrophes($result['lab'])      . "' />   
                        						<input type='hidden' name='note2remove' value='"     .  html_apostrophes($result['note'])     . "' />   
                                                <input type='hidden' name='CAS2remove' value='"      .  html_apostrophes($result['CAS'])      . "' />   
                                                <input type='hidden' name='phrase_H2remove' value='" .  html_apostrophes($result['phrase_H']) . "' />   
                        						<input type='hidden' name='phrase_R2remove' value='" .  html_apostrophes($result['phrase_R']) . "' />   
                        						<input type='hidden' name='link2remove' value='"     .  html_apostrophes($result['link'])     . "' />   
                        						<input class='removeButton' type='submit' name='remove' value='-' />
                        					</form>
                        				</td>";
                        				
                        				if ($result['name_UK'] != "" && $result['name_IT'] != "") {
                        				echo"
                        				<td class='data'>
                            				<table>
                                				<tr>
                                    				<td class='data'>";
                                    				if ($result['name_UK'] != "") {
                                    				    echo "<img src='./en.png' alt='UK' />";
                                    				}
                                    				echo "&nbsp;" . $result['name_UK']  . "</td>
                                    		    </tr>
                                				<tr>
                                                    <td class='data'>";
                                                    if ($result['name_IT'] != "") {
                                                        echo "<img src='./it.jpg' alt='IT' />";
                                                    }
                                                    echo "&nbsp;" . $result['name_IT']  . "</td>
                                                </tr>
                                            </table>
                                        </td>";
                                        } else if ($result['name_UK'] != "") {
                                            echo"
                                            <td class='data2'>
                                                <img src='./en.png' alt='UK' />&nbsp;" . $result['name_UK'] . "</td>";
                                        } else if ($result['name_IT'] != "") {
                                            echo"
                                            <td class='data2'>
                                                <img src='./it.jpg' alt='IT' />&nbsp;" . $result['name_IT'] . "</td>";
                                        }
                                        echo"
                                        <td class='data'>" . $result['place']    . "</td>
                                        <td class='data'>" . $result['quantity'] . "</td>
                                        <td class='data'>" . $result['lab']      . "</td>
                                        <td class='data'>" . $result['note']     . "</td>
                                        <td class='data'>" . $result['CAS']      . "</td>
                                        <td class='data'>" . $result['phrase_H'] . "</td>
                                        <td class='data'>" . $result['phrase_R'] . "</td>";
                                        if ($result['link'] != '') {
		                                	echo "<td class='data scheda'><a href='safety_info/" . $result['link'] . "'><img src='arrow_3D_green_left.png' alt='Download' class='scheda_download' /></a></td>";
	                                	} else {
	                                		echo "<td class='data scheda'></td>";
	                                	}
                                      echo "</tr>";
							}
							echo "</table>";

							//This counts the number or results - and if there wasn't any it gives them a little message explaining that
							$anymatches = mysql_num_rows($data);
							if ($anymatches == 0) {
								echo "<br>Sorry, nothing has been found!";
							}
							
							$_SESSION['searchAfterEdit'] = 0;
						}

						?>
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
				Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY <br>
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
