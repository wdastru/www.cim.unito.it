// JavaScript Document
section = Array(10);
section[0] = 'section0';
section[1] = 'section1';
section[2] = 'section2';
section[3] = 'section3';
section[4] = 'section4';
section[5] = 'section5';
section[6] = 'section6';
section[7] = 'section7';
section[8] = 'section8';
section[9] = 'section9';

subsection = Array(16);
subsection[0] = 'subsection0';
subsection[1] = 'subsection1';
subsection[2] = 'subsection2';
subsection[3] = 'subsection3';
subsection[4] = 'subsection4';
subsection[5] = 'subsection5';
subsection[6] = 'subsection6';
subsection[7] = 'subsection7';
subsection[8] = 'subsection8';
subsection[9] = 'subsection9';
subsection[10] = 'subsection10';
subsection[11] = 'subsection11';
subsection[12] = 'subsection12';
subsection[13] = 'subsection13';
subsection[14] = 'subsection14';
subsection[15] = 'subsection15';

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
		for ( var i = 0; i < section.length; i++) {
			for ( var j = 0; j < subsection.length; j++) {
				if ((document.getElementById(section[i]) != null)
						&& (document.getElementById(subsection[j]) != null)) {
					for ( var k = 0; k < subsection.length; k++) {
						var id = section[i] + '-' + subsection[k];
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
	xhttp.open("GET", dname, false);
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
function displayResult(year, subSection) {
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
		document.getElementById('pubSubSectOpen').id = subsection[subSection];
	for ( var i = 0; i < subsection.length; i++) {
		if (document.getElementById(subsection[i]) != null)
			document.getElementById(subsection[i]).id = subsection[subSection];
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
		document.getElementById("publicationsContainer").appendChild(
				resultDocument);
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
function fillStaffContainer() {
	var container = document.getElementById('staffContainer');

	var xmlFile = "staff.xml";
	var xslFile = "staff.xsl";

	// code for IE
	if (window.ActiveXObject) {
		var xml = new ActiveXObject("Microsoft.XMLDOM");
		xml.async = "false";
		xml.load(xmlFile);

		var xsl = new ActiveXObject("Microsoft.XMLDOM");
		xsl.async = "false";
		xsl.load(xslFile);

		ex = xml.transformNode(xsl);
		document.getElementById("staffContainer").innerHTML = ex;
	}
	// code for Mozilla, Firefox, Opera, etc.
	else if (document.implementation && document.implementation.createDocument) {
		var xsl = loadXMLDoc(xslFile);
		var xml = loadXMLDoc(xmlFile);

		xsltProcessor = new XSLTProcessor();
		xsltProcessor.importStylesheet(xsl);
		resultDocument = xsltProcessor.transformToFragment(xml, document);
		document.getElementById("staffContainer").innerHTML = '';
		document.getElementById("staffContainer").appendChild(resultDocument);
	}
}
/* END - funzioni per client-side xslt */
