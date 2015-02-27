<?php
$localizer = "../../";
require $localizer . 'COST/private/errors.inc.php';

function valid_error() {
	if (preg_match('/^(cost_xml_not_found|file_not_copied|missing_db_table_name|missing_upload_file|invalid_type|delete|upload|missing_filename|file_exists|file_not_exists|upload_dir_not_exist|delete_not_set|not_valid_WG|file_too_big|could_not_delete_file)$/', $_GET['error'])) {
		return TRUE;
	} else { 
		return FALSE;
	}
}

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
        <link href="<?php echo $localizer;?>stylesheet.css" rel='stylesheet'
        type='text/css' />
        <link href="cost.css" rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="cost.js"></script>
    </head>
    <link rel="icon" href="<?php echo $localizer;?>images/favicon.gif"
    type="image/gif" />
    <body>
        <div id='section5'>
            <?php require ($localizer . 'includes/main-nav.php'); ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection0">
                <!-- InstanceEndEditable -->
                <div id='sidebar'>
                    <?php require $localizer . 'COST/include/COST-sidebar.inc.php'; ?>
                    <div class='padding'>
                        <dl id='list'>
                            <!-- <dt class='subsection_link' id='section0-subsection1'>
                            <a href='staff.php'>Staff</a>
                            </dt>
                            <dt class='subsection_link' id='section0-subsection2'>
                            <a href='where.php'>Where</a>
                            </dt>
                            <dt class='subsection_link' id='section0-subsection3'>
                            <a href='contacts.php'>Contacts</a>
                            </dt>
                            -->
                        </dl>
                    </div>
                </div>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div id='band'>
                            <h1 id='subsectionTitle'>COST Action TD1004</h1>
                        </div>
                        <div class='paddingInner'>
                            <p>
                                <?php
                                	if (valid_error()) {
                                		echo "<b>! ! ! WARNING ! ! ! <br/>" . $error[$_GET['error']] . "</b>";
									} else {
										echo "<b>! ! ! WARNING ! ! ! <br/>Wrong error message.</b>";
										exit();
									}
                                ?>
                            </p>
                            <input type="submit" value="Back"
                            onclick="javascript:history.back();" />
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
