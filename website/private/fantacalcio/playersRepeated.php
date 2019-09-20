
<script type="text/javascript">
    function blink_text() {
        $('.blink').fadeOut(250);
        $('.blink').fadeIn(250);
    }
    setInterval(blink_text, 1000);
</script>

<?php
/* Creazione liste giocatori per ogni squadra */

require_once  $relocate_string . 'squadre.inc'; // definito shortName[]

$playersRepeated=0;
$playersFound="";

for ($j=0; $j<8; $j++)
{
	//echo "A-" . $j . "-" . $giocatore[$j][25]."-A</br>";
	
	for ($i=0; $i<25; $i++)
	{
		//echo "A-" . $i . "-" . $giocatore[$j][$i]."-A</br>";
			
		for ($k=$j; $k<8; $k++)
		{
			//echo "B-" . $k . "-" . $giocatore[$k][25]."-B</br>";
			
			$start = $k==$j ? $i+1 : 0;
			for ($m=$start; $m<25; $m++)
			{
				//echo "B-" . $m . "-" . $giocatore[$k][$m]."-B</br>";
				
			    if ($giocatore[$j][$i] != '' && $giocatore[$j][$i] == $giocatore[$k][$m]) { // il giocatore non deve essere nullo
				    if ( $giocatore[$j][25] == $shortName[$idxSquadra[$_GET['squadra']]] || // il giocatore deve essere della squadra 
				         $giocatore[$k][25] == $shortName[$idxSquadra[$_GET['squadra']]] ) {
				        $playersRepeated=1;
				        $playersFound .= "<span>" . $giocatore[$j][$i]. " - " . $giocatore[$j][25] . " / " . $giocatore[$k][25] . "</span><br/>";
				    }
				}
			}
		}
	}
}

if ($playersRepeated) {
    echo "<div id='hiddenBox' style='width:400px; margin:auto;'>";
    echo "<span class='ripetuto blink'>ATTENZIONE presenza di giocatori in più squadre !!!</span><br/><br/>";
    echo $playersFound;
    echo "</div></br>";
    $playersRepeated=0;
}

/**/
?>
