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

			inputTags.item(1).value = trim(div0[0]); // i primi tre input sono send close e reset.
			inputTags.item(2).value = trim(div0[1]);
			inputTags.item(3).value = trim(div1[0]);
			inputTags.item(4).value = trim(div1[1]);
			
			for(i=2; i<tdDivs.length; i++) {
				inputTags.item(3+i).value = tdDivs.item(i).firstChild.nodeValue; // saltare item 7 e 8 (aggiungi e togli un marcatore)
				goalDivs.item(i-1).style.display = 'block';
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
		var td_0 = id.split("-")[0] + "-0";
		var td_1 = id.split("-")[0] + "-1";
		
		var source_0 = document.getElementById( td_0 );
		var source_1 = document.getElementById( td_1 );		
		var the_divs_0 = source_0.getElementsByTagName('div');
		var the_divs_1 = source_1.getElementsByTagName('div');
		
		var hiddenBox = document.getElementById( 'hiddenBoxOld' );
		var inputTags = hiddenBox.getElementsByTagName('input');
		var goalDivs = hiddenBox.getElementsByTagName('div');
		var visibility = hiddenBox.style.visibility;

		if ( visibility == 'hidden' )
		{
			var offsetTop = evt.y - 200; // MSIE
			hiddenBox.style.top = offsetTop + 'px';			
			
			if (!evt.y) { // Firefox
				offsetTop = evt.pageY - 200;
				hiddenBox.style.top = offsetTop + "px";
			}
			
			hiddenBox.scrollIntoView(true);
			
			var goals_0 = the_divs_0.item(0).firstChild.nodeValue;
			var punti_0 = the_divs_0.item(1).firstChild.nodeValue;
			var goals_1 = the_divs_1.item(1).firstChild.nodeValue; // l'ordine dei goal e dei punti sono invertiti 
			var punti_1 = the_divs_1.item(0).firstChild.nodeValue; // per la squadra fuori casa

			inputTags.item(1).value = goals_0.replace(/^\s+|\s+$/g, ''); // i primi tre input sono send close e reset.
			retiA = goals_0.replace(/^\s+|\s+$/g, '');
			
			inputTags.item(2).value = goals_1.replace(/^\s+|\s+$/g, ''); // trim white spaces
			retiB = goals_1.replace(/^\s+|\s+$/g, '');
			
			goalsTot = retiA + retiB;
			
			inputTags.item(3).value = punti_0.replace(/^\s+|\s+$/g, '');
			inputTags.item(4).value = punti_1.replace(/^\s+|\s+$/g, '');

			for(i=2; i<the_divs_0.length; i++) {
				inputTags.item(3+i).value = the_divs_0.item(i).firstChild.nodeValue; // saltare item 7 e 8 (aggiungi e togli un marcatore)
				goalDivs.item(i-2).style.display = 'block';
			}
			
			inputTags.item(inputTags.length-1).value = id;

			hiddenBox.style.visibility = 'visible';
		}

	}	
	else {
		alert(":( DOM NON Supportato!");
	}
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
			
			for(i=1; i<goalDivs.length; i++){ 
				goalDivs.item(i).style.display = 'none'; }
			
			hiddenBox.style.visibility = 'hidden'; 
		}
	}
	else {
		alert(":( DOM NON Supportato!");
	}	
}

function goalsA(e)
{
	var unicode = e.keyCode ? e.keyCode : e.charCode;
	
	if( unicode <= 105 && unicode >= 96 )
	unicode = unicode - 48;

	if( unicode <= 57 && unicode >= 48 )
	{
		oldRetiA=retiA;
		retiA=unicode-48;
		
		if((retiA-oldRetiA)>0)
		{
			goalsTot+=(retiA-oldRetiA);
			for(var i=0;i<(retiA-oldRetiA);i++){
				addFieldA();
			}
		} else if((retiA-oldRetiA)<0){
			goalsTot-=(oldRetiA-retiA);
			for(var i=0;i<(oldRetiA-retiA);i++){
				deleteFieldA();
			}
		}
	}
}

function goalsB(e)	
{
	var unicode = e.keyCode ? e.keyCode : e.charCode;

	if( unicode <= 105 && unicode >= 96 )
	unicode = unicode - 48;
	
	if( unicode < 58 && unicode > 47 )
	{	
		oldRetiB=retiB;
		retiB=unicode-48;
		if((retiB-oldRetiB)>0)
		{
			goalsTot+=(retiB-oldRetiB);
			for(var i=0;i<(retiB-oldRetiB);i++){
				addFieldB();
			}
		} else if((retiB-oldRetiB)<0){
			goalsTot-=(oldRetiB-retiB);
			for(var i=0;i<(oldRetiB-retiB);i++){
				deleteFieldB();
			}
		}
	}
}

function addFieldA() 
{
	if( document.getElementById ) 
	{
		var hiddenBox = document.getElementById( "hiddenBoxOld" );
		var goalDivs = hiddenBox.getElementsByTagName('div');
		
		for(i=0; i<goalDivs.length; i++) {
			if( goalDivs.item(i).style.display == 'none' || goalDivs.item(i).style.display == '' ) {
				goalDivs.item(i).style.display = 'block';
				goalDivs.item(i).getElementsByTagName( 'input' ).item(0).value = '-';
				break; }
		}	
	}
	else {
		alert(":( DOM NON Supportato!");
	}	
	
	return;
}

function addFieldB() 
{
	if( document.getElementById ) 
	{
		var hiddenBox = document.getElementById( "hiddenBoxOld" );
		var goalDivs = hiddenBox.getElementsByTagName('div');
		
		for(i=0; i<goalDivs.length; i++) {
			if( goalDivs.item(i).style.display == 'none' || goalDivs.item(i).style.display == '' ) {
				goalDivs.item(i).style.display = 'block'; 
				goalDivs.item(i).getElementsByTagName( 'input' ).item(0).value = '-';
				break; }
		}	
	}
	else {
		alert(":( DOM NON Supportato!");
	}	
	
	return;
}

function deleteFieldA()
{
	if( document.getElementById ) 
	{
		var hiddenBox = document.getElementById( "hiddenBox" );
		var inputTags = hiddenBox.getElementsByTagName('input');
		var goalDivs = hiddenBox.getElementsByTagName('div');
		
		for(i=0; i<goalDivs.length; i++) {
			if( goalDivs.item(i).style.display == 'none' || goalDivs.item(i).style.display == '' ) {
				goalDivs.item(i-1).style.display = 'none';
				inputTags.item( 8+i ).value = '';
				break; }
		}	
	}
	else {
		alert(":( DOM NON Supportato!");
	}	
	
	return;
}

function deleteFieldB()
{
	if( document.getElementById ) 
	{
		var hiddenBox = document.getElementById( "hiddenBox" );
		var inputTags = hiddenBox.getElementsByTagName('input');
		var goalDivs = hiddenBox.getElementsByTagName('div');
		
		for(i=0; i<goalDivs.length; i++) {
			if( goalDivs.item(i).style.display == 'none' || goalDivs.item(i).style.display == '' ) {
				goalDivs.item(i-1).style.display = 'none';
				inputTags.item( 8+i ).value = '';
				break; }
		}	
	}
	else {
		alert(":( DOM NON Supportato!");
	}	
	
	return;
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

function arrangeTeams()
{
	if( document.getElementById ) 
	{
		var idAC = new Array(8);
		var idAF = new Array(8);
		var idRC = new Array(8);
		var idRF = new Array(8);
		var idNome1 = new Array(8);
		var idNome2 = new Array(8);
		var idWinner = new Array(8);
		var idLoser = new Array(8);
		
		idAC[0] = 'quarti0-0';
		idAF[0] = 'quarti0-1';
		idRC[0] = 'quarti4-0';
		idRF[0] = 'quarti4-1';
		idNome1[0] = 'quarti0C';
		idNome2[0] = 'quarti0F';
		idWinner[0] = 'semi0C';
		idLoser[0] = 'semi2C';
		
		idAC[1] = 'quarti1-0';
		idAF[1] = 'quarti1-1';
		idRC[1] = 'quarti5-0';
		idRF[1] = 'quarti5-1';
		idNome1[1] = 'quarti1C';
		idNome2[1] = 'quarti1F';
		idWinner[1] = 'semi1C';
		idLoser[1] = 'semi3C';
		
		idAC[2] = 'quarti2-0';
		idAF[2] = 'quarti2-1';
		idRC[2] = 'quarti6-0';
		idRF[2] = 'quarti6-1';
		idNome1[2] = 'quarti2C';
		idNome2[2] = 'quarti2F';
		idWinner[2] = 'semi0F';
		idLoser[2] = 'semi2F';
		
		idAC[3] = 'quarti3-0';
		idAF[3] = 'quarti3-1';
		idRC[3] = 'quarti7-0';
		idRF[3] = 'quarti7-1';
		idNome1[3] = 'quarti3C';
		idNome2[3] = 'quarti3F';
		idWinner[3] = 'semi1F';
		idLoser[3] = 'semi3F';
		
		idAC[4] = 'semi0-0';
		idAF[4] = 'semi0-1';
		idRC[4] = 'semi4-0';
		idRF[4] = 'semi4-1';
		idNome1[4] = 'semi0C';
		idNome2[4] = 'semi0F';
		idWinner[4] = 'finali0C';
		idLoser[4] = 'finali1C';
		
		idAC[5] = 'semi1-0';
		idAF[5] = 'semi1-1';
		idRC[5] = 'semi5-0';
		idRF[5] = 'semi5-1';
		idNome1[5] = 'semi1C';
		idNome2[5] = 'semi1F';
		idWinner[5] = 'finali0F';
		idLoser[5] = 'finali1F';
		
		idAC[6] = 'semi2-0';
		idAF[6] = 'semi2-1';
		idRC[6] = 'semi6-0';
		idRF[6] = 'semi6-1';
		idNome1[6] = 'semi2C';
		idNome2[6] = 'semi2F';
		idWinner[6] = 'finali2C';
		idLoser[6] = 'finali3C';
		
		idAC[7] = 'semi3-0';
		idAF[7] = 'semi3-1';
		idRC[7] = 'semi7-0';
		idRF[7] = 'semi7-1';
		idNome1[7] = 'semi3C';
		idNome2[7] = 'semi3F';
		idWinner[7] = 'finali2F';
		idLoser[7] = 'finali3F';
		
		for(j=0;j<8;j++)
		{
			var squadra1 = new Array(5);
			var squadra2 = new Array(5);
			
			var AC = idAC[j];
			var AF = idAF[j];
			var RF = idRC[j];
			var RC = idRF[j];
			var nomeSquadra1 = idNome1[j];
			var nomeSquadra2 = idNome2[j];
			var winner = idWinner[j];
			var loser = idLoser[j];
			
			var AndCasa = document.getElementById( AC );
			var goalsAndCasa = AndCasa.getElementsByTagName( 'div' ).item(0).innerHTML.replace(/&nbsp;/g,'');
			var puntiAndCasa = AndCasa.getElementsByTagName( 'div' ).item(1).innerHTML.replace(/&nbsp;/g,'');
			
			var AndFuori = document.getElementById( AF );
			var goalsAndFuori = AndFuori.getElementsByTagName( 'div' ).item(1).innerHTML.replace(/&nbsp;/g,'');
			var puntiAndFuori = AndFuori.getElementsByTagName( 'div' ).item(0).innerHTML.replace(/&nbsp;/g,'');
			
			var RitFuori = document.getElementById( RF );
			var goalsRitFuori = RitFuori.getElementsByTagName( 'div' ).item(0).innerHTML.replace(/&nbsp;/g,'');
			var puntiRitFuori = RitFuori.getElementsByTagName( 'div' ).item(1).innerHTML.replace(/&nbsp;/g,'');
			
			var RitCasa = document.getElementById( RC );
			var goalsRitCasa = RitCasa.getElementsByTagName( 'div' ).item(1).innerHTML.replace(/&nbsp;/g,'');
			var puntiRitCasa = RitCasa.getElementsByTagName( 'div' ).item(0).innerHTML.replace(/&nbsp;/g,'');
			
			if (goalsAndCasa > goalsAndFuori)
			{
				squadra1[0] = 3.0;
				squadra2[0] = 0.0;
				squadra1[1] = goalsAndCasa - goalsAndFuori;
				squadra2[1] = 0.0;
				squadra1[3] = puntiAndCasa - puntiAndFuori;
				squadra2[3] = 0.0;
			}
			else if (goalsAndCasa < goalsAndFuori)
			{
				squadra1[0] = 0.0;
				squadra2[0] = 3.0;
				squadra1[1] = 0.0;
				squadra2[1] = goalsAndFuori - goalsAndCasa;
				squadra1[3] = 0.0;
				squadra2[3] = puntiAndFuori - puntiAndCasa;
			}
			else
			{
				squadra1[0] = 1.0;
				squadra2[0] = 1.0;
				squadra1[1] = 0.0;
				squadra2[1] = 0.0;
				squadra1[3] = puntiAndCasa - puntiAndFuori;
				squadra2[3] = puntiAndFuori - puntiAndCasa;
			}
			
			squadra1[2] = 0.0;
			squadra2[2] = goalsAndFuori - 0.0; 
			
			if (goalsRitCasa > goalsRitFuori)
			{
				squadra2[0] += 3.0;
				squadra1[0] += 0.0;
				squadra2[1] += goalsRitCasa - goalsRitFuori;
				squadra1[1] += 0.0;
				squadra2[3] += puntiRitCasa - puntiRitFuori;
				squadra1[3] += 0.0;
			}
			else if (goalsRitCasa < goalsRitFuori)
			{
				squadra2[0] += 0.0;
				squadra1[0] += 3.0;
				squadra2[1] += 0.0;
				squadra1[1] += goalsRitFuori - goalsRitCasa;
				squadra2[3] += 0.0;
				squadra1[3] += puntiRitFuori - puntiRitCasa;
			}
			else
			{
				squadra2[0] += 1.0;
				squadra1[0] += 1.0;
				squadra2[1] += 0.0;
				squadra1[1] += 0.0;
				squadra2[3] += puntiRitCasa - puntiRitFuori;
				squadra1[3] += puntiRitFuori - puntiRitCasa;
			}
			
			squadra1[2] += goalsRitFuori - 0.0;
			squadra2[2] += 0.0;
			squadra1[4] = puntiRitFuori - 0.0;
			squadra2[4] = puntiRitCasa - 0.0;
			
			var index1 = 0.0;
			var index2 = 0.0;
			
			if(squadra1[0]>squadra2[0])
			{
				index1 += 10000;
			}
			else if(squadra1[0]<squadra2[0])
			{
				index2 += 10000;
			}
			
			if(squadra1[1]>squadra2[1])
			{
				index1 += 1000;
			}
			else if(squadra1[1]<squadra2[1])
			{
				index2 += 1000;
			}
			
			if(squadra1[2]>squadra2[2])
			{
				index1 += 100;
			}
			else if(squadra1[2]<squadra2[2])
			{
				index2 += 100;
			}
			
			if(squadra1[3]>squadra2[3])
			{
				index1 += 10;
			}
			else if(squadra1[3]<squadra2[3])
			{
				index2 += 10;
			}
			
			if(squadra1[4]>squadra2[4])
			{
				index1 += 1;
			}
			else if(squadra1[4]<squadra2[4])
			{
				index2 += 1;
			}
			
			if (index1>index2)
			{
				document.getElementById( winner ).innerHTML = document.getElementById( nomeSquadra1 ).innerHTML;
				document.getElementById( loser ).innerHTML = document.getElementById( nomeSquadra2 ).innerHTML;
			}
			else if (index1<index2)
			{
				document.getElementById( winner ).innerHTML = document.getElementById( nomeSquadra2 ).innerHTML;
				document.getElementById( loser ).innerHTML = document.getElementById( nomeSquadra1 ).innerHTML;
			}
		}
		
		if ( document.getElementById( 'finali0-0' ).getElementsByTagName('div').item(0).innerHTML.replace(/&nbsp;/g,'') > document.getElementById( 'finali0-1' ).getElementsByTagName('div').item(1).innerHTML.replace(/&nbsp;/g,'') )
		{
			document.getElementById( 'finali0C' ).style.backgroundColor = 'specialColor';
			document.getElementById( 'finali0C' ).style.border = '2px solid ' + 'textColor0';
		} 
		else if ( document.getElementById( 'finali0-1' ).getElementsByTagName('div').item(1).innerHTML.replace(/&nbsp;/g,'') > document.getElementById( 'finali0-0' ).getElementsByTagName('div').item(0).innerHTML.replace(/&nbsp;/g,'') )
		{
			document.getElementById( 'finali0F' ).style.backgroundColor = 'specialColor';	
			document.getElementById( 'finali0F' ).style.border = '2px solid ' + 'textColor0';
		}
		else
		{
			if ( document.getElementById( 'finali0-0' ).getElementsByTagName('div').item(1).innerHTML.replace(/&nbsp;/g,'') > document.getElementById( 'finali0-1' ).getElementsByTagName('div').item(0).innerHTML.replace(/&nbsp;/g,'') )
			{
				document.getElementById( 'finali0C' ).style.backgroundColor = 'specialColor';
				document.getElementById( 'finali0C' ).style.border = '2px solid ' + 'textColor0';
			} 
			else if ( document.getElementById( 'finali0-1' ).getElementsByTagName('div').item(0).innerHTML.replace(/&nbsp;/g,'') > document.getElementById( 'finali0-0' ).getElementsByTagName('div').item(1).innerHTML.replace(/&nbsp;/g,'') )
			{
				document.getElementById( 'finali0F' ).style.backgroundColor = 'specialColor';	
				document.getElementById( 'finali0F' ).style.border = '2px solid ' + 'textColor0';
			}
		}
	}
	else 
	{
		alert(":( DOM NON Supportato!");
	}	
	
	return;
}
