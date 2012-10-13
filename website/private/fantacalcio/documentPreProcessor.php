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
$rosso 			= '#d61d23';
 
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
	$content = str_replace('textColor6', $rosso, $content);
	$content = str_replace('tablelineBorder', $verde_scuro, $content);
	$content = str_replace('color1', $bianco, $content);      
	$content = str_replace('color2', $giallo, $content);      
	$content = str_replace('color3', $verde_chiaro, $content);
	$content = str_replace('color4', $verde_chiaro, $content);
	$content = str_replace('color5', $grigio_medio, $content);
	$content = str_replace('color6', $grigio_medio, $content);
	$content = str_replace('color7', $grigio_scuro, $content);
	$content = str_replace('color8', $grigio_scuro, $content);
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
	$content = str_replace('coppaRowEvenBkgd', $verde_scuro, $content);
	$content = str_replace('coppaRowOddBkgd', $verde_chiaro, $content);
	$content = str_replace('coppaRowEven', $panna, $content);
	$content = str_replace('coppaRowOdd', $verde_scuro, $content);
	$content = str_replace('coppaLeftHover', $panna, $content);
	$content = str_replace('coppaRightHover', $panna, $content);
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
	$content = str_replace('historyColor1', $bianco, $content);
	$content = str_replace('historyColor2', $giallo, $content);
	$content = str_replace('historyColor3', $verde_chiaro, $content);
	$content = str_replace('historyColor4', $verde_chiaro, $content);
	$content = str_replace('historyColor5', $grigio_medio, $content);
	$content = str_replace('historyColor6', $grigio_medio, $content);
	$content = str_replace('historyColor7', $grigio_scuro, $content);
	$content = str_replace('historyColor8', $grigio_scuro, $content);
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
	$content = str_replace('bkgdHiddenBox', $verde_chiaro, $content);
	$content = str_replace('textHiddenBox', $verde_scuro, $content);
	$content = str_replace('titleHiddenBox', $giallo, $content);
	
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
	
	echo $content;
} else {
	header('Location: ../errors/error.php?error=documentNotExists');
}
?>