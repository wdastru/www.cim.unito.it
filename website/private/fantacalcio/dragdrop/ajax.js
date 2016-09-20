// JavaScript Document
var XMLHttpRequestObject = false;

if (window.XMLHttpRequest) 
{
	XMLHttpRequestObject = new XMLHttpRequest();
} else if (window.ActiveXObject) 
{
	XMLHttpRequestObject = new
	ActiveXObject("Microsoft.XMLHTTP");
} else {
	alert("il browser non supporta XMLHTTP, spiacente !!");
}

function getJS(dataSource)
{
	if(XMLHttpRequestObject) 
	{
		XMLHttpRequestObject.open("GET", dataSource);
		XMLHttpRequestObject.onreadystatechange = function()
		{
			if (XMLHttpRequestObject.readyState == 4 &&	XMLHttpRequestObject.status == 200) 
			{
				eval(XMLHttpRequestObject.responseText);
			}
		}
		XMLHttpRequestObject.send(null);
	} else {
		alert(":( DOM NON Supportato!");
	}
}

function getData(dataSource, elementID)
{
	if(XMLHttpRequestObject) 
	{
		var obj = document.getElementById(elementID);
		
		XMLHttpRequestObject.open("GET", dataSource);
		XMLHttpRequestObject.onreadystatechange = function() 
		{
			if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) 
			{
				obj.innerHTML = XMLHttpRequestObject.responseText;
			}
		}
		XMLHttpRequestObject.send(null);
	}
}

function getDataIntoInputValue(player)
{
	
	player = player.replace(/'/g, "\\'");
	//alert(player);
	
	var XMLHttpRequestObject_1 = false;
	var XMLHttpRequestObject_2 = false;

	if (window.XMLHttpRequest) 
	{
		XMLHttpRequestObject_1 = new XMLHttpRequest();
		XMLHttpRequestObject_2 = new XMLHttpRequest();
	} else if (window.ActiveXObject) 
	{
		XMLHttpRequestObject_1 = new
		ActiveXObject("Microsoft.XMLHTTP");
		XMLHttpRequestObject_2 = new
		ActiveXObject("Microsoft.XMLHTTP");
	} else {
		alert("il browser non supporta XMLHTTP, spiacente !!");
	}

	if(XMLHttpRequestObject_1) 
	{
		var dataSource_1 = "retrievePlayerOutRole.php?player="+player;
		var elementID_1 = "roleOutField";
		var obj_1 = document.getElementById(elementID_1);

		XMLHttpRequestObject_1.open("GET", dataSource_1);
		XMLHttpRequestObject_1.onreadystatechange = function() 
		{
			if (XMLHttpRequestObject_1.readyState == 4 && XMLHttpRequestObject_1.status == 200) 
			{
				obj_1.value = XMLHttpRequestObject_1.responseText;				
			}			
		}
		XMLHttpRequestObject_1.send(null);
	}

	if(XMLHttpRequestObject_2) 
	{
		var dataSource_2 = "retrievePlayerOutTeam.php?player="+player;
		var elementID_2 = "teamOutField";
		var obj_2 = document.getElementById(elementID_2);
	
		XMLHttpRequestObject_2.open("GET", dataSource_2);
		XMLHttpRequestObject_2.onreadystatechange = function() 
		{
			if (XMLHttpRequestObject_2.readyState == 4 && XMLHttpRequestObject_2.status == 200) 
			{
				obj_2.value = XMLHttpRequestObject_2.responseText;				
			}			
		}
		XMLHttpRequestObject_2.send(null);
	}
}

function pause(ms)
{
var date = new Date();
var curDate = null;

do { curDate = new Date(); }
while(curDate-date < ms);
} 

function getSelectedPlayer()
{
	if( document.getElementById ) 
	{
		var sel = document.getElementById('playerOutField');
		var opt = sel.getElementsByTagName('option');
		var player;
		for (i=0;i<opt.length;i++)
		{
			//alert(opt.item(i).innerHTML);
			if (opt.item(i).selected)
			{
				player = opt.item(i).innerHTML;
				//alert(player);
				break;
			}
		}
		getDataIntoInputValue(player);
	}
	else 
	{ 
		alert(":( DOM NON Supportato!");
	}	
}
