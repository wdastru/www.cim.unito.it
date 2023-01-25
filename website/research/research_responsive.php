<?php
$localizer = "../";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/research.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
        <title>Molecular Imaging Center - University of Torino - Responsive agents</title>
        <meta name="description" content="" />
    </head>
    <body>

        <div id='section1'>
            <?php
            require ('../includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection7">
                <!-- InstanceEndEditable -->
                <?php
                    require ('../includes/research-side-nav.php');
                ?>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 class='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" -->Responsive
                            Agents <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <!-- InstanceBeginEditable name="subsection content" -->
                            <p class='indent'>
                                The MRI responsive agents are substances whose
                                relaxivity depends on a particular physiological parameter of the
                                microenvironment in which they are distributed (pH, temperature,
                                enzymatic activity, ... ). Their application could give rise to the
                                formation of images whose contrast depends on the particular value
                                of the physiological parameter. The crucial problem to be solved is
                                to be sure that the differences in the relaxation are due to
                                changes of the relaxivity instead of the concentration of the
                                agent.
                                <br />
                                Two main approaches are followed:
                            </p>
                            <ul>
                                <li><b>pH responsive agents</b>
                                    <br />
                                    <p class="indent">
                                        They are agents based on DOTA-type Gd complexes
                                        in which the fourth arm is presenting a sulphonamidic function. The
                                        pK <sub>a</sub>of the N-H bond in such groups can be modified
                                        around the physiological values via suitable substitutions. The
                                        deprotonation of the N-H permits the entrance of the nitrogen atom
                                        into the coordination sphere of the complex, eventually changing
                                        its relaxivity. By comparing the T<sub>1</sub> values obtained
                                        using two complexes that differ only in the pK <sub>a</sub>is
                                        possible to obtain a pH map. The assumption is that the two
                                        complexes show the same biodistribution.
                                    </p></li>
                                <li><b>Dual agents MRI/PET or SPECT</b>
                                    <br />
                                    <p class="indent">
                                        The concentration of the agent is obtained via
                                        PET or SPECT. Two routes are explored:
                                    </p>
                                    <ul>
                                        <li>The MRI complex has the same biodistribution of the PET/SPECT
                                            agent. Such approach is exploited on DOTA-type complexes by
                                            changing the metal for each different technique: for MRI the metal
                                            is Gd, in PET experiments the &beta;-emitting <sup>68</sup>Ga is
                                            used while <sup>166</sup>Ho is the metal for SPECT. While Gd and Ho
                                            complexes probably share the same biodistribution, the same could
                                            not be said for the Ga complex (same charge of the ion, but
                                            different coordination capability).</li>
                                        <li>The PET/SPECT reporter is covalently linked to the Gd complex.
                                            In this situation the dual agent contains both the MRI and
                                            PET/SPECT probes. The latter is mainly in his 'cold' form, the
                                            relative quantity of the 'hot' one depends both on the modality
                                            used and the characteristics of the isotope itself. Knowing the
                                            stoichiometric ratio between the radioactive isotope and the Gd is
                                            possible to extract the concentration of the agent, and transform
                                            the observed relaxation rates into pH maps.</li>
                                    </ul></li>
                            </ul>
                            
                            <hr></hr>
                            
                            <h2 style="text-align:left;"> Group Leaders: </h2>
							
							<a href="../PI/Longo/home.php" target="_blank" title="Dario Longo">
							<img src="../images/staff/Dario_Longo.jpg" height="100px;" width="100px;" style="border-radius:50%"></a>
														
							<a href="#" target="_blank" title="Daniela Delli Castelli">
							<img src="../images/staff/dellicastelli.jpg" height="100px;" width="100px;" style="border-radius:50%"></a>
							
							<a href="../staff/staff_digilio.php" title="Giuseppe Digilio">
							<img src="../images/staff/digilio.jpg" height="100px;" width="100px;" style="border-radius:50%"></a>
							
							<a href="../PI/Gianolio/home.html" target="_blank" title="Eliana Gianolio">
							<img src="../images/staff/gianolio.jpg" height="100px;" width="100px;" style="border-radius:50%"></a>

							<a href="../staff/staff_ferrauto.php" target="_blank" title="Giuseppe Ferrauto">
							<img src="../images/staff/ferrauto.jpg" height="100px;" width="100px;" style="border-radius:50%"></a>
							
                            
                            <!-- InstanceEndEditable -->
                        </div>
                    </div>
                </div>
                <!-- subsection closing -->
            </div>
            <!-- subsection closing -->
            <div id='after'></div>
            <div id='footer'>
                <p>
                    Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino -
                    ITALY
                    <br />
                    Fax. Tel. Mail
                </p>
            </div>
            
            <!-- section closing -->
        </div>
        <!-- section closing -->
        <script type="text/javascript">
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script><!-- InstanceEnd -->
    </body>
</html>
