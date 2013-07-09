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
        <meta name="generator" content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />
        <!-- InstanceBeginEditable name="title" -->
        <title>Molecular Imaging Center - University of Torino</title>
        <!-- InstanceEndEditable -->
        <!-- InstanceBeginEditable name="meta description" -->
        <meta name="description" content="University of Torino. Website of the Molecular Imaging Center." />
        <!-- InstanceEndEditable -->
        <meta name="google-site-verification" content="q6BWA8Ypxz6kFHheH3kr6xrFvLXopTTQNMlEEV3vGF0" />
        <meta http-equiv="Content-Type" content="text/php; charset=us-ascii" />
        <meta name="keywords" content="NMR, MRI, Imaging Molecolare, Molecular Imaging, Molecular, Imaging, Hyperpolarization, Liposomes, Targeting, Contrast Agents, Positron Emission Tomography, PET, microPET, Diagnostic Imaging, Optical Imaging, CIM, Torino, Italy, Liposomi, risonanza, magnetica, Italia" />
        <link rel="icon" href="images/favicon.gif" type="image/gif" />
        <link href="<?php echo $localizer; ?>stylesheet.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo $localizer; ?>private/cataloghi/catalog.css" rel='stylesheet' type='text/css' />
        <script src="<?php echo $localizer; ?>script.js" type="text/javascript" ></script>
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
                        <div id='band'>
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" --> CHEMICALS CATALOG <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <form name='add' method='post' action="<?php echo $localizer; ?>private/cataloghi/index.php">
                            <table>
                                <tr>
                                    <td>Product code :</td>
                                    <td><input type='text' size='70' name='newcode'/></td>
                                </tr>
                                <tr>
                                    <td>Supplier :</td>
                                    <td><input type='text' size='70' name='newsupplier'/></td>
                                </tr>
                                <tr>
                                    <td>CAS n&deg; :</td>
                                    <td><input type='text' size='70' name='newCAS'/></td>
                                </tr>
                                <tr>
                                    <td>Product name (<img src="../en.png" alt="UK" />)</td>
                                    <td><input type='text' size='70' name='newname_UK'/></td>
                                </tr>
                                <tr>
                                    <td>Product name (<img src="../it.jpg" alt="IT" />):</td>
                                    <td><input type='text' size='70' name='newname_IT'/></td>
                                </tr>
                                <tr>
                                    <td>Place :</td>
                                    <td><input type='text' size='70' name='newplace'/></td>
                                </tr>
                                <tr>
                                    <td>Quantity :</td>
                                    <td><input type='text' size='70' name='newquantity'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Laboratory : </td>
                                    <td><input type='text' size='70' name='newlab'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Note : </td>
                                    <td><input type='text' size='70' name='newnote'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Risk phrases : </td>
                                    <td><input type='text' size='70' name='newphrase_R'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Safety phrases : </td>
                                    <td><input type='text' size='70' name='newphrase_S'>
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
                            <br />
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
