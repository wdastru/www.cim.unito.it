<?php
      function cognome($a) {
        if (preg_match("/([A-Z]{2,} )([A-Z]{2,} )([A-Z]{2,} ).*/", $a)) { 
          return preg_replace("/([A-Z]{2,} )([A-Z]{2,} )([A-Z]{2,} ).*/", "\\1\\2\\3", $a);
        } else if (preg_match("/([A-Z]{2,} )([A-Z]{2,} ).*/", $a)) {
          return preg_replace("/([A-Z]{2,} )([A-Z]{2,} ).*/", "\\1\\2", $a);
        } else if (preg_match("/([A-Z]{2,} ).*/", $a)) {
          return preg_replace("/([A-Z]{2,} ).*/", "\\1", $a);
        } else {
          return $a;
        }
      }
?>
  
<table id='tableRosa' class="rosa">
	<colgroup span="4">
		<col width="200" />
		<col width="200" />
		<col width="200" />
		<col width="200" />
	</colgroup>
	<tr class="tableline">
		<th>Portieri</th>
		<th>Difensori</th>
		<th>Centrocampisti</th>
		<th>Attaccanti</th>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<?php
	$desc_Ultima = array("Squadra di appartenenza", "Fantavoto", "Voto", "Goal", "Ammonizioni", "Espulsioni", "Autoreti", "Assist");
	$desc_Stats = array("Partite giocate", "Media fantavoto", "Media voto", "Goal totali", "Ammonizioni totali", "Espulsioni totali", "Autoreti totali", "Assist totali");
	$views_Ultima = array("Squadra", "Fantavoto", "Voto", "Goal", "Ammonizioni", "Espulsioni", "Autoreti", "Assist");
	$spanIdUltima = array("Nome", "Squadra", "Ruolo", "Stato", "Boh", "Fantavoto", "Voto", "Goal", "Ammonizioni", "Espulsioni", "Rigori", "Autoreti", "Assist");
	$views_Stats = array("Giocate", "Media_Fantavoto", "Media_Voto", "Goal_Totali", "Ammonizioni_Totali", "Espulsioni_Totali", "Autoreti_Totali", "Assist_Totali");
	$spanIdStats = array("Nome_Stat", "Squadra_Stat", "Ruolo_Stat", "Stato_Stat", "Giocate", "Media_Fantavoto", "Media_Voto", "Goal_Totali", "Ammonizioni_Totali", "Espulsioni_Totali", "Rigori_Totali", "Autoreti_Totali", "Assist_Totali");
	$title_Ultima = array("Sq", "FV", "V", "G", "Amm", "Esp", "AR", "Ass");
	$title_Stats = array("Gio", "FV", "V", "GT", "Amm", "Esp", "AR", "Ass");
	$defaultView = $views_Ultima[1];

	// --> file formazioni piu' recente
	// Grab all files from the desired folder
	$files = glob($relocate_string . "//777//formazioni//" . $_SESSION['nomesquadra'] . "*.*");
	
	$i = 0;
	foreach ($files as $file) {
		$lines = file($file);
		$line = $lines[count($lines)-1];
		$date[$i] = strtotime(str_replace("-", "", $line));
		$i++;
	}
	
	array_multisort($date, SORT_NUMERIC, SORT_DESC, $files);
	
	$path_parts = pathinfo($files[0]);
	$lastFormazBasename = $path_parts['basename'];
	$filename = $relocate_string . "777/formazioni/" . $lastFormazBasename; // file piu' recente
	$filenameTipo = $relocate_string . "777/formazioni/" . $_GET['squadra'] . ".txt"; // formazione tipo
	// <-- file formazioni piu' recente

	//MySingleton::writeToLog('$filename = ' . $filename, $relocate_string . "777/logs/generatoreSquadra.log");

	$ruolo[0] = 3;
	$ruolo[1] = 8;
	$ruolo[2] = 8;
	$ruolo[3] = 6;

	if (isset($_POST['fromModifyPhp'])) // -> da modify.php
	{
		$modulo[0] = $_POST['Modulo'];
		$modulo[1] = 1;
		$modulo[2] = substr($modulo[0], 0, 1);
		$modulo[3] = substr($modulo[0], 4, 1);
		$modulo[4] = substr($modulo[0], 8, 1);
		
		$player[0] = $_POST['player0'];
		$player[1] = $_POST['player1'];
		$player[2] = $_POST['player2'];
		$player[3] = $_POST['player3'];
		$player[4] = $_POST['player4'];
		$player[5] = $_POST['player5'];
		$player[6] = $_POST['player6'];
		$player[7] = $_POST['player7'];
		$player[8] = $_POST['player8'];
		$player[9] = $_POST['player9'];
		$player[10] = $_POST['player10'];
		$player[11] = $_POST['player11'];
		$player[12] = $_POST['player12'];
		$player[13] = $_POST['player13'];
		$player[14] = $_POST['player14'];
		$player[15] = $_POST['player15'];
		$player[16] = $_POST['player16'];
		$player[17] = $_POST['player17'];
		$player[18] = $_POST['player18'];
		$player[19] = $_POST['player19'];
		$player[20] = $_POST['player20'];
		$player[21] = $_POST['player21'];
		$player[22] = $_POST['player22'];
		$player[23] = $_POST['player23'];
		$player[24] = $_POST['player24'];

		$capitale = $_POST['Capitale'];
		$telefono = $_POST['Telefono'];

		/* salva vecchia formazione tipo */
		$path="..//777//formazioni//";
		copy($filenameTipo, $path . $_GET['squadra'] . "_tipo_valida_fino_" . date("Ymd-His",time()) . ".txt");
		/**/

		$handle=fopen($filenameTipo, 'w');
		if ($handle)
		{
			fwrite($handle, $modulo[0] . "\n"); // modulo
			for ($i=1; $i<4; $i++)
			fwrite($handle, $modulo[$i] . " - "); // titolari
			fwrite($handle, $modulo[4] . "\n"); // titolari

			fwrite($handle, "1 - 2 - 2 - 2" . "\n"); // riserve

			$t=0;
			for ($i=0; $i<4; $i++)
			{
				for ($j=0; $j<$ruolo[$i]; $j++)
				{
					$player[$t] = str_replace('\\', '', $player[$t]);
					fwrite($handle, $player[$t] . "\n");
					$t++;
				}
			}

			fwrite($handle, $capitale . "\n");
			fwrite($handle, $telefono . "\n");
			fwrite($handle, date("D d M Y - H:i:s",time()) . "\n");

			fclose($handle);
		} else {
			echo "il file " . $filenameTipo . " non esiste, o non e' scrivibile.";
			exit();
		}
	}

	if(file_exists($filename)) // se il file della squadra esiste lo legge
	{
		if ($handle)
		{
			$handle=fopen($filename, 'r');

			$modulo[0] = trim(fgets($handle));
			$modulo[1] = 1;
			$modulo[2] = substr($modulo[0], 0, 1);
			$modulo[3] = substr($modulo[0], 4, 1);
			$modulo[4] = substr($modulo[0], 8, 1);

			$titolari[0] = trim(fgets($handle));
			$riserve[0] = trim(fgets($handle));

			for ($j=0; $j<4; $j++)
			{
				for ($i=0; $i<$ruolo[$j]; $i++)
				{
					$giocatore[$i][$j] = trim(fgets($handle)); // nome
				}
			}

			$capitale = trim(fgets($handle));
			$telefono = trim(fgets($handle));
			$lastModified = trim(fgets($handle));

			fclose($handle);
		} else {
			echo "il file " . $filename . " non esiste, o non &eacute; scrivibile.";
			exit();
		}

	}
	else // il file squadra non esiste ed e' la prima volta che si accede alla pagina (4 - 4 - 2 di default)
	{
		$modulo[0] = "4 - 4 - 2";
		$modulo[1] = 1;
		$modulo[2] = substr($modulo[0], 0, 1);
		$modulo[3] = substr($modulo[0], 4, 1);
		$modulo[4] = substr($modulo[0], 8, 1);

		$titolari = "4 - 4 - 2";
		$riserve = "2 - 2 - 2";

		for ($j=0;$j<4; $j++)
		{
			for ($i=0;$i<8; $i++)
			$giocatore[$j][$i] = "";
		}
	}

	$letterRuolo[0] = 'P';
	$letterRuolo[1] = 'D';
	$letterRuolo[2] = 'C';
	$letterRuolo[3] = 'A';

	// visualizzazione dei giocatori
	for ($j=0; $j<8; $j++) // giocatori per ruolo
	{
		echo "<tr>";
		for ($i=0; $i<4; $i++) // ruolo
		{
			echo "
			<td class='";

			if($j < $modulo[$i+1])
				echo "titolare";
			else if( $i != 0 && $j >= $modulo[$i+1] && $j < $modulo[$i+1]+2 )
				echo "riserva";
			else if( $i == 0 && $j >= $modulo[$i+1] && $j < $modulo[$i+1]+1 )
				echo "riserva";
			else
				echo "tribuna";

			echo "'>";
      
			if( isset($giocatore[$j][$i]) && $giocatore[$j][$i] != "" )
			{
				echo ucwords(strtolower(cognome($giocatore[$j][$i]))) . " ";
					
				$found = false;
					
				for ($k=0; $k<$allPlayerCount; $k++) // loop su tutti i giocatori del file gazzetta
				{
					if ( $giocatore[$j][$i] == $allPlayers[$k][0] )
					{
						if ( $letterRuolo[$i] != $allPlayers[$k][2] )
						{
							continue; // salta il giocatore se il ruolo non e' giusto (per evitare doppi)
						}
							
						for ($t=0; $t<13; $t++) // 13 e' la seconda dimensione di $allPlayers
						{
							if ($t==5) // fantavoto
								echo "<span class='" . $spanIdUltima[$t] . "'>(" . ucwords(strtolower($allPlayers[$k][$t])) . ")</span>";
							else
								echo "<span class='" . $spanIdUltima[$t] . "' style='display:none'>(" . ucwords(strtolower($allPlayers[$k][$t])) . ")</span>";
						}
						$found = true;
					}
				}
					
				for ($k=0; $k<$allPlayerStatsCount; $k++) // loop su tutti i giocatori del file gazzetta
				{
					if ($giocatore[$j][$i] == $allPlayerStats[$k][0])
					{
						if ( $letterRuolo[$i] != $allPlayerStats[$k][2] )
						continue; // salta il giocatore se il ruolo non e' giusto (per evitare doppi)

						for ($t=0; $t<13; $t++) // 13 e' la seconda dimensione di $allPlayerStats
						{
							echo "<span class='" . $spanIdStats[$t] . "' style='display:none'>(" . ucwords(strtolower($allPlayerStats[$k][$t])) . ")</span>";
						}
						$found = true;
					}
				}
				
				if ($found == false)
				{
					echo "<span class='notFound'>(non trovato!)</span>";
				}
			}
			echo "</td>";
		}
		echo "</tr>";
	}
	?>
</table>
<br />
<br />
<br />
<div>
	Ultima formazione : 
	<p class='ultimaFormazione'>
		<?php echo $lastFormazBasename . " (" . $lastModified . ")"; ?>
		
	</p>
	<br />	
	<table class="rosafooter">
		<tr>
			<td class="testo">Fantamiliardi :</td>
			<td class="capitale"><?php echo $capitale ?></td>
			<td class="testo">Cellulare :</td>
			<td class="telefono"><?php echo $telefono ?></td>
		</tr>
	</table>
	<br /> <br />
	<form id="vista_form" action="<?php $_SESSION['nomefilephp']?>"
		method="post">
		<table id='vista'>
			<tr>
				<td id='vista_head' colspan="9">VISTA : <span id='selectedVista'>Fantavoto</span>
				</td>
			</tr>
			<tr>
				<td class='vistaRowHeader'>Ultima<br />giornata</td>
				<?php
				for ($i=0; $i<count($views_Ultima); $i++)
				{
					echo "<td id='ultima" . $i . "' onmouseover='changeVistaDescription(\"ultima" . $i . "\", \"" . $views_Ultima[$i] . "\")' onmouseout='hideVistaDescription(\"ultima" . $i . "\")'>" . $title_Ultima[$i] . "</td>\n";
				}
				?>
			</tr>
			<tr>
				<td class='vistaRowHeader'>Statistiche</td>
				<?php
				for ($i=0; $i<count($views_Stats); $i++)
				{
					echo "<td id='title" . $i . "' onmouseover='changeVistaDescription(\"title" . $i . "\", \"" . $views_Stats[$i] . "\")' onmouseout='hideVistaDescription(\"title" . $i . "\")'>" . $title_Stats[$i] . "</td>\n";
				}
				?>
			</tr>
		</table>
	</form>
</div>
<br />
<br />
<br />
<table class="buttonModify">
	<tr>
		<td>
			<form method="post" action="../private/modify.php?squadra=<?php echo $_SESSION['nomesquadra']; ?>">
				<div>
					<input class="button" type="submit" value="Modifica rosa" /> 
				</div>
			</form>
		</td>
		<td>
			<form method="post" action="../dragdrop/dragdrop.php?squadra=<?php echo $_SESSION['nomesquadra']; ?>">
				<div>
					<input class="button" type="submit" value="Modifica formazioni" />
				</div>
			</form>
		</td>
		<td>
			<form method="get" action="../private/changePassword.php">
				<div>
					<input class="button" type="submit" value="Cambia password" /> 
					<input type="hidden" name="Squadra" value="<?php echo $_SESSION['nomesquadra']; ?>" />
				</div>
			</form>
		</td>
		<td>
			<form method="post" action="../players.php?squadra=<?php echo $_SESSION['nomesquadra']; ?>">
				<div>
					<input class="button" type="submit" name="modifica" value="Fai un'offerta" /> <input
						type="hidden" name="Squadra"
						value="<?php echo $_SESSION['nomesquadra']; ?>" /> <input
						type="hidden" name="Index" value="1" />
				</div>
			</form>
		</td>
	</tr>
</table>
