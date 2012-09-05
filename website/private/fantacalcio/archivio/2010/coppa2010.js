// JavaScript Document
if( document.getElementById ) 
{
	squadra = new Array(8);
	for (i=0;i<8;i++)
	{
		squadra[i] = new Array(10);
		for (j=0;j<10;j++)
		{
			squadra[i][j] = 0;
		}
	}
	
	/*
	squadra[i][0] -> nome
	squadra[i][1] -> punti
	squadra[i][2] -> giocate
	squadra[i][3] -> vinte
	squadra[i][4] -> pareggiate
	squadra[i][5] -> perse
	squadra[i][6] -> fatti
	squadra[i][7] -> subiti
	squadra[i][8] -> diffReti
	squadra[i][9] -> totalePunti
	/**/
	
	// gruppo A
	squadra[0][0] = 'Real Mentescars';
	squadra[1][0] = 'EPOrediese';
	squadra[2][0] = 'Dinamo Ciofeca';
	squadra[3][0] = 'Ij Patelavache';
	// gruppo B
	squadra[4][0] = 'Fedora';
	squadra[5][0] = 'Lokomotiv Peccorino';
	squadra[6][0] = 'Bradipo';
	squadra[7][0] = 'Atletico? No Grazie!';
	
	schedina = new Array(12);
	for (i=0;i<12;i++)
	{
		schedina[i] = new Array(3);
		/*
		schedina[i][0] -> nome casa
		schedina[i][1] -> nome fuori
		schedina[i][2] -> 1 X 2
		/**/
		for (j=0;j<3;j++)
		{
			schedina[i][j] = "";
		}
	}
}
else 
{
	alert(":( DOM NON Supportato!");
}	

function arrangeTeams()
{
	if( document.getElementById ) 
	{
		// start read data
		for (i=0;i<3;i++)
		{
			for (j=0;j<2;j++) // gruppo A
			{
				index = i*4+j;
				
				var nome_C = document.getElementById('gruppi' + index + '_C_nome').innerHTML.replace(/\&nbsp;/,"");
				var nome_F = document.getElementById('gruppi' + index + '_F_nome').innerHTML.replace(/\&nbsp;/,"");
				var goal_C = document.getElementById('gruppi' + index + '_C_dati').getElementsByTagName('div').item(0).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
				var goal_F = document.getElementById('gruppi' + index + '_F_dati').getElementsByTagName('div').item(0).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
				var punteggio_C = document.getElementById('gruppi' + index + '_C_dati').getElementsByTagName('div').item(1).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
				if (punteggio_C == '')
				{
					punteggio_C = 0;
				}
				var punteggio_F = document.getElementById('gruppi' + index + '_F_dati').getElementsByTagName('div').item(1).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
				if (punteggio_F == '')
				{
					punteggio_F = 0;
				}
				
				if( goal_C > goal_F )
				{
					schedina[index][2] = '1';
					
					for (k=0;k<8;k++)
					{
						if (squadra[k][0] == nome_C)
						{
							schedina[index][0] = nome_C;
							
							squadra[k][1] += 3;
							squadra[k][2] += 1;
							squadra[k][3] += 1;
							squadra[k][6] += parseInt( goal_C );
							squadra[k][7] += parseInt( goal_F );
							squadra[k][8] += (goal_C - goal_F);
							squadra[k][9] += parseInt( punteggio_C );	
						} 
						else if (squadra[k][0] == nome_F)
						{
							schedina[index][1] = nome_F;
							
							squadra[k][2] += 1;
							squadra[k][5] += 1;
							squadra[k][6] += parseInt( goal_F );
							squadra[k][7] += parseInt( goal_C );
							squadra[k][8] += (goal_F - goal_C);
							squadra[k][9] += parseInt( punteggio_F );	
						}
					}
				} 
				else if( goal_F > goal_C )
				{
					schedina[index][2] = '2';
		
					for (k=0;k<8;k++)
					{
						if (squadra[k][0] == nome_C)
						{
							schedina[index][0] = nome_C;
					
							squadra[k][2] += 1;
							squadra[k][5] += 1;
							squadra[k][6] += parseInt( goal_C );
							squadra[k][7] += parseInt( goal_F );
							squadra[k][8] += (goal_C - goal_F);
							squadra[k][9] += parseInt( punteggio_C );
						} 
						else if (squadra[k][0] == nome_F)
						{
							schedina[index][1] = nome_F;
					
							squadra[k][1] += 3;
							squadra[k][2] += 1;
							squadra[k][3] += 1;
							squadra[k][6] += parseInt( goal_F );
							squadra[k][7] += parseInt( goal_C );
							squadra[k][8] += (goal_F - goal_C);
							squadra[k][9] += parseInt( punteggio_F );
						}
					}
				}
				else if ( goal_F == goal_C & ( goal_C.length != 0 & goal_F.length != 0 ) )
				{
					if ( parseInt( punteggio_C ) > parseInt( punteggio_F ) )
					{
						schedina[index][2] = '1';
					}
					else if ( parseInt( punteggio_C ) < parseInt( punteggio_F ) )
					{
						schedina[index][2] = '2';
					}
					if ( parseInt( punteggio_C ) == parseInt( punteggio_F ) )
					{
						schedina[index][2] = 'X';
					}
					
					for (k=0;k<8;k++)
					{
						if (squadra[k][0] == nome_C)
						{
							schedina[index][0] = nome_C;
					
							squadra[k][1] += 1;
							squadra[k][2] += 1;
							squadra[k][4] += 1;
							squadra[k][6] += parseInt( goal_C );
							squadra[k][7] += parseInt( goal_F );
							squadra[k][9] += parseInt( punteggio_C );	
						} 
						else if (squadra[k][0] == nome_F)
						{
							schedina[index][1] = nome_F;
							
							squadra[k][1] += 1;
							squadra[k][2] += 1;
							squadra[k][4] += 1;
							squadra[k][6] += parseInt( goal_F );
							squadra[k][7] += parseInt( goal_C );
							squadra[k][9] += parseInt( punteggio_F );	
						}
					}
				}
				else
				{
					schedina[index][2] = '-';
					
					for (k=0;k<8;k++)
					{
						if (squadra[k][0] == nome_C)
						{
							schedina[index][0] = nome_C;
						} 
						else if (squadra[k][0] == nome_F)
						{
							schedina[index][1] = nome_F;
						}
					}
				}
			}
			
			for (j=2;j<4;j++) // gruppo B
			{
				index = i*4+j;
				
				var nome_C = document.getElementById('gruppi' + index + '_C_nome').innerHTML.replace(/\&nbsp;/,"");
				var nome_F = document.getElementById('gruppi' + index + '_F_nome').innerHTML.replace(/\&nbsp;/,"");
				var goal_C = document.getElementById('gruppi' + index + '_C_dati').getElementsByTagName('div').item(0).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
				var goal_F = document.getElementById('gruppi' + index + '_F_dati').getElementsByTagName('div').item(0).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
				var punteggio_C = document.getElementById('gruppi' + index + '_C_dati').getElementsByTagName('div').item(1).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
				if (punteggio_C == '')
				{
					punteggio_C = 0;
				}
				var punteggio_F = document.getElementById('gruppi' + index + '_F_dati').getElementsByTagName('div').item(1).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
				if (punteggio_F == '')
				{
					punteggio_F = 0;
				}
				
				if( goal_C > goal_F )
				{
					schedina[index][2] = '1';
					
					for (k=0;k<8;k++)
					{
						if (squadra[k][0] == nome_C)
						{
							schedina[index][0] = nome_C;
							
							squadra[k][1] += 3;
							squadra[k][2] += 1;
							squadra[k][3] += 1;
							squadra[k][6] += parseInt( goal_C );
							squadra[k][7] += parseInt( goal_F );
							squadra[k][8] += (goal_C - goal_F);
							squadra[k][9] += parseInt( punteggio_C );	
						} 
						else if (squadra[k][0] == nome_F)
						{
							schedina[index][1] = nome_F;
							
							squadra[k][2] += 1;
							squadra[k][5] += 1;
							squadra[k][6] += parseInt( goal_F );
							squadra[k][7] += parseInt( goal_C );
							squadra[k][8] += (goal_F - goal_C);
							squadra[k][9] += parseInt( punteggio_F );	
						}
					}
				} 
				else if( goal_F > goal_C )
				{
					schedina[index][2] = '2';
		
					for (k=0;k<8;k++)
					{
						if (squadra[k][0] == nome_C)
						{
							schedina[index][0] = nome_C;
					
							squadra[k][2] += 1;
							squadra[k][5] += 1;
							squadra[k][6] += parseInt( goal_C );
							squadra[k][7] += parseInt( goal_F );
							squadra[k][8] += (goal_C - goal_F);
							squadra[k][9] += parseInt( punteggio_C );
						} 
						else if (squadra[k][0] == nome_F)
						{
							schedina[index][1] = nome_F;
					
							squadra[k][1] += 3;
							squadra[k][2] += 1;
							squadra[k][3] += 1;
							squadra[k][6] += parseInt( goal_F );
							squadra[k][7] += parseInt( goal_C );
							squadra[k][8] += (goal_F - goal_C);
							squadra[k][9] += parseInt( punteggio_F );
						}
					}
				}
				else if ( goal_F == goal_C & ( goal_C.length != 0 & goal_F.length != 0 ) )
				{
					if ( parseInt( punteggio_C ) > parseInt( punteggio_F ) )
					{
						schedina[index][2] = '1';
					}
					else if ( parseInt( punteggio_C ) < parseInt( punteggio_F ) )
					{
						schedina[index][2] = '2';
					}
					if ( parseInt( punteggio_C ) == parseInt( punteggio_F ) )
					{
						schedina[index][2] = 'X';
					}
					
					for (k=0;k<8;k++)
					{
						if (squadra[k][0] == nome_C)
						{
							schedina[index][0] = nome_C;
					
							squadra[k][1] += 1;
							squadra[k][2] += 1;
							squadra[k][4] += 1;
							squadra[k][6] += parseInt( goal_C );
							squadra[k][7] += parseInt( goal_F );
							squadra[k][9] += parseInt( punteggio_C );	
						} 
						else if (squadra[k][0] == nome_F)
						{
							schedina[index][1] = nome_F;
							
							squadra[k][1] += 1;
							squadra[k][2] += 1;
							squadra[k][4] += 1;
							squadra[k][6] += parseInt( goal_F );
							squadra[k][7] += parseInt( goal_C );
							squadra[k][9] += parseInt( punteggio_F );	
						}
					}
				}
				else
				{
					schedina[index][2] = '-';
					
					for (k=0;k<8;k++)
					{
						if (squadra[k][0] == nome_C)
						{
							schedina[index][0] = nome_C;
						} 
						else if (squadra[k][0] == nome_F)
						{
							schedina[index][1] = nome_F;
						}
					}
				}
			}
		}
		// end read data
		
		// --> gruppo A sort x punti
		var xx = 3;
		for ( var j = 0; j < xx; j++ )
		{
			for ( var i = 0; i < xx - j; i++ )
			{
				if (squadra[i][1] < squadra[i+1][1]) // punti
				{
					for ( var k = 0; k < 10; k++ )
					{
						var tmp = squadra[i][k];
						squadra[i][k] = squadra[i+1][k];
						squadra[i+1][k] = tmp;
					}
				}
			}
		}
		// <-- gruppo A sort x punti

		// --> gruppo B sort x punti
		var xx = 3;
		for ( var j = 0; j < xx; j++ )
		{
			for ( var i = 4; i < xx - j + 4; i++ )
			{
				if (squadra[i][1] < squadra[i+1][1]) // punti
				{
					for ( var k = 0; k < 10; k++ )
					{
						var tmp = squadra[i][k];
						squadra[i][k] = squadra[i+1][k];
						squadra[i+1][k] = tmp;
					}
				}
			}
		}
		// <-- gruppo B sort x punti

		// --> gruppo A check gruppi avulsi
		if (squadra[0][1] == squadra[1][1]) 
		{
			if (squadra[1][1] == squadra[2][1]) // 0 1 2
			{
				var first = 0;
				var second = 1;
				var third = 2;
				
				check_3(first, second, third);
			}
			else // 0 1
			{
				var first = 0;
				var second = 1;
				
				if ( check_2(first, second) )
				{
					for ( var k = 0; k < 10; k++ )
					{
						var tmp = squadra[first][k];
						squadra[first][k] = squadra[second][k];
						squadra[second][k] = tmp;
					}
				}
				
				if (squadra[2][1] == squadra[3][1]) // 2 3 con 0 1
				{
					var first = 2;
					var second = 3;
					
					if ( check_2(first, second) )
					{
						for ( var k = 0; k < 10; k++ )
						{
							var tmp = squadra[first][k];
							squadra[first][k] = squadra[second][k];
							squadra[second][k] = tmp;
						}
					}
				}
			}
		}
		else if (squadra[1][1] == squadra[2][1])
		{
			if (squadra[2][1] == squadra[3][1]) // 1 2 3
			{
				var first = 1;
				var second = 2;
				var third = 3;
				
				check_3(first, second, third);
			}
			else // 1 2
			{
				var first = 1;
				var second = 2;
				
				if ( check_2(first, second) )
				{
					for ( var k = 0; k < 10; k++ )
					{
						var tmp = squadra[first][k];
						squadra[first][k] = squadra[second][k];
						squadra[second][k] = tmp;
					}
				}
			}
		}
		else if (squadra[2][1] == squadra[3][1]) // 2 3 
		{
			var first = 2;
			var second = 3;
			
			if ( check_2(first, second) )
			{
				for ( var k = 0; k < 10; k++ )
				{
					var tmp = squadra[first][k];
					squadra[first][k] = squadra[second][k];
					squadra[second][k] = tmp;
				}
			}
		}
		else
		{
			;
			//alert("nessuno");	
		}
		// <-- gruppo A check gruppi avulsi

		// --> gruppo B check gruppi avulsi
		if (squadra[4][1] == squadra[5][1]) 
		{
			if (squadra[5][1] == squadra[6][1]) // 4 5 6
			{
				var first = 4;
				var second = 5;
				var third = 6;
				
				check_3(first, second, third);
			}
			else // 4 5
			{
				var first = 4;
				var second = 5;
				
				if ( check_2(first, second) )
				{
					for ( var k = 0; k < 10; k++ )
					{
						var tmp = squadra[first][k];
						squadra[first][k] = squadra[second][k];
						squadra[second][k] = tmp;
					}
				}
				
				if (squadra[6][1] == squadra[7][1]) // 6 7 con 4 5
				{
					var first = 6;
					var second = 7;
					
					if ( check_2(first, second) )
					{
						for ( var k = 0; k < 10; k++ )
						{
							var tmp = squadra[first][k];
							squadra[first][k] = squadra[second][k];
							squadra[second][k] = tmp;
						}
					}
				}
			}
		}
		else if (squadra[5][1] == squadra[6][1])
		{
			if (squadra[6][1] == squadra[7][1]) // 5 6 7
			{
				var first = 5;
				var second = 6;
				var third = 7;
				
				check_3(first, second, third);
			}
			else // 5 6
			{
				var first = 5;
				var second = 6;
				
				if ( check_2(first, second) )
				{
					for ( var k = 0; k < 10; k++ )
					{
						var tmp = squadra[first][k];
						squadra[first][k] = squadra[second][k];
						squadra[second][k] = tmp;
					}
				}
			}
		}
		else if (squadra[6][1] == squadra[7][1]) // 6 7 
		{
			var first = 6;
			var second = 7;
			
			if ( check_2(first, second) )
			{
				for ( var k = 0; k < 10; k++ )
				{
					var tmp = squadra[first][k];
					squadra[first][k] = squadra[second][k];
					squadra[second][k] = tmp;
				}
			}
		}
		else
		{
			;
			//alert("nessuno");	
		}
		// <-- gruppo B check gruppi avulsi

		// --> aggiornamento classifica
		for (i=0;i<4;i++) 
		{
			var Id = 'posizioneA' + i;
			var td = document.getElementById(Id).getElementsByTagName('td');
			for (j=0;j<td.length;j++)
			{
				td.item(j).innerHTML = squadra[i][j];
			}
			
			var Id = 'posizioneB' + i;
			var td = document.getElementById(Id).getElementsByTagName('td');
			for (j=0;j<td.length;j++)
			{
				td.item(j).innerHTML = squadra[i+4][j];
			}
		}
		
		var playedCounter = 0;
		for (i=0;i<8;i++)
		{
			playedCounter += parseInt(squadra[i][2]);
		}
		
		if (playedCounter == 24) // finita la fase a gironi
		{
			var tr_semi = document.getElementById('semifinali_coppa').getElementsByTagName('tr');
			var tr_gruppo1 = document.getElementById('classifica_gruppo_1').getElementsByTagName('tr');
			var tr_gruppo2 = document.getElementById('classifica_gruppo_2').getElementsByTagName('tr');

			// I semifinale
			document.getElementById('semifinale0').getElementsByTagName('td').item(0).innerHTML = '&nbsp;' + document.getElementById('posizioneA0').getElementsByTagName('td').item(0).innerHTML;
			document.getElementById('semifinale0').getElementsByTagName('td').item(6).innerHTML = document.getElementById('posizioneB1').getElementsByTagName('td').item(0).innerHTML + '&nbsp;';
			
			// II semifinale
			document.getElementById('semifinale1').getElementsByTagName('td').item(0).innerHTML = '&nbsp;' + document.getElementById('posizioneB0').getElementsByTagName('td').item(0).innerHTML;
			document.getElementById('semifinale1').getElementsByTagName('td').item(6).innerHTML = document.getElementById('posizioneA1').getElementsByTagName('td').item(0).innerHTML + '&nbsp;';

			// III semifinale
			document.getElementById('semifinale2').getElementsByTagName('td').item(0).innerHTML = '&nbsp;' + document.getElementById('posizioneA2').getElementsByTagName('td').item(0).innerHTML;
			document.getElementById('semifinale2').getElementsByTagName('td').item(6).innerHTML = document.getElementById('posizioneB3').getElementsByTagName('td').item(0).innerHTML + '&nbsp;';
			
			// IV semifinale
			document.getElementById('semifinale3').getElementsByTagName('td').item(0).innerHTML = '&nbsp;' + document.getElementById('posizioneB2').getElementsByTagName('td').item(0).innerHTML;
			document.getElementById('semifinale3').getElementsByTagName('td').item(6).innerHTML = document.getElementById('posizioneA3').getElementsByTagName('td').item(0).innerHTML + '&nbsp;';
		}
		
		var winner = Array(4);
		var loser = Array(4);
		
		for (i=0; i<4; i++)
		{
			var goal_C = document.getElementById('semifinale' + i).getElementsByTagName('td').item(2).getElementsByTagName('div').item(0).innerHTML.replace(/\&nbsp;/, "").replace(/\&nbsp;/, "");
			var goal_F = document.getElementById('semifinale' + i).getElementsByTagName('td').item(4).getElementsByTagName('div').item(0).innerHTML.replace(/\&nbsp;/, "").replace(/\&nbsp;/, "");		
			var punti_C = document.getElementById('semifinale' + i).getElementsByTagName('td').item(2).getElementsByTagName('div').item(1).innerHTML.replace(/\&nbsp;/, "").replace(/\&nbsp;/, "");
			var punti_F = document.getElementById('semifinale' + i).getElementsByTagName('td').item(4).getElementsByTagName('div').item(1).innerHTML.replace(/\&nbsp;/, "").replace(/\&nbsp;/, "");
			var sourceSemiHome = document.getElementById('semifinale' + i).getElementsByTagName('td').item(0).innerHTML.replace(/\&nbsp;/, "");
			var sourceSemiAway = document.getElementById('semifinale' + i).getElementsByTagName('td').item(6).innerHTML.replace(/\&nbsp;/, "");
			
			if ( goal_C > goal_F )
			{
				winner[i] = sourceSemiHome;
				loser[i] = sourceSemiAway;
			}
			
			else if ( goal_C < goal_F )
			{
				winner[i] = sourceSemiAway;
				loser[i] = sourceSemiHome;
			}
			else
			{
				if ( punti_C > punti_F )
				{
					winner[i] = sourceSemiHome;
					loser[i] = sourceSemiAway;
				}
				else if ( punti_C < punti_F )
				{
					winner[i] = sourceSemiAway;
					loser[i] = sourceSemiHome;
				}
				else
				{
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
		document.getElementById('finali2_F_nome').innerHTML = "&nbsp;" + winner[3];
		document.getElementById('finali3_F_nome').innerHTML = "&nbsp;" + loser[3];
		// <-- aggiornamento classifica
	}
	else 
	{
		alert(":( DOM NON Supportato!");
	}	
	
	return;
} 
function check_2(_first, _second) {
	var first = _first;
	var second = _second;
	
	var switchThem = false;
	var t;
	for ( t=0; t < 12; t++ )
	{
		if ( schedina[t][0] == squadra[first][0] && schedina[t][1] == squadra[second][0] )
		{
			if ( schedina[t][2] == "2" )
			{
				switchThem = true;
				break;
			}
			else if ( schedina[t][2] == "X" || schedina[t][2] == "-" )
			{
				if (squadra[first][8] < squadra[second][8]) // diff reti globale
				{
					switchThem = true;
					break;
				}
				else if (squadra[first][8] == squadra[second][8]) // diff reti globale
				{
					if (squadra[first][6] < squadra[second][6]) // goal fatti globale
					{
						switchThem = true;
						break;
					}
					else if (squadra[first][6] == squadra[second][6]) // goal fatti globale
					{
						if (squadra[first][9] < squadra[second][9]) // punteggio totale globale
						{
							switchThem = true;
							break;
						}
						else if (squadra[first][9] == squadra[second][9]) // punteggio totale globale
						{
							// assoluta parità --> sorteggio
							;
						}
					}
				}
				break;
			}
			else if ( schedina[t][2] == "1" )
			{
				break;
			}
			else
			{
				alert("Error in coppa2010.js - 1 : schedina[t][2] = '"+schedina[t][2]+"'");
				break;
			}
		}
		else if ( schedina[t][0] == squadra[second][0] && schedina[t][1] == squadra[first][0] )
		{
			if ( schedina[t][2] == "1" )
			{
				switchThem = true;
				break;
			}
			else if ( schedina[t][2] == "X" || schedina[t][2] == "-" )
			{
				if (squadra[first][8] < squadra[second][8]) // diff reti globale
				{
					switchThem = true;
					break;
				}
				else if (squadra[first][8] == squadra[second][8]) // diff reti globale
				{
					if (squadra[first][6] < squadra[second][6]) // goal fatti globale
					{
						switchThem = true;
						break;
					}
					else if (squadra[first][6] == squadra[second][6]) // goal fatti globale
					{
						if (squadra[first][9] < squadra[second][9]) // punteggio totale globale
						{
							switchThem = true;
							break;
						}
						else if (squadra[first][9] == squadra[second][9]) // punteggio totale globale
						{
							// assoluta parità --> sorteggio
							;
						}
					}
				}
				break;
			}
			else if ( schedina[t][2] == "2" )
			{
				break;
			}
			else
			{
				alert("Error in coppa2010.js - 2 : schedina[t][2] = '"+schedina[t][2]+"'");
				break;
			}
		}
	}	
	return switchThem;
}

function check_3(_first, _second, _third) {
	var idx = new Array(3)
	idx[0] = _first;
	idx[1] = _second;
	idx[2] = _third;

	avulsa = new Array(3);
	for (i=0;i<3;i++)
	{
		avulsa[i] = new Array(10);
		for (j=0;j<10;j++)
		{
			avulsa[i][j] = 0;
		}
	}
	
	/*
	avulsa[i][0] -> nome
	avulsa[i][1] -> punti
	avulsa[i][2] -> giocate
	avulsa[i][3] -> vinte
	avulsa[i][4] -> pareggiate
	avulsa[i][5] -> perse
	avulsa[i][6] -> fatti
	avulsa[i][7] -> subiti
	avulsa[i][8] -> diffReti
	avulsa[i][9] -> totalePunti
	/**/
	
	avulsa[0][0] = squadra[idx[0]][0];
	avulsa[1][0] = squadra[idx[1]][0];
	avulsa[2][0] = squadra[idx[2]][0];
	
	var kk=0;
	// start read data
	for (i=0;i<3;i++)
	{
		for (j=0;j<2;j++) // gruppo A
		{
			index = i*4+j;
			
			var nome_C = document.getElementById('gruppi' + index + '_C_nome').innerHTML.replace(/\&nbsp;/,"");
			var nome_F = document.getElementById('gruppi' + index + '_F_nome').innerHTML.replace(/\&nbsp;/,"");
	
			if ( ! ( ( nome_C == squadra[idx[0]][0] || nome_C == squadra[idx[1]][0] || nome_C == squadra[idx[2]][0] ) & ( nome_F == squadra[idx[0]][0] || nome_F == squadra[idx[1]][0] || nome_F == squadra[idx[2]][0] ) ) )
			{
				continue;
			}
			
			var goal_C = document.getElementById('gruppi' + index + '_C_dati').getElementsByTagName('div').item(0).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
			var goal_F = document.getElementById('gruppi' + index + '_F_dati').getElementsByTagName('div').item(0).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
			var punteggio_C = document.getElementById('gruppi' + index + '_C_dati').getElementsByTagName('div').item(1).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
			if (punteggio_C == '')
			{
				punteggio_C = 0;
			}
			var punteggio_F = document.getElementById('gruppi' + index + '_F_dati').getElementsByTagName('div').item(1).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
			if (punteggio_F == '')
			{
				punteggio_F = 0;
			}
			
			if( goal_C > goal_F )
			{
				for (k=0;k<3;k++)
				{
					if (avulsa[k][0] == nome_C)
					{
						avulsa[k][1] += 3;
						avulsa[k][2] += 1;
						avulsa[k][3] += 1;
						avulsa[k][6] += parseInt( goal_C );
						avulsa[k][7] += parseInt( goal_F );
						avulsa[k][8] += (goal_C - goal_F);
						avulsa[k][9] += parseInt( punteggio_C );	
					} 
					else if (avulsa[k][0] == nome_F)
					{
						avulsa[k][2] += 1;
						avulsa[k][5] += 1;
						avulsa[k][6] += parseInt( goal_F );
						avulsa[k][7] += parseInt( goal_C );
						avulsa[k][8] += (goal_F - goal_C);
						avulsa[k][9] += parseInt( punteggio_F );	
					}
				}
			} 
			else if( goal_F > goal_C )
			{
				for (k=0;k<3;k++)
				{
					if (avulsa[k][0] == nome_C)
					{
						avulsa[k][2] += 1;
						avulsa[k][5] += 1;
						avulsa[k][6] += parseInt( goal_C );
						avulsa[k][7] += parseInt( goal_F );
						avulsa[k][8] += (goal_C - goal_F);
						avulsa[k][9] += parseInt( punteggio_C );
					} 
					else if (avulsa[k][0] == nome_F)
					{
						avulsa[k][1] += 3;
						avulsa[k][2] += 1;
						avulsa[k][3] += 1;
						avulsa[k][6] += parseInt( goal_F );
						avulsa[k][7] += parseInt( goal_C );
						avulsa[k][8] += (goal_F - goal_C);
						avulsa[k][9] += parseInt( punteggio_F );
					}
				}
			}
			else if ( goal_F == goal_C & ( goal_C.length != 0 & goal_F.length != 0 ) )
			{
				for (k=0;k<3;k++)
				{
					if (avulsa[k][0] == nome_C)
					{
						avulsa[k][1] += 1;
						avulsa[k][2] += 1;
						avulsa[k][4] += 1;
						avulsa[k][6] += parseInt( goal_C );
						avulsa[k][7] += parseInt( goal_F );
						avulsa[k][9] += parseInt( punteggio_C );	
					} 
					else if (avulsa[k][0] == nome_F)
					{
						avulsa[k][1] += 1;
						avulsa[k][2] += 1;
						avulsa[k][4] += 1;
						avulsa[k][6] += parseInt( goal_F );
						avulsa[k][7] += parseInt( goal_C );
						avulsa[k][9] += parseInt( punteggio_F );	
					}
				}
			}
			else
			{
				;
			}
			kk++;
		}

		for (j=2;j<4;j++) // gruppo B
		{
			index = i*4+j;
			
			var nome_C = document.getElementById('gruppi' + index + '_C_nome').innerHTML.replace(/\&nbsp;/,"");
			var nome_F = document.getElementById('gruppi' + index + '_F_nome').innerHTML.replace(/\&nbsp;/,"");
	
			if ( ! ( ( nome_C == squadra[idx[0]][0] || nome_C == squadra[idx[1]][0] || nome_C == squadra[idx[2]][0] ) & ( nome_F == squadra[idx[0]][0] || nome_F == squadra[idx[1]][0] || nome_F == squadra[idx[2]][0] ) ) )
			{
				continue;
			}
			
			var goal_C = document.getElementById('gruppi' + index + '_C_dati').getElementsByTagName('div').item(0).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
			var goal_F = document.getElementById('gruppi' + index + '_F_dati').getElementsByTagName('div').item(0).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
			var punteggio_C = document.getElementById('gruppi' + index + '_C_dati').getElementsByTagName('div').item(1).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
			if (punteggio_C == '')
			{
				punteggio_C = 0;
			}
			var punteggio_F = document.getElementById('gruppi' + index + '_F_dati').getElementsByTagName('div').item(1).innerHTML.replace(/\&nbsp;/,"").replace(/\&nbsp;/,"").replace(/-/,"");
			if (punteggio_F == '')
			{
				punteggio_F = 0;
			}
			
			if( goal_C > goal_F )
			{
				for (k=0;k<3;k++)
				{
					if (avulsa[k][0] == nome_C)
					{
						avulsa[k][1] += 3;
						avulsa[k][2] += 1;
						avulsa[k][3] += 1;
						avulsa[k][6] += parseInt( goal_C );
						avulsa[k][7] += parseInt( goal_F );
						avulsa[k][8] += (goal_C - goal_F);
						avulsa[k][9] += parseInt( punteggio_C );	
					} 
					else if (avulsa[k][0] == nome_F)
					{
						avulsa[k][2] += 1;
						avulsa[k][5] += 1;
						avulsa[k][6] += parseInt( goal_F );
						avulsa[k][7] += parseInt( goal_C );
						avulsa[k][8] += (goal_F - goal_C);
						avulsa[k][9] += parseInt( punteggio_F );	
					}
				}
			} 
			else if( goal_F > goal_C )
			{
				for (k=0;k<3;k++)
				{
					if (avulsa[k][0] == nome_C)
					{
						avulsa[k][2] += 1;
						avulsa[k][5] += 1;
						avulsa[k][6] += parseInt( goal_C );
						avulsa[k][7] += parseInt( goal_F );
						avulsa[k][8] += (goal_C - goal_F);
						avulsa[k][9] += parseInt( punteggio_C );
					} 
					else if (avulsa[k][0] == nome_F)
					{
						avulsa[k][1] += 3;
						avulsa[k][2] += 1;
						avulsa[k][3] += 1;
						avulsa[k][6] += parseInt( goal_F );
						avulsa[k][7] += parseInt( goal_C );
						avulsa[k][8] += (goal_F - goal_C);
						avulsa[k][9] += parseInt( punteggio_F );
					}
				}
			}
			else if ( goal_F == goal_C & ( goal_C.length != 0 & goal_F.length != 0 ) )
			{
				for (k=0;k<3;k++)
				{
					if (avulsa[k][0] == nome_C)
					{
						avulsa[k][1] += 1;
						avulsa[k][2] += 1;
						avulsa[k][4] += 1;
						avulsa[k][6] += parseInt( goal_C );
						avulsa[k][7] += parseInt( goal_F );
						avulsa[k][9] += parseInt( punteggio_C );	
					} 
					else if (avulsa[k][0] == nome_F)
					{
						avulsa[k][1] += 1;
						avulsa[k][2] += 1;
						avulsa[k][4] += 1;
						avulsa[k][6] += parseInt( goal_F );
						avulsa[k][7] += parseInt( goal_C );
						avulsa[k][9] += parseInt( punteggio_F );	
					}
				}
			}
			else
			{
				;
			}
			kk++;
		}
	}
	// end read data
	
	// --> sort
	var xx = 2;
	for ( var j = 0; j < xx; j++ )
	{
		for ( var i = 0; i < xx - j; i++ )
		{
			if (avulsa[i][1] < avulsa[i+1][1]) // punti
			{
				for ( var k = 0; k < 10; k++ )
				{
					var tmp = avulsa[i][k];
					avulsa[i][k] = avulsa[i+1][k];
					avulsa[i+1][k] = tmp;
				}
			}
			else if (avulsa[i][1] == avulsa[i+1][1]) // punti
			{
				if (avulsa[i][8] < avulsa[i+1][8]) // diff reti
				{
					for ( var k = 0; k < 10; k++ )
					{
						var tmp = avulsa[i][k];
						avulsa[i][k] = avulsa[i+1][k];
						avulsa[i+1][k] = tmp;
					}
				}
				else if (avulsa[i][8] == avulsa[i+1][8]) // diff reti
				{
					if (avulsa[i][6] < avulsa[i+1][6]) // goal fatti
					{
						for ( var k = 0; k < 10; k++ )
						{
							var tmp = avulsa[i][k];
							avulsa[i][k] = avulsa[i+1][k];
							avulsa[i+1][k] = tmp;
						}
					}
					else if (avulsa[i][6] == avulsa[i+1][6]) // goal fatti
					{
						if (avulsa[i][9] < avulsa[i+1][9]) // punti totali
						{
							for ( var k = 0; k < 10; k++ )
							{
								var tmp = avulsa[i][k];
								avulsa[i][k] = avulsa[i+1][k];
								avulsa[i+1][k] = tmp;
							}
						}	
					}
				}
			}
		}
	}
	// <-- sort

	// --> applica correzione
	for (i=0; i<3; i++)
	{
		for (j=idx[0]; j<idx[2]; j++)
		{
			if ( ( avulsa[i][0] == squadra[j][0] ) & ( ( i + idx[0] ) != j ) )
			{
				for ( var k = 0; k < 10; k++ )
				{
					var tmp = squadra[i + idx[0]][k];
					squadra[i + idx[0]][k] = squadra[j][k];
					squadra[j][k] = tmp;
				}
			}
		}
	}
	// <-- applica correzione
}