// JavaScript Document
data = new Array(4); // array contenente le tabelle per i quattro ruoli
rows_length = new Array(4);
cells_length = new Array(4);
tab = new Array(4);
tab[0] = 'por';
tab[1] = 'dif';
tab[2] = 'cen';
tab[3] = 'att';
ruolo = new Array(4);
ruolo[0] = 'portiere';
ruolo[1] = 'difensore';
ruolo[2] = 'centrocampista';
ruolo[3] = 'attaccante';
sortedColumn = new Array(4);
sortedColumn[0] = sortedColumn[1] = sortedColumn[2] = sortedColumn[3] = 0;
sortedOrder = new Array(4);
sortedOrder[0] = sortedOrder[1] = sortedOrder[2] = sortedOrder[3] = 'asc';
		
function readData () {
	/*
	var now = new Date();
	var inTime = now.getTime();
	/**/
	
	if( document.getElementById ) 
	{
		for (i=0; i<4; i++) // ruolo
		{
			var table = document.getElementById(tab[i]).getElementsByTagName('table').item(0);
			
			var rows = table.rows;
			rows_length[i] = rows.length;
			var cells = table.rows.item(0).cells;
			cells_length[i] = cells.length;
			
			data[i] = new Array(rows_length)
			for (j=0; j<rows_length[i]; j++)
				data[i][j] = new Array(cells_length[i])
			
			for (var j=0; j<rows_length[i]; j++)
			{
				for (var k=0; k<cells_length[i]; k++)
				{
					if (k != 7)
						data[i][j][k] = rows.item(j).cells.item(k).firstChild.nodeValue;
					else
						data[i][j][k] = rows.item(j).cells.item(k).innerHTML;
				}
			}	
		}
	}
	else 
	{
		alert(":( DOM NON Supportato!");
	}
	
	/*
	var then = new Date();
	var outTime = then.getTime();
	alert('readData : '+(outTime-inTime));
	/**/
}

function sortByColumn (col, tabId) {
	if( document.getElementById ) 
	{
		updateTableTime = 0;
		bubbleSortTime = 0;
		reverseOrderTime = 0;
		/*
		var now = new Date();
		var inTime = now.getTime();
		/**/
		
		var col = parseInt(col);
		var tabId = parseInt(tabId);
		
		if (sortedColumn[tabId] == col)
			reverseOrder(tabId);
		else
			bubbleSort(col, tabId)

		updateTable(tabId);
		updateArrows(col, tabId);
		sortedColumn[tabId] = col;
		
		/*
		var then = new Date();
		var outTime = then.getTime();
		alert('sortByColumn : '+parseFloat(outTime-inTime)+'\nupdateTable : '+updateTableTime+'\nbubbleSort : '+bubbleSortTime+'\nreverseOrder : '+reverseOrderTime);
		/**/
	}
	else 
	{
		alert(":( DOM NON Supportato!");
	}
}

function bubbleSort(col, tabId) {
	/*
	var now = new Date();
	var inTime = now.getTime();
	/**/

	var containerDiv = document.getElementById(tab[tabId]);
	var table = containerDiv.getElementsByTagName('table');
	var trs = table.item(0).getElementsByTagName('tr');
	
	/* bubble sort */
	/* sort on data[][][] */
	var alphabetic_sort = isNaN( data[tabId][0][col] );
	if ( data[tabId][0][col] == '-' )
		alphabetic_sort = false;
	
	for ( var j=0; j<(rows_length[tabId]-1); j++ )
	{
		for ( var i=0; i<(rows_length[tabId]-1-j); i++ )
		{
			if ( alphabetic_sort ) // sort alphabetic order
			{
				if( data[tabId][i+1][col] < data[tabId][i][col] )
				{
					for (var k=0; k<cells_length[tabId]; k++)
					{
						var tmp = data[tabId][i+1][k];
						data[tabId][i+1][k] = data[tabId][i][k];
						data[tabId][i][k] = tmp;
					}
				}
			}
			else // sort numeric order
			{
				if ( isNaN( parseFloat( data[tabId][i][col] ) ) && isNaN( parseFloat( data[tabId][i+1][col] ) ) ) // i : NaN AND i+1 : NaN
					var switchRows = false;
				else if ( isNaN( parseFloat( data[tabId][i][col] ) ) ) // i : NaN
					var switchRows = true;
				else if ( isNaN( parseFloat( data[tabId][i+1][col] ) ) ) // i+1 : NaN
					var switchRows = false;
				else
					var switchRows = parseFloat( data[tabId][i+1][col] ) > parseFloat( data[tabId][i][col] );
				 
				if( switchRows )
				{
					for (var k=0; k<cells_length[tabId]; k++)
					{
						var tmp = data[tabId][i+1][k];
						data[tabId][i+1][k] = data[tabId][i][k];
						data[tabId][i][k] = tmp;
					}
				}
			}
		}
	}
	
	sortedOrder[tabId] = 'asc';
	
	/*
	var then = new Date();
	var outTime = then.getTime();
	bubbleSortTime = outTime-inTime;
	/**/
}

function updateArrows(col, tabId) {
	for( var i=0; i<cells_length[tabId]; i++ )
	{
		if ( i==col )
		{
			if (sortedOrder[tabId] == 'asc' )
			{
				if ( col == 0 || col == 1 || col == 2 )
					document.getElementById('arrowColumn'+tabId+'_'+i).style.backgroundImage = 'url(figure/up_Arrow_innerWhite.png)';
				else
					document.getElementById('arrowColumn'+tabId+'_'+i).style.backgroundImage = 'url(figure/down_Arrow_innerWhite.png)';
			}
			else
			{
				if ( col == 0 || col == 1 || col == 2 )
					document.getElementById('arrowColumn'+tabId+'_'+i).style.backgroundImage = 'url(figure/down_Arrow_innerWhite.png)';
				else
					document.getElementById('arrowColumn'+tabId+'_'+i).style.backgroundImage = 'url(figure/up_Arrow_innerWhite.png)';
			}
		}
		else
		{
			document.getElementById('arrowColumn'+tabId+'_'+i).style.backgroundImage = 'url(figure/no_Arrow.png)';
		}
	}	
}

function updateTable(tabId) {
	/*
	var now = new Date();
	var inTime = now.getTime();
	/**/
	var columnWidth = Array('172px', '121px', '100px', '70px', '70px', '70px', '70px', '52px');
	var columnColor = 'textColor0';

	var containerDiv = document.getElementById(tab[tabId]);
	var table = containerDiv.getElementsByTagName('table');
	var trs = table.item(0).getElementsByTagName('tr');
	table.item(0).style.borderCollapse = 'collapse'; // IE 7

	for (var k=0; k<1; k++) // ripetizione blocco per testing della velocità
	{
		/**/
		var newTBody = document.createElement('tbody');
		newTBody.setAttribute('class', 'scrollContent');
		
		for ( var j=0; j<rows_length[tabId]; j++ )
		{
			var newRow = document.createElement('tr');
			
			/* --> estrazione dell'id corrispondente al bottone Offri */
			var tokens = data[tabId][j][7].split(/, /); // non sono riuscito a scrivere una RegExp che estraesse i due numeri in un colpo solo.
			if ( tokens.length == 2 )
			{
				var tokens2 = tokens[0].split(/\(/);
				var tokens3 = tokens[1].split(/\)/);
				var id = 'offer_'+tokens2[1]+'_'+tokens3[0];
				newRow.setAttribute('id', id);
			}			
			/* <-- estrazione dell'id corrispondente al bottone Offri */

			if( j % 2 )
			{
				newRow.setAttribute('class', 'normalRow');
				newRow.bgColor = 'textColor4'; // IE 7
			}
			else
			{
				newRow.setAttribute('class', 'alternateRow');		
				newRow.bgColor = 'bkgdColorLigther'; // IE 7
			}
	
			for ( var i=0; i<cells_length[tabId]; i++ )
			{
				var newCell = document.createElement('td');
				newCell.width = columnWidth[i];
				newCell.style.border = '1px solid plBorderColor';
				newCell.style.padding = '2px 0 3px 0'; // IE 7
				var className = 'bodyColumn'+i;
				if ( i == 2 )
				{
					if ( data[tabId][j][2] == 'libero' )
					{
						newCell.style.color = 'textColor1'; // IE 7
						className += ' free';
					}
					else
					{
						newCell.style.color = 'textColor2'; // IE 7
						className += ' owned';
					}
				}
				else
					newCell.style.color = columnColor; // IE 7

				newCell.setAttribute('class', className);
				newCell.innerHTML = data[tabId][j][i];
				newRow.appendChild(newCell);
				newRow.height = '15px'; // IE 7
			}
			newTBody.appendChild(newRow);
		}
	
		table.item(0).removeChild(table.item(0).getElementsByTagName('tbody').item(0));
		table.item(0).appendChild(newTBody);
		/**/
	}
	
	/*
	var then = new Date();
	var outTime = then.getTime();
	updateTableTime = (outTime-inTime)/1;
	/**/
}

function reverseOrder(tabId) {
	/*
	var now = new Date();
	var inTime = now.getTime();
	/**/

	for (var i=0; i<rows_length[tabId]; i++)
	{
		for (var k=0; k<cells_length[tabId]; k++)
		{
			var tmp = data[tabId][i][k];
			data[tabId][i][k] = data[tabId][rows_length[tabId]-1-i][k];
			data[tabId][rows_length[tabId]-1-i][k] = tmp;
		}
		
		if ( i >= rows_length[tabId]-1-i )
			break;
	}
	
	if (sortedOrder[tabId] == 'asc')
		sortedOrder[tabId] = 'desc';
	else
		sortedOrder[tabId] = 'asc';
	
	/*
	var then = new Date();
	var outTime = then.getTime();
	reverseOrderTime = (outTime-inTime);
	/**/
}

function offerClicked( tab, row ) 
{
	id = 'offer_' + tab + '_' + row;
	var box = document.getElementById('hiddenOfferBox');
	box.style.visibility = 'visible';
	var inputs = box.getElementsByTagName('input');
	inputs.item(0).value = document.getElementById(id).getElementsByTagName('td').item(0).innerHTML;
	inputs.item(1).value = ruolo[tab].toUpperCase();
	inputs.item(2).value = document.getElementById(id).getElementsByTagName('td').item(1).innerHTML;
}

// ***
// Pauses all functionality sleeps the thread for specified time
// ***
function sleep(milliseconds)
{
	var now = new Date();
	var exitTime = now.getTime() + milliseconds;
	while (true)
	{
		now = new Date();
		if (now.getTime() > exitTime)
			return;
	}
}

/*
function exchange(i, j, tableID)
{
	var table = document.getElementByID('tableID');
	var trs = oTable.tBodies[0].getElementsByTagName("tr");
	
	if(i == j+1) {
		oTable.tBodies[0].insertBefore(trs[i], trs[j]);
	} else if(j == i+1) {
		oTable.tBodies[0].insertBefore(trs[j], trs[i]);
	} else {
		var tmpNode = oTable.tBodies[0].replaceChild(trs[i], trs[j]);
		if(typeof(trs[i]) != "undefined") {
			oTable.tBodies[0].insertBefore(tmpNode, trs[i]);
		} else {
			oTable.appendChild(tmpNode);
		}
	}
}
*/