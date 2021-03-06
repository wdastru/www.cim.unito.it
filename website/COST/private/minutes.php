<?php
$localizer = "../../";
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
        <link href="<?php echo $localizer;?>/COST/cost.css" rel='stylesheet' type='text/css' />
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
                onclick='sendFormMinutes();' />
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
                    require $localizer . 'COST/include/COST-sidebar.inc.php';
                    ?>
                </div>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 class='subsectionTitle'>COST Action TD1004</h1>
                        </div>
                        <div class='paddingInner'>
                            <h2 id="mgmtTitle">Minutes of the Management Commitee meetings</h2>
                            <div id='minutesContainer'>
                                <ul>
                                    <?php

                                    $doc = new DOMDocument();
                                    $doc -> load('minutes.xml');

                                    $books = $doc -> getElementsByTagName("meeting");

                                    $i = 0;
                                    foreach ($books as $book) {
                                        $descriptions = $book -> getElementsByTagName("description");
                                        $description = $descriptions -> item(0) -> nodeValue;

                                        $dates = $book -> getElementsByTagName("date");
                                        $date = $dates -> item(0) -> nodeValue;

                                        $files = $book -> getElementsByTagName("file");
                                        $file = $files -> item(0) -> nodeValue;

                                        echo "<li>
                                                <input class='deleteButton' type='submit' value='-' onclick='showConfirmBox(\"del_$i\")'>
                                                <a href='uploads/minutes/$file'>$description ($date)</a>
                                                <form class='deleteForm' action='deleteFromXML.php' method='post' id='del_$i'>
                                                <input type='hidden' name='file' value='$file' />
                                                <input type='hidden' name='description' value='$description'>
                                                <input type='hidden' name='date' value='$date'>
                                                </form>
                                              </li>";

                                        $i++;

                                    }
                                    ?>
                                </ul>
                                <input type="submit" class="uploadButton" value="+"
                                onclick="changeUploadFormVisibility('uploadForm');"><span>(max 8MB)</span><br/>
                                <form class="uploadForm" action="addToXML.php" method="post"
                                enctype="multipart/form-data" id="uploadForm">
                                    Description:
                                    <input type="text" id="description"
                                    name="description">
                                    Date:
                                    <input type="text" id="date"
                                    name="date">
                                    <br />
                                    <input type="file" name="ufile">
                                    <input
                                    type="submit" value="Upload">
                                </form>
                            </div>
                            <br />
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
            //fillMinutesContainer();
            //]]>
        </script>
        <!-- InstanceEnd -->
    </body>
</html>
