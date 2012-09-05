/**
 * @author Walter
 */

var id = "";

function sendForm() {
	if(document.getElementById) {
		form = document.getElementById(id);
		form.action = 'delete.php';
		form.submit();
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function showConfirmBox(_id) {
	
	id = _id;
	if(document.getElementById) {
		var hiddenBox = document.getElementById("confirmDeletionHiddenBox");
		var visibility = hiddenBox.style.visibility;
		hiddenBox.style.visibility = 'visible';
	} else {
		alert(":( DOM NON Supportato!");
	}
}