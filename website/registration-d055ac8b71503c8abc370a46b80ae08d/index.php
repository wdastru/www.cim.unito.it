<?PHP

require_once ("./include/membersite_config.php");

if (isset($_POST['submitted'])) {
	if ($fgmembersite -> RegisterUser()) {
		$fgmembersite -> RedirectToURL("thank-you.php");
	}
}

$localizer = '../';
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
		<link rel="stylesheet" type="text/css" href="style/fg_membersite.css" />
		<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
		<link rel="stylesheet" type="text/css" href="style/pwdwidget.css" />
		<script src="scripts/pwdwidget.js" type="text/javascript"></script>
		<link rel="icon" href="images/favicon.gif" type="image/gif" />
		<link href=<?php echo $localizer . "stylesheet.css"?> rel='stylesheet' type='text/css' />
	</head>
	<body>
		<div id='section0'>
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
							<h1 id='subsectionTitle'>Registration to the EuroBioImaging Italy meeting</h1>
						</div>
						<div class='paddingInner'>
							<!-- Form Code Start -->
							<div id='fg_membersite'>
								<form id='register' action='<?php echo $fgmembersite -> GetSelfScript();?>' method='post' accept-charset='UTF-8'>
									<fieldset >
										<legend>
											Register
										</legend>
										<input type='hidden' name='submitted' id='submitted' value='1'/>
										<div class='short_explanation'>
											* required fields
										</div>
										<input type='text'  class='spmhidip' name='<?php echo $fgmembersite -> GetSpamTrapInputName();?>' />
										<div>
											<span class='error'><?php echo $fgmembersite -> GetErrorMessage();?></span>
										</div>
										<div class='container'>
											<label for='name' >Your Full Name*: </label>
											<br/>
											<input type='text' name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" />
											<br/>
											<span id='register_name_errorloc' class='error'></span>
										</div>
										<div class='container'>
											<label for='email' >Email Address*:</label>
											<br/>
											<input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" />
											<br/>
											<span id='register_email_errorloc' class='error'></span>
										</div>
										<div class='container'>
											<label for='affiliation' >Affiliation*:</label>
											<br/>
											<input type='text' name='affiliation' id='affiliation' value='<?php echo $fgmembersite->SafeDisplay('affiliation') ?>' maxlength="50" />
											<br/>
											<span id='register_affiliation_errorloc' class='error'></span>
										</div>
										<!--
										<div class='container'>
											<label for='username' >UserName*:</label>
											<br/>
											<input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" />
											<br/>
											<span id='register_username_errorloc' class='error'></span>
										</div>
										<div class='container' style='height:80px;'>
											<label for='password' >Password*:</label>
											<br/>
											<div class='pwdwidgetdiv' id='thepwddiv' ></div>
											<noscript>
												<input type='password' name='password' id='password' maxlength="50" />
											</noscript>
											<div id='register_password_errorloc' class='error' style='clear:both'></div>
										</div>
										-->
										<br/>
										<div class='container'>
											<input type='submit' name='Submit' value='Submit' />
										</div>
									</fieldset>
								</form>
								<!-- client-side Form Validations:
								Uses the excellent form validation script from JavaScript-coder.com-->
								<script type='text/javascript'>
									// <![CDATA[
									var pwdwidget = new PasswordWidget('thepwddiv', 'password');
									pwdwidget.MakePWDWidget();

									var frmvalidator = new Validator("register");
									frmvalidator.EnableOnPageErrorDisplay();
									frmvalidator.EnableMsgsTogether();
									frmvalidator.addValidation("name", "req", "Please provide your name");

									frmvalidator.addValidation("email", "req", "Please provide your email address");

									frmvalidator.addValidation("email", "email", "Please provide a valid email address");

									//frmvalidator.addValidation("username", "req", "Please provide a username");

									//frmvalidator.addValidation("password", "req", "Please provide a password");

									// ]]>
								</script>
								<div id='fg_crdiv'>
									<p>
										<a href='http://www.html-form-guide.com'
										>HTML form guide - email forms, registration forms, form generators and more</a>.
									</p>
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
			<!--
			Form Code End (see html-form-guide.com for more info.)
			-->
	</body>
</html>