<?php

$researchNav = [

    'synthesis' => [
        'url'   => SITE_ROOT . 'research/research_synthesis.php',
        'label' => 'Probe synthesis'
    ],

    'gado' => [
        'url'   => SITE_ROOT . 'research/research_gado.php',
        'label' => 'Gd complexes'
    ],

    'cest' => [
        'url'   => SITE_ROOT . 'research/research_cest.php',
        'label' => 'CEST Agents'
    ],

    'hyper' => [
        'url'   => SITE_ROOT . 'research/research_hyper.php',
        'label' => 'Hyperpolarized Agents'
    ],

    'multi' => [
        'url'   => SITE_ROOT . 'research/research_multi.php',
        'label' => 'Multi-Modality Agents'
    ],

    'nanotarget' => [
        'url'   => SITE_ROOT . 'research/research_nanotarget.php',
        'label' => 'Nanosized & Targeting Agents'
    ],

    'responsive' => [
        'url'   => SITE_ROOT . 'research/research_responsive.php',
        'label' => 'Responsive Agents'
    ],

    'theranostic' => [
        'url'   => SITE_ROOT . 'research/research_theranostic.php',
        'label' => 'Theranostic agents'
    ],

    'fprobes' => [
        'url'   => SITE_ROOT . 'research/research_Fprobes.php',
        'label' => '<sup>19</sup>F-based agents'
    ],

    'gdboro' => [
        'url'   => SITE_ROOT . 'research/research_Gdboro.php',
        'label' => 'Gd-boron agents for BNCT'
    ],

    'photoacoustic' => [
        'url'   => SITE_ROOT . 'research/research_photoacoustic.php',
        'label' => 'Photoacoustic agents'
    ],

    'nano-micro' => [
        'url'   => SITE_ROOT . 'research/research_nano-and-micro.php',
        'label' => 'Nano and micro systems'
    ],

    'cell' => [
        'url'   => SITE_ROOT . 'research/research_cell.php',
        'label' => 'Cell labeling and tracking'
    ],

    'angiogenesis' => [
        'url'   => SITE_ROOT . 'research/research_angiogenesis.php',
        'label' => 'Tumor angiogenesis'
    ],

    'acidosis' => [
        'url'   => SITE_ROOT . 'research/research_acidosis.php',
        'label' => 'Tumor acidosis'
    ],

    'metabolism' => [
        'url'   => SITE_ROOT . 'research/research_metabolism.php',
        'label' => 'Tumor metabolism'
    ],

    'inflammation' => [
        'url'   => SITE_ROOT . 'research/research_inflammation.php',
        'label' => 'Inflammation & Infectious Diseases'
    ],

    'imaging-therapy' => [
        'url'   => SITE_ROOT . 'research/research_imaging_therapy.php',
        'label' => 'Imaging & Therapy'
    ],

    'enzyme' => [
        'url'   => SITE_ROOT . 'research/research_enzyme.php',
        'label' => 'Imaging enzymatic activity'
    ],

    'ffc-relax' => [
        'url'   => SITE_ROOT . 'research/research_FFCrelax.php',
        'label' => 'In vivo FFC Relaxometry'
    ],

    'gd-deposition' => [
        'url'   => SITE_ROOT . 'research/research_Gd_depo.php',
        'label' => 'Gd Deposition'
    ],

    'processing' => [
        'url'   => SITE_ROOT . 'research/research_processing.php',
        'label' => 'Image Processing'
    ],

    'xnat' => [
        'url'   => SITE_ROOT . 'research/research_xnat.php',
        'label' => 'CIM-XNAT'
    ],

    'mri-seq' => [
        'url'   => SITE_ROOT . 'research/research_MRI_seq.php',
        'label' => 'MRI sequences'
    ],

    'ccs-fmri' => [
        'url'   => SITE_ROOT . 'research/research_CCS_fMRI.php',
        'label' => 'CCS fMRI'
    ]
];

?>

<div id="sidebar">
    <div class="padding">
        <ul id="list">
            <?php foreach ($researchNav as $subsection => $item): ?>
                <li<?php echo $activeSubsection === $subsection ? ' class="subsection_link active"' : ' class="subsection_link"' ?>>
                    <a href="<?php echo $item['url'] ?>"><?php echo $item['label'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>