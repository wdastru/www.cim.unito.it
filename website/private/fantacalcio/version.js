// JavaScript Document
function print_version() {
	if( document.getElementById ) 
	{
		ver = document.getElementById('version');
		ver.innerHTML = 'Fantacalcio versione 2013.01';
	}
	else 
	{
		alert(":( DOM NON Supportato!");
	}
}