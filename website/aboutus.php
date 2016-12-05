<?php
$localizer = "./";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
		<title>Molecular Imaging Center - University of Torino - About Us</title>
		<meta name="description" content="University of Torino. Website of the Molecular Imaging Center." />
    </head>
    <body>
        <?php require_once($localizer . 'includes/analyticstracking.php') ?>
        <div id='section0'>
            <?php
            require ('includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection1">
                <!-- InstanceEndEditable -->
                <?php
                require ($localizer . 'includes/home-side-nav.php');
                ?>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div id='band'>
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" --> Molecular Imaging Center <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <p>
                                The University of Torino is very experienced in the field of synthesis and physical-chemical
                                characterisation of contrast agents. 
                                <br/>Since 1986, research activities have addressed the
                                development of paramagnetic contrast agents for MRI (with projects in High Relaxivity,
                                Blood Pool agents, Targeting and Responsive Probes).
                                <br/>In 1998, a new laboratory was settled at the Bioindustry Park (in close collaboration with biology teams), 
                                dedicated to the identification of new targets and vectors (Center of Excellence for Preclinical Imaging - CEIP).
                                <br/>In 2001 the fruitful collaboration between chemists, biologists and medical doctors led to the
                                foundation of the Center for Molecular Imaging (CIM) of the University of Torino, located at
                                the School of Biotechnology.
                                <br/>Since 2009 it hosts a research unit of the Institute of Biostructures and Bioimages (IBB) of the Consiglio 
                                Nazionale delle Ricerche (CNR) in the context of a joined research program.
                            </p>
                            <p>
                                The main lines of research activities are the following:
                            </p>
                            <ul>
                                <li>synthesis and MRI assessment of high-relaxivity Gd-based chelates (including multimeric
                                    derivatives and nano-sized assemblies);</li>
                                <li>synthesis and MRI assessment of novel agents based on chemical exchange saturation transfer (CEST);</li>
                                <li>development of hyperpolarised molecules;</li>
                                <li>set up of cell labelling procedures (labelling of stem cells, leukocytes, tumour cells, etc.) by the internalisation of paramagnetic metal chelates; v) targeting receptors/transporters overexpressed / up-regulated on pathological cells with imaging probes (including particles); vi) targeting thrombi and plaques with suitably functionalised nanocarriers bearing different types of imaging reporters.</li>
                            </ul>
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
