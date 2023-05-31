// JavaScript Document
s = Array(10);
s[0] = 'section0';
s[1] = 'section1';
s[2] = 'section2';
s[3] = 'section3';
s[4] = 'section4';
s[5] = 'section5';
s[6] = 'section6';
s[7] = 'section7';
s[8] = 'section8';
s[9] = 'section9';

ss = Array(25);
ss[0] = 'subsection0';
ss[1] = 'subsection1';
ss[2] = 'subsection2';
ss[3] = 'subsection3';
ss[4] = 'subsection4';
ss[5] = 'subsection5';
ss[6] = 'subsection6';
ss[7] = 'subsection7';
ss[8] = 'subsection8';
ss[9] = 'subsection9';
ss[10] = 'subsection10';
ss[11] = 'subsection11';
ss[12] = 'subsection12';
ss[13] = 'subsection13';
ss[14] = 'subsection14';
ss[15] = 'subsection15';
ss[16] = 'subsection16';
ss[17] = 'subsection17';
ss[18] = 'subsection18';
ss[19] = 'subsection19';
ss[20] = 'subsection20';
ss[21] = 'subsection21';
ss[22] = 'subsection22';
ss[23] = 'subsection23';
ss[24] = 'subsection24';
ss[25] = 'subsection25';

d = new Date();
curr_year = d.getFullYear();

function toggle_vis(name) {
	if (document.getElementById && document.getElementsByTagName) {
		var this_div = document.getElementById(name);
		var inner_divs = document.getElementById(name).getElementsByTagName(
				'div');

		var display = inner_divs.item(0).style.display; // primo div -->
		// personal image

		if (display == 'block') {
			this_div.style.height = '26px';
			inner_divs.item(0).style.display = 'none'; // primo div -->
			// personal image
			inner_divs.item(1).style.height = '24px'; // secondo div -->
			// personal contacts
			inner_divs.item(1).style.width = '538px'; // secondo div -->
			// personal contacts
			inner_divs.item(1).style.backgroundColor = '#e4e4e4'; // secondo
			// div -->
			// personal
			// contacts
			inner_divs.item(4).style.display = 'block'; // quinto div -->
			// position
		} else {
			this_div.style.height = '182px';
			inner_divs.item(0).style.display = 'block'; // primo div -->
			// personal image
			inner_divs.item(1).style.height = '180px'; // secondo div -->
			// personal contacts
			inner_divs.item(1).style.width = '381px'; // secondo div -->
			// personal contacts
			inner_divs.item(1).style.backgroundColor = '#eeeeee'; // secondo
			// div -->
			// personal
			// contacts
			inner_divs.item(4).style.display = 'none'; // quinto div -->
			// position
		}
	} else {
		alert(":( DOM NON Supportato!");
	}
}
function toggleAbstract(button) {
	if (document.getElementsByTagName) {
		var parent = button.parentNode;
		var divs = parent.getElementsByTagName("div");
		var abstractDiv = divs.item(1);

		if (abstractDiv.style.display == 'none'
				|| abstractDiv.style.display == '')
			abstractDiv.style.display = 'block';
		else
			abstractDiv.style.display = 'none';

	} else {
		alert(":( DOM NON Supportato!");
	}
}

function changeSideNavStyles() {
	if (document.getElementById) {
		for ( var i = 0; i < s.length; i++) {
			for ( var j = 0; j < ss.length; j++) {
				if ((document.getElementById(s[i]) != null)
						&& (document.getElementById(ss[j]) != null)) {
					for ( var k = 0; k < ss.length; k++) {
						var id = s[i] + '-' + ss[k];
						if (document.getElementById(id) != null) {
							if (k == j) {
								
								document.getElementById(id).style.backgroundColor = '#e4e4e4';
								document.getElementById(id)
										.getElementsByTagName('a').item(0).style.color = '#db6d16';								
								document.getElementById(id).style.textAlign = 'right';
							} else {
								document.getElementById(id).style.backgroundColor = null;
								document.getElementById(id)
										.getElementsByTagName('a').item(0).style.color = '#666666';
								document.getElementById(id).style.textAlign = 'left';
							}
						}
					}
				}
			}
		}
	} else {
		alert(":( DOM NON Supportato!");
	}
}
function showInfoBox(id) {
	if (document.getElementById) {
		if (document.getElementById(id).style.display == 'none'
				|| document.getElementById(id).style.display == '')
			document.getElementById(id).style.display = 'block';
	} else {
		alert(":( DOM NON Supportato!");
	}
}
function hideInfoBox(id) {
	if (document.getElementById) {
		if (document.getElementById(id).style.display == 'block')
			document.getElementById(id).style.display = 'none';
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function checkSubmitterField() {
	var required_ele = document.getElementsByClassName('required');
	var allfilled=true;
	
	for (var i = 0; i < required_ele.length; ++i) {
	    var item = required_ele[i];
	    if(item.value.length==0){
	      allfilled=false;
	    }
	}
	if(allfilled){
	   document.getElementById('submissionButton').disabled = false;
	}
	else{
	  document.getElementById('submissionButton').disabled = true;
	}
}

/* funzioni per client-side xslt */
function loadXMLDoc(dname) {
	if (window.XMLHttpRequest) {
		xhttp = new XMLHttpRequest();
	} else {
		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.open("GET", dname);
	xhttp.send("");
	return xhttp.responseXML;
}
function loadTextDoc(dname) {
	if (window.XMLHttpRequest) {
		xhttp = new XMLHttpRequest();
	} else {
		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.open("GET", dname, false);
	xhttp.send("");
	return xhttp.responseText;
}
function displayResult(year, ss) {
	var xml = loadXMLDoc("bibliografia.xml");
	var xslFile = 'papers_' + year + '.xsl';
	var xsl = loadXMLDoc(xslFile);
	// code for IE
	if (window.ActiveXObject) {
		ex = xml.transformNode(xsl);
		document.getElementById("publicationsContainer").innerHTML = ex;
	}
	// code for Mozilla, Firefox, Opera, etc.
	else if (document.implementation && document.implementation.createDocument) {
		xsltProcessor = new XSLTProcessor();
		xsltProcessor.importStylesheet(xsl);
		resultDocument = xsltProcessor.transformToFragment(xml, document);
		document.getElementById("publicationsContainer").innerHTML = '';
		document.getElementById("publicationsContainer").appendChild(
				resultDocument);
	}

	if (document.getElementById('pubSubSectOpen') != null)
		document.getElementById('pubSubSectOpen').id = ss[ss];
	for ( var i = 0; i < ss.length; i++) {
		if (document.getElementById(ss[i]) != null)
			document.getElementById(ss[i]).id = ss[ss];
	}

	changeSideNavStyles();
}
function displayMODSResult(year) {
	var xmlFile = "MODS.xml";
	var xslFile = "papers_MODS.xsl";
	var xslText = loadTextDoc(xslFile);
	var xslText = xslText.replace("XXXX", year);

	// code for IE
	if (window.ActiveXObject) {
		var xml = new ActiveXObject("Microsoft.XMLDOM");
		xml.async = "false";
		xml.load(xmlFile);

		var xsl = new ActiveXObject("Microsoft.XMLDOM");
		xsl.async = "false";
		xsl.loadXML(xslText);

		ex = xml.transformNode(xsl);
		document.getElementById("publicationsContainer").innerHTML = ex;
	}
	// code for Mozilla, Firefox, Opera, etc.
	else if (document.implementation && document.implementation.createDocument) {
		var xml = loadXMLDoc(xmlFile);
		var parser = new DOMParser();
		var xsl = parser.parseFromString(xslText, "text/xml");

		var xsltProcessor = new XSLTProcessor();
		xsltProcessor.importStylesheet(xsl);
		var resultDocument = xsltProcessor.transformToFragment(xml, document);
		document.getElementById("publicationsContainer").innerHTML = '';
		document.getElementById("publicationsContainer").appendChild(resultDocument);
	}
}
function showPubs(select) {
	var year = select.options[select.selectedIndex].value;
	displayMODSResult(year);
	document.getElementById('publicationYear').innerHTML = year;
}
function initPubs() {
	var select = document.getElementById('pubsSelector');
	select.selectedIndex = 0;
	displayMODSResult(curr_year);
	document.getElementById('publicationYear').innerHTML = curr_year;
}