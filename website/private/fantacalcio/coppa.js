// JavaScript Document
calls = 0;
classifiche_avulse = Array(0);

/*******************************************************************************
 * squadra = Array[8][12]
 * 
 * Contiene i dati di ogni squadra per elaborare la classifica.
 * 
 * squadra[i][0] -> nome 
 * squadra[i][1] -> punti 
 * squadra[i][3] -> vinte
 * squadra[i][4] -> pareggiate 
 * squadra[i][5] -> perse 
 * squadra[i][6] -> fatti
 * squadra[i][7] -> subiti 
 * squadra[i][8] -> diff reti 
 * squadra[i][9] -> punti fatti 
 * squadra[i][10] -> diff punti 
 * squadra[i][11] -> short name
 * 
 ******************************************************************************/

squadra = new Array(8);
for (i = 0; i < 8; i++) {
	squadra[i] = new Array(11);
	for (j = 0; j < 12; j++) {
		squadra[i][j] = 0;
	}
}

/* 
 * l'ordine non è importante
 * per fase a gruppi
 * * * * * * * * * * * * * * */
// gruppo A
squadra[0][0] = 'EPOrediese';
squadra[1][0] = 'Atletico? No Grazie!';        
squadra[2][0] = 'Dinamo Ciofeca';     
squadra[3][0] = 'L.A. Krakatoa';
// gruppo B
squadra[4][0] = 'Rapid Bradip';
squadra[5][0] = 'Lokomotiv Peccorino';
squadra[6][0] = 'Real Mentescars';
squadra[7][0] = 'Fedora'; 	   

// gruppo A
squadra[0][11] = 'eporediese';
squadra[1][11] = 'atletico';
squadra[2][11] = 'ciofeca';
squadra[3][11] = 'krakatoa';
// gruppo B
squadra[4][11] = 'bradipo';
squadra[5][11] = 'lokomotiv';
squadra[6][11] = 'real';
squadra[7][11] = 'fedora';

function readDatiCoppa() {
	datiCoppa = new Array(12); // inizializzazione
	for (i = 0; i < 12; i++)
		datiCoppa[i] = new Array(6);

	// --> start read data
	for (i = 0; i < 12; i++) // partite della fase a gruppi
	{
		var nome_C = datiCoppa[i][0] = document.getElementById(
				'gruppi' + i + '_C_nome').getElementsByTagName('a').item(0).innerHTML;
		var nome_F = datiCoppa[i][1] = document.getElementById(
				'gruppi' + i + '_F_nome').getElementsByTagName('a').item(0).innerHTML;
		var goal_C = datiCoppa[i][2] = parseInt(document.getElementById(
				'gruppi' + i + '_C_dati').getElementsByTagName('div').item(0).innerHTML
				.replace(/\&nbsp;/, "").replace(/\&nbsp;/, "").replace(/-/, ""));
		var goal_F = datiCoppa[i][3] = parseInt(document.getElementById(
				'gruppi' + i + '_F_dati').getElementsByTagName('div').item(0).innerHTML
				.replace(/\&nbsp;/, "").replace(/\&nbsp;/, "").replace(/-/, ""));
		var punteggio_C = datiCoppa[i][4] = parseFloat(document.getElementById(
				'gruppi' + i + '_C_dati').getElementsByTagName('div').item(1).innerHTML
				.replace(/\&nbsp;/, "").replace(/\&nbsp;/, "").replace(/-/, ""));
		var punteggio_F = datiCoppa[i][5] = parseFloat(document.getElementById(
				'gruppi' + i + '_F_dati').getElementsByTagName('div').item(1).innerHTML
				.replace(/\&nbsp;/, "").replace(/\&nbsp;/, "").replace(/-/, ""));

		for ( var j = 2; j < 6; j++)
			// i dati numerici non possono essere vuoti
			datiCoppa[i][j] = (datiCoppa[i][j] == '') ? 0 : datiCoppa[i][j];
	}
	// <-- end read data
}

function switchSquadre(squadra, a, b) {
	for ( var k = 0; k < 12; k++) {
		var tmp = squadra[a][k];
		squadra[a][k] = squadra[b][k];
		squadra[b][k] = tmp;
	}
}

function updateSquadra() {
	for ( var i = 0; i < 12; i++) {
		if (datiCoppa[i][2] > datiCoppa[i][3]) // vittoria squadra in casa
		{
			for (k = 0; k < 8; k++) // loop sulle squadre
			{
				if (datiCoppa[i][0] == squadra[k][0]) {
					squadra[k][1] += 3; // punti
					squadra[k][2] += 1; // partite giocate
					squadra[k][3] += 1; // vinte
					squadra[k][6] += datiCoppa[i][2]; // goal fatti
					squadra[k][7] += datiCoppa[i][3]; // goal subiti
					squadra[k][8] += (datiCoppa[i][2] - datiCoppa[i][3]); // differenza
					// reti
					squadra[k][9] += datiCoppa[i][4]; // punti fatti
					squadra[k][10] += (datiCoppa[i][4] - datiCoppa[i][5]); // differenza
					// punti
				} else if (datiCoppa[i][1] == squadra[k][0]) {
					squadra[k][2] += 1; // punti
					squadra[k][5] += 1; // partite perse
					squadra[k][6] += datiCoppa[i][3]; // goal fatti
					squadra[k][7] += datiCoppa[i][2]; // goal subiti
					squadra[k][8] += (datiCoppa[i][3] - datiCoppa[i][2]); // differenza
					// reti
					squadra[k][9] += datiCoppa[i][5]; // punti fatti
					squadra[k][10] += (datiCoppa[i][5] - datiCoppa[i][4]); // differenza
					// punti
				}
			}
		} else if (datiCoppa[i][3] > datiCoppa[i][2]) // vittoria squadra
		// fuori casa
		{
			for (k = 0; k < 8; k++) {
				if (squadra[k][0] == datiCoppa[i][0]) {
					squadra[k][2] += 1;
					squadra[k][5] += 1;
					squadra[k][6] += datiCoppa[i][2];
					squadra[k][7] += datiCoppa[i][3];
					squadra[k][8] += (datiCoppa[i][2] - datiCoppa[i][3]);
					squadra[k][9] += datiCoppa[i][4];
					squadra[k][10] += (datiCoppa[i][4] - datiCoppa[i][5]);
				} else if (squadra[k][0] == datiCoppa[i][1]) {
					squadra[k][1] += 3;
					squadra[k][2] += 1;
					squadra[k][3] += 1;
					squadra[k][6] += datiCoppa[i][3];
					squadra[k][7] += datiCoppa[i][2];
					squadra[k][8] += (datiCoppa[i][3] - datiCoppa[i][2]);
					squadra[k][9] += datiCoppa[i][5];
					squadra[k][10] += (datiCoppa[i][5] - datiCoppa[i][4]);
				}
			}
		} else if (datiCoppa[i][2] == datiCoppa[i][3]) // pareggio
		{
			for (k = 0; k < 8; k++) {
				if (squadra[k][0] == datiCoppa[i][0]) {
					squadra[k][1] += 1;
					squadra[k][2] += 1;
					squadra[k][4] += 1;
					squadra[k][6] += datiCoppa[i][2];
					squadra[k][7] += datiCoppa[i][3];
					squadra[k][9] += datiCoppa[i][4];
					squadra[k][10] += (datiCoppa[i][4] - datiCoppa[i][5]);
				} else if (squadra[k][0] == datiCoppa[i][1]) {
					squadra[k][1] += 1;
					squadra[k][2] += 1;
					squadra[k][4] += 1;
					squadra[k][6] += datiCoppa[i][3];
					squadra[k][7] += datiCoppa[i][2];
					squadra[k][9] += datiCoppa[i][5];
					squadra[k][10] += (datiCoppa[i][5] - datiCoppa[i][4]);
				}
			}
		} else // nessun risultato inserito
		{
			;
		}
	}
}

function arrangeTeams() {
	readDatiCoppa(); // legge tutte le partite della fase a gironi
	updateSquadra(); // aggiorna i dati per ogni squadra

	if (document.getElementById) {
		// --> sort x punti
		var xx = 3;
		for ( var j = 0; j < xx; j++) {
			// --> gruppo A
			for ( var i = 0; i < xx - j; i++) {
				if (squadra[i][1] < squadra[i + 1][1]) // punti
					switchSquadre(squadra, i, i + 1);
			}

			// --> gruppo B
			for ( var i = 4; i < xx - j + 4; i++) {
				if (squadra[i][1] < squadra[i + 1][1]) // punti
					switchSquadre(squadra, i, i + 1);
			}
		}
		// <-- sort x punti

		// --> ricerca gruppi per classifica avulsa
		var containers = Array(8);
		for ( var i = 0; i < containers.length; i++)
			containers[i] = Array(0);

		var j = 0;
		containers[j][0] = "0"; // la prima squadra del gruppo A sara'
		// sicuramente nel primo contenitore

		for ( var i = 0; i < 3; i++) {
			if ((squadra[i][1] == squadra[i + 1][1]))
				containers[j].push(i + 1);
			else {
				j++;
				containers[j].push(i + 1);
			}
		}

		j++;
		containers[j][0] = "4"; // la prima squadra del gruppo B sara' nel primo
		// contenitore libero

		for ( var i = 4; i < 7; i++) {
			if ((squadra[i][1] == squadra[i + 1][1]))
				containers[j].push(i + 1);
			else {
				j++;
				containers[j].push(i + 1);
			}
		}
		// <-- ricerca gruppi per classifica avulsa
		
		// --> risoluzione gruppi
		for ( var i = 0; i < containers.length; i++) {
			if (containers[i].length > 1)
				squadra = classifica(squadra, containers[i]);
		}
		// <-- risoluzione gruppi

		// --> aggiornamento classifica
		for (i = 0; i < 4; i++) {
			var Id = 'posizioneA' + i;
			var td = document.getElementById(Id).getElementsByTagName('td');

			/*
			 * nome squadra e link
			 */
			td.item(0).innerHTML = "<a href='squadre/squadra.php?squadra="
					+ squadra[i][11] + "'>" + squadra[i][0] + "</a>";

			for (j = 1; j < td.length; j++) {
				td.item(j).innerHTML = squadra[i][j];
			}

			var Id = 'posizioneB' + i;
			var td = document.getElementById(Id).getElementsByTagName('td');

			/*
			 * nome squadra e link
			 */
			td.item(0).innerHTML = "<a href='squadre/squadra.php?squadra="
					+ squadra[i + 4][11] + "'>" + squadra[i + 4][0] + "</a>";

			for (j = 1; j < td.length; j++) {
				td.item(j).innerHTML = squadra[i + 4][j];
			}
		}

		var playedCounter = 0;
		for (i = 0; i < 8; i++)
			playedCounter += parseInt(squadra[i][2]);

		if (playedCounter == 24) // finita la fase a gironi
		{
			var tr_semi = document.getElementById('semifinali_coppa')
					.getElementsByTagName('tr');
			var tr_gruppo1 = document.getElementById('classifica_gruppo_1')
					.getElementsByTagName('tr');
			var tr_gruppo2 = document.getElementById('classifica_gruppo_2')
					.getElementsByTagName('tr');

			// I semifinale
			document.getElementById('semifinale0').getElementsByTagName('td')
					.item(0).innerHTML = '&nbsp;'
					+ document.getElementById('posizioneA0')
							.getElementsByTagName('td').item(0).innerHTML;
			document.getElementById('semifinale0').getElementsByTagName('td')
					.item(6).innerHTML = document.getElementById('posizioneB1')
					.getElementsByTagName('td').item(0).innerHTML
					+ '&nbsp;';

			// II semifinale
			document.getElementById('semifinale1').getElementsByTagName('td')
					.item(0).innerHTML = '&nbsp;'
					+ document.getElementById('posizioneB0')
							.getElementsByTagName('td').item(0).innerHTML;
			document.getElementById('semifinale1').getElementsByTagName('td')
					.item(6).innerHTML = document.getElementById('posizioneA1')
					.getElementsByTagName('td').item(0).innerHTML
					+ '&nbsp;';

			// III semifinale
			document.getElementById('semifinale2').getElementsByTagName('td')
					.item(0).innerHTML = '&nbsp;'
					+ document.getElementById('posizioneA2')
							.getElementsByTagName('td').item(0).innerHTML;
			document.getElementById('semifinale2').getElementsByTagName('td')
					.item(6).innerHTML = document.getElementById('posizioneB3')
					.getElementsByTagName('td').item(0).innerHTML
					+ '&nbsp;';

			// IV semifinale
			document.getElementById('semifinale3').getElementsByTagName('td')
					.item(0).innerHTML = '&nbsp;'
					+ document.getElementById('posizioneB2')
							.getElementsByTagName('td').item(0).innerHTML;
			document.getElementById('semifinale3').getElementsByTagName('td')
					.item(6).innerHTML = document.getElementById('posizioneA3')
					.getElementsByTagName('td').item(0).innerHTML
					+ '&nbsp;';
		}

		var winner = Array(4);
		var loser = Array(4);

		for (i = 0; i < 4; i++) // semifinali
		{
			var goal_C = parseInt(document.getElementById('semifinale' + i)
					.getElementsByTagName('td').item(2).getElementsByTagName(
							'div').item(0).innerHTML.replace(/\&nbsp;/, "")
					.replace(/\&nbsp;/, ""));
			var goal_F = parseInt(document.getElementById('semifinale' + i)
					.getElementsByTagName('td').item(4).getElementsByTagName(
							'div').item(0).innerHTML.replace(/\&nbsp;/, "")
					.replace(/\&nbsp;/, ""));
			var punti_C = parseFloat(document.getElementById('semifinale' + i)
					.getElementsByTagName('td').item(2).getElementsByTagName(
							'div').item(1).innerHTML.replace(/\&nbsp;/, "")
					.replace(/\&nbsp;/, ""));
			var punti_F = parseFloat(document.getElementById('semifinale' + i)
					.getElementsByTagName('td').item(4).getElementsByTagName(
							'div').item(1).innerHTML.replace(/\&nbsp;/, "")
					.replace(/\&nbsp;/, ""));
			var sourceSemiHome = document.getElementById('semifinale' + i)
					.getElementsByTagName('td').item(0).innerHTML.replace(
					/\&nbsp;/, "");
			var sourceSemiAway = document.getElementById('semifinale' + i)
					.getElementsByTagName('td').item(6).innerHTML.replace(
					/\&nbsp;/, "");

			if (goal_C > goal_F) {
				winner[i] = sourceSemiHome;
				loser[i] = sourceSemiAway;
			}

			else if (goal_C < goal_F) {
				winner[i] = sourceSemiAway;
				loser[i] = sourceSemiHome;
			} else {
				if (punti_C > punti_F) {
					winner[i] = sourceSemiHome;
					loser[i] = sourceSemiAway;
				} else if (punti_C < punti_F) {
					winner[i] = sourceSemiAway;
					loser[i] = sourceSemiHome;
				} else {
					winner[i] = "";
					loser[i] = "";
				}
			}
		}

		document.getElementById('finali0_C_nome').innerHTML = "&nbsp;" + winner[0];
		document.getElementById('finali1_C_nome').innerHTML = "&nbsp;" + loser[0];
		document.getElementById('finali0_F_nome').innerHTML = winner[1] + "&nbsp;";
		document.getElementById('finali1_F_nome').innerHTML = loser[1] + "&nbsp;";
		document.getElementById('finali2_C_nome').innerHTML = "&nbsp;" + winner[2];
		document.getElementById('finali3_C_nome').innerHTML = "&nbsp;" + loser[2];
		document.getElementById('finali2_F_nome').innerHTML = winner[3] + "&nbsp";
		document.getElementById('finali3_F_nome').innerHTML = loser[3] + "&nbsp";
		// <-- aggiornamento classifica

		// --> classifiche avulse
		var divAvulse = document.getElementById('avulse');
		var tables = divAvulse.getElementsByTagName('table');
		for ( var k = 0; k < classifiche_avulse.length; k++) {
			document.getElementById('avulsa' + k).style.display = 'block';
			var trs = tables.item(k).getElementsByTagName('tr');
			for ( var i = 1; i < trs.length; i++) {
				var tds = trs.item(i).getElementsByTagName('td');
				for ( var j = 0; j < tds.length; j++) {
					if (classifiche_avulse[k][i - 1][2] == 0)
						trs.item(i).style.display = "none";
					else
						tds.item(j).innerHTML = classifiche_avulse[k][i - 1][j];
				}
			}
		}

		if (calls > 0)
			document.getElementById('avulse_wrapper').style.display = 'block';
		// <-- classifiche avulse
	} else {
		alert(":( DOM NON Supportato!");
	}

	return;
}

function classifica(
/*
 * variable number of arguments, the first has to be the array name
 */
) {
	var datiCoppaPerAvulsa = Array(12); // copia di datiCoppa per non
	// modificarlo (la classifica mostrata
	// dipende da esso)
	for ( var i = 0; i < 12; i++)
		datiCoppaPerAvulsa[i] = Array(6);

	var squadra_local = arguments[0];

	for ( var i = 0; i < 12; i++) {
		for ( var j = 0; j < 6; j++) {
			if (datiCoppa[i][j].toString() == 'NaN')
				datiCoppaPerAvulsa[i][j] = 0; // pone i NaN a zero per la
			// classifica avulsa
			else
				datiCoppaPerAvulsa[i][j] = datiCoppa[i][j];
		}
	}

	var idx = new Array(arguments[1].length);
	var argList = '';
	for ( var i = 0; i < arguments[1].length; i++) {
		idx[i] = parseInt(arguments[1][i]);
		argList += squadra_local[idx[i]][0];
	}

	/***************************************************************************
	 * 
	 * avulsa[i][0] -> nome 
	 * avulsa[i][1] -> punti 
	 * avulsa[i][2] -> giocate
	 * avulsa[i][3] -> vinte 
	 * avulsa[i][4] -> pareggiate 
	 * avulsa[i][5] -> perse
	 * avulsa[i][6] -> fatti 
	 * avulsa[i][7] -> subiti 
	 * avulsa[i][8] -> diffReti
	 * avulsa[i][9] -> punti fatti 
	 * avulsa[i][10] -> differenza punti 
	 * avulsa[i][11] -> array[12] dati squadra
	 * 
	 **************************************************************************/

	// --> initialize avulsa
	var avulsa = new Array(8);
	for (i = 0; i < avulsa.length; i++) {
		avulsa[i] = new Array(12);
		avulsa[i][0] = squadra_local[i][0];

		for (j = 1; j < avulsa[i].length-1; j++) // last element is Array(12) 
			avulsa[i][j] = 0;

		avulsa[i][11] = new Array(12);
		for (j = 0; j < avulsa[i][11].length; j++) 
			avulsa[i][11][j] = squadra_local[i][j];
		
	}
	// <-- initialize avulsa
	
	// --> aggiorna classifica avulsa
	for (i = 0; i < 12; i++) // partite della fase a gruppi
	{
		if (argList.indexOf(datiCoppaPerAvulsa[i][0]) == -1
				|| argList.indexOf(datiCoppaPerAvulsa[i][1]) == -1)
			continue;

		if (datiCoppaPerAvulsa[i][2] > datiCoppaPerAvulsa[i][3]) // vittoria
		// "casa"
		{
			// alert("casa");
			for (k = arguments[1][0]; k <= arguments[1][arguments[1].length - 1]; k++) {
				if (avulsa[k][0] == datiCoppaPerAvulsa[i][0]) {
					avulsa[k][1] += 3;
					avulsa[k][2] += 1;
					avulsa[k][3] += 1;
					avulsa[k][6] += datiCoppaPerAvulsa[i][2];
					avulsa[k][7] += datiCoppaPerAvulsa[i][3];
					avulsa[k][8] += (datiCoppaPerAvulsa[i][2] - datiCoppaPerAvulsa[i][3]);
					avulsa[k][9] += datiCoppaPerAvulsa[i][4];
					avulsa[k][10] += (datiCoppaPerAvulsa[i][4] - datiCoppaPerAvulsa[i][5]);
				} else if (avulsa[k][0] == datiCoppaPerAvulsa[i][1]) {
					avulsa[k][2] += 1;
					avulsa[k][5] += 1;
					avulsa[k][6] += datiCoppaPerAvulsa[i][3];
					avulsa[k][7] += datiCoppaPerAvulsa[i][2];
					avulsa[k][8] += (datiCoppaPerAvulsa[i][3] - datiCoppaPerAvulsa[i][2]);
					avulsa[k][9] += datiCoppaPerAvulsa[i][5];
					avulsa[k][10] += (datiCoppaPerAvulsa[i][5] - datiCoppaPerAvulsa[i][4]);
				}
			}
		} else if (datiCoppaPerAvulsa[i][3] > datiCoppaPerAvulsa[i][2]) // vittoria "fuori" casa
		{
			for (k = arguments[1][0]; k <= arguments[1][arguments[1].length - 1]; k++) {
				if (avulsa[k][0] == datiCoppaPerAvulsa[i][0]) {
					avulsa[k][2] += 1;
					avulsa[k][5] += 1;
					avulsa[k][6] += datiCoppaPerAvulsa[i][2];
					avulsa[k][7] += datiCoppaPerAvulsa[i][3];
					avulsa[k][8] += (datiCoppaPerAvulsa[i][2] - datiCoppaPerAvulsa[i][3]);
					avulsa[k][9] += datiCoppaPerAvulsa[i][4];
					avulsa[k][10] += (datiCoppaPerAvulsa[i][4] - datiCoppaPerAvulsa[i][5]);
				} else if (avulsa[k][0] == datiCoppaPerAvulsa[i][1]) {
					avulsa[k][1] += 3;
					avulsa[k][2] += 1;
					avulsa[k][3] += 1;
					avulsa[k][6] += datiCoppaPerAvulsa[i][3];
					avulsa[k][7] += datiCoppaPerAvulsa[i][2];
					avulsa[k][8] += (datiCoppaPerAvulsa[i][3] - datiCoppaPerAvulsa[i][2]);
					avulsa[k][9] += datiCoppaPerAvulsa[i][5];
					avulsa[k][10] += (datiCoppaPerAvulsa[i][5] - datiCoppaPerAvulsa[i][4]);
				}
			}
		} else if (datiCoppaPerAvulsa[i][3] == datiCoppaPerAvulsa[i][2]) // pareggio
		{
			for (k = arguments[1][0]; k <= arguments[1][arguments[1].length - 1]; k++) {
				if (avulsa[k][0] == datiCoppaPerAvulsa[i][0]) {
					avulsa[k][1] += 1;
					avulsa[k][2] += 1;
					avulsa[k][4] += 1;
					avulsa[k][6] += datiCoppaPerAvulsa[i][2];
					avulsa[k][7] += datiCoppaPerAvulsa[i][3];
					avulsa[k][9] += datiCoppaPerAvulsa[i][4];
					avulsa[k][10] += (datiCoppaPerAvulsa[i][4] - datiCoppaPerAvulsa[i][5]);
				} else if (avulsa[k][0] == datiCoppaPerAvulsa[i][1]) {
					avulsa[k][1] += 1;
					avulsa[k][2] += 1;
					avulsa[k][4] += 1;
					avulsa[k][6] += datiCoppaPerAvulsa[i][3];
					avulsa[k][7] += datiCoppaPerAvulsa[i][2];
					avulsa[k][9] += datiCoppaPerAvulsa[i][5];
					avulsa[k][10] += (datiCoppaPerAvulsa[i][5] - datiCoppaPerAvulsa[i][4]);
				}
			}
		} else {
			alert("nulla");
		}
	}
	// <-- aggiorna classifica avulsa

	// --> sort x punti
	var xx = arguments[1].length - 1;
	for ( var j = idx[0]; j < idx[xx]; j++) {
		for ( var i = idx[0]; i < idx[0] + idx[xx] - j; i++) {
			if (avulsa[i][1] < avulsa[i + 1][1]) // punti
				switchSquadre(avulsa, i, i + 1);
		}
	}
	// <-- sort x punti

	// --> applica correzione a squadra[][]
	for ( var i = idx[0]; i <= idx[xx]; i++) {
		for ( var j = idx[0]; j <= idx[xx]; j++) {
			if (squadra[i][0] == avulsa[j][0]) {
				switchSquadre(squadra, i, j);
				break;
			}
		}
	}
	// <-- applica correzione a squadra[][]

	// --> ricerca gruppi per classifica avulsa
	var containers = Array(arguments[1].length);
	for ( var i = 0; i < containers.length; i++)
		containers[i] = Array(0);

	var j = 0;
	containers[j][0] = parseInt(arguments[1][0]); // la prima squadra sara'
	// sicuramente nel primo
	// contenitore
	for ( var i = parseInt(arguments[1][0]); i < parseInt(arguments[1][arguments[1].length - 1]); i++) {
		if ((avulsa[i][1] == avulsa[i + 1][1]))
			containers[j].push(i + 1);
		else {
			j++;
			containers[j].push(i + 1);
		}
	}
	// <-- ricerca gruppi per classifica avulsa

	// --> risoluzione gruppi
	for ( var i = 0; i < containers.length; i++) {
		if (containers[i].length > 1) {
			if (containers[i].length > 1
					&& containers[i].length < arguments[1].length)
				squadra_local = classifica(squadra_local, containers[i]);
		}
	}
	// <-- risoluzione gruppi

	// --> sort avulsa
	var xx = arguments[1].length - 1;

	for ( var j = 0; j < idx[xx] - idx[0]; j++) {
		for ( var i = idx[0]; i < idx[xx] - j; i++) {
			// **** DATI AVULSA **** //
			if (avulsa[i][1] < avulsa[i + 1][1]) // punti
			{
				switchSquadre(avulsa, i, i + 1);
			} else if (avulsa[i][1] == avulsa[i + 1][1]) // punti
			{
				if (avulsa[i][8] < avulsa[i + 1][8]) // diff reti
				{
					switchSquadre(avulsa, i, i + 1);
				} else if (avulsa[i][8] == avulsa[i + 1][8]) // diff reti
				{
					if (avulsa[i][6] < avulsa[i + 1][6]) // goal fatti
					{
						switchSquadre(avulsa, i, i + 1);
					} 
					// **** DATI GLOBALI **** //
					else if (avulsa[i][6] == avulsa[i + 1][6]) // goal fatti  
					{
						if (avulsa[i][11][8] < avulsa[i + 1][11][8]) // diff reti totali
						{
							switchSquadre(avulsa, i, i + 1);
						} else if (avulsa[i][11][8] == avulsa[i + 1][11][8]) // diff reti totali
						{
							if (avulsa[i][11][6] < avulsa[i + 1][11][6]) // goal totali
							{
								switchSquadre(avulsa, i, i + 1);
							} else // sorteggio 
							{ 
								if (avulsa[i][0] == 'Rapid Bradip'
										&& avulsa[i + 1][0] == 'Lokomotiv Peccorino')
									switchSquadre(avulsa, i, i + 1);
							}
						}
					}
				}
			}
		}
	}
	// <-- sort avulsa

	// --> visualizzazione classifica avulsa
	classifiche_avulse[calls] = avulsa;
	// <-- visualizzazione classifica avulsa

	// --> applica correzione a squadra[][]
	for ( var i = idx[0]; i <= idx[xx]; i++) {
		for ( var j = idx[0]; j <= idx[xx]; j++) {
			if (squadra[i][0] == avulsa[j][0])
				switchSquadre(squadra, i, j);
		}
	}
	// <-- applica correzione a squadra[][]
	calls += 1;

	return squadra_local;
}

function toggleAvulse() {
	if (document.getElementById) {
		if (document.getElementById('avulse').style.display == "none"
				|| document.getElementById('avulse').style.display == "")
			document.getElementById('avulse').style.display = "block"
		else
			document.getElementById('avulse').style.display = "none"
	} else {
		alert(":( DOM NON Supportato!");
	}
}