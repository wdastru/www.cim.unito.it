// JavaScript Document
function showBoxCampionato(id, evt) {
	oldRetiA = 0;
	oldRetiB = 0;

	if (document.getElementById) {
		var source = document.getElementById(id);
		var hiddenBox = document.getElementById('hiddenBox');
		var inputTags = hiddenBox.getElementsByTagName('input');
		var goalDivs = hiddenBox.getElementsByTagName('div');
		var visibility = hiddenBox.style.visibility;

		/*
		 * nomi squadre : hiddenBox.getElementsByTagName('span').item(1) è il -
		 * di separazione
		 */
		hiddenBox.getElementsByTagName('span').item(0).innerHTML = source
				.getElementsByTagName('span').item(0).innerHTML;
		hiddenBox.getElementsByTagName('span').item(2).innerHTML = source
				.getElementsByTagName('span').item(1).innerHTML;

		/*
		 * titolo del Box
		 */
		for (i = 0; i < 3; i++) {
			hiddenBox.getElementsByTagName('span').item(i).style.fontSize = '14px';
			hiddenBox.getElementsByTagName('span').item(i).style.color = 'titleHiddenBox';
		}
		/* nomi squadre */

		if (visibility == 'hidden') {
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

			// i primi tre input sono send close e reset.
			inputTags.item(3).value = retiA = trimWS(div0[0]);
			inputTags.item(4).value = retiB = trimWS(div0[1]);

			if (retiA == '')
				retiA = 0;
			if (retiB == '')
				retiB = 0;

			goalsTot = parseInt(retiA) + parseInt(retiB);
			if (isNaN(goalsTot))
				goalsTot = 0;

			inputTags.item(5).value = trimWS(div1[0]);
			inputTags.item(6).value = trimWS(div1[1]);

			for (i = 0; i < goalsTot; i++) {
				/*
				 * riga sotto: item(i+1) perchè il primo div di hiddenBox è il
				 * titolo dell'hiddenBox
				 */
				goalDivs.item(i + 1).style.display = 'block';
				inputTags.item(9 + i).value = tdDivs.item(2 + i).innerHTML // inputTags:
																			// saltare
																			// item
																			// 7 e
																			// 8
																			// (aggiungi
																			// e
																			// togli
																			// un
																			// marcatore);
																			// tdDivs:
																			// saltare
																			// item
																			// 0 e
																			// 1
																			// (goals
																			// e
																			// punteggi)
			}

			inputTags.item(inputTags.length - 1).value = id;

			hiddenBox.style.visibility = 'visible';
		}
	} else {
		alert(":( DOM NON Supportato!");
	}
}
function showBoxCoppa(id, evt) {
	oldRetiA = 0;
	oldRetiB = 0;

	if (document.getElementById) {
		var td_casa = id.split("_")[0] + "_C_dati";
		var td_fuori = id.split("_")[0] + "_F_dati";

		var source_casa = document.getElementById(td_casa);
		var source_fuori = document.getElementById(td_fuori);

		var divs_casa = source_casa.getElementsByTagName('div');
		var divs_fuori = source_fuori.getElementsByTagName('div');

		var hiddenBox = document.getElementById('hiddenBox');

		var inputTags = hiddenBox.getElementsByTagName('input');
		var goalDivs = hiddenBox.getElementsByTagName('div');
		var visibility = hiddenBox.style.visibility;

		// titolo box
		if (id.substring(0, 6) == 'gruppi') {
			// nomi squadre : hiddenBox.getElementsByTagName('span').item(1) è
			// il - di separazione
			if (id.substring(6, 8) == '10' || id.substring(6, 8) == '11') {
				hiddenBox.getElementsByTagName('span').item(0).innerHTML = document
						.getElementById('gruppi' + id.substring(6, 8)
								+ '_C_nome').innerHTML;
				hiddenBox.getElementsByTagName('span').item(2).innerHTML = document
						.getElementById('gruppi' + id.substring(6, 8)
								+ '_F_nome').innerHTML;
			} else {
				hiddenBox.getElementsByTagName('span').item(0).innerHTML = document
						.getElementById('gruppi' + id.substring(6, 7)
								+ '_C_nome').innerHTML;
				hiddenBox.getElementsByTagName('span').item(2).innerHTML = document
						.getElementById('gruppi' + id.substring(6, 7)
								+ '_F_nome').innerHTML;
			}
		} else if (id.substring(0, 4) == 'semi') {
			// nomi squadre : hiddenBox.getElementsByTagName('span').item(1) è
			// il - di separazione
			hiddenBox.getElementsByTagName('span').item(0).innerHTML = document
					.getElementById('semi' + id.substring(4, 5) + '_C_nome').innerHTML;
			hiddenBox.getElementsByTagName('span').item(2).innerHTML = document
					.getElementById('semi' + id.substring(4, 5) + '_F_nome').innerHTML;
		} else if (id.substring(0, 6) == 'finali') {
			// nomi squadre : hiddenBox.getElementsByTagName('span').item(1) è
			// il - di separazione
			hiddenBox.getElementsByTagName('span').item(0).innerHTML = document
					.getElementById('finali' + id.substring(6, 7) + '_C_nome').innerHTML;
			hiddenBox.getElementsByTagName('span').item(2).innerHTML = document
					.getElementById('finali' + id.substring(6, 7) + '_F_nome').innerHTML;
		}

		if (visibility == 'hidden') {
			var offsetTop = evt.y - 200; // MSIE
			hiddenBox.style.top = offsetTop + 'px';

			if (!evt.y) { // Firefox
				offsetTop = evt.pageY - 200;
				hiddenBox.style.top = offsetTop + "px";
			}

			hiddenBox.scrollIntoView(true);

			var goals_casa = divs_casa.item(0).innerHTML;
			var punti_casa = divs_casa.item(1).innerHTML;
			var goals_fuori = divs_fuori.item(0).innerHTML; // l'ordine dei goal
															// e dei punti sono
															// invertiti
			var punti_fuori = divs_fuori.item(1).innerHTML; // per la squadra
															// fuori casa

			// i primi tre input sono send close e reset.
			inputTags.item(3).value = retiA = trimWS(goals_casa).replace(
					/\&nbsp\;/g, '');
			inputTags.item(4).value = retiB = trimWS(goals_fuori).replace(
					/\&nbsp\;/g, ''); // trim white spaces

			if (inputTags.item(3).value == '-')
				inputTags.item(3).value = '';
			if (inputTags.item(4).value == '-')
				inputTags.item(4).value = '';

			if (retiA == '')
				retiA = 0;
			if (retiB == '')
				retiB = 0;

			goalsTot = parseInt(retiA, 10) + parseInt(retiB, 10);
			if (isNaN(goalsTot))
				goalsTot = 0;

			inputTags.item(5).value = trimWS(punti_casa).replace(/\&nbsp\;/g,
					'');
			inputTags.item(6).value = trimWS(punti_fuori).replace(/\&nbsp\;/g,
					''); // trim white spaces

			if (inputTags.item(5).value == '-')
				inputTags.item(5).value = '';
			if (inputTags.item(6).value == '-')
				inputTags.item(6).value = '';

			/*
			 * l' i + 1 in goalDivs.item(i+1).style.display = 'block'; è dovuto
			 * al fatto che il primo div è quello del titolo di hiddenBox
			 */
			for (i = 0; i < goalsTot; i++) {
				inputTags.item(9 + i).value = source_casa.getElementsByTagName(
						'div').item(2 + i).innerHTML; // inputTags: saltare
														// item 7 e 8 (aggiungi
														// e togli un
														// marcatore);
				if (inputTags.item(9 + i).value == '-')
					inputTags.item(9 + i).value = '';
				goalDivs.item(i + 1).style.display = 'block';
			}

			inputTags.item(inputTags.length - 1).value = id;

			hiddenBox.style.visibility = 'visible';
		}
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function resetFields() {
	var hiddenBox = document.getElementById('hiddenBox');
	var inputTags = hiddenBox.getElementsByTagName('input');

	inputTags.item(3).value = '';
	inputTags.item(4).value = '';
	inputTags.item(5).value = '';
	inputTags.item(6).value = '';

	for ( var i = 0; i < 20; i++)
		inputTags.item(9 + i).value = '';
}

function offerBoxResetFields() {
	var hiddenBox = document.getElementById('hiddenOfferBox');
	var inputTags = hiddenBox.getElementsByTagName('input');

	for ( var i = 3; i < 9; i++)
		inputTags.item(i).value = '';
}

function hideBox(id) {
	if (document.getElementById) {
		var hiddenBox = document.getElementById("hiddenBox");
		var goalDivs = hiddenBox.getElementsByTagName('div');
		var inputTags = hiddenBox.getElementsByTagName('input');

		var visibility = hiddenBox.style.visibility;

		if (visibility == 'visible') {
			for (i = 3; i < inputTags.length; i++) {
				if (i == 7 || i == 8)
					continue;
				inputTags.item(i).value = '';
			}

			for (i = 1; i < goalDivs.length; i++) { // il primo div è il titolo
													// dell'hiddenBox
				goalDivs.item(i).style.display = 'none';
			}

			hiddenBox.style.visibility = 'hidden';
		}
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function visualizePasswordBox(file) {
	document.getElementById('passwordField').value = '';
	document.getElementById('offerFile').value = file;
	var box = document.getElementById('hiddenPasswordBox');
	box.style.visibility = 'visible';
}

function hideOfferBox() {
	if (document.getElementById) {
		var hiddenBox = document.getElementById("hiddenOfferBox");
		var inputTags = hiddenBox.getElementsByTagName('input');

		var visibility = hiddenBox.style.visibility;

		if (visibility == 'visible') {
			for (i = 3; i < 9; i++) {
				inputTags.item(i).value = '';
			}

			hiddenBox.style.visibility = 'hidden';
		}
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function hidePasswordBox() {
	if (document.getElementById) {
		var passwordBox = document.getElementById("hiddenPasswordBox");
		passwordBox.style.visibility = 'hidden';
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function goals() {
	var hiddenBox = document.getElementById('hiddenBox');

	if (isNaN(document.getElementsByName('goalA').item(0).value)) {
		retiA = 0;
	} else {
		retiA = parseInt(document.getElementsByName('goalA').item(0).value * 1,
				10);
	}

	if (isNaN(document.getElementsByName('goalB').item(0).value)) {
		retiB = 0;
	} else {
		retiB = parseInt(document.getElementsByName('goalB').item(0).value * 1,
				10);
	}

	goalsTot = retiA + retiB;

	var goalDivs = hiddenBox.getElementsByTagName('div');

	/*
	 * partire da 1 perchè il primo div
	 * contiene il titolo dell'hiddenBox
	 */
	for (i = 1; i < goalDivs.length; i++) 
	{
		if (i < (goalsTot + 1)) // aggiungere 1 sempre per via del div
								// contenente il titolo dell'hiddenBox
			goalDivs.item(i).style.display = 'block';
		else
			goalDivs.item(i).style.display = 'none';
	}
}

function addField() {
	if (document.getElementById) {
		var hiddenBox = document.getElementById("hiddenBox");
		var goalDivs = hiddenBox.getElementsByTagName('div');
		var visibleGoalDivs = 0;
		for (i = 0; i < goalDivs.length; i++) {
			visibleGoalDivs += 1;
			if (goalDivs.item(i).style.display == 'none'
					|| goalDivs.item(i).style.display == '') {
				goalDivs.item(i).style.display = 'block';
				goalDivs.item(i).getElementsByTagName('input').item(0).value = '';
				break;
			}
		}
	} else {
		alert(":( DOM NON Supportato!");
	}

	return;
}

function manualAddField() {
	goalsTot += 1;
	if (goalsTot > 20) // perchè sono previsti al massimo 20 goal totali in
						// hiddenBox
		goalsTot = 20;
	addField();
}

function deleteField() {
	if (document.getElementById) {
		var hiddenBox = document.getElementById("hiddenBox");
		var inputTags = hiddenBox.getElementsByTagName('input');
		var goalDivs = hiddenBox.getElementsByTagName('div');
		var visibleGoalDivs = 20;

		for (i = goalDivs.length - 1; i >= 0; i--) {
			if (goalDivs.item(i).style.display == 'block') {
				goalDivs.item(i).style.display = 'none';
				goalDivs.item(i).getElementsByTagName('input').item(0).value = '-';
				visibleGoalDivs -= 1;
				break;
			} else {
				visibleGoalDivs -= 1;
			}
		}
	} else {
		alert(":( DOM NON Supportato!");
	}

	return;
}

function manualDeleteField() {
	goalsTot -= 1;
	deleteField();
}

function enableSendButton() {
	if (document.getElementById) {
		var sendButton = document.getElementById('sendButton');
		var passwordFieldTeam = document.getElementById('passwordFieldTeam');
		var passwordFieldOffer = document.getElementById('passwordFieldOffer');
		var repeatPasswordFieldOffer = document
				.getElementById('repeatPasswordFieldOffer');
		var bidField = document.getElementById('bidField');
		var playerOutField = document.getElementById('playerOutField');
		var roleOutField = document.getElementById('roleOutField');
		var teamOutField = document.getElementById('teamOutField');

		if (passwordFieldTeam.value == '' || passwordFieldOffer.value == ''
				|| repeatPasswordFieldOffer.value == ''
				|| trimWS(bidField.value) == ''
				|| isNaN(trimWS(bidField.value))
				|| trimWS(playerOutField.value) == ''
				|| trimWS(roleOutField.value) == ''
				|| trimWS(teamOutField.value) == '') // controlla che
														// password non sia
														// vuoto e che gli altri
														// campi non contengano
														// solo spazi bianchi e
														// che bidField sia un
														// numero
			sendButton.disabled = true;
		else
			sendButton.disabled = false;
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function enablePasswordButton() {
	if (document.getElementById) {
		var passwordButton = document.getElementById('passwordButton');
		var passwordField = document.getElementById('passwordField');

		if (passwordField.value == '') // controlla che il campo password non
										// sia vuoto
			passwordButton.disabled = true;
		else
			passwordButton.disabled = false;
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function sendOffer() {
	if (document.getElementById) {
		form = document.getElementById('formOffer');
		form.action = 'mercato/newOffer.php';
		form.submit();
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function sendUnlockForm() {
	if (document.getElementById) {
		form = document.getElementById('passwordForm');
		form.action = 'unlockOffer.php';
		form.submit();
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function validate(what) {
	if (document.getElementById) {
		form = document.getElementById('formRisultati')
		if (what == 'campionato') {
			form.action = 'newRisultatiCampionato.php';
		}
		if (what == 'coppa') {
			form.action = 'newRisultatiCoppa.php';
		}

		form.submit();
	} else {
		alert(":( DOM NON Supportato!");
	}
}

// Removes leading whitespaces
function trimLeadingWS(value) {
	var re = /\s*((\S+\s*)*)/;
	return value.replace(re, "$1");
}

// Removes ending whitespaces
function trimEndingWS(value) {
	var re = /((\s*\S+)*)\s*/;
	return value.replace(re, "$1");
}

// Removes leading and ending whitespaces
function trimWS(value) {
	return trimLeadingWS(trimEndingWS(value));
}

function changeVistaDescription(sourceId, desc) {
	if (document.getElementById) {
		var source = document.getElementById(sourceId);
		source.style.color = 'selectedVistaHoverColor';
		source.style.backgroundColor = 'selectedVistaHoverBkgdColor';
		source.style.border = '1px solid ' + 'selectedVistaHoverBorderColor';

		var selectedVista = document.getElementById('selectedVista');
		selectedVista.innerHTML = desc.replace('_', ' ');

		var table = document.getElementById('tableRosa');
		var td = table.getElementsByTagName('td');
		for ( var i = 0; i < td.length; i++) {
			if (td.item(i).className == 'titolare'
					|| td.item(i).className == 'riserva'
					|| td.item(i).className == 'tribuna') {
				var span = td.item(i).getElementsByTagName('span');
				for ( var j = 0; j < span.length; j++) {
					if (span.item(j).className == desc)
						span.item(j).style.display = 'inline';
					else if (span.item(j).className == 'notFound')
						span.item(j).style.display = 'inline';
					else
						span.item(j).style.display = 'none';
				}
			}
		}
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function PopupCentrata(what, w, h) {
	var l = Math.floor((screen.width - w) / 2);
	var t = Math.floor((screen.height - h) / 2);

	window.open(what, "", "width=" + w + ",height=" + h + ",top=" + t
			+ ",left=" + l + ",scrollbars=1");
}

function hideVistaDescription(sourceId) {
	if (document.getElementById) {
		var source = document.getElementById(sourceId);
		source.style.backgroundColor = 'unselectedVistaBkgdColor';
		source.style.color = 'unselectedVistaColor';
		source.style.border = '1px solid ' + 'unselectedVistaBorderColor';
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function vistaSubmit() {
	if (document.getElementById) {
		var form = document.getElementById('vista_form');
		form.submit();
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function togglePlayers(type) {
	if (document.getElementById) {
		document.getElementById('por').style.display = 'none';
		document.getElementById('dif').style.display = 'none';
		document.getElementById('cen').style.display = 'none';
		document.getElementById('att').style.display = 'none';

		document.getElementById(type).style.display = 'block';
	} else {
		alert(":( DOM NON Supportato!");
	}
}

var oNewOption = new Array(25);
for ( var i = 0; i < 25; i++)
	oNewOption[i] = null;

function AddListItem(oInput) {
	for ( var i = 0; i < 25; i++) {
		oSelect = document.getElementById("select" + i);
		if (oNewOption[i] == null) {
			oNewOption[i] = document.createElement("OPTION");
			oSelect.options.add(oNewOption[i]);
		}

		oNewOption[i].text = oInput.value.toUpperCase();
		oNewOption[i].value = oInput.value.toUpperCase();
	}
}

function toggleAvulse() {
	if (document.getElementById) {
		if (document.getElementById('avulse').style.display == 'none'
				|| document.getElementById('avulse').style.display == '')
			document.getElementById('avulse').style.display = 'block';
		else
			document.getElementById('avulse').style.display = 'none';
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function showAvulseToggleButton() {
	if (document.getElementById) {
		if (document.getElementById('avulse_wrapper').style.display == 'none'
				|| document.getElementById('avulse').style.display == '')
			document.getElementById('avulse_wrapper').style.display = 'block';
	} else {
		alert(":( DOM NON Supportato!");
	}
}