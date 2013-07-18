<?php
$header = "Content-Type: text/" . $_GET['type'];
header($header);

if ($_GET['document'] == '')
{
	header('Location: ../errors/error.php?error=noDocument');
}

$verde_chiaro 	= '#A9FA05';
$verde_scuro 	= '#006600';
$pistacchio 	= '#9BC200';
$giallo 		= '#EBFF0A';
$giallo_chiaro 	= '#DDFF33';
$grigio_medio 	= '#7F7F7F';
$grigio_scuro 	= '#333333';
$grigio_chiaro 	= '#CCCCCC';
$panna 			= '#FFFF99';
$bianco 		= '#FFFFFF';
$rosa 			= '#FFCCCC';
$nero 			= '#000000';
$rosso 			= '#D61D23';
 
$filename=$_GET['document'];
if(file_exists($filename))
{
	$handle = fopen($filename, 'r');
	$content = fread($handle, filesize($filename));
	
	/*
	 * GENERALI
	 * * * * * * * * */
	$content = str_replace('titleColor', $giallo, $content);
	$content = str_replace('sectionTitleColor', $verde_scuro, $content);
	$content = str_replace('borderColor', $verde_scuro, $content);
	$content = str_replace('bianco', $bianco, $content);
	$content = str_replace('textColor0', $verde_scuro, $content);
	$content = str_replace('textColor1', $verde_chiaro, $content);
	$content = str_replace('textColor2', $grigio_medio, $content);
	$content = str_replace('textColor3', $pistacchio, $content);
	$content = str_replace('textColor4', $panna, $content);
	$content = str_replace('textColor5', $giallo, $content);
	$content = str_replace('ownedColor', $rosso, $content);
	$content = str_replace('notFoundColor', $rosso, $content);
	$content = str_replace('tablelineBorder', $verde_scuro, $content);
	$content = str_replace('color1', $bianco, $content);      
	$content = str_replace('color2', $giallo, $content);      
	$content = str_replace('color3', $verde_chiaro, $content);
	$content = str_replace('color4', $verde_chiaro, $content);
	$content = str_replace('color5', $grigio_medio, $content);
	$content = str_replace('color6', $grigio_medio, $content);
	$content = str_replace('color7', $grigio_scuro, $content);
	$content = str_replace('color8', $grigio_scuro, $content);
	$content = str_replace('htmlBkgdColor', $nero, $content);
	$content = str_replace('bodyBkgdColor', $nero, $content);
	$content = str_replace('sorteggioColor', $rosso, $content);
	$content = str_replace('firstClassColor', $grigio_scuro, $content);
	/* * * * * * * * */
	
	/*
	 * CLASSIFICA A BARRE
	 * * * * * * * * * * * * * */
	$content = str_replace('barraColor0', $verde_scuro, $content);
	$content = str_replace('barraColor1', $verde_chiaro, $content);
	$content = str_replace('barraColor2', $giallo_chiaro, $content);
	$content = str_replace('barraColor3', $panna, $content);
	/* * * * * * * * * * * * * */
	
	/*
	 * AVULSE
	 * * * * * * * */
	$content = str_replace('avulseBkgdColor', $verde_chiaro, $content);
	$content = str_replace('avulseTextColor', $verde_scuro, $content);
	/* * * * * * * */
	
	/*
	 * RISULTATI CAMPIONATO
	 * * * * * * * * * * * */
	$content = str_replace('campRowEvenBkgd', $verde_scuro, $content);
	$content = str_replace('campRowOddBkgd', $verde_chiaro, $content);
	$content = str_replace('campRowEven', $panna, $content);
	$content = str_replace('campRowOdd', $verde_scuro, $content);
	$content = str_replace('linkCampLink', $panna, $content);
	$content = str_replace('linkCampVisited', $verde_chiaro, $content);
	$content = str_replace('linkCampActive', $verde_chiaro, $content);
	$content = str_replace('linkCampHover', $panna, $content);
	$content = str_replace('invLinkCampLink', $verde_scuro, $content);
	$content = str_replace('invLinkCampVisited' , $verde_scuro, $content);
	$content = str_replace('invLinkCampActive', $verde_scuro, $content);
	$content = str_replace('invLinkCampHover', $panna, $content);
	
	/*
	 * COPPA
	 * * * * */
	$content = str_replace('linkCoppaLeftLink', $verde_scuro, $content);
	$content = str_replace('linkCoppaLeftVisited', $verde_scuro, $content);
	$content = str_replace('linkCoppaLeftActive', $verde_scuro, $content);
	$content = str_replace('linkCoppaLeftHover', $panna, $content);
	$content = str_replace('linkCoppaRightLink', $verde_chiaro, $content);
	$content = str_replace('linkCoppaRightVisited', $verde_chiaro, $content);
	$content = str_replace('linkCoppaRightActive', $verde_chiaro, $content);
	$content = str_replace('linkCoppaRightHover', $panna, $content);
	$content = str_replace('bkgdFinali', $giallo_chiaro, $content);
	$content = str_replace('colorFinali', $verde_scuro, $content);
	/* * * * */
	
	/*
	 * MENU
	 * * * * */
	$content = str_replace('menuHoverColor', $verde_chiaro, $content);
	$content = str_replace('menuColor', $panna, $content);
	/* * * * */
	
	/*
	 * SQUADRE
	 * * * * * */
	$content = str_replace('historyBkgdColor1', $panna, $content);
	$content = str_replace('historyBkgdColor2', $giallo, $content);
	$content = str_replace('historyBkgdColor3', $verde_chiaro, $content);
	$content = str_replace('historyBkgdColor4', $verde_chiaro, $content);
	$content = str_replace('historyBkgdColor5', $grigio_medio, $content);
	$content = str_replace('historyBkgdColor6', $grigio_medio, $content);
	$content = str_replace('historyBkgdColor7', $grigio_scuro, $content);
	$content = str_replace('historyBkgdColor8', $grigio_scuro, $content);
	/* * * * * */
	
	/*
	 * BANNER
	 * * * * */
	$content = str_replace('bannerBorderBottom', $panna, $content);
	$content = str_replace('bannerBorderSide', $verde_scuro, $content);
	/* * * * */
	
	$content = str_replace('bkgdColorMenu', $verde_scuro, $content);
	$content = str_replace('bkgdColorNormal', $pistacchio, $content);
	$content = str_replace('bkgdColorDarker', $verde_chiaro, $content);
	$content = str_replace('bkgdColorLigther', $panna, $content);
	
	$content = str_replace('modulesChoiceBkgd', $verde_chiaro, $content);
	$content = str_replace('dragdropBorderColor', $verde_scuro, $content);
	$content = str_replace('chosenModuleBkgdColor', $verde_scuro, $content);

	$content = str_replace('selectedVistaHoverBkgdColor', $panna, $content);
	$content = str_replace('selectedVistaHoverColor', $verde_scuro, $content);
	$content = str_replace('selectedVistaHoverBorderColor', $verde_scuro, $content);
	$content = str_replace('unselectedVistaBkgdColor', $pistacchio, $content);
	$content = str_replace('unselectedVistaColor', $verde_scuro, $content);
	$content = str_replace('unselectedVistaBorderColor', $verde_scuro, $content);
	
	$content = str_replace('plFirstRowColor', $verde_chiaro, $content);
	$content = str_replace('plSecondRowColor', $verde_scuro, $content);
	$content = str_replace('plFirstRowBkg', $verde_scuro, $content);
	$content = str_replace('plSecondRowBkg', $verde_chiaro, $content);
	$content = str_replace('plThirdRowBkg', $verde_chiaro, $content);
	$content = str_replace('plAlternateRowBkgdColor', $pistacchio, $content);
	$content = str_replace('plBorderColor', $verde_chiaro, $content);
	
	$content = str_replace('specialColor', $giallo, $content);
	$content = str_replace('errorColor', $rosa, $content);
	$content = str_replace('okColor', $bianco, $content);
	
	/*
	 * HIDDEN BOXES
	 * * * * * * * */
	$content = str_replace('bkgdHiddenBox', $verde_chiaro, $content);
	$content = str_replace('textHiddenBox', $verde_scuro, $content);
	$content = str_replace('titleHiddenBox', $giallo, $content);
	$content = str_replace('fancyBoxShadowColor', $grigio_scuro, $content);
	/* * * * * * * */
	
	/*
	 * PLAYERS
	 * * * * * * * */
	$content = str_replace('choosePlayersDivBorderColor', $verde_scuro, $content);
	/* * * * * * * */
	
	echo $content;
} else {
	header('Location: ../errors/error.php?error=documentNotExists');
}
?>