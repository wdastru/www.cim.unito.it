<?php
session_start();

$localizer = "../../";

if (!isset($_SESSION['nfields']))
	$_SESSION['nfields'] = "";
if (!isset($_POST['add']))
	$_POST['add'] = "";
if (!isset($_POST['delete']))
	$_POST['delete'] = "";
if (!isset($_POST['edited']))
	$_POST['edited'] = "";
if (!isset($_POST['newname']))
	$_POST['newname'] = "";
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
<link href=<?php echo $localizer . "stylesheet.css"?> rel='stylesheet'
	type='text/css' />
<link href="catalog.css" rel='stylesheet' type='text/css' />
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
					<dl id='list'>
					</dl>
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
					<input type='text' size='50'name='find" . $i . "' value='" . $_POST['find' . $i] . "'/> in 
					<Select NAME='field" . $i . "'>
					<Option VALUE='name'>Name</option>
					<Option VALUE='place'>Place</option>
					<Option VALUE='quantity'>Quantity</option>
					<Option VALUE='lab'>Laboratory</option>
					<Option VALUE='note'>Note</option>
					<Option VALUE='risk'>Risk phrase</option>	
					</Select>
					<br />
				";
										}
										?>
										<input type="hidden" name="searching" value="yes" /> <br /> <input
											type="submit" name="search" value="Submit" />
									</form>
								</td>
							</tr>
						</table>
						<br />
						<form name="add" method="post" action="admin/add.php">
							<input type="submit" name="add" value="Add a compound" />
						</form>

						<?php

						require ("connect.php");
						require ("variables.php");

						mysql_select_db($DBName, $con) or die('Not connected : ' . mysql_error());

						if ($_POST['edited'] == "yes") {
							if ($_POST['newname'] != "") {
								$sql = "	UPDATE catalogo
								SET 	
									name='$_POST[newname]',
									place='$_POST[newplace]',
									quantity='$_POST[newquantity]',
									lab='$_POST[newlab]',
									note='$_POST[newnote]',
									risk='$_POST[newrisk]' 
								WHERE 	
									name='$_SESSION[oldname]' AND
									place='$_SESSION[oldplace]' AND
									quantity='$_SESSION[oldquantity]' AND
									lab='$_SESSION[oldlab]' AND
									note='$_SESSION[oldnote]' AND
									risk='$_SESSION[oldrisk]' 
						";

								mysql_query($sql);
							} else {
								echo "<br /><b>Sorry, it seems that you forgot to insert the name. Nothing has been added to the database!</b>";
							}

							$_POST['edited'] = "no";
						}

						if ($_POST['removed'] == "yes") {
							mysql_query("	DELETE FROM catalogo
							WHERE 	
								name='$_SESSION[oldname]' AND
								place='$_SESSION[oldplace]' AND
								quantity='$_SESSION[oldquantity]' AND
								lab='$_SESSION[oldlab]' AND
								note='$_SESSION[oldnote]' AND
								risk='$_SESSION[oldrisk]'
				");

							$_POST['removed'] = "no";
						}

						if ($_POST['added'] == "yes") {
							if ($_POST['newname'] != "") {
								mysql_query("	INSERT INTO catalogo ( name, place, quantity, lab, note, risk )
						VALUES ( '$_POST[newname]', '$_POST[newplace]', '$_POST[newquantity]', '$_POST[newlab]', '$_POST[newnote]', '$_POST[newrisk]')
					");
								echo mysql_error();
							} else {
								echo "<br /><b>Sorry, it seems that you forgot to insert the name. Nothing has been added to the database!</b>";
							}

							$_POST['added'] = "no";
						}

						//echo "	UPDATE catalogo SET name='" . $_POST[editedname] . "'");

						//This is only displayed if they have submitted the form
						if ($_POST['searching'] == "yes") {
							echo "<h2>Results";
							
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
								exit ;
							}

							// Otherwise we connect to our Database
							mysql_select_db($DBName) or die(mysql_error());

							// We preform a bit of filtering
							for ($i = 0; $i < $_SESSION['nfields']; $i++) {
								$_POST["find" . $i] = strtoupper($_POST["find" . $i]);
								$_POST["find" . $i] = strip_tags($_POST["find" . $i]);
								$_POST["find" . $i] = trim($_POST["find" . $i]);
							}

							//Now we search for our search term, in the field0 the user specified
							$conditions = "";
							for ($i = 0; $i < $_SESSION['nfields']; $i++) {
								if ($i != 0) {	$conditions .= " AND ";
								}

								$conditions .= "upper(" . $_POST["field" . $i] . ") LIKE'%" . $_POST["find" . $i] . "%'";
							}

							$data = mysql_query("	SELECT * FROM catalogo
							WHERE " . $conditions . " ORDER BY name");

							//And we display the results
							echo "<table border='1' frame='box' cellspacing='0' rules='all'>";
							echo "
		<tr>
			<th class='headerButton'></th>
			<th class='headerButton'></th>
			<th class='headerName'>Name</th>
			<th class='headerPlace'>Place</th>
			<th class='headerQuantity'>Qt</th>
			<th class='headerLab'>Lab</th>
			<th class='headerNote'>Note</th>
			<th class='headerRisk'>Risk</th>
		</tr>
		<tr>
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
								echo "<tr>";
								echo "	<td>
					<form name='edit' method='post' action='admin/edit.php'>
						<input type='hidden' name='name2edit' value='" . $result['name'] . "' />
						<input type='hidden' name='place2edit' value='" . $result['place'] . "' />
						<input type='hidden' name='quantity2edit' value='" . $result['quantity'] . "' />
						<input type='hidden' name='lab2edit' value='" . $result['lab'] . "' />
						<input type='hidden' name='note2edit' value='" . $result['note'] . "' />
						<input type='hidden' name='risk2edit' value='" . $result['risk'] . "' />
						<input type='submit' name='edit' value='Edit' />
					</form>
				</td>
				<td>
					<form name='remove' method='post' action='admin/remove.php'>
						<input type='hidden' name='name2remove' value='" . $result['name'] . "' />
						<input type='hidden' name='place2remove' value='" . $result['place'] . "' />
						<input type='hidden' name='quantity2remove' value='" . $result['quantity'] . "' />
						<input type='hidden' name='lab2remove' value='" . $result['lab'] . "' />
						<input type='hidden' name='note2remove' value='" . $result['note'] . "' />
						<input type='hidden' name='risk2remove' value='" . $result['risk'] . "' />
						<input class='removeButton' type='submit' name='remove' value='-' />
					</form>
				</td>";
								echo "<td class='data'>" . $result['name'] . "</td>";
								echo "<td class='data'>" . $result['place'] . "</td>";
								echo "<td class='data'>" . $result['quantity'] . "</td>";
								echo "<td class='data'>" . $result['lab'] . "</td>";
								echo "<td class='data'>" . $result['note'] . "</td>";
								echo "<td class='data'>" . $result['risk'] . "</td>";
								echo "</tr>";
							}
							echo "</table>";

							//This counts the number or results - and if there wasn't any it gives them a little message explaining that
							$anymatches = mysql_num_rows($data);
							if ($anymatches == 0) {
								echo "<br />Sorry, nothing has been found!";
							}
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
