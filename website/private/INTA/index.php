<?php
$localizer = "../../";
?>
<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
	<!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
	<head>
		
		<title>Molecular Imaging Center - University of Torino</title>
		
		
		<meta name="description"
		content="University of Torino. Website of the Molecular Imaging Center." />
		
		meta-google
		meta-http
		meta-keywords
		link-style
		<link href="inta.css" rel='stylesheet' type='text/css' />
		script-script
		<script type="text/javascript" src="<?php echo $localizer;?>private/INTA/inta.js"></script>
	</head>
	link-icon
	<body>
		<div id='confirmDeletionHiddenBox' style="visibility: hidden">
			<h1>ATTENZIONE !!!</h1>
			<p style="font-weight: bold;">
				il file selezionato verrà cancellato.
			</p>
			<form method='post' id='confirmDeletion' action=''>
				<input type='button' id='deleteButton' value='Delete'
				onclick='sendForm();' />
				<input type='button'
				value='Cancel' onclick="javascript:history.back();" />
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
			<div id="subsection0">
				<!-- InstanceEndEditable -->
				<div id='sidebar-narrow'>
					<div class='padding'>
						<dl id='list'></dl>
					</div>
				</div>
				<div id='content-large'>
					<div class='paddingOuter'>
						<div id='band'>
							<h1 id='subsectionTitle'>INTA project private area</h1>
						</div>
						<div class='paddingInner'>
							<!-- LISTA FILES -->
							<div id='listaFiles'>
								<?php

								// --> elenco files
								$dir = "uploads/*.*";
								$files = glob($dir);
								// <-- elenco files

								if (count($files) > 0) {
									echo "
								<p>
									Files:
								</p>
								";
								}

								for ($i = 0; $i < count($files); $i++) {

									echo "  <input class='deleteButton' type='submit' value='-' onclick='showConfirmBox(\"deleteForm_$i\");'/>
											<form class='deleteForm' id='deleteForm_$i' action='' method='post'>
												<input type='hidden' name='file' value='$files[$i]' />
												<input type='hidden' name='delete' value='1' />
											</form>
											<a href='$files[$i]'>" . str_replace('uploads/', '', $files[$i]) . "</a>  (" . date("d/m/Y", filemtime($files[$i])) . ")<br/>";
								}
								?>
							</div>
							<br />
							<!-- LISTA FILES -->
							<form class="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
								<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
								<input type="file" name="ufile" size="60"/>
								<input type="submit" value="Upload (max 20 MB)" />
							</form>
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
		<script type="text/javascript">
			//<![CDATA[
			fillCOSTContainer();
			//]]>
		</script>
		<!-- InstanceEnd -->
	</body>
</html>
