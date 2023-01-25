<?php
//include "../dBug.php";
session_start();

//print_r($_POST);

$relocate_string = "../";
require_once $relocate_string . 'logger.php';

$numeroToAdjective[1]='primo';
$numeroToAdjective[2]='secondo';
$numeroToAdjective[3]='terzo';
$numeroToAdjective[4]='quarto';
$numeroToAdjective[5]='quinto';
$numeroToAdjective[6]='sesto';
$numeroToAdjective[7]='settimo';
$numeroToAdjective[8]='ottavo';

require $relocate_string . "777/setupSquadre.inc.php";

$_SESSION['nomefiletxt']=$_GET['squadra'] . ".txt";
$_SESSION['nomesquadra']=$_GET['squadra'] . "";
$_SESSION['nomefilephp']=$_GET['squadra'] . ".php";
if (! file_exists ( $relocate_string . '777/gazFiles.inc.php' ) || 
	! file_exists ( $relocate_string . '777/filesGazzetta/listaGazFiles.txt' )) {
		
	require $relocate_string . 'include/createGazFilesAndList.inc.php';
}

require $relocate_string . "777/gazFiles.inc.php";
require $relocate_string . "squadre.inc";

$filenameStats="..//777//statistics.txt";
require $relocate_string . "statisticsAllPlayerRead.php"; // legge statistics.txt; popola $allPlayerStats
require $relocate_string . "lastGazFileAllPlayerRead.php"; // legge l'ultimo file gazzetta; popola $allPlayers

if ( isset($_POST['changeTeam']) ) // modifica rosa da modify.php
{
	if ($_POST['changeTeam']=="true")
	{
		if (md5($_POST['Password']) != $ADMIN[$_GET['squadra']] )
		header('Location: ../errors/error.php?error=wrongPass&returnFromError=../private/modify.php?squadra=' . $_GET['squadra']);
	}
}

if ( isset($_POST['changePassword']) )
{
	if ($_POST['changePassword']=="true")
	{
		require($relocate_string . "private/checkPassword.php");
		$_POST['changePassword']="false";
	}
}

$stagione = array();

$fileSquadreXml = $_GET['squadra'] . ".xml";
if(file_exists($fileSquadreXml))
{
    
    $xmlDoc = new DOMDocument();
    $xmlDoc->load($fileSquadreXml);
    //print $xmlDoc->saveXML();
    
    $x = $xmlDoc->documentElement; // root del documento <squadre>
    
    //echo "#<br/>";
    //print_r($x->childNodes->length);
    //echo "<br/>#<br/>";
    
    $nodes_1 = $x->childNodes;
    for ($i=0; $i<$nodes_1->length; $i++) { // primo livello
        
        $node_1 = $nodes_1->item($i);
        if ($node_1->nodeName != "#text")
        {
            /*
             * contiene :
             * <squadra>
             *
             */
            
            $nodes_2 = $node_1->childNodes;
            for ($j=0; $j<$nodes_2->length; $j++) { // secondo livello
                
                $node_2 = $nodes_2->item($j);
                if ($node_2->nodeName != "#text")
                {
                    /*
                     * contiene :
                     * <nome>
                     * <img>
                     * <storico>
                     *
                     */
                    
                    if ($node_2->nodeName == 'img') {
                        $imgSquadra = $node_2->nodeValue;
                    }
                    
                    $nodes_3 = $node_2->childNodes;
                    for ($k=0; $k<$nodes_3->length; $k++) { // terzo livello
                        
                        $node_3 = $nodes_3->item($k);
                        if ($node_3->nodeName != "#text")
                        {
                            /*
                             * contiene :
                             * <stagione>
                             *
                             */
                            
                            $tmpArray = array();
                            /*
                             * [0] => anno
                             * [1] => posizione
                             * [2] => vecchio_nome
                             * [3] => champions
                             * [4] => coppa
                             * [5] => supercoppa
                             * 
                             */
                            
                            if ($node_3->nodeName == 'stagione') {
                                array_push($tmpArray, $node_3->attributes->item(0)->value);
                            }
                            
                            //print_r($tmpArray);
                        
                            $nodes_4 = $node_3->childNodes;
                            for ($t=0; $t<$nodes_4->length; $t++) { // quarto livello
                                
                                $node_4 = $nodes_4->item($t);
                                if ($node_4->nodeName != "#text")
                                {
                                    /*
                                     * contiene :
                                     * <posizione>
                                     * <coppa>
                                     * <supercoppa>
                                     * <champions>
                                     * <vecchio_nome>
                                     * 
                                     */
                                    
                                    if ($node_4->nodeName == 'posizione') {
                                        array_push($tmpArray, $node_4->nodeValue);
                                    }
                                    
                                    if ($node_4->nodeName == 'vecchio_nome') {
                                        array_push($tmpArray, $node_4->nodeValue);
                                    }
                                    
                                    if ($node_4->nodeName == 'champions') {
                                        array_push($tmpArray, $node_4->nodeValue);
                                    }
                                    
                                    if ($node_4->nodeName == 'coppa') {
                                        array_push($tmpArray, $node_4->nodeValue);
                                    }
                                    
                                    if ($node_4->nodeName == 'supercoppa') {
                                        array_push($tmpArray, $node_4->nodeValue);
                                    }
                                }
                            }
                            
                            array_push($stagione, $tmpArray);
                        }
                    }
                }
            }
        }
    }
	
} else {
	echo "Il file " . $fileSquadreXml . " non esiste!";
	exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css"
		href="../documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
	<link rel="stylesheet" type="text/css"
		href="../documentPreProcessor.php?document=stylesheet.css&type=css" />
	<script type="text/javascript" src="../chromejs/chrome.js"></script>
	<script type="text/javascript" src="../version.js"></script>
	<!-- InstanceBeginEditable name="additional css" -->
	<!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="additional js" -->
	<script type="text/javascript"
		src="../documentPreProcessor.php?document=javascript.js&type=javascript"></script>
	<!-- InstanceEndEditable -->
	
	<!-- InstanceBeginEditable name="jQuery" -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>	

</head>
<!-- <body onresize="Count();"> -->
<body>
<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
	<!-- InstanceBeginEditable name="hiddenBox" -->
	<!-- InstanceEndEditable -->
	<div id="main">
		<!-- InstanceBeginEditable name="body" -->
		<table class="mainSquadre">
			<colgroup span="3">
				<col width="270" />
				<col width="270" />
				<col width="270" />
			</colgroup>
			<tr>
				<td class="Nome"><?php echo $longName[$_GET['squadra']]; ?></td>
				<td class="Immagine"><img
					src="<?php echo $relocate_string; ?>figure/<?php echo $imgSquadra; ?>"
					height="150" alt="<?php echo $imgSquadra; ?>" /></td>
				<td class="Storico"><table>
						<tr>
							<td>
							
<?php
    foreach ($stagione as $content) {
        
        /*
         * $content e' array che pu� contenere fino a 6 campi:
         * => anno
         * => posizione
         * => vecchio_nome
         * => champions
         * => coppa
         * => supercoppa
         * 
         * in realt� 
         * => vecchio_nome
         * => champions
         * => coppa
         * => supercoppa         * 
         *
         * possono essere mancanti anno e posizione ci sono sempre 
         * ed in quell'ordine; gli altri si o no e in ordine sparso.
         * 
         */
        
        foreach ($content as $item) {
            if (preg_match('/^[0-9]{4}\/[0-9]{2}$/', $item, $match)) {
                echo "<div class='stagione'>
                <span class='stagione'>" . $match[0] . " : </span>";
            } else if (preg_match('/^[1-8]{1}$/', $item, $match)) {
                echo "<span class='" . $numeroToAdjective[(int) $match[0]] . 
                "'>&nbsp;" . $match[0] . "&deg;&nbsp;</span>";           
            } else if (preg_match('/^.{3,}$/', $item, $match)) {
                echo "<span class='oldName'>&nbsp" . $match[0] . "&nbsp;</span>";
            } else if (preg_match('/^C$/', $item, $match)) {
                echo "<span class='coppe'>&nbsp" . $match[0] . "&nbsp;</span>";
            } else if (preg_match('/^SC$/', $item, $match)) {
                echo "<span class='coppe'>&nbsp" . $match[0] . "&nbsp;</span>";
            } else if (preg_match('/^Ch$/', $item, $match)) {
                echo "<span class='coppe'>&nbsp" . $match[0] . "&nbsp;</span>";
            }
        }
        
        echo "</div>";
    }
                                    
?>

</td>
						</tr>
					</table></td>
			</tr>
		</table>
		<br>
		<?php 
			require $relocate_string . 'playersInTeamsReader.php'; // definito giocatore[squadra:8][index:25]
			require $relocate_string . 'playersRepeated.php'; // controlla la presenza di giocatori ripetuti in pi� squadre 
		?>
		<br>
	<?php include($relocate_string . "squadre/generatoreSquadra.php"); ?>
		<!-- InstanceEndEditable -->
	</div>
	<?php include $relocate_string . "include/footer.inc.php"?>
	<!-- dragHelper for dragdrop.php -->
	<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
</body>
<!-- InstanceEnd -->
</html>
