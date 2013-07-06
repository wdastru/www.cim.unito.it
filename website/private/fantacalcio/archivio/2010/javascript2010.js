// JavaScript Document
function showBoxCampionato( id, evt )
{
	oldRetiA=0;
	oldRetiB=0;
	
	if( document.getElementById ) 
	{
		var source = document.getElementById( id );
		var hiddenBox = document.getElementById( 'hiddenBoxOld' );
		var inputTags = hiddenBox.getElementsByTagName('input');
		var goalDivs = hiddenBox.getElementsByTagName('div');
		var visibility = hiddenBox.style.visibility;
		
		/* nomi squadre : hiddenBox.getElementsByTagName('span').item(1) � il - di separazione */
		hiddenBox.getElementsByTagName('span').item(0).innerHTML = source.getElementsByTagName('span').item(0).innerHTML;
		hiddenBox.getElementsByTagName('span').item(2).innerHTML = source.getElementsByTagName('span').item(1).innerHTML;
		
		for (i=0; i<3; i++) {
			hiddenBox.getElementsByTagName('span').item(i).style.fontSize = '14px';
			hiddenBox.getElementsByTagName('span').item(i).style.color = '#FFFF00';
		}
		/* nomi squadre */
		
		if ( visibility == 'hidden' )
		{
			var offsetTop = evt.y - 200; // MSIE
			hiddenBox.style.top = offsetTop + 'px';			
			
			if (!evt.y) { // Firefox
				offsetTop = evt.pageY - 200;
				hiddenBox.style.top = offsetTop + 'px';
			}
			
			hiddenBox.scrollIntoView(true);
			
			var tdDivs = source.getElementsByTagName('div');
			
			var div0 = tdDivs.item(0).firstChild.nodeValue.split("-");
			var div1 = tdDivs.item(1).firstChild.nodeValue.split("-");
			
			// il primo input e' close.
			inputTags.item(1).value = retiA = trim(div0[0]);
			inputTags.item(2).value = retiB = trim(div0[1]);

			if (retiA == '')
				retiA = 0;
			if (retiB == '')
				retiB = 0;
			
			goalsTot = parseInt(retiA) + parseInt(retiB);
			if (isNaN(goalsTot)) 
				goalsTot = 0;
			
			inputTags.item(3).value = trim(div1[0]);
			inputTags.item(4).value = trim(div1[1]);

			for(i=0; i<goalsTot; i++) {
				goalDivs.item(i).style.display = 'block';
				inputTags.item(5+i).value = tdDivs.item(2+i).innerHTML // tdDivs: saltare item 0 e 1 (goals e punteggi)
			}
			
			inputTags.item(inputTags.length-1).value = id;

			hiddenBox.style.visibility = 'visible';
		}
	}	
	else {
		alert(":( DOM NON Supportato!");
	}
}

function showBoxCoppa( id, evt )
{
	oldRetiA=0;
	oldRetiB=0;
	
	if( document.getElementById ) 
	{
		var td_casa = id.split("_")[0] + "_C_dati";
		var td_fuori = id.split("_")[0] + "_F_dati";

		var source_casa = document.getElementById( td_casa );
		var source_fuori = document.getElementById( td_fuori );
		
		var divs_casa = source_casa.getElementsByTagName('div');
		var divs_fuori = source_fuori.getElementsByTagName('div');
		
		var hiddenBox = document.getElementById( 'hiddenBoxOld' );
		
		var inputTags = hiddenBox.getElementsByTagName('input');
		var goalDivs = hiddenBox.getElementsByTagName('div');
		var visibility = hiddenBox.style.visibility;

		// titolo box 
		if (id.substring(0,6) == 'gruppi')
		{
			// nomi squadre : hiddenBox.getElementsByTagName('span').item(1) � il - di separazione			
			if ( id.substring(6,8) == '10' || id.substring(6,8) == '11' )
			{
				hiddenBox.getElementsByTagName('span').item(0).innerHTML = document.getElementById('gruppi'+id.substring(6,8)+'_C_nome').innerHTML;
				hiddenBox.getElementsByTagName('span').item(2).innerHTML = document.getElementById('gruppi'+id.substring(6,8)+'_F_nome').innerHTML;
			} else {
				hiddenBox.getElementsByTagName('span').item(0).innerHTML = document.getElementById('gruppi'+id.substring(6,7)+'_C_nome').innerHTML;
				hiddenBox.getElementsByTagName('span').item(2).innerHTML = document.getElementById('gruppi'+id.substring(6,7)+'_F_nome').innerHTML;
			}				
		} else if (id.substring(0,4) == 'semi') {
			// nomi squadre : hiddenBox.getElementsByTagName('span').item(1) � il - di separazione					
			hiddenBox.getElementsByTagName('span').item(0).innerHTML = document.getElementById('semi'+id.substring(4,5)+'_C_nome').innerHTML;
			hiddenBox.getElementsByTagName('span').item(2).innerHTML = document.getElementById('semi'+id.substring(4,5)+'_F_nome').innerHTML;
		} else if (id.substring(0,6) == 'finali') {
			// nomi squadre : hiddenBox.getElementsByTagName('span').item(1) � il - di separazione			
			hiddenBox.getElementsByTagName('span').item(0).innerHTML = document.getElementById('finali'+id.substring(6,7)+'_C_nome').innerHTML;
			hiddenBox.getElementsByTagName('span').item(2).innerHTML = document.getElementById('finali'+id.substring(6,7)+'_F_nome').innerHTML;
		}

		if ( visibility == 'hidden' )
		{
			var offsetTop = evt.y - 200; // MSIE
			hiddenBox.style.top = offsetTop + 'px';			
			
			if (!evt.y) { // Firefox
				offsetTop = evt.pageY - 200;
				hiddenBox.style.top = offsetTop + "px";
			}
			
			hiddenBox.scrollIntoView(true);

			var goals_casa = divs_casa.item(0).innerHTML;
			var punti_casa = divs_casa.item(1).innerHTML;
			var goals_fuori = divs_fuori.item(0).innerHTML; // l'ordine dei goal e dei punti sono invertiti 
			var punti_fuori = divs_fuori.item(1).innerHTML; // per la squadra fuori casa

			// i primi tre input sono send close e reset.
			// il primo input e' close.
 			inputTags.item(1).value = retiA = trim(goals_casa).replace(/\&nbsp\;/g,'');			
			inputTags.item(2).value = retiB = trim(goals_fuori).replace(/\&nbsp\;/g,''); // trim white spaces			
						
			if(inputTags.item(1).value == '-')
				inputTags.item(1).value = '';
			if(inputTags.item(2).value == '-')
				inputTags.item(2).value = '';
			
			if (retiA == '')
				retiA = 0;
			if (retiB == '')
				retiB = 0;

			goalsTot = parseInt(retiA, 10) + parseInt(retiB, 10);
			if ( isNaN(goalsTot) ) 
				goalsTot = 0;
				
 			inputTags.item(3).value = trim(punti_casa).replace(/\&nbsp\;/g,'');			
			inputTags.item(4).value = trim(punti_fuori).replace(/\&nbsp\;/g,''); // trim white spaces			

			if(inputTags.item(3).value == '-')
				inputTags.item(3).value = '';
			if(inputTags.item(4).value == '-')
				inputTags.item(4).value = '';

			for(i=0; i<goalsTot; i++) {
				inputTags.item(5+i).value = source_casa.getElementsByTagName('div').item(2+i).innerHTML; 
				if(inputTags.item(5+i).value == '-')
					inputTags.item(5+i).value = '';
				goalDivs.item(i).style.display = 'block';
			}

			inputTags.item(inputTags.length-1).value = id;
			
			hiddenBox.style.visibility = 'visible';
		}
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function resetFields()
{
	var hiddenBox = document.getElementById( 'hiddenBoxOld' );
	var inputTags = hiddenBox.getElementsByTagName('input');
		
	inputTags.item(3).value = '';
	inputTags.item(4).value = '';
	inputTags.item(5).value = '';
	inputTags.item(6).value = '';
	
	for (var i=0; i<20; i++)
		inputTags.item(9+i).value = '';
}

function hideBox( id )
{
	if( document.getElementById ) 
	{
		var hiddenBox = document.getElementById( "hiddenBoxOld" );
		var goalDivs = hiddenBox.getElementsByTagName('div');
		var inputTags = hiddenBox.getElementsByTagName('input');
		
		var visibility = hiddenBox.style.visibility;
		
		if ( visibility == 'visible' ){
			for(i=3; i<inputTags.length; i++){ 
				if(i==7 || i==8) continue;
				inputTags.item( i ).value = '';	}
			
			for(i=0; i<goalDivs.length; i++){ 
				goalDivs.item(i).style.display = 'none'; }
			
			hiddenBox.style.visibility = 'hidden'; 
		}
	}
	else {
		alert(":( DOM NON Supportato!");
	}	
}

function goals()
{
	oldGoalsTot=goalsTot;
	//alert("goal = "+goalsTot);
	if (document.getElementsByName('goalA').item(0).value == '')
	{
		retiA = 0;
	} else {
		retiA = parseInt(document.getElementsByName('goalA').item(0).value * 1, 10);
	}
	
	if (document.getElementsByName('goalB').item(0).value == '')
	{
		retiB = 0;
	} else {
		retiB = parseInt(document.getElementsByName('goalB').item(0).value * 1, 10);
	}

	goalsTot = parseInt(retiA, 10) + parseInt(retiB, 10);
	if ( isNaN(goalsTot) ) 
		goalsTot = 0;

	//alert(oldGoalsTot);
	if((goalsTot-oldGoalsTot)>0)
	{
		if (goalsTot > 20) // perch� sono previsti al massimo 20 goal totali in hiddenBox
			goalsTot = 20;
			
		for(var i=0;i<(goalsTot-oldGoalsTot);i++)
		{
			addField();
		}
	} 
	else if((goalsTot-oldGoalsTot)<0)
	{
		if (oldGoalsTot > 20) // perch� sono previsti al massimo 20 goal totali in hiddenBox
			oldGoalsTot = 20;

		for(var i=0;i>(goalsTot-oldGoalsTot);i--)
		{
			deleteField();
		}
	}
}

function addField() 
{
	if( document.getElementById ) 
	{
		var hiddenBox = document.getElementById( "hiddenBoxOld" );
		var goalDivs = hiddenBox.getElementsByTagName('div');
		var visibleGoalDivs = 0;
		for(i=0; i<goalDivs.length; i++) 
		{
			visibleGoalDivs += 1;
			if( goalDivs.item(i).style.display == 'none' || goalDivs.item(i).style.display == '' ) 			
			{
				goalDivs.item(i).style.display = 'block';
				goalDivs.item(i).getElementsByTagName( 'input' ).item(0).value = '';
				break; 
			}
		}
	}
	else {
		alert(":( DOM NON Supportato!");
	}	
	
	return;
}

function manualAddField()
{
	goalsTot += 1;
	if (goalsTot > 20) // perch� sono previsti al massimo 20 goal totali in hiddenBox
		goalsTot = 20;
	addField();	
}

function deleteField()
{
	if( document.getElementById ) 
	{
		var hiddenBox = document.getElementById( "hiddenBoxOld" );
		var inputTags = hiddenBox.getElementsByTagName('input');
		var goalDivs = hiddenBox.getElementsByTagName('div');
		var visibleGoalDivs = 20;
		
		for(i=goalDivs.length-1; i>=0; i--) 
		{
			if( goalDivs.item(i).style.display == 'block')
			{
				goalDivs.item(i).style.display = 'none';
				goalDivs.item(i).getElementsByTagName( 'input' ).item(0).value = '-';
				visibleGoalDivs -= 1;
				break;
			}
			else
			{
				visibleGoalDivs -= 1;
			}
		}	
	}
	else {
		alert(":( DOM NON Supportato!");
	}	
	
	return;
}

function manualDeleteField()
{
	goalsTot -= 1;
	deleteField();	
}

function validate( what )
{
	if( document.getElementById ) 
	{
		form = document.getElementById('formRisultati')
		if( what == 'campionato' ) {
			form.action = 'newRisultatiCampionato.php'; }
		if( what == 'coppa' ) {
			form.action = 'newRisultatiCoppa.php'; }
		
		form.submit();
	}	
	else {
		alert(":( DOM NON Supportato!");
	}
}

// Removes leading whitespaces
function LTrim( value ) 
{
	var re = /\s*((\S+\s*)*)/;
	return value.replace(re, "$1");
	
}

// Removes ending whitespaces
function RTrim( value ) 
{
	var re = /((\s*\S+)*)\s*/;
	return value.replace(re, "$1");
	
}

// Removes leading and ending whitespaces
function trim( value ) 
{
	return LTrim(RTrim(value));
	
}

function changeVistaDescription( sourceId, desc ) 
{
	if( document.getElementById ) 
	{	
		var source = document.getElementById(sourceId);
		source.style.backgroundColor = '#88CCFF';
		source.style.border = '1px solid #0055FF';
		
		var selectedVista = document.getElementById('selectedVista');
		selectedVista.innerHTML = desc.replace('_', ' ');
		
		var table = document.getElementById('tableRosa');
		var td = table.getElementsByTagName('td');
		for (var i=0; i< td.length; i++)
		{
			if (td.item(i).className == 'titolare' || td.item(i).className == 'riserva' || td.item(i).className == 'tribuna')
			{
				var span = td.item(i).getElementsByTagName('span');
				for (var j=0; j<span.length; j++)
				{
					if (span.item(j).className == desc)
						span.item(j).style.display = 'inline';
					else if (span.item(j).className == 'notFound')
						span.item(j).style.display = 'inline';
					else 
						span.item(j).style.display = 'none';
				}
			}	
		}
	}
	else 
	{
		alert(":( DOM NON Supportato!");
	}	
}

function hideVistaDescription( sourceId ) 
{
	if( document.getElementById ) 
	{
		var source = document.getElementById(sourceId);
		source.style.backgroundColor = '#CCCCCC';
		source.style.border = '1px solid #CCCCCC';
	}
	else 
	{
		alert(":( DOM NON Supportato!");
	}	
}

function vistaSubmit() 
{
	if( document.getElementById ) 
	{
		var form = document.getElementById('vista_form');
		form.submit();
	}
	else 
	{
		alert(":( DOM NON Supportato!");
	}	
}