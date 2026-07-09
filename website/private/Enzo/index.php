<?php require_once __DIR__ . '/../../config.inc.php'; ?>
<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>Molecular Imaging Center - University of Torino</title>
        <meta
            name="description"
            content="University of Torino. Website of the Molecular Imaging Center."
        />
        <link href="enzo.css" rel="stylesheet" type="text/css" />
        <script
            type="text/javascript"
            src="<?php echo SITE_ROOT; ?>private/Enzo/enzo.js"
        ></script>
    </head>
    <body>
        <div id="confirmDeletionHiddenBox" style="visibility: hidden">
            <h1>ATTENZIONE !!!</h1>
            <p style="font-weight: bold">
                il file selezionato verr� cancellato.
            </p>
            <form method="post" id="confirmDeletion" action="">
                <input
                    type="button"
                    id="deleteButton"
                    value="Delete"
                    onclick="sendForm()"
                />
                <input
                    type="button"
                    value="Cancel"
                    onclick="javascript: history.back();"
                />
                <input type="hidden" name="Id" value="" />
            </form>
        </div>
        <div id="section7">
            <?php include SITE_PATH . 'includes/main-nav.php'; ?>
            <div id="header"></div>
            "
            <div id="subsection0">
                "
                <div id="sidebar-narrow">
                    <div class="padding">
                        <dl id="list"></dl>
                    </div>
                </div>
                <div id="content-large">
                    <div class="paddingOuter">
                        <div class="band">
                            <h1 class="subsectionTitle">Enzo's private area</h1>
                        </div>
                        <div class="paddingInner">
                            "
                            <div id="listaFiles">
                                <?php
                                    $dir   = "uploads/*.*";
                                    $files = glob($dir);
                                    if (count($files) > 0) {
                                        echo "<p>Files:</p>";
                                    }
                                ?>
                                <?php foreach ($files as $i => $file): ?>
                                        <input
                                                class="deleteButton"
                                                type="submit"
                                                value="-"
                                                onclick='showConfirmBox("deleteForm_<?php echo $i; ?>")'
                                            />
                                            <form
                                                class="deleteForm"
                                                id="deleteForm_<?php echo $i; ?>"
                                                action=""
                                                method="post"
                                            >
                                                <input
                                                    type="hidden"
                                                    name="file"
                                                    value="<?php echo $files[$i]; ?>"
                                                />
                                                <input
                                                    type="hidden"
                                                    name="delete"
                                                    value="1"
                                                />
                                            </form>
                                            <a href="<?php echo $files[$i]; ?>"
                                                >" . str_replace('uploads/', '', <?php echo $files[$i]; ?>)
                                        . "</a
                                            >
                                            (" . date("d/m/Y", filemtime(<?php echo $files[$i]; ?>)) .
                                            ")<br />";
                                    <?php endforeach; ?>
                            </div>
                            <br />
                            "
                            <form
                                class="uploadForm"
                                action="upload.php"
                                method="post"
                                enctype="multipart/form-data"
                            >
                                <input
                                    type="hidden"
                                    name="MAX_FILE_SIZE"
                                    value="20000000"
                                />
                                <input type="file" name="ufile" size="60" />
                                <input
                                    type="submit"
                                    value="Upload (max 20 MB)"
                                />
                            </form>
                        </div>
                    </div>
                </div>
                "
            </div>
            "
            <div id="after"></div>
            <div id="footer">
                <p>
                    Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino -
                    ITALY
                    <br />
                    Fax. Tel. Mail
                </p>
            </div>

            "
        </div>
        "
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
        "
    </body>
</html>
