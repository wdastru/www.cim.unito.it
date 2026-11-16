<!doctype html>
<?php
    require_once __DIR__ . '/../config.inc.php';
    $activeSection    = 'research';
    $activeSubsection = 'xnat';
?>
<html lang="en">
    <head>
        <?php include SITE_PATH . "includes/head_const.inc.php"; ?>
        <title>
            Molecular Imaging Center - University of Torino - CIM-XNAT
        </title>
        <meta name="description" content="" />
    </head>
    <body>
        <div id="section1">
            <?php include SITE_PATH . 'includes/menu.php'; ?>
            <?php include SITE_PATH . 'includes/header.php'; ?>
            <div class="main-area">
                <?php include SITE_PATH . "includes/research-side-nav.php"; ?>
            <?php include SITE_PATH .
                "includes/research-side-nav-mobile.php"; ?>
            <div id="content">
                <div class="paddingOuter">
                    <div class="band">
                        <h1 class="subsectionTitle">CIM-XNAT</h1>
                    </div>
                    <div class="paddingInner">
                        <h2>Welcome to the CIM-XNAT information website!</h2>
                        <p class="indent">
                            Small animal imaging facilities are highly
                            specialized centers that provide the research
                            community access to cutting-edge imaging
                            technologies. These centers have therefore to
                            deal with the complexity and the variety of
                            preclinical image datasets in terms of archiving
                            and retrieving image datasets as well as for the
                            management and processing. Whereas at clinical
                            level
                            <a
                                href="https://www.xnat.org"
                                target="_blank"
                                style="color: #dc6a10"
                                >XNAT</a>
                            , an open-source imaging informatics software
                            platform dedicated for importing, archiving,
                            processing and securely distributing imaging and
                            related study data is available and widely
                            exploited, to date, no custom or standard
                            solutions are available to preclinical imaging
                            centers to fulfill these tasks. Therefore, we
                            have overcome these limitations by developing
                            dedicated tools for XNAT to facilitate image
                            storage, annotation, and processing at
                            preclinical level. A XNAT instance for archiving
                            and processing preclinical medical images is
                            available at
                            <a
                                href="http://eubi-xnat.hpc4ai.unito.it"
                                target="_blank"
                                style="color: #dc6a10"
                                >EUBI-XNAT
                            </a>
                            .
                        </p>
                        <div class="imgCenter">
                            <img
                                alt="XNAT"
                                src="<?php echo SITE_ROOT; ?>/images/research_lines/xnat/xnat_workflow.png"
                            />
                        </div>
                        <h2>TOOLS</h2>
                        <ul style="font-size: 18px">
                            <li>
                                <a
                                    href="https://eubi-xnat.hpc4ai.unito.it/app/template/Login.vm?failed=true#!"
                                    target="_blank"><strong>XNAT</strong></a
                                >
                                <br /><br />
                                A preclinical imaging data
                                repository hosted by the University of
                                Turin, supporting data sharing, reuse, and
                                standardized image processing, with
                                integrated tools for image analysis.
                                <br /><br />
                                <ul style="font-size: 18px">
                                    <li>
                                        <strong>XNAT-PIC</strong>
                                        <br /><br />
                                        <p>
                                            XNAT for Preclinical Imaging
                                            Centers (XNAT-PIC) is a free and
                                            open-source Windows desktop
                                            application (GNU General Public
                                            License - GPL, v3), which offers
                                            several tools to expand the XNAT
                                            core functionalities to support
                                            the preclinical imaging
                                            community and to promote open
                                            science practices. The adoption
                                            of these tools will improve the
                                            findability, the access, the
                                            interoperability, and
                                            reusability (FAIR) of
                                            preclinical image datasets.
                                        </p>
                                        <h2>
                                            Which features does XNAT-PIC
                                            offer?
                                        </h2>
                                        <div class="xnat-features">
                                            <div class="feature">
                                                <div class="img-wrapper">
                                                    <img
                                                        alt="converter"
                                                        src="<?php echo SITE_ROOT; ?>/images/research_lines/xnat/converter.png"
                                                    />
                                                </div>
                                                <div>
                                                    <h4>
                                                        XNAT-PIC Converter 
                                                    </h4>
                                                    Converts raw imaging data from MRI (Bruker) and Optical Imaging 
                                                    (IVIS) systems into the DICOM format. 
                                                </div>
                                            </div>
                                            <div class="feature">
                                                <div class="img-wrapper">
                                                    <img
                                                        alt="uploader"
                                                        src="<?php echo SITE_ROOT; ?>/images/research_lines/xnat/uploader.png"
                                                    />
                                                </div>
                                                <div>
                                                    <h4>Uploader</h4>
                                                    Uploads DICOM datasets to an XNAT instance, supporting workflows at 
                                                    the project, subject, and experiment levels. The uploader also enables 
                                                    the management of imaging modalities not natively supported by XNAT, 
                                                    such as optical imaging and photoacoustic imaging. 
                                                </div>
                                            </div>
                                            <div class="feature">
                                                <div class="img-wrapper">
                                                    <img
                                                        alt="annotation"
                                                        src="<?php echo SITE_ROOT; ?>/images/research_lines/xnat/annotation.png"
                                                    />
                                                </div>
                                                <div>
                                                    <h4>
                                                        Grouping Annotation
                                                        Interface
                                                    </h4>
                                                    Provides an interface to efficiently cope with different experimental 
                                                    and experimental protocols by labelling subjects with dedicated Custom 
                                                    Forms to manage several types of cohorts (e.g. treated/untreated, timepoints, doses, etc..) 
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <h2>
                                            Let's Start!
                                        </h2>
                                        <p>Download and start
                                            using XNAT-PIC!</p>
                                        <div style="padding-left: 2rem">
                                            <a href="https://github.com/cim-unito/XNAT-PIC/" class="button">Find us on GitHub!</a>
                                            <br /><br/>
                                            <a href="https://github.com/cim-unito/XNAT-PIC/releases/download/v2.1-rc.1/optical-imaging-plugin-1.0.0-SNAPSHOT-xpl.jar" class="button">XNAT Plugin for Optical Imaging</a>
                                            <br /><br/>
                                            <a href="https://github.com/cim-unito/XNAT-PIC/releases/download/v2.1-rc.1/XNAT-PIC-2-1-0-rc-1.msi" class="button">XNAT-PIC</a>
                                            <br /><br/>
                                            <a href="https://github.com/cim-unito/XNAT-PIC/releases/download/v2.1-rc.1/photoacoustic-imaging-plugin-1.0.0-SNAPSHOT-xpl.jar" class="button">XNAT Plugin for Photoacoustic Imaging</a>
                                        </div>
                                        <br/>
                                        <h2>Versions</h2>
                                        <ul>
                                            <li>
                                                <h3>XNAT-PIC v2.1</h3>
                                                <div class="xnat-features">
                                                    <div class="feature">
                                                        <img
                                                            alt="xnat-feature-1"
                                                            src="<?php echo SITE_ROOT; ?>/images/research_lines/xnat/1.png"
                                                        />
                                                        <div>
                                                            <h4>Stand-alone SW</h4>
                                                            XNAT-PIC is available for download and immediately usable 
                                                            without requiring additional setup.
                                                        </div>
                                                    </div>
                                                    <div class="feature">
                                                        <img
                                                            alt="xnat-feature-2"
                                                            src="<?php echo SITE_ROOT; ?>/images/research_lines/xnat/2.png"
                                                        />
                                                        <div>
                                                            <h4>
                                                                User-friendly
                                                                interface
                                                            </h4>
                                                            We have designed an
                                                            interface that is easy
                                                            to navigate and
                                                            understand, which
                                                            facilitates user
                                                            interaction with the
                                                            system.
                                                        </div>
                                                    </div>
                                                    <div class="feature">
                                                        <img alt="xnat-feature-3" src="<?php echo SITE_ROOT; ?>/images/research_lines/xnat/3.png">
                                                        <div>
                                                            <h4>Secure Access</h4>
                                                            Credentials to connect
                                                            to an XNAT instance to
                                                            load images dataset from
                                                            the desktop client are
                                                            protected by
                                                            cryptographic algorithm.
                                                        </div>
                                                    </div>
                                                    <div class="feature">
                                                        <img alt="xnat-feature-5" src="<?php echo SITE_ROOT; ?>/images/research_lines/xnat/5.png">
                                                        <div>
                                                            <h4>Improved Speed</h4>
                                                            The addition of
                                                            multicore processing has
                                                            enhanced the conversion
                                                            speed of raw MRI file
                                                            formats to the DICOM.
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="feature">
                                                        <img
                                                            alt="xnat-feature-3"
                                                            src="<?php echo SITE_ROOT; ?>/images/research_lines/xnat/8.png"
                                                        />
                                                        <div>
                                                            <h4>Optical and Photoacoustic DICOM Upload</h4>
                                                            Upload optical and photoacoustic DICOM images directly to the 
                                                            XNAT platform through dedicated plugins.
                                                        </div>
                                                    </div>
                                                    <div class="feature">
                                                        <img
                                                            alt="xnat-feature-4"
                                                            src="<?php echo SITE_ROOT; ?>/images/research_lines/xnat/4.png"
                                                        />
                                                        <div>
                                                            <h4>
                                                                Additional Files
                                                            </h4>
                                                            Ability to upload
                                                            non-DICOM files such as
                                                            parametric maps,
                                                            results, etc. to the
                                                            XNAT platform.
                                                        </div>
                                                    </div>
                                                    <div class="feature">
                                                        <img
                                                            alt="xnat-feature-6"
                                                            src="<?php echo SITE_ROOT; ?>/images/research_lines/xnat/6.png"
                                                        />
                                                        <div>
                                                            <h4>More objects</h4>
                                                            The user can convert,
                                                            upload, or create an
                                                            entire project, single
                                                            subject, or experiment
                                                            (scans) on XNAT.
                                                        </div>
                                                    </div>
                                                    <div class="feature">
                                                        <img
                                                            alt="xnat-feature-7"
                                                            src="<?php echo SITE_ROOT; ?>/images/research_lines/xnat/7.png"
                                                        />
                                                        <div>
                                                            <h4>
                                                                Interface for
                                                                grouping annotation
                                                            </h4>
                                                            Interface designed with
                                                            features and functions
                                                            that allow users to
                                                            easily group and
                                                            categorize information
                                                            regarding preclinical
                                                            images.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <h3 style="
                                                text-align: left;
                                                padding-left: 30px;">XNAT-PIC v1.0</h3>
                                                <h2>Functionality of XNAT-PIC</h2>
                                                GitHub:
                                                <a
                                                href="https://github.com/szullino/XNAT-PIC"
                                                >GIT-HUB Sara Zullino</a
                                                >
                                                <br />
                                                <ul>
                                                    <li>
                                                        Convert experiments (pool of
                                                        scans) from BRUKER format to
                                                        standard DICOM.
                                                    </li>
                                                    <li>
                                                        Upload experiments to XNAT
                                                        platform.
                                                    </li>
                                                    <li>
                                                        The custom variables are
                                                        edited based on the folder
                                                        structure.
                                                    </li>
                                                </ul>
                                                <br />
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>XNAT metadata plugin</strong>
                                        <br /><br />
                                        PIDAR Metadata Plugin is a custom 
                                        XNAT plugin developed to extend
                                        metadata handling capabilities for
                                        the PIDAR (Preclinical Image Dataset
                                        Repository) platform. Built on the
                                        XNAT plugin framework, it introduces
                                        tailored data fields, forms, and
                                        integration logic to support
                                        FAIR-compliant metadata capture for
                                        preclinical imaging datasets. The
                                        plugin is designed to work
                                        seamlessly within XNAT-based
                                        research data infrastructures, such
                                        as those used by Euro-BioImaging and
                                        IBB XNAT, enabling structured and
                                        standardized metadata management
                                        across imaging projects.
                                        <br /><br />
                                        <a href="<?php echo SITE_ROOT; ?>/download/metadata-plugin.zip">Download</a>
                                        <br /><br />
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a
                                    href="https://pidar.hpc4ai.unito.it/Home/About"
                                    ><strong>PIDAR</strong></a
                                ><br /><br />
                                <p>
                                    A public repository designed to organize
                                    and share metadata from preclinical
                                    imaging datasets, promoting FAIR data
                                    principles within the scientific
                                    community.
                                </p>
                                <a
                                    href="https://pidar.hpc4ai.unito.it/Home/Xnat"
                                    >Preclinical imaging datasets</a
                                >
                            </li>
                        </ul>
                        <br /><br />
                        <h2>Contact information</h2>
                        <p>
                            XNAT administrator:<b>Kranthi Thej Kandula</b>
                            <br />Research Fellow at University of Turin
                            <br />mail:
                            <a
                                title="Profile"
                                href="mailto:kranthithej.kandula@unito.it"
                                >kranthithej.kandula@unito.it
                            </a>
                        </p>
                        <p>
                            XNAT-PIC developer: <b>Francesco Gammaraccio</b
                            ><br />Research Fellow at University of Turin
                            <br />mail:
                            <a
                                title="Profile"
                                href="mailto:francesco.gammaraccio@unito.it"
                            >
                                francesco.gammaraccio@unito.it</a
                            >
                        </p>
                        <h2>Acknowledgements</h2>
                        <p>
                            European Union's Horizon 2020 research and
                            innovation programme under grant agreements
                            #824087 (EOSC-LIFE project), #965345
                            (HealthyCloud project), #101058427 (EOSC4Cancer
                            project) and # 1011100633 (EUCAIM project).
                        </p>
                        <br />
                        <div class="flex-container-row">
                            <div class="xnat-acknowledgements">
                                <a
                                    href="https://www.eosc-life.eu//"
                                    target="_blank"
                                >
                                    <img
                                        alt="EOSC-Life"
                                        src="<?php echo SITE_ROOT; ?>images/research_lines/eosclogo.png"
                                    />
                                </a>
                            </div>
                            <div class="xnat-acknowledgements">
                                <a
                                    href="https://healthycloud.eu/"
                                    target="_blank"
                                >
                                    <img
                                        alt="healthyCloud"
                                        src="<?php echo SITE_ROOT; ?>images/research_lines/xnat/healthycloud.jpg"
                                    />
                                </a>
                            </div>
                            <div class="xnat-acknowledgements">
                                <a
                                    href="https://eosc4cancer.eu/"
                                    target="_blank"
                                >
                                    <img
                                        alt="EOSC-Cancer"
                                        src="<?php echo SITE_ROOT; ?>images/research_lines/xnat/eosc-cancer.png"
                                    />
                                </a>
                            </div>
                            <div class="xnat-acknowledgements">
                                <a
                                    href="https://www.eibir.org/projects/eucaim/"
                                    target="_blank"
                                >
                                    <img
                                        alt="EUCAIM"
                                        src="<?php echo SITE_ROOT; ?>images/research_lines/xnat/eucaim.png"
                                    />
                                </a>
                            </div>
                            <div class="xnat-acknowledgements">
                                <a
                                    href="https://european-union.europa.eu/index_en"
                                    target="_blank"
                                >
                                    <img
                                        alt="EU-logo"
                                        src="<?php echo SITE_ROOT; ?>images/research_lines/xnat/EU-logo.svg"
                                    />
                                </a>
                            </div>
                        </div>
                        <hr />
                        <h2 style="text-align: left">Group Leaders:</h2>
                        <a
                            href="<?php echo SITE_ROOT; ?>PI/Longo/home.php"
                            target="_blank"
                            title="Dario Longo"
                        >
                            <img
                                alt="Dario Longo"
                                class="group-leaders-img"
                                src="<?php echo SITE_ROOT; ?>images/staff/Dario_Longo.webp"
                            />
                        </a>
                        <a
                            href="#"
                            target="_blank"
                            title="Walter Dastr&ugrave;"
                        >
                            <img
                                alt="Walter Dastr&ugrave;"
                                class="group-leaders-img"
                                src="<?php echo SITE_ROOT; ?>images/staff/dastru.webp"
                            />
                        </a>
                    </div>
                </div>
            </div>
            </div>
            <div id="after"></div>
                <div id="footer">
                    <p>
                        Molecular Imaging Center - Via Nizza, 52 - I-10125
                        Torino - ITALY <br />
                        Fax. Tel. Mail
                    </p>
                    <?php include SITE_PATH . "includes/HTML5_badge_valid.inc.php"; ?> 
                    <?php include SITE_PATH . "includes/PageSpeedTest.inc.php"; ?>
                </div>
        </div>
        <script>
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
    </body>
</html>
