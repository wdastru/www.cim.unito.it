<?php
$localizer = "../";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/research.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
        <title>Molecular Imaging Center - University of Torino - Hyperpolarized agents</title>
        <meta name="description" content="" />
    </head>
    <body>
        <?php require_once($localizer . 'includes/analyticstracking.php') ?>
        <div id='section1'>
            <?php
            require ('../includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection4">
                <!-- InstanceEndEditable -->
                <?php
                    require ('../includes/research-side-nav.php');
                ?>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div id='band'>
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" -->Hyperpolarization <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <!-- InstanceBeginEditable name="subsection content" -->
                            <div class='infoBox' id='DNP-Box'>
                                <h2>Dynamic Nuclear Polarization (DNP)</h2>
                                The material to be polarized is dissolved in a glass-forming
                                solvent (glycerol, ethanol or dimethylsulfoxide), or it can be used
                                as it is if it forms a glassy structure when lowering the
                                temperature. It is then doped with a stable radical species and
                                then placed into the magnetic field, brought to very low
                                temperature (1-2 K) and irradiated with a proper microwave
                                frequency, at or near to the electron resonance frequency. Under
                                these conditions, polarization transfer from electrons (whose
                                polarization approaches 100% in this temperature range) to nuclei
                                occurs via flip-flop transitions. The very unefficient nuclear
                                relaxation in the solid ensures the maintenance of the nuclear
                                spins alignment during the process. After the polarization transfer
                                has taken place, the RF is switched off, the sample is raised above
                                the liquid Helium level and is rapidly dissolved in hot buffer
                                still inside the magnetic field. This dissolution method allows to
                                rapidly reach the body temperature without significant loss of
                                polarization. The sample is then injected into alive animals or
                                added to cells suspensions for MRI/MRS acquisitions.
                            </div>
                            <div class='infoBox' id='PHIP-Box'>
                                <h2>Para-Hydrogen Induced Polarization (PHIP)</h2>
                                The hydrogen molecule exists as two different nuclear spin isomers:
                                ortho-hydrogen (o-H <sub>2</sub>), corresponding to a triply
                                degenerate state (S=1, 75% natural abundance), in which the two
                                nuclear spins are parallel, and parahydrogen (p-H <sub>2</sub>),
                                corresponding to a singlet state (S=0, 25% abundance), in which the
                                two nuclear spins are antiparallel. It is possible to enrich
                                hydrogen in the para form at low temperature in the presence of a
                                paramagnetic catalyst. The PHIP procedure is based on the chemical
                                reaction of hydrogen enriched in the para form (commonly termed as
                                para-hydrogen) with unsaturated substrates. The imbalance in the
                                spin population of the para-hydrogen molecule is transferred to the
                                product molecules, which result then transformed into
                                hyperpolarized systems. In the hydrogenated molecule, polarization
                                transfer to heteronuclei occurs via scalar couplings.
                            </div>
                            <div class='content'>
                                <p class='indent'>
                                    An hyperpolarized state is defined as a state in
                                    which the nuclear spin populations are altered with respect to the
                                    equilibrium value described by the Boltzmann equation. Since the
                                    signal intensity is proportional to the spin populations
                                    difference, hyperpolarization leads to an increase in the NMR
                                    signal intensity which may reach values as high as 10 <sup>5</sup>.
                                    This can be exploited in the fast acquisition of high resolution MR
                                    images and spectra and allows to use nuclei other than protons,
                                    allowing to obtain images which are characterized by high signal to
                                    noise (S/N) ratios and free from background noise because of the
                                    low natural abundance of heteronuclei such as <sup>13</sup>C and <sup>15</sup>N. With hyperpolarized contrast agents, images are
                                    acquired by the direct detection of the heteronucleus and the
                                    contrast is given by the difference in signal intensity between
                                    regions reached by the hyperpolarized <sup>13</sup>C molecule and
                                    uninvolved zones. In this context, <span class='displayInfoBox'
                                    onmouseover="showInfoBox('DNP-Box');" onmouseout=
                                    "hideInfoBox('DNP-Box');">Dynamic Nuclear Polarization
                                        (DNP)</span>and <span class='displayInfoBox' onmouseover=
                                    "showInfoBox('PHIP-Box');" onmouseout=
                                    "hideInfoBox('PHIP-Box');">Para-Hydrogen Induced Polarization
                                        (PHIP)</span>methods are currently under intense scrutiny for the
                                    preparation of <sup>13</sup>C enriched hyperpolarized
                                    substances.
                                </p>
                                <p class='indent'>
                                    The DNP hyperpolarization procedure can be in
                                    principle applied to any molecule, provided that efficient methods
                                    for the rapid dissolution of the hyperpolarized substrate and the
                                    separation of the paramagnetic agent are available. Conversely, the
                                    use of the PHIP method requires hydrogenatable substrates, and
                                    implies the use of hydrogenation catalysts which must be removed
                                    before the in vivo administration. Its main advantage relies on the
                                    fact that it does not require the very low temperatures used in the
                                    DNP procedure, thus resulting in a simpler and cheaper
                                    methodology.
                                </p>
                                <p class='indent'>
                                    At CIM, the PHIP procedure is used to produce
                                    hyperpolarized molecules suitable as <sup>13</sup>C MRI contrast
                                    agents.
                                </p>
                                <p class='indent'>
                                    Three different areas of research are currently
                                    developed:
                                </p>
                                <ul>
                                    <li>Preparation of novel substrates for para-hydrogenation</li>
                                    <li>Development of quick methods for the catalyst and organic
                                        solvent removal after para-hydrogenation</li>
                                    <li>Development of procedures to convert the <sup>13</sup>C
                                        anti-phase signal obtained after para-hydrogenation to in-phase
                                        signal (suitable for MRI)</li>
                                </ul>
                                <p class='indent'>
                                    <b>1) Novel substrates for
                                    para-hydrogenation.</b>
                                </p>
                                <p>
                                    Substrates must satisfy the following requisites:
                                </p>
                                <ul>
                                    <li>an unsaturated substrate is necessary (usually a triple bond
                                        containing molecule, that is efficiently para-hydrogenated in the
                                        presence of a suitable catalyst)</li>
                                    <li>a <sup class='superscript'>13</sup>C atom characterized by a
                                        long T <sub class='subscript'>1</sub>value (which allows to cope
                                        with the polarization loss due to relaxation), must be adjacent to
                                        the unsaturation in order to allow polarization transfer from
                                        para-hydrogen through scalar coupling</li>
                                    <li>The hydrogenation product must be water-soluble</li>
                                </ul>
                                <p class="indent">
                                    Some examples of substrates which have been
                                    developed:
                                </p>
                                <ul>
                                    <li><sup>13</sup>C-enriched unsaturated derivatives of glucose</li>
                                    <li><sup>15</sup>N enriched unsatured derivatives of choline</li>
                                    <li>Unsaturated substrate for the preparation of <sup>13</sup>C
                                        hyperpolarized succinate</li>
                                </ul>
                                <div class='imgCenter'><img src="../images/Hyperpolarization/TOC.png"
                                    alt="p-Hydrogenation" style="width:500px;" />
                                </div>
                                <p class='indent'>
                                    <b>2) Quick methods for the catalyst and organic
                                    solvent removal after para-hydrogenation</b>
                                </p>
                                Para-hydrogenation reactions are usually carried out in organic
                                solvent solutions, by using Rh cationic complexes as catalysts.
                                Both the solvent and the catalyst are toxic and must be removed
                                before injection of the HP product. This can be achieved by:
                                <p class='indent'>
                                    a) Ion exchange chromatography and spray
                                    distillation
                                </p>
                                <p class='indent'>
                                    b) Phase transfer
                                </p>
                                <p class='indent'>
                                    c) use of water-soluble catalysts and ion
                                    exchange chromatogrophy
                                </p>
                                <p class='indent'>
                                    All the three possibilities are studied at the
                                    CIM.
                                </p>
                                <p class='indent'>
                                    The second methodology is of particular interest
                                    because it allows to carry out the para-hydrogenation in organic
                                    solvents (where its efficiency is higher), and then to remove
                                    catalyst, solvent and unreacted substrate in one step only by phase
                                    transfer, yielding ready-to-use pure water solutions of the HP
                                    product. It is possible to use a lypophilic unsaturated precursor,
                                    which is quickly converted after para-hydrogenation into a
                                    water-soluble compound of interest by addition of an aqueous phase,
                                    in which it is immediately extracted. By this route, hyperpolarized
                                    succinate has been produced by para-hydrogenation of maleic
                                    anhydride in chloroform and subsequent hydrolysis.
                                </p>
                                <p class='indent'>
                                    <b>3) Procedures to convert the <sup class=
                                    'superscript'>13</sup>C anti-phase signal obtained after
                                    para-hydrogenation to in-phase signal (suitable for MRI)</b>
                                </p>
                                <div class='imgRight'><img src=
                                    "../images/Hyperpolarization/hyper-heart.jpg" alt=
                                    "heart 13C image" style="align:left;"/>
                                </div>
                                <p class='indent'>
                                    Polarization transfer from para-hydrogen to
                                    heteronuclei results into adsorption-emission <sup class=
                                    'superscript'>13</sup>C signals which must be converted to in-phase
                                    signal in order to be used for MRI. This can be achieved by
                                    application of an opportune magnetic field cycle or by the use of
                                    pulse sequences. The first method simply consists in two asymmetric
                                    transformations of the magnetic field which can be obtained by the
                                    use of an opportunely designed m-metal shield. For the second, a
                                    low frequency spectrometer has been constructed in collaboration
                                    with Stelar srl (link), in which the pulse sequence is applied on
                                    the para-hydrogenated sample.
                                </p>
                                
                               
                                
                            </div>
                            
                             <a href="#" target="_blank" title="Francesca Reineri">
							<img src="../images/reineri.jpg" height="100px;" width="100px;" style="border-radius:50%"></a>
                            
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
            <div id='validators'>
                <p>
                    <a href="http://validator.w3.org/check?uri=referer"><img src=
                    "images/valid-xhtml10-blue_opt.png" alt=
                    "Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
                </p>
                <p>
                    <a href=
                    "http://jigsaw.w3.org/css-validator/check?uri=referer"><img style=
                    "border:0;width:88px;height:31px" src="images/vcss-blue_opt.gif"
                    alt="CSS Valido!" /></a>
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
