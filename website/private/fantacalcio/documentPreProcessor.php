<?php
$header = "Content-Type: text/" . $_GET['type'];
header($header);

if ($_GET['document'] == '')
{
	header('Location: ../errors/error.php?error=noDocument');
}

$celeste 	      = '#99FFCC';
$turchese 		  = '#006666';
$lilla_chiaro 	= '#BEE6E6';

$arancio 		    = '#FF6600';
$giallo_chiaro 	= '#EDDBFF';

$grigio_medio 	= '#7F7F7F';
$grigio_scuro 	= '#333333';
$grigio_chiaro 	= '#CCCCCC';

$panna 			= '#FFFFCC';
$bianco 		= '#FFFFFF';
$nero 			= '#000000';
$rosso 			= '#FF0000';

$colore_1_chiaro = $celeste;
$colore_1_medio  = $lilla_chiaro;
$colore_1_scuro  = $turchese;

$colore_2_chiaro = $giallo_chiaro;
$colore_2_scuro  = $arancio;
 
$filename=$_GET['document'];
if(file_exists($filename))
{
	$handle = fopen($filename, 'r');
	$content = fread($handle, filesize($filename));
	
	/*
	 * GENERALI
	 * * * * * * * * */
	$content = str_replace('titleColor', $colore_2_scuro, $content);
	$content = str_replace('sectionTitleColor', $colore_1_scuro, $content);
	$content = str_replace('borderColor', $colore_1_scuro, $content);
	$content = str_replace('bianco', $bianco, $content);
	$content = str_replace('textColor0', $colore_1_scuro, $content);
	$content = str_replace('textColor1', $colore_1_chiaro, $content);
	$content = str_replace('textColor2', $grigio_medio, $content);
	$content = str_replace('textColor3', $colore_1_medio, $content);
	$content = str_replace('textColor4', $panna, $content);
	$content = str_replace('textColor5', $colore_2_scuro, $content);
	$content = str_replace('ownedColor', $rosso, $content);
	$content = str_replace('notFoundColor', $rosso, $content);
	$content = str_replace('tablelineBorder', $colore_1_scuro, $content);
	$content = str_replace('color1', $bianco, $content);      
	$content = str_replace('color2', $colore_2_scuro, $content);      
	$content = str_replace('color3', $colore_1_chiaro, $content);
	$content = str_replace('color4', $colore_1_chiaro, $content);
	$content = str_replace('color5', $grigio_medio, $content);
	$content = str_replace('color6', $grigio_medio, $content);
	$content = str_replace('color7', $grigio_scuro, $content);
	$content = str_replace('color8', $grigio_scuro, $content);
	$content = str_replace('htmlBkgdColor', $nero, $content);
	$content = str_replace('bodyBkgdColor', $nero, $content);
	$content = str_replace('sorteggioColor', $rosso, $content);
	$content = str_replace('firstClassColor', $grigio_scuro, $content);
	$content = str_replace('notHoverLinkColor', $colore_1_scuro, $content);
	$content = str_replace('hoverLinkColor', $arancio, $content);
	/* * * * * * * * */
	
	/*
	 * CLASSIFICA A BARRE
	 * * * * * * * * * * * * * */
	$content = str_replace('barraColor0', $colore_1_scuro, $content);
	$content = str_replace('barraColor1', $colore_1_chiaro, $content);
	$content = str_replace('barraColor2', $colore_2_chiaro, $content);
	$content = str_replace('barraColor3', $panna, $content);
	/* * * * * * * * * * * * * */
	
	/*
	 * AVULSE
	 * * * * * * * */
	$content = str_replace('avulseBkgdColor', $colore_1_chiaro, $content);
	$content = str_replace('avulseTextColor', $colore_1_scuro, $content);
	/* * * * * * * */
	
	/*
	 * RISULTATI CAMPIONATO
	 * * * * * * * * * * * */
	$content = str_replace('campRowEvenBkgd', $colore_1_scuro, $content);
	$content = str_replace('campRowOddBkgd', $colore_1_chiaro, $content);
	$content = str_replace('campRowEven', $panna, $content);
	$content = str_replace('campRowOdd', $colore_1_scuro, $content);
	$content = str_replace('linkCampLink', $panna, $content);
	$content = str_replace('linkCampVisited', $colore_1_chiaro, $content);
	$content = str_replace('linkCampActive', $colore_1_chiaro, $content);
	$content = str_replace('linkCampHover', $rosso, $content);
	$content = str_replace('invLinkCampLink', $colore_1_scuro, $content);
	$content = str_replace('invLinkCampVisited' , $colore_1_scuro, $content);
	$content = str_replace('invLinkCampActive', $colore_1_scuro, $content);
	$content = str_replace('invLinkCampHover', $rosso, $content);
		
	/*
	 * COPPA
	 * * * * */
	$content = str_replace('linkCoppaLeftLink', $colore_1_scuro, $content);
	$content = str_replace('linkCoppaLeftVisited', $colore_1_scuro, $content);
	$content = str_replace('linkCoppaLeftActive', $colore_1_scuro, $content);
	$content = str_replace('linkCoppaLeftHover', $rosso, $content);
	$content = str_replace('linkCoppaRightLink', $colore_1_chiaro, $content);
	$content = str_replace('linkCoppaRightVisited', $colore_1_chiaro, $content);
	$content = str_replace('linkCoppaRightActive', $colore_1_chiaro, $content);
	$content = str_replace('linkCoppaRightHover', $rosso, $content);
	$content = str_replace('bkgdFinali', $colore_2_chiaro, $content);
	$content = str_replace('colorFinali', $colore_1_scuro, $content);
	/* * * * */
	
	/*
	 * MENU
	 * * * * */
	$content = str_replace('menuHoverColor', $colore_2_scuro, $content);
	$content = str_replace('menuColor', $panna, $content);
	/* * * * */
	
	/*
	 * SQUADRE
	 * * * * * */
	$content = str_replace('historyBkgdColor1', $panna, $content);
	$content = str_replace('historyBkgdColor2', $colore_2_scuro, $content);
	$content = str_replace('historyBkgdColor3', $colore_1_chiaro, $content);
	$content = str_replace('historyBkgdColor4', $colore_1_chiaro, $content);
	$content = str_replace('historyBkgdColor5', $grigio_medio, $content);
	$content = str_replace('historyBkgdColor6', $grigio_medio, $content);
	$content = str_replace('historyBkgdColor7', $grigio_scuro, $content);
	$content = str_replace('historyBkgdColor8', $grigio_scuro, $content);
	$content = str_replace('titolareColor', $colore_1_scuro, $content);
	$content = str_replace('riservaColor', $grigio_scuro, $content);
	$content = str_replace('tribunaColor', $grigio_medio, $content);
	/* * * * * */
	
	/*
	 * BANNER
	 * * * * */
	$content = str_replace('bannerBorderBottom', $panna, $content);
	$content = str_replace('bannerBorderSide', $colore_1_scuro, $content);
	/* * * * */
	
	$content = str_replace('bkgdColorMenu', $colore_1_scuro, $content);
	$content = str_replace('bkgdColorNormal', $colore_1_medio, $content);
	$content = str_replace('bkgdColorDarker', $colore_1_chiaro, $content);
	$content = str_replace('bkgdColorLigther', $panna, $content);
	
	$content = str_replace('modulesChoiceBkgd', $colore_1_chiaro, $content);
	$content = str_replace('dragdropBorderColor', $colore_1_scuro, $content);
	$content = str_replace('chosenModuleBkgdColor', $colore_1_scuro, $content);

	$content = str_replace('selectedVistaHoverBkgdColor', $panna, $content);
	$content = str_replace('selectedVistaHoverColor', $colore_1_scuro, $content);
	$content = str_replace('selectedVistaHoverBorderColor', $colore_1_scuro, $content);
	$content = str_replace('unselectedVistaBkgdColor', $colore_1_medio, $content);
	$content = str_replace('unselectedVistaColor', $colore_1_scuro, $content);
	$content = str_replace('unselectedVistaBorderColor', $colore_1_scuro, $content);
	
	$content = str_replace('plFirstRowColor', $colore_1_chiaro, $content);
	$content = str_replace('plSecondRowColor', $colore_1_scuro, $content);
	$content = str_replace('plFirstRowBkg', $colore_1_scuro, $content);
	$content = str_replace('plSecondRowBkg', $colore_1_chiaro, $content);
	$content = str_replace('plThirdRowBkg', $colore_1_chiaro, $content);
	$content = str_replace('plAlternateRowBkgdColor', $colore_1_medio, $content);
	$content = str_replace('plBorderColor', $colore_1_chiaro, $content);
	
	$content = str_replace('specialColor', $colore_2_scuro, $content);
	//$content = str_replace('okColor', $nero, $content);

	/*
	 * HIDDEN BOXES
	 * * * * * * * */
	$content = str_replace('bkgdHiddenBox', $colore_1_chiaro, $content);
	$content = str_replace('textHiddenBox', $colore_1_scuro, $content);
	$content = str_replace('titleHiddenBox', $colore_2_scuro, $content);
	$content = str_replace('fancyBoxShadowColor', $grigio_scuro, $content);
	/* * * * * * * */
	
	/*
	 * PLAYERS
	 * * * * * * * */
	$content = str_replace('choosePlayersDivBorderColor', $colore_1_scuro, $content);
	/* * * * * * * */
	
	/*
	 * ALBI
	 * * * * * * * */
	$content = str_replace('albiNotHoverLinkColor', $grigio_scuro, $content);
	$content = str_replace('tableAlboMarcatoriLineColor', $colore_1_scuro, $content);
	$content = str_replace('marcatoriHeaderColor', $grigio_scuro, $content);
	$content = str_replace('marcatoreColor', $rosso, $content);
	/*$content = str_replace('tableAlboSquadraColor', $rosso, $content);*/
	/* * * * * * * */
	
	echo $content;
} else {
	header('Location: ../errors/error.php?error=documentNotExists');
}
?>