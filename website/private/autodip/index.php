<?php  session_start();

$localizer = "../../";

function throwException() {
    throw new Exception("Exception: ");
}

if (!ini_get('date.timezone')) {
	ini_set('date.timezone', 'Europe/Rome');
}

$thisday = date("d");
$thismonth = date("m");
$thisyear = date("Y");
include ($localizer . "private/autodip/variables.php");
include ($localizer . "private/autodip/instruments.php");
include ($localizer . "private/autodip/functions.php");
include ($localizer . "private/autodip/connect.php");

if (isset($_GET['date'])) {
	$date = $_GET['date'];
}

if (!isset($_SESSION['conflict'])) {
	$_SESSION['conflict'] = "";
}

$_SESSION['strumento'] = "Auto";
$ore = array(800, 830, 900, 930, 1000, 1030, 1100, 1130, 1200, 1230, 1300, 1330, 1400, 1430, 1500, 1530, 1600, 1630, 1700, 1730, 1800, 1830, 1900, 1930, 2000);

// Connect to server
$_SESSION['DBName'] = $DBName;
mysql_select_db($_SESSION['DBName'], $con);
// 	--> CREATE TABLES IN DATABASE
for ($j = 0; $j < count($instrument); $j++) {
	$sql = "CREATE TABLE `" . $instrument[$j] . "` (" . $tableDataStructure . " ) ENGINE = MYISAM ;";
	mysql_query($sql, $con);
}
// 	<-- CREATE TABLES IN DATABASE
?>
<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
	<!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
	<head>
		<?php require $localizer . 'includes/head_const.inc.php'?>
		<title>Molecular Imaging Center - Booking of <?php echo $instrString[$_SESSION['strumento']];?></title>
		<meta name="description" content="University of Torino. Website of the Molecular Imaging Center." />
		<link href="<?php echo $localizer; ?>private/autodip/preno.css" rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="<?php echo $localizer; ?>private/autodip/booking.js"></script>
	</head>
	<body onload='aBoxIsOn=false;'>
		<div id='sectionAutoDip'>
			<div id='newPrenoBox' class='shadow' style='visibility: hidden'>
				<h1>PRENOTAZIONE</h1>
				<span>&nbsp;</span>
				<br />
				<br />
				<form method="post" action='<?php echo $localizer; ?>private/autodip/db.php' id='xRemove'>
					<span> Utente:
						<input type="text" name="utente" id='user'
						onkeyup="noUserCheck();" />
					</span><span id='warning'>(!)</span>
					<br />
					<br />
					<?php     echo "<span id='toRemove'>Fino alle: <select id='select' name='oraEnd'> ";
						for ($i = 0; $i < count($ore); $i++) {
							echo " <option id='o" . $ore[$i] . "' value=\"";
							echo $ore[$i];
							echo "\" > ";
							echo substr_replace($ore[$i], ":", strlen($ore[$i]) - 2, 0);
							echo " </option>";
						}
						echo " <option id='o2100' value='2100'> notte </option>";
						echo "
</select><br /><br /></span>";
					?>
					<span>Note:
						<input type="text" name="note" />
					</span>
					<br />
					<br />
					<span>Colore: </span>
					<div class='colorBox' style='background-color: #CCCCFF'>
						<input class='colorBox' type='radio' name='color' value='CCCCFF' />
					</div>
					<div class='colorBox' style='background-color: #CCFFCC'>
						<input class='colorBox' type='radio' name='color' value='CCFFCC' />
					</div>
					<div class='colorBox' style='background-color: #FFCC99'>
						<input class='colorBox' type='radio' name='color' value='FFCC99' />
					</div>
					<div class='colorBox' style='background-color: #FFFFCC'>
						<input class='colorBox' type='radio' name='color' value='FFFFCC' />
					</div>
					<div class='colorBox' style='background-color: #FFCCFF'>
						<input class='colorBox' type='radio' name='color' value='FFCCFF' />
					</div>
					<div class='colorBox' style='background-color: #CCFFFF'>
						<input class='colorBox' type='radio' name='color' value='CCFFFF' />
					</div>
					<div class='colorBox' style='background-color: #9999FF'>
						<input class='colorBox' type='radio' name='color' value='9999FF' />
					</div>
					<div class='colorBox' style='background-color: #99FF99'>
						<input class='colorBox' type='radio' name='color' value='99FF99' />
					</div>
					<div class='colorBox' style='background-color: #FF9933'>
						<input class='colorBox' type='radio' name='color' value='FF9933' />
					</div>
					<div class='colorBox' style='background-color: #FFFF99'>
						<input class='colorBox' type='radio' name='color' value='FFFF99' />
					</div>
					<div class='colorBox' style='background-color: #FF99FF'>
						<input class='colorBox' type='radio' name='color' value='FF99FF' />
					</div>
					<div class='colorBox' style='background-color: #99FFFF'>
						<input class='colorBox' type='radio' name='color' value='99FFFF' />
					</div>
					<div class='colorBox' style='background-color: #FFFFFF'>
						<input class='colorBox' type='radio' name='color' value='FFFFFF' />
					</div>
					<br />
					<br />
					<input type="hidden" name="tipo" value="" />
					<input
					type="hidden" name="data" value="" />
					<input type="hidden"
					name="oraStart" value="" />
					<input class="button" type="submit"
					id='submit' value="Invia" onclick="aBoxIsOn = false;" />
				</form>
				<br />
				<form action="<?php echo $localizer; ?>private/autodip/db.php" method="post" target="_self">
					<input type="hidden" name="tipo" value="skip" />
					<input
					type="hidden" name="data" value="" />
					<input class="button"
					type="submit" value="Back" onclick="aBoxIsOn = false;" />
				</form>
			</div>
			<!-- end of newPrenoBox div -->
			<div id='cancPrenoBox' class='shadow' style='visibility: hidden'>
				<h1>CANCELLAZIONE</h1>
				<br />
				<div id='giorno'>
					<span>La prenotazione del</span>
					<br />
					<br />
					<span class='enfasi'>&nbsp;</span>
					<br />
					<br />
					<span>dalle ore&nbsp;</span><span class='enfasi'>&nbsp;</span>
					<span>&nbsp;alle ore&nbsp;</span><span class='enfasi'>&nbsp;</span>
					<br />
					<br />
					<span>sta per essere cancellata, confermi?</span>
					<br />
					<br />
				</div>
				<div id='notte'>
					<span>La prenotazione del</span>
					<br />
					<br />
					<span class='enfasi'>&nbsp;</span><span
					class="enfasi">&nbsp;(notte)</span>
					<br />
					<br />
					<span>sta per
						essere cancellata, confermi?</span>
					<br />
					<br />
				</div>
				<div id='giornonotte'>
					<span>La prenotazione del</span>
					<br />
					<br />
					<span class='enfasi'>&nbsp;</span>
					<br />
					<br />
					<span>dalle ore&nbsp;</span><span class='enfasi'>&nbsp;</span>
					<span class='enfasi'>(notte compresa)
						<br />
						<br />
					</span><span>sta per essere cancellata, confermi?</span>
					<br />
					<br />
				</div>
				<br />
				<form action="<?php echo $localizer; ?>private/autodip/db.php" method="post" target="_self">
					<input type="hidden" name="tipo" value="canc" />
					<input
					type="hidden" name="utente" value="" />
					<input type="hidden"
					name="data" value="" />
					<input type="hidden" name="oraStart"
					value="" />
					<input type="hidden" name="oraEnd" value="" />
					<input
					class="button" type="submit" value="Si" onclick="aBoxIsOn = false;" />
				</form>
				<br />
				<form action="<?php echo $localizer; ?>private/autodip/db.php" method="post" target="_self">
					<input type="hidden" name="tipo" value="skip" />
					<input
					type="hidden" name="data" value="" />
					<input class="button"
					type="submit" value="No" onclick="aBoxIsOn = false;" />
				</form>
			</div>
			<!-- end of cancPrenoBox div -->
			<?php
			//require ($localizer . 'includes/main-nav.php');
			?>
			<div id='header'></div>
			<!-- InstanceBeginEditable name="subsection opening" -->
			<div id="subsection0">
				<!-- InstanceEndEditable -->
				<div id='sidebar-narrower'>
					<div class='padding'>
						<dl id='list'></dl>
					</div>
				</div>
				<div id='content-largerAutoDip'>
					<div class='paddingOuter'>
						<!-- <div class='band'>
							<h1 class='subsectionTitle'>INSTRUMENTS BOOKING</h1>
						</div> --> 
						<div class='paddingInner'>
							<div id='booking-headerAutoDip'>
								<?php
								if (!isset($date)) {
									$date = get_sunday_before($thisyear, $thismonth, $thisday);
									// la giornata inizia la domenica
								}
								$date -= (3600 * 24);
								$wkstart = $date;
								$wkend = $wkstart + (3600 * 24 * 6);
								// Connect to Database
								echo "	<div id='headerLeftAutoDip'>";
								echo "		 <h1 align=\"left\">" . $instrString[$_SESSION['strumento']] . "&nbsp;</h1>";
								echo "	</div>";
								echo "	<div>
                                        <br/><span class='date'>&nbsp;&nbsp;&nbsp;";
								echo date_to_str(date("Ymd", $wkstart), "", false) . "&nbsp; - &nbsp;" . date_to_str(date("Ymd", $wkend), "", false);
								//echo "<br />&nbsp;&nbsp;&nbsp;(" . "Week" . " " . week_number($wkstart) . ")";
								echo "</span>";
								echo "</div>";
								?>
							</div>
							<!-- end of header div -->
							<div id='main'>
								<?php     echo "<br />";
								echo $generalWarning;
								echo $warning[$_SESSION['strumento']];
								?>
								<div id='navigation'>
									<div id='navLeft'>
										<div id='leftArrow'>
											<a title="Previous"
											href="index.php?date=<?php echo $wkstart - (3600 * 24 * 6);?>"> 
											<img class='arrow' src="<?php echo $localizer; ?>private/autodip/images/arrow_3D_green_left.png"
											alt="<?php echo "Previous week"?>" /></a>
										</div>
										<div id='leftPrevWeek' class='left'>
											Previous week
										</div>
									</div>
									<?php
									if ($_SESSION['strumento'] == '300MHz') {
										if (week_number($wkstart) % 2) {
											echo "<div id='navMiddleB'>" . $gruppoB . "</div>";
										} else {
											echo "<div id='navMiddleA'>" . $gruppoA . "</div>";
										}
									}
									?>
									<div id='navRight'>
										<div id='rightArrow'>
											<a title="Next"
											href="index.php?date=<?php echo $wkstart + ( 3600 * 24 * 8 )?>"><img
											class='arrow' src="<?php echo $localizer; ?>private/autodip/images/arrow_3D_green_right.png"
											alt="<?php echo "Next week"?>" /> </a>
										</div>
										<div id='rightNextWeek' class='right'>
											Next week
										</div>
									</div>
								</div>
									<?php
									
									if ($_SESSION['conflict'] == 1) {
										echo "<div id='conflict'><br><div id='conflictMessage'><span id='conflictTitle'>ATTENZIONE !!!</span><br /><br />La prenotazione richiesta si sovrappone con una gi&agrave; presente nel database.<br />Non &eacute; stato salvato nulla. Si prega di riprovare.<br /><br /></div></div>";
										$_SESSION['conflict'] = 0;
									}
                                    
                                    mysql_select_db($_SESSION['DBName'], $con);

									echo "<div id='booking-table'>";
									echo "<table id='bookings'>";
									echo "<tr>";
									$today = -1;
									for ($j = 0; $j < 7; $j++) {
										if (date("d", $date + (3600 * 24 * $j)) == date("d") && date("M", $date + (3600 * 24 * $j)) == date("M")) {
											$today = $j;
											echo "<th class=\"Today\"";
										} else if (date("D", $date + (3600 * 24 * $j)) == "Sat" || date("D", $date + (3600 * 24 * $j)) == "Sun") {
											echo "<th class=\"WeekEnd\"";
										} else {
											echo "<th class=\"Week\"";
										}
										echo " colspan=\"2\">" . date("d / m - D", $date + (3600 * 24 * $j)) . "</th>";
									}

									echo "</tr>";

									// loop ore
									for ($i = 0; $i < count($ore); $i++) {
										if ($_SESSION['strumento'] == "400MHz" && ($ore[$i] == 1300 || $ore[$i] == 1400))// Exp Veloci al 400 come data passata
										{
											echo "<tr>";
											$class = "Hour ";

											for ($k = 0; $k < 7; $k++) {
												if ($k == 0 || $k == 6) {// sabato e domenica
													if ($k == $today) {
														$class .= "Today";
													} else {
														$class .= "WE";
													}
												} else {
													if ($k == $today) {
														$class .= "Today";
													}
												}

												echo "<td class=\"$class\">" . $ore[$i] . "</td><td class=\"OldFree\">&nbsp;</td>";

											}
											echo "</tr>";
											continue;
										}

										echo "<tr>";
										for ($j = 0; $j < 7; $j++)// loop giorni
										{
											/*
											 * colonna ore
											 *
											 * */

											$class = "Hour ";
											$content = "";

											if ($j == $today) {// oggi

												$class .= "Today ";

												if ($ore[$i] == 2000) {
													$content = "N";
												} else {

													$string = substr_replace($ore[$i], ":", strlen($ore[$i]) - 2, 0);
													$content = str_replace(":00", "", $string);
													$content = str_replace(":15", "&frac14;", $content);
													$content = str_replace(":30", "&frac12;", $content);
													$content = str_replace(":45", "&frac34;", $content);

													if ($ore[$i] == 1300 || $ore[$i] == 1900) {// separazione mattino pomeriggio
														$class .= "Separate ";
													}
												}
											} else if ($j == 0 || $j == 6) {// sabato e domenica

												$class .= "WE ";

												if ($ore[$i] == 2000) {
													$content = "N";
												} else {

													$string = substr_replace($ore[$i], ":", strlen($ore[$i]) - 2, 0);
													$content = str_replace(":00", "", $string);
													$content = str_replace(":15", "&frac14;", $content);
													$content = str_replace(":30", "&frac12;", $content);
													$content = str_replace(":45", "&frac34;", $content);
													
													if ($ore[$i] == 1300 || $ore[$i] == 1900) {// separazione mattino pomeriggio
														$class .= "Separate ";
													}
												}
											} else {// altro giorno
												if ($ore[$i] == 2000) {
													$content = "N";
												} else {

													$string = substr_replace($ore[$i], ":", strlen($ore[$i]) - 2, 0);
													$content = str_replace(":00", "", $string);
													$content = str_replace(":15", "&frac14;", $content);
													$content = str_replace(":30", "&frac12;", $content);
													$content = str_replace(":45", "&frac34;", $content);
													
													if ($ore[$i] == 1300 || $ore[$i] == 1900) {// separazione mattino pomeriggio
														$class .= "Separate ";
													}
												}
											}

											echo "<td class=\"$class\">$content</td>";

											/*
											 *   colonne bottone e prenotazione
											 *
											 * */

											$sql = "SELECT * FROM `" . $_SESSION['DBName'] . "`.`" . $_SESSION['strumento'] . "` WHERE ( `Date` ='" . date("Ymd", $date + (3600 * 24 * $j)) . "' AND `Hour` = '" . $ore[$i] . "')";
                                            
                                            try {
                                                $result = mysql_query($sql, $con) or throwException();
                                            } catch( Exception $e ) {
                                                echo "<pre>" . $e . mysql_error() . '<br/>';
                                            }

                                            //while($row = mysql_fetch_assoc($result)){
                                            //  //handle rows.
                                            //}
                                            
											$row = mysql_fetch_assoc($result);

											if (!isset($row['Date'])) {
												$row['Date'] = "";
											}

											if (!isset($row['Color'])) {
												$row['Color'] = "";
											}

											if ($row['Color'] == NULL) {
												$row['Color'] = 'FFCC99';
											}

											if (date("Ymd") < date("Ymd", $date + (3600 * 24 * $j)) || (date("Ymd") == date("Ymd", $date + (3600 * 24 * $j))))// data futura
											{
												if ($row['Date'] == NULL)// casella libera
												{
													$class = "right Free ";
													$content = "&nbsp;";
													$onclick = "";

													if ($j == $today) {// oggi
														$class .= "Today ";
													}

													if ($ore[$i] == 1300 || $ore[$i] == 1900) {// separazione mattino pomeriggio
														$class .= "Separate ";
														$onclick .= "if (aBoxIsOn==false) showNewPrenoBox(" . date("Ymd", $date + (3600 * 24 * $j)) . "," . $ore[$i] . ",\"" . $_SESSION['strumento'] . "\");";
													} else {
														$onclick .= "if (aBoxIsOn==false) showNewPrenoBox(" . date("Ymd", $date + (3600 * 24 * $j)) . "," . $ore[$i] . ",\"" . $_SESSION['strumento'] . "\");";
													}

													echo "<td class=\"$class\" onclick='$onclick'>$content</td>";

												} else {// casella occupata

													$class = "";
													$content = "&nbsp;";
													$onclick = "if (aBoxIsOn==false) showCancPrenoBox(" . date("Ymd", $date + (3600 * 24 * $j)) . "," . $ore[$i] . ",\"" . $_SESSION['strumento'] . "\");";
													$style = "background-color:#" . $row['Color'];

													if ($ore[$i] == $row['StartHour']) {
														if ($ore[$i] == $ore[count($ore) - 1] || $ore[$i + 1] == $row['EndHour']) {
															/* prenotazione singola ora: mantenere l'ordine dell'OR
															 * così come è: se il primo test è TRUE non viene valutato
															 * il secondo (non si rischia di uscire dall'array $ore)
															 * * * * * * */
															$class .= "Occupied";
														} else {
															/* cella all'inizio di una prenotazione di più ore
															 * * * * * * */
															$class .= "Top Occupied";
														}

														$content .= "<strong>" . $row['User'] . "</strong>";
														if ($row['Note'] != NULL) {
															$content .= "<br />(" . $row['Note'] . ")";
															// se ci sono note
														}
														
													} else if ($ore[$i] == $ore[count($ore) - 1] || $ore[$i + 1] == $row['EndHour']) {
														/* cella ultima ora di una prenotazione multi-ora: mantenere l'ordine dell'OR
														 * * * * * * */
														$class .= "Bottom Occupied";
													} else {
														/* cella nel mezzo di una prenotazione multi-ora
														 * * * * * * */
														$class .= "Top Bottom Occupied";
													}

													echo "<td class=\"$class\" onclick='$onclick' style=\"$style\">$content</td>";

													echo "<div class='hiddenData' id='a" . date("Ymd", $date + (3600 * 24 * $j)) . $ore[$i] . "'>
<div>" . $row['Date'] . "</div>
<div>" . $row['User'] . "</div>
<div>" . $row['StartHour'] . "</div>
<div>" . $row['EndHour'] . "</div>
</div>";
													// hiddenDivs for javascript retrieval of data
													echo "</td>";
												}

											} else {// data passata

												$class = "";
												$content = "&nbsp;";

												if ($row['Date'] == NULL) {// casella libera

													if ($ore[$i] == 1300 || $ore[$i] == 1900) {// separazione mattino pomeriggio
														$class .= "OldFree Separate";
													} else {
														$class .= "OldFree";
													}
												} else {// casella occupata

													if ($ore[$i] == $row['StartHour']) {
														if ($ore[$i] == $ore[count($ore) - 1] || $ore[$i + 1] == $row['EndHour']) {
															/* prenotazione singola ora: mantenere l'ordine dell'OR
															 * così come è: se il primo test è TRUE non viene valutato
															 * il secondo (non si rischia di uscire dall'array $ore)
															 * * * * * * */
															$class .= "OldOccupied";
														} else {
															/* cella all'inizio di una prenotazione di più ore
															 * * * * * * */
															$class .= "Top OldOccupied";
														}

														$content .= "<strong>" . $row['User'] . "</strong>";
														if ($row['Note'] != NULL) {
															$content .= "<br />(" . $row['Note'] . ")";
															// se ci sono note
														}
														
													} else if ($ore[$i] == $ore[count($ore) - 1] || $ore[$i + 1] == $row['EndHour']) {
														/* cella ultima ora di una prenotazione multi-ora: mantenere l'ordine dell'OR
														 * * * * * * */
														$class .= "Bottom OldOccupied";
													} else {
														/* cella nel mezzo di una prenotazione multi-ora
														 * * * * * * */
														$class .= "Top Bottom OldOccupied";
													}
												}

												echo "<td class=\"$class\">$content</td>";
											}
										} // fine loop giorni
										echo "</tr>";
									} // fine loop ore
								?>

								</table>
								<br />
								</div>
								<!-- end of table div -->
								
								<a class="" href="<?php echo $localizer; ?>private/autodip/history.php?instrument=<?php echo $_SESSION['strumento']?>" >
								<img id='excel_icon' src="<?php echo $localizer; ?>private/autodip/images/Excel-icon.png" />
								<span class='history'>Download history</span></a>
									
								<?php
									echo $guidelines[$_SESSION['strumento']];
									mysql_close($con);
								?>
								
								<br /><br />
								</div>
								<!-- end of main div -->
								
								<!-- InstanceEndEditable name="subsection content" -->
								</div>
								</div>
								</div>
								<!-- subsection closing -->
								</div>
								<!-- subsection closing -->
								<div id='after'></div>
								<div id='footer'>
								
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
