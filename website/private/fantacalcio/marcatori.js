// JavaScript Document

function toggleExtraScorers() {
	if (document.getElementById) {
		var table = document.getElementsByClassName('marcatori');
		var trs = table.item(0).getElementsByTagName('tr');
		
		if (trs.length>20) {
			
			var showAllButton = document.getElementById('showAll');
			showAllButton.style.display = 'block';
			
			for(var i=20,j=trs.length; i<j; i++) { 
				if(trs[i].style.display=='table-row') {
					trs[i].style.display='none';
				} else if (trs[i].style.display=='none') {
					trs[i].style.display='table-row';
				}
			}
		}
		
	} else {
		alert(":( DOM NON Supportato!");
	}
}
