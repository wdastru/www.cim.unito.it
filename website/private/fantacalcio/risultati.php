<?php
$relocate_string = "./";
//require_once ($relocate_string . "dBug.php");
require_once ($relocate_string . "logger.php");
include("squadre.inc");
include("calendario.inc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR 2011/12</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css"
		href="documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
	<link rel="stylesheet" type="text/css"
		href="documentPreProcessor.php?document=stylesheet.css&type=css" />
	<script type="text/javascript" src="chromejs/chrome.js"></script>
	<script type="text/javascript" src="version.js"></script>
	<!-- InstanceBeginEditable name="additional css" -->
	<link rel="stylesheet" type="text/css"
		href="documentPreProcessor.php?document=<?php echo $relocate_string; ?>banner.css&type=css" />
	<!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="additional js" -->
	<script type="text/javascript"
		src="documentPreProcessor.php?document=javascript.js&type=javascript"></script>
	<script type="text/javascript"
		src="documentPreProcessor.php?document=<?php echo $relocate_string; ?>banner.js&type=javascript"></script>
	<!-- InstanceEndEditable -->
	
	<!-- jQuery for hiddenBox START -->
	<!-- Add jQuery library -->
	<script type="text/javascript" src="<?php echo $relocate_string; ?>hiddenBoxes-jquery/lib/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo $relocate_string; ?>hiddenBoxes-jquery/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo $relocate_string; ?>hiddenBoxes-jquery/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $relocate_string; ?>hiddenBoxes-jquery/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo $relocate_string; ?>hiddenBoxes-jquery/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="<?php echo $relocate_string; ?>hiddenBoxes-jquery/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo $relocate_string; ?>hiddenBoxes-jquery/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="<?php echo $relocate_string; ?>hiddenBoxes-jquery/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo $relocate_string; ?>hiddenBoxes-jquery/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<!-- jQuery for hiddenBox END -->
	
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	
		body {
			max-width: 1000px;
			margin: 0 auto;
		}
	</style>

</head>
<!-- <body onresize="Count();"> -->
<body onload="startBanner(1)">

<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
<?php require $relocate_string . 'include/banner.inc.php'; ?>

	<!-- InstanceBeginEditable name="hiddenBox" -->
	<div id='hiddenBox' style='width:600px; display: none; visibility: hidden;'>
		<br />
		<div id='hiddenBoxTitleBox'>
			<span id='squadra1'>squadra1</span><span id='hiddenBoxHyphen'> - </span><span
				id='squadra2'>squadra2</span>
		</div>
		<br /> <br />
		<form method='post' id='formRisultati' action=''>
			<fieldset class='noBorder'>
				<input class='button' type='button' id='sendButton' value='Send'
					onclick='validate( "campionato" )' /> <input id='closeBtn' class='button' type='button'
					value='Close this box!' onclick='hideBox();' /> <input class='button'
					type='button' value='Reset' onclick="resetFields();" /> <br /> <br />
				Goal Squadra A : <input type='text' name='goalA' value=''
					onkeyup="goals();" onmousedown="goals();" /> <br /> <br /> Goal
				Squadra B : <input type='text' name='goalB' value=''
					onkeyup="goals();" onmousedown="goals();" /> <br /> <br /> Punti
				Squadra A : <input type='text' name='puntiA' value='' /> <br /> <br />
				Punti Squadra B : <input type='text' name='puntiB' value='' /> <br />
				<br /> <br /> Marcatori:<br /> <br /> <input class='button' type='button'
					style="display: inline" value='Aggiungi un marcatore'
					onclick='manualAddField();' />&nbsp;<input class='button' type='button'
					style="display: inline" value='Togli un marcatore'
					onclick='manualDeleteField();' /> <br /> <br />
				<?php
					for($i=0; $i<20; $i++)
					echo "<div class='goals'><input type='text' name='goals" . $i . "' value=''/></div>";
				?>
				<input type='hidden' name='Id' value='' />
			</fieldset>
		</form>
	</div>
	<!-- InstanceEndEditable -->
	<div id="main">
		<!-- InstanceBeginEditable name="body" -->
		<h1 class="title">CALENDARIO</h1>
		
		<?php

		$datiCampionatoFile = $relocate_string . '777/datiCampionato.txt';
		if (!file_exists($datiCampionatoFile)) {
			require $relocate_string . 'createDatiCampionato.php';
		}

		require $relocate_string . 'readDatiCampionato.php';

		for($giornataIdx = 0; $giornataIdx < 7; $giornataIdx++) // giornata
		{
			echo "<br />";
			echo "<h2 class=\"giornata\">" . $giornata[$giornataIdx] . "</h2>\n";
			echo "<div class=\"center\">\n";
			echo "<table class=\"risultati\">\n";

			for($partitaIdx=0; $partitaIdx<4; $partitaIdx++) // partita
			{
				if ($odd = $partitaIdx % 2){
					echo"<tr class=\"odd\">";
					for($i=0; $i<2; $i++) // in casa - fuori casa
					echo "<td class=\"Squadra\"><a href='squadre/squadra.php?squadra=" . $shortName[$super[0][$giornataIdx][$partitaIdx][$i]] . "'>" . $super[0][$giornataIdx][$partitaIdx][$i] . "</a></td>";
				} else {
					echo"<tr class=\"even\">";
					for($i=0; $i<2; $i++) // in casa - fuori casa
					echo "<td class=\"Squadra\"><a href='squadre/squadra.php?squadra=" . $shortName[$super[0][$giornataIdx][$partitaIdx][$i]] . "'>" . $super[0][$giornataIdx][$partitaIdx][$i] . "</a></td>";
						
				}
				echo "\n";

				for($ARIdx=0; $ARIdx<4; $ARIdx++) //AR
				{
					echo "<td href='#hiddenBox' class='Dati fancybox' id='a" . $partitaIdx . $giornataIdx . $ARIdx . "' onmousedown='showBoxCampionato(\"a" . $partitaIdx . $giornataIdx . $ARIdx . "\", event);'>";

					echo "    <div class='RisultatiCampionato'>";
					if ($super[1][$giornataIdx][$partitaIdx][$ARIdx][0] == "-") {
						echo "";
					} else {
						echo $super[1][$giornataIdx][$partitaIdx][$ARIdx][0];
					}
					echo " - ";
					if ($super[1][$giornataIdx][$partitaIdx][$ARIdx][1] == "-") {
						echo "";
					} else {
						echo $super[1][$giornataIdx][$partitaIdx][$ARIdx][1];
					}
					echo "</div>";

					echo "    <div class='PunteggiCampionato'>";
					if ($super[2][$giornataIdx][$partitaIdx][$ARIdx][0] == "-") {
						echo "";
					} else {
						echo $super[2][$giornataIdx][$partitaIdx][$ARIdx][0];
					}
					echo " - ";
					if ($super[2][$giornataIdx][$partitaIdx][$ARIdx][1] == "-") {
						echo "";
					} else {
						echo $super[2][$giornataIdx][$partitaIdx][$ARIdx][1];
					}
					echo "</div>";

					if ( count($super[3][$giornataIdx][$partitaIdx][$ARIdx]) > 0 )
					{
						for($i=0; $i<count($super[3][$giornataIdx][$partitaIdx][$ARIdx]); $i++) {
							echo "  <div class='hidden'>";
							if ($super[3][$giornataIdx][$partitaIdx][$ARIdx][$i] == "-") {
								echo "";
							} else {
								echo $super[3][$giornataIdx][$partitaIdx][$ARIdx][$i];
							}
							echo "</div>";
						}
					}

					for($i=0; $i<2; $i++)
					echo "  <span class='hidden'>" . $super[0][$giornataIdx][$partitaIdx][$i] . "</span>";
					echo "</td>\n";
				}
				echo"</tr>\n";
			}
			echo "</table>";
			echo "</div>\n";
		}

		$_POST['Id']='';
		$_POST['goalA']='';
		$_POST['goalB']='';
		$_POST['puntiA']='';
		$_POST['puntiB']='';
		$_POST['goals1']='';
		$_POST['goals2']='';
		$_POST['goals3']='';
		$_POST['goals4']='';
		$_POST['goals5']='';
		$_POST['goals6']='';
		$_POST['goals7']='';
		$_POST['goals8']='';
		$_POST['goals9']='';
		$_POST['goals10']='';
		$_POST['goals11']='';
		$_POST['goals12']='';
		$_POST['goals13']='';
		$_POST['goals14']='';
		$_POST['goals15']='';
		$_POST['goals16']='';
		$_POST['goals17']='';
		$_POST['goals18']='';
		$_POST['goals19']='';
		$_POST['goals20']='';

		$Id='';
		$goalA='';
		$goalB='';
		$puntiA='';
		$puntiB='';
		$goals[0]='';
		$goals[1]='';
		$goals[2]='';
		$goals[3]='';
		$goals[4]='';
		$goals[5]='';
		$goals[6]='';
		$goals[7]='';
		$goals[8]='';
		$goals[9]='';
		$goals[10]='';
		$goals[11]='';
		$goals[12]='';
		$goals[13]='';
		$goals[14]='';
		$goals[15]='';
		$goals[16]='';
		$goals[17]='';
		$goals[18]='';
		$goals[19]='';
		?>
		<!-- InstanceEndEditable -->
	</div>
	
	
	
	

	<?php include $relocate_string . 'include/footer.inc.php'?>
	<!-- dragHelper for dragdrop.php -->
	<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
</body>
<!-- InstanceEnd -->
</html>
