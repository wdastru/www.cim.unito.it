<?php
$header = "Content-Type: text/" . $_GET['type'];
header($header);

if ($_GET['document'] == '')
{
	header('Location: ../errors/error.php?error=noDocument');
}

$color_1 = '#FAA905'; // arancio
$color_2 = '#990000'; // rosso mattone
$color_3 = '#F4EFB0'; // crema
$color_4 = '#FFEB0A'; // giallo
$color_5 = '#7F7F7F'; // grigio
$color_6 = '#333333'; // grigio scuro
$color_7 = '#CCCCCC'; // grigio chiaro
 
$filename=$_GET['document'];
if(file_exists($filename))
{
	$handle = fopen($filename, 'r');
	$content = fread($handle, filesize($filename));
	
	$content = str_replace('titleColor', $color_1, $content);
	$content = str_replace('menuColor', $color_1, $content);
	$content = str_replace('sectionTitleColor', $color_2, $content);
	$content = str_replace('borderColor', $color_2, $content);
	
	$content = str_replace('textColor0', $color_2, $content);
	$content = str_replace('textColor1', $color_1, $content);
	$content = str_replace('textColor2', $color_5, $content);
	$content = str_replace('textColor3', $color_3, $content);
	$content = str_replace('textColor4', '#FFFFFF', $content);

	$content = str_replace('bkgdColorMenu', $color_2, $content);
	$content = str_replace('bkgdColorNormal', $color_3, $content);
	$content = str_replace('bkgdColorDarker', $color_1, $content);
	$content = str_replace('bkgdColorLigther', '#EEEEEE', $content);
	$content = str_replace('bkgdHiddenBox', $color_1, $content);
	$content = str_replace('textHiddenBox', $color_2, $content);
	$content = str_replace('titleHiddenBox', $color_4, $content);
	
	$content = str_replace('modulesChoiceBkgd', $color_1, $content);
	$content = str_replace('dragdropBorderColor', $color_2, $content);
	$content = str_replace('chosenModuleBkgdColor', $color_2, $content);

	$content = str_replace('white', '#FFFFFF', $content);
	
	$content = str_replace('menuHoverColor', '#F4EFB0	', $content);
	$content = str_replace('selectedVistaHoverBkgdColor', $color_5, $content);
	$content = str_replace('selectedVistaHoverColor', $color_1, $content);
	$content = str_replace('selectedVistaHoverBorderColor', $color_2, $content);
	$content = str_replace('unselectedVistaBkgdColor', $color_3, $content);
	$content = str_replace('unselectedVistaColor', $color_2, $content);
	$content = str_replace('unselectedVistaBorderColor', $color_2, $content);
	$content = str_replace('vistaBorderColor', $color_2, $content);
	
	$content = str_replace('plFirstRowColor', $color_1, $content);
	$content = str_replace('plSecondRowColor', $color_2, $content);
	$content = str_replace('plFirstRowBkg', $color_2, $content);
	$content = str_replace('plSecondRowBkg', $color_1, $content);
	$content = str_replace('plThirdRowBkg', $color_1, $content);
	$content = str_replace('plAlternateRowBkgdColor', $color_3, $content);
	$content = str_replace('plBorderColor', $color_1, $content);
	
		
	$content = str_replace('barraColor0', $color_2, $content);
	$content = str_replace('barraColor1', $color_1, $content);
	$content = str_replace('barraColor2', $color_4, $content);
	$content = str_replace('barraColor3', '#FFFFFF', $content);
	
	$content = str_replace('Color1', '#FFFFFF', $content);
	$content = str_replace('Color2', $color_4, $content);
	$content = str_replace('Color3', $color_1, $content);
	$content = str_replace('Color4', $color_1, $content);
	$content = str_replace('Color5', $color_5, $content);
	$content = str_replace('Color6', $color_5, $content);
	$content = str_replace('Color7', $color_6, $content);
	$content = str_replace('Color8', $color_6, $content);
	
	$content = str_replace('specialColor', '#FFFF00', $content);
	$content = str_replace('errorColor', '#FFCCCC', $content);
	$content = str_replace('okColor', '#FFFFFF', $content);

	echo $content;
} else {
	header('Location: ../errors/error.php?error=documentNotExists');
}
?>