//document.getElementsByName('body').item(0).onresize = Count();

var Demos       = [];
var nDemos      = 8;

// Demo variables
// iMouseDown represents the current mouse button state: up or down
/*
lMouseState represents the previous mouse button state so that we can
check for button clicks and button releases:

if(iMouseDown && !lMouseState) // button just clicked!
if(!iMouseDown && lMouseState) // button just released!
*/
var mouseOffset = null;
var iMouseDown  = false;
var lMouseState = false;
var dragObject  = null;

// Demo 0 variables
var DragDrops   = [];
var curTarget   = null;
var lastTarget  = null;
var dragHelper  = null;
var tempDiv     = null;
var rootParent  = null;
var rootSibling = null;

// Demo1 variables
var D1Target    = null;

Number.prototype.NaN0=function(){return isNaN(this)?0:this;}

function CreateDragContainer(){
	/*
	Create a new "Container Instance" so that items from one "Set" can not
	be dragged into items from another "Set"
	*/
	var cDrag        = DragDrops.length;
	DragDrops[cDrag] = [];

	/*
	Each item passed to this function should be a "container".  Store each
	of these items in our current container
	*/
	
	
	for(var i=0; i<arguments.length; i++){
		var cObj = arguments[i];
		DragDrops[cDrag].push(cObj);
		
		cObj.setAttribute('DropObj', cDrag);
		
		/*
		Every top level item in these containers should be draggable.  Do this
		by setting the DragObj attribute on each item and then later checking
		this attribute in the mouseMove function
		*/
		for(var j=0; j<cObj.childNodes.length; j++){

			// Firefox puts in lots of #text nodes...skip these
			if(cObj.childNodes[j].nodeName=='#text') continue;
			
			cObj.childNodes[j].setAttribute('DragObj', cDrag);
		}
	} 
}

function getPosition(e){
	var left = 0;
	var top  = 0;
	while (e.offsetParent){
		left += e.offsetLeft + (e.currentStyle?(parseInt(e.currentStyle.borderLeftWidth)).NaN0():0);
		top  += e.offsetTop  + (e.currentStyle?(parseInt(e.currentStyle.borderTopWidth)).NaN0():0);
		e     = e.offsetParent;
	}


	left += e.offsetLeft + (e.currentStyle?(parseInt(e.currentStyle.borderLeftWidth)).NaN0():0);
	top  += e.offsetTop  + (e.currentStyle?(parseInt(e.currentStyle.borderTopWidth)).NaN0():0);

	return {x:left, y:top};

}

function mouseCoords(ev){
	if(ev.pageX || ev.pageY){
		return {x:ev.pageX, y:ev.pageY};
	}
	return {
x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,
y:ev.clientY + document.body.scrollTop  - document.body.clientTop
	};
}

function writeHistory(object, message){
	if(!object || !object.parentNode || !object.parentNode.getAttribute) return;
	var historyDiv = object.parentNode.getAttribute('history');
	if(historyDiv){
		historyDiv = document.getElementById(historyDiv);
		historyDiv.appendChild(document.createTextNode(object.id+': '+message));
		historyDiv.appendChild(document.createElement('BR'));

		historyDiv.scrollTop += 50;
	}
}

function getMouseOffset(target, ev){
	ev = ev || window.event;

	var docPos    = getPosition(target);
	var mousePos  = mouseCoords(ev);
	return {x:mousePos.x - docPos.x, y:mousePos.y - docPos.y};
}

function mouseMove(ev){
	ev         = ev || window.event;
	
	/*
	We are setting target to whatever item the mouse is currently on
	Firefox uses event.target here, MSIE uses event.srcElement
	*/
	var target   = ev.target || ev.srcElement;
	var mousePos = mouseCoords(ev);

	// mouseOut event - fires if the item the mouse is on has changed
	if(lastTarget && (target!==lastTarget)){
		//writeHistory(lastTarget, 'Mouse Out Fired');

		/* aggiunto da me */
		Count();
		/******************/

		// reset the classname for the target element
		var origClass = lastTarget.getAttribute('origClass');
		if(origClass) lastTarget.className = origClass;
	}

	/*
	dragObj is the grouping our item is in (set from the createDragContainer function).
	if the item is not in a grouping we ignore it since it can't be dragged with this
	script.
	*/
	var dragObj = target.getAttribute('DragObj');

	// if the mouse was moved over an element that is draggable
	if(dragObj!=null){

		// mouseOver event - Change the item's class if necessary
		if(target!=lastTarget){
			//writeHistory(target, 'Mouse Over Fired');

			var oClass = target.getAttribute('overClass');
			if(oClass){
				target.setAttribute('origClass', target.className);
				target.className = oClass;
			}
		}

		// if the user is just starting to drag the element
		if(iMouseDown && !lMouseState){
			//writeHistory(target, 'Start Dragging');

			// mouseDown target
			curTarget     = target;

			// Record the mouse x and y offset for the element
			rootParent    = curTarget.parentNode;
			rootSibling   = curTarget.nextSibling;

			mouseOffset   = getMouseOffset(target, ev);

			// We remove anything that is in our dragHelper DIV so we can put a new item in it.
			for(var i=0; i<dragHelper.childNodes.length; i++) dragHelper.removeChild(dragHelper.childNodes[i]);

			// Make a copy of the current item and put it in our drag helper.
			dragHelper.appendChild(curTarget.cloneNode(true));
			dragHelper.style.display = 'block';

			// set the class on our helper DIV if necessary
			var dragClass = curTarget.getAttribute('dragClass');
			if(dragClass){
				dragHelper.firstChild.className = dragClass;
			}

			// disable dragging from our helper DIV (it's already being dragged)
			dragHelper.firstChild.removeAttribute('DragObj');

			/*
			Record the current position of all drag/drop targets related
			to the element.  We do this here so that we do not have to do
			it on the general mouse move event which fires when the mouse
			moves even 1 pixel.  If we don't do this here the script
			would run much slower.
			*/
			var dragConts = DragDrops[dragObj];

			/*
			first record the width/height of our drag item.  Then hide it since
			it is going to (potentially) be moved out of its parent.
			*/
			curTarget.setAttribute('startWidth', parseInt(curTarget.offsetWidth));
			curTarget.setAttribute('startHeight', parseInt(curTarget.offsetHeight));
			curTarget.style.display  = 'none';

			// loop through each possible drop container
			for(var i=0; i<dragConts.length; i++){
				with(dragConts[i]){
					var pos = getPosition(dragConts[i]);

					/*
					save the width, height and position of each container.

					Even though we are saving the width and height of each
					container back to the container this is much faster because
					we are saving the number and do not have to run through
					any calculations again.  Also, offsetHeight and offsetWidth
					are both fairly slow.  You would never normally notice any
					performance hit from these two functions but our code is
					going to be running hundreds of times each second so every
					little bit helps!

					Note that the biggest performance gain here, by far, comes
					from not having to run through the getPosition function
					hundreds of times.
					*/
					setAttribute('startWidth',  parseInt(offsetWidth));
					setAttribute('startHeight', parseInt(offsetHeight));
					setAttribute('startLeft',   pos.x);
					setAttribute('startTop',    pos.y);
				}

				// loop through each child element of each container
				for(var j=0; j<dragConts[i].childNodes.length; j++){
					with(dragConts[i].childNodes[j]){
						if((nodeName=='#text') || (dragConts[i].childNodes[j]==curTarget)) continue;

						var pos = getPosition(dragConts[i].childNodes[j]);

						// save the width, height and position of each element
						setAttribute('startWidth',  parseInt(offsetWidth));
						setAttribute('startHeight', parseInt(offsetHeight));
						setAttribute('startLeft',   pos.x);
						setAttribute('startTop',    pos.y);
					}
				}
			}
		}
	}

	// If we get in here we are dragging something
	if(curTarget){
		// move our helper div to wherever the mouse is (adjusted by mouseOffset)
		dragHelper.style.top  = mousePos.y - mouseOffset.y;
		dragHelper.style.left = mousePos.x - mouseOffset.x;

		var dragConts  = DragDrops[curTarget.getAttribute('DragObj')];
		var activeCont = null;

		var xPos = mousePos.x - mouseOffset.x + (parseInt(curTarget.getAttribute('startWidth')) /2);
		var yPos = mousePos.y - mouseOffset.y + (parseInt(curTarget.getAttribute('startHeight'))/2);

		// check each drop container to see if our target object is "inside" the container
		for(var i=0; i<dragConts.length; i++){
			with(dragConts[i]){
				if((parseInt(getAttribute('startLeft'))                                           < xPos) &&
						(parseInt(getAttribute('startTop'))                                            < yPos) &&
						((parseInt(getAttribute('startLeft')) + parseInt(getAttribute('startWidth')))  > xPos) &&
						((parseInt(getAttribute('startTop'))  + parseInt(getAttribute('startHeight'))) > yPos)){

					/*
						our target is inside of our container so save the container into
						the activeCont variable and then exit the loop since we no longer
						need to check the rest of the containers
						*/
					activeCont = dragConts[i];

					// exit the for loop
					break;
				}
			}
		}

		// Our target object is in one of our containers.  Check to see where our div belongs
		if(activeCont){
			if(activeCont!=curTarget.parentNode){
				//writeHistory(curTarget, 'Moved into '+activeCont.id);
			}

			// beforeNode will hold the first node AFTER where our div belongs
			var beforeNode = null;

			// loop through each child node (skipping text nodes).
			for(var i=activeCont.childNodes.length-1; i>=0; i--){
				with(activeCont.childNodes[i]){
					if(nodeName=='#text') continue;

					// if the current item is "After" the item being dragged
					if(curTarget != activeCont.childNodes[i]                                                  &&
							((parseInt(getAttribute('startLeft')) + parseInt(getAttribute('startWidth')))  > xPos) &&
							((parseInt(getAttribute('startTop'))  + parseInt(getAttribute('startHeight'))) > yPos)){
						beforeNode = activeCont.childNodes[i];
					}
				}
			}

			// the item being dragged belongs before another item
			if(beforeNode){
				if(beforeNode!=curTarget.nextSibling){
					//writeHistory(curTarget, 'Inserted Before '+beforeNode.id);

					activeCont.insertBefore(curTarget, beforeNode);
				}

				// the item being dragged belongs at the end of the current container
			} else {
				if((curTarget.nextSibling) || (curTarget.parentNode!=activeCont)){
					//writeHistory(curTarget, 'Inserted at end of '+activeCont.id);

					activeCont.appendChild(curTarget);
				}
			}

			// the timeout is here because the container doesn't "immediately" resize
			setTimeout(function(){
				var contPos = getPosition(activeCont);
				activeCont.setAttribute('startWidth',  parseInt(activeCont.offsetWidth));
				activeCont.setAttribute('startHeight', parseInt(activeCont.offsetHeight));
				activeCont.setAttribute('startLeft',   contPos.x);
				activeCont.setAttribute('startTop',    contPos.y);}, 5);

			// make our drag item visible
			if(curTarget.style.display!=''){
				//writeHistory(curTarget, 'Made Visible');
				curTarget.style.display    = '';
				curTarget.style.visibility = 'hidden';
			}
		} else {

			// our drag item is not in a container, so hide it.
			if(curTarget.style.display!='none'){
				//writeHistory(curTarget, 'Hidden');
				curTarget.style.display  = 'none';
			}
		}
	}

	// track the current mouse state so we can compare against it next time
	lMouseState = iMouseDown;

	// mouseMove target
	lastTarget  = target;

	if(dragObject){
		dragObject.style.position = 'absolute';
		dragObject.style.top      = mousePos.y - mouseOffset.y;
		dragObject.style.left     = mousePos.x - mouseOffset.x;
	}

	// track the current mouse state so we can compare against it next time
	lMouseState = iMouseDown;

	// this prevents items on the page from being highlighted while dragging
	if(curTarget || dragObject) return false;
}

function mouseUp(ev){
	if(Demos[4]){
		if(curTarget){
			//writeHistory(curTarget, 'Mouse Up Fired');

			dragHelper.style.display = 'none';
			if(curTarget.style.display == 'none'){
				if(rootSibling){
					rootParent.insertBefore(curTarget, rootSibling);
				} else {
					rootParent.appendChild(curTarget);
				}
			}
			curTarget.style.display    = '';
			curTarget.style.visibility = 'visible';
		}
		curTarget  = null;
	}

	dragObject = null;
	iMouseDown = false;
}

function mouseDown(ev){
	ev         = ev || window.event;
	var target = ev.target || ev.srcElement;

	iMouseDown = true;
	if(Demos[4]){
		if(lastTarget){
			//writeHistory(lastTarget, 'Mouse Down Fired');
		}
	}
	if(target.onmousedown || target.getAttribute('DragObj')){
		return false;
	}
}

function makeDraggable(item){
	if(!item) return;
	item.onmousedown = function(ev){
		dragObject  = this;
		mouseOffset = getMouseOffset(this, ev);
		return false;
	}
}

function makeClickable(item){
	if(!item) return;
	item.onmousedown = function(ev){
		document.getElementById('ClickImage').value = this.name;
	}
}

function addDropTarget(item, target){
	item.setAttribute('droptarget', target);
}

document.onmousemove = mouseMove;
document.onmousedown = mouseDown;
document.onmouseup   = mouseUp;

window.onload = function(){
	
	Demos[4] = document.getElementById('Demo4');
	
	if(Demos[4]){
		CreateDragContainer(document.getElementById('PorTitolari'), document.getElementById('DifTitolari'), document.getElementById('CenTitolari'),document.getElementById('AttTitolari'), document.getElementById('PorRiserve'), document.getElementById('DifRiserve'),document.getElementById('CenRiserve'), document.getElementById('AttRiserve'), document.getElementById('PorTribuna'), document.getElementById('DifTribuna'), document.getElementById('CenTribuna'), document.getElementById('AttTribuna'));
		
		// Create our helper object that will show the item while dragging
		dragHelper = document.getElementById('dragHelper');
		
		/*
		dragHelper = document.createElement('DIV');
		dragHelper.style.cssText = 'position:absolute; visibility:hidden;';
		document.body.appendChild(dragHelper);
		/**/
	}
}

/* funzioni aggiunte da me */ 

function Count() {
	cPorTit = document.getElementById('counterPorTitolari');	
	cDifTit = document.getElementById('counterDifTitolari');	
	cCenTit = document.getElementById('counterCenTitolari');	
	cAttTit = document.getElementById('counterAttTitolari');	
	cPorRis = document.getElementById('counterPorRiserve');	
	cDifRis = document.getElementById('counterDifRiserve');	
	cCenRis = document.getElementById('counterCenRiserve');	
	cAttRis = document.getElementById('counterAttRiserve');	
	cPorTri = document.getElementById('counterPorTribuna');	
	cDifTri = document.getElementById('counterDifTribuna');	
	cCenTri = document.getElementById('counterCenTribuna');	
	cAttTri = document.getElementById('counterAttTribuna');	
	
	cPorTit.innerHTML = document.getElementById('PorTitolari').getElementsByTagName('div').length-1;
	cDifTit.innerHTML = document.getElementById('DifTitolari').getElementsByTagName('div').length-1;
	cCenTit.innerHTML = document.getElementById('CenTitolari').getElementsByTagName('div').length-1;
	cAttTit.innerHTML = document.getElementById('AttTitolari').getElementsByTagName('div').length-1;
	cPorRis.innerHTML = document.getElementById('PorRiserve').getElementsByTagName('div').length-1;
	cDifRis.innerHTML = document.getElementById('DifRiserve').getElementsByTagName('div').length-1;
	cCenRis.innerHTML = document.getElementById('CenRiserve').getElementsByTagName('div').length-1;
	cAttRis.innerHTML = document.getElementById('AttRiserve').getElementsByTagName('div').length-1;
	cPorTri.innerHTML = document.getElementById('PorTribuna').getElementsByTagName('div').length-1;
	cDifTri.innerHTML = document.getElementById('DifTribuna').getElementsByTagName('div').length-1;
	cCenTri.innerHTML = document.getElementById('CenTribuna').getElementsByTagName('div').length-1;
	cAttTri.innerHTML = document.getElementById('AttTribuna').getElementsByTagName('div').length-1;

	/* :::::::: change styles :::::::: */
	changeStyles();
	
	/* checks Titolari */
	if (cPorTit.innerHTML != 1) 
	{
		var the_divs = document.getElementById('PorTitolari').getElementsByTagName('div');
		for(i=0;i<cPorTit.innerHTML;i++){
			the_divs.item(i+1).style.backgroundImage='url(\'images/boxRed.png\')';
			the_divs.item(i+1).style.backgroundPosition='center';
			the_divs.item(i+1).style.backgroundRepeat='no-repeat';
		}
	} else {
		//document.getElementById('PorTitolari').style.color = 'okColor';
	}
	
	if ( cDifTit.innerHTML > 5 || cDifTit.innerHTML < 3 || cDifTit.innerHTML != document.getElementById('chosenModule').innerHTML.substr(0, 1) ) 
	{
		var the_divs = document.getElementById('DifTitolari').getElementsByTagName('div');
		for(i=0;i<cDifTit.innerHTML;i++){
			the_divs.item(i+1).style.backgroundImage='url(\'images/boxRed.png\')';
			the_divs.item(i+1).style.backgroundPosition='center';
			the_divs.item(i+1).style.backgroundRepeat='no-repeat';
		}
	} else {
		//document.getElementById('DifTitolari').style.color = 'okColor';
	}

	if (cCenTit.innerHTML > 5 || cCenTit.innerHTML < 3 || cCenTit.innerHTML != document.getElementById('chosenModule').innerHTML.substr(4, 1) ) 
	{
		var the_divs = document.getElementById('CenTitolari').getElementsByTagName('div');
		for(i=0;i<cCenTit.innerHTML;i++){
			the_divs.item(i+1).style.backgroundImage='url(\'images/boxRed.png\')';
			the_divs.item(i+1).style.backgroundPosition='center';
			the_divs.item(i+1).style.backgroundRepeat='no-repeat';
		}
	} else {
		//document.getElementById('CenTitolari').style.color = 'okColor';
	}

	if (cAttTit.innerHTML > 3 || cAttTit.innerHTML < 1 || cAttTit.innerHTML != document.getElementById('chosenModule').innerHTML.substr(8, 1) ) 
	{
		var the_divs = document.getElementById('AttTitolari').getElementsByTagName('div');
		for(i=0;i<cAttTit.innerHTML;i++)
		{
			the_divs.item(i+1).style.backgroundImage='url(\'images/boxRed.png\')';
			the_divs.item(i+1).style.backgroundPosition='center';
			the_divs.item(i+1).style.backgroundRepeat='no-repeat';
		}
	} else {
		//document.getElementById('AttTitolari').style.color = 'okColor';
	}
	
	/* check totale in campo */
	if ( parseInt(cPorTit.innerHTML)+parseInt(cDifTit.innerHTML)+parseInt(cCenTit.innerHTML)+parseInt(cAttTit.innerHTML) != 11 )
	{
		var the_divs = document.getElementById('PorTitolari').getElementsByTagName('div');
		for(i=0;i<cPorTit.innerHTML;i++)
		{
			the_divs.item(i+1).style.backgroundImage='url(\'images/boxRed.png\')';
			the_divs.item(i+1).style.backgroundPosition='center';
			the_divs.item(i+1).style.backgroundRepeat='no-repeat';
		}
		
		var the_divs = document.getElementById('DifTitolari').getElementsByTagName('div');
		for(i=0;i<cDifTit.innerHTML;i++)
		{
			the_divs.item(i+1).style.backgroundImage='url(\'images/boxRed.png\')';
			the_divs.item(i+1).style.backgroundPosition='center';
			the_divs.item(i+1).style.backgroundRepeat='no-repeat';
		}
		
		var the_divs = document.getElementById('CenTitolari').getElementsByTagName('div');
		for(i=0;i<cCenTit.innerHTML;i++)
		{
			the_divs.item(i+1).style.backgroundImage='url(\'images/boxRed.png\')';
			the_divs.item(i+1).style.backgroundPosition='center';
			the_divs.item(i+1).style.backgroundRepeat='no-repeat';
		}
		
		var the_divs = document.getElementById('AttTitolari').getElementsByTagName('div');
		for(i=0;i<cAttTit.innerHTML;i++)
		{
			the_divs.item(i+1).style.backgroundImage='url(\'images/boxRed.png\')';
			the_divs.item(i+1).style.backgroundPosition='center';
			the_divs.item(i+1).style.backgroundRepeat='no-repeat';
		}
	} else {
		//document.getElementById('DifTitolari').style.color = 'okColor';
		//document.getElementById('CenTitolari').style.color = 'okColor';
		//document.getElementById('AttTitolari').style.color = 'okColor';
	}
	
	/* checks Riserve */
	if (cPorRis.innerHTML == 0) {
		document.getElementById('PorRiserve').style.backgroundImage='url(\'images/traspRed60.png\')';
	} 
	else if (cPorRis.innerHTML != 3 - cPorTit.innerHTML)
	{
		var the_divs = document.getElementById('PorRiserve').getElementsByTagName('div');
		for(i=0;i<cPorRis.innerHTML;i++)
		{
			the_divs.item(i+1).style.backgroundImage='url(\'images/boxRed.png\')';
			the_divs.item(i+1).style.backgroundPosition='center';
			the_divs.item(i+1).style.backgroundRepeat='no-repeat';
		}	
	}
	
	if (cDifRis.innerHTML == 0) {
		document.getElementById('DifRiserve').style.backgroundImage='url(\'images/traspRed60.png\')';
	} 
	else if (cDifRis.innerHTML != 8 - cDifTit.innerHTML)
	{
		var the_divs = document.getElementById('DifRiserve').getElementsByTagName('div');
		for(i=0;i<cDifRis.innerHTML;i++)
		{
			the_divs.item(i+1).style.backgroundImage='url(\'images/boxRed.png\')';
			the_divs.item(i+1).style.backgroundPosition='center';
			the_divs.item(i+1).style.backgroundRepeat='no-repeat';
		}	
	}
	
	if (cCenRis.innerHTML == 0) {
		document.getElementById('CenRiserve').style.backgroundImage='url(\'images/traspRed60.png\')';
	} 
	else if (cCenRis.innerHTML != 8 - cCenTit.innerHTML)
	{
		var the_divs = document.getElementById('CenRiserve').getElementsByTagName('div');
		for(i=0;i<cCenRis.innerHTML;i++)
		{
			the_divs.item(i+1).style.backgroundImage='url(\'images/boxRed.png\')';
			the_divs.item(i+1).style.backgroundPosition='center';
			the_divs.item(i+1).style.backgroundRepeat='no-repeat';
		}	
	}

	if (cAttRis.innerHTML == 0) {
		document.getElementById('AttRiserve').style.backgroundImage='url(\'images/traspRed60.png\')';
	} 
	else if (cAttRis.innerHTML != 6 - cAttTit.innerHTML)
	{
		var the_divs = document.getElementById('AttRiserve').getElementsByTagName('div');
		for(i=0;i<cAttRis.innerHTML;i++)
		{
			the_divs.item(i+1).style.backgroundImage='url(\'images/boxRed.png\')';
			the_divs.item(i+1).style.backgroundPosition='center';
			the_divs.item(i+1).style.backgroundRepeat='no-repeat';
		}	
	}
}

function changeStyles() {
	
	//var browser = navigator.appVersion;
	var browser = navigator.appName;
    //alert(browser);
	
	var width = Array(10);
	width[0] = 796;
	width[1] = 396;
	width[2] = 262;
	width[3] = 196;
	width[4] = 156;
	width[5] = 129;
	width[6] = 110;
	width[7] = 96;
	width[8] = 84;
	width[9] = 76;
	
	var the_divs = document.getElementById('PorTitolari').getElementsByTagName('div');
	for(i=0;i<cPorTit.innerHTML;i++){
		the_divs.item(i+1).style.cssText='color:' + 'textColor4' + '; background-image:url(\'images/boxBlack.png\'); font-weight:bold; background-position:center; background-repeat:no-repeat;';
		the_divs.item(i+1).style.clear = 'none';
		if (browser != "Microsoft Internet Explorer")
		//if (browser.indexOf('MSIE') == -1)
		{
			the_divs.item(i+1).style.cssFloat = 'left';
		} else {
			the_divs.item(i+1).style.styleFloat = 'left';
		}
		the_divs.item(i+1).style.width = width[cPorTit.innerHTML-1] + 'px';	
	}
	
	var the_divs = document.getElementById('DifTitolari').getElementsByTagName('div');
	for(i=0;i<cDifTit.innerHTML;i++){
		the_divs.item(i+1).style.cssText='color:' + 'textColor4' + '; background-image:url(\'images/boxBlack.png\'); font-weight:bold; background-position:center; background-repeat:no-repeat;';		
		the_divs.item(i+1).style.clear = 'none';
		
		if (browser != "Microsoft Internet Explorer")
		//if (browser.indexOf('MSIE') == -1)
		{		
			the_divs.item(i+1).style.cssFloat = 'left';
		} else {
			the_divs.item(i+1).style.styleFloat = 'left';
		}
		the_divs.item(i+1).style.width = width[cDifTit.innerHTML-1] + 'px';	
	}

	var the_divs = document.getElementById('CenTitolari').getElementsByTagName('div');
	for(i=0;i<cCenTit.innerHTML;i++){
		the_divs.item(i+1).style.cssText='color:' + 'textColor4' + '; background-image:url(\'images/boxBlack.png\'); font-weight:bold; background-position:center; background-repeat:no-repeat;';		
		the_divs.item(i+1).style.clear = 'none';		
		
		if (browser != "Microsoft Internet Explorer")
		//if (browser.indexOf('MSIE') == -1)
		{
			the_divs.item(i+1).style.cssFloat = 'left';
		} else {
			the_divs.item(i+1).style.styleFloat = 'left';
		}
the_divs.item(i+1).style.width = width[cCenTit.innerHTML-1] + 'px';		}

	var the_divs = document.getElementById('AttTitolari').getElementsByTagName('div');
	for(i=0;i<cAttTit.innerHTML;i++){
		the_divs.item(i+1).style.cssText='color:' + 'textColor4' + '; background-image:url(\'images/boxBlack.png\'); font-weight:bold; background-position:center; background-repeat:no-repeat;';		
		the_divs.item(i+1).style.clear = 'none';		
		
		if (browser != "Microsoft Internet Explorer")
		//if (browser.indexOf('MSIE') == -1)
		{
			the_divs.item(i+1).style.cssFloat = 'left';
		} else {
			the_divs.item(i+1).style.styleFloat = 'left';
		}
the_divs.item(i+1).style.width = width[cAttTit.innerHTML-1] + 'px';		}

	for(i=0;i<cPorRis.innerHTML;i++){
		document.getElementById('PorRiserve').getElementsByTagName('div').item(i+1).style.cssText='position:static; width:100px; color:' + 'textColor4' + '; background-image:url(\'images/boxBlack.png\'); font-weight:bold; background-position:center; background-repeat:no-repeat;';
	}

	for(i=0;i<cDifRis.innerHTML;i++){
		document.getElementById('DifRiserve').getElementsByTagName('div').item(i+1).style.cssText='position:static; width:100px; color:' + 'textColor4' + '; background-image:url(\'images/boxBlack.png\'); font-weight:bold; background-position:center; background-repeat:no-repeat;';
	}

	for(i=0;i<cCenRis.innerHTML;i++){
		document.getElementById('CenRiserve').getElementsByTagName('div').item(i+1).style.cssText='position:static; width:100px; color:' + 'textColor4' + '; background-image:url(\'images/boxBlack.png\'); font-weight:bold; background-position:center; background-repeat:no-repeat;';
	}

	for(i=0;i<cAttRis.innerHTML;i++){
		document.getElementById('AttRiserve').getElementsByTagName('div').item(i+1).style.cssText='position:static; width:100px; color:' + 'textColor4' + '; background-image:url(\'images/boxBlack.png\'); font-weight:bold; background-position:center; background-repeat:no-repeat;';
	}

	for(i=0;i<cPorTri.innerHTML;i++){
		document.getElementById('PorTribuna').getElementsByTagName('div').item(i+1).style.cssText='position:static; width:100px; color:' + 'textColor4' + '; background-image:url(\'images/boxBlack.png\'); font-weight:bold; background-position:center; background-repeat:no-repeat;';
	}
	
	for(i=0;i<cDifTri.innerHTML;i++){
		document.getElementById('DifTribuna').getElementsByTagName('div').item(i+1).style.cssText='position:static; width:100px; color:' + 'textColor4' + '; background-image:url(\'images/boxBlack.png\'); font-weight:bold; background-position:center; background-repeat:no-repeat;';
	}
	
	for(i=0;i<cCenTri.innerHTML;i++){
		document.getElementById('CenTribuna').getElementsByTagName('div').item(i+1).style.cssText='position:static; width:100px; color:' + 'textColor4' + '; background-image:url(\'images/boxBlack.png\'); font-weight:bold; background-position:center; background-repeat:no-repeat;';
	}
	
	for(i=0;i<cAttTri.innerHTML;i++){
		document.getElementById('AttTribuna').getElementsByTagName('div').item(i+1).style.cssText='position:static; width:100px; color:' + 'textColor4' + '; background-image:url(\'images/boxBlack.png\'); font-weight:bold; background-position:center; background-repeat:no-repeat;';
	}

	document.getElementById('CenTitolari').style.cssText='width:100%; height:25%; background-color:transparent;';
	document.getElementById('AttTitolari').style.cssText='width:100%; height:25%; background-color:transparent;';
	document.getElementById('DifTitolari').style.cssText='width:100%; height:25%; background-color:transparent;';
	document.getElementById('PorTitolari').style.cssText='width:100%; height:25%; background-color:transparent;';
	document.getElementById('PorRiserve').style.cssText='height:100%; width:25%';
	document.getElementById('DifRiserve').style.cssText='height:100%; width:25%';
	document.getElementById('CenRiserve').style.cssText='height:100%; width:25%';
	document.getElementById('AttRiserve').style.cssText='height:100%; width:25%';
	document.getElementById('PorTribuna').style.cssText='height:100%; width:25%';
	document.getElementById('DifTribuna').style.cssText='height:100%; width:25%';
	document.getElementById('CenTribuna').style.cssText='height:100%; width:25%';
	document.getElementById('AttTribuna').style.cssText='height:100%; width:25%';
}

function show() {
	Count();	
}

function saveData(_squadra) {
	if( document.getElementById ) 
	{
		form = document.getElementById('saveData');
		t=0;
		counters = ['counterPorTitolari', 'counterPorRiserve', 'counterPorTribuna', 'counterDifTitolari', 'counterDifRiserve', 'counterDifTribuna', 'counterCenTitolari', 'counterCenRiserve', 'counterCenTribuna', 'counterAttTitolari', 'counterAttRiserve', 'counterAttTribuna'];
		divs = ['PorTitolari', 'PorRiserve', 'PorTribuna', 'DifTitolari', 'DifRiserve', 'DifTribuna', 'CenTitolari', 'CenRiserve', 'CenTribuna', 'AttTitolari', 'AttRiserve', 'AttTribuna'];
		for(j=0;j<counters.length;j++)
		{
			for(i=0;i<document.getElementById(counters[j]).innerHTML;i++)
			{	
				//form.getElementsByTagName('input').item(t+4).value=document.getElementById(divs[j]).getElementsByTagName('div').item(i+1).innerHTML;
				form.getElementsByTagName('input').item(t+4).value=document.getElementById(divs[j]).getElementsByTagName('div').item(i+1).getElementsByTagName('span').item(0).innerHTML; 
				t++;
			}
		}
		
		// modulo 
		document.getElementById('modulo').value = document.getElementById('chosenModule').innerHTML;
		// titolari 
		document.getElementById('titolari').value = document.getElementById('counterPorTitolari').innerHTML+" - "+document.getElementById('counterDifTitolari').innerHTML+" - "+document.getElementById('counterCenTitolari').innerHTML+" - "+document.getElementById('counterAttTitolari').innerHTML;
		// riserve 
		document.getElementById('riserve').value = document.getElementById('counterPorRiserve').innerHTML+" - "+document.getElementById('counterDifRiserve').innerHTML+" - "+document.getElementById('counterCenRiserve').innerHTML+" - "+document.getElementById('counterAttRiserve').innerHTML;
		// returnFromError 
		document.getElementById('returnFromError').value = decodeURI(window.location.href);

		document.getElementById('saveData').submit();
	}	
	else {
		alert(":( DOM NON Supportato!");
	}
}

function saveDataTipo(_squadra) {
	if( document.getElementById ) 
	{
		form = document.getElementById('saveDataTipo');
		t=0;
		counters = ['counterPorTitolari', 'counterPorRiserve', 'counterPorTribuna', 'counterDifTitolari', 'counterDifRiserve', 'counterDifTribuna', 'counterCenTitolari', 'counterCenRiserve', 'counterCenTribuna', 'counterAttTitolari', 'counterAttRiserve', 'counterAttTribuna'];
		divs = ['PorTitolari', 'PorRiserve', 'PorTribuna', 'DifTitolari', 'DifRiserve', 'DifTribuna', 'CenTitolari', 'CenRiserve', 'CenTribuna', 'AttTitolari', 'AttRiserve', 'AttTribuna'];
		for(j=0;j<counters.length;j++)
		{
			for(i=0;i<document.getElementById(counters[j]).innerHTML;i++)
			{	
				//form.getElementsByTagName('input').item(t+4).value=document.getElementById(divs[j]).getElementsByTagName('div').item(i+1).innerHTML;
				form.getElementsByTagName('input').item(t+4).value=document.getElementById(divs[j]).getElementsByTagName('div').item(i+1).getElementsByTagName('span').item(0).innerHTML;
				t++;
			}
		}
		
		// modulo 
		document.getElementById('moduloTipo').value = document.getElementById('chosenModule').innerHTML;
		// titolari 
		document.getElementById('titolariTipo').value = document.getElementById('counterPorTitolari').innerHTML+" - "+document.getElementById('counterDifTitolari').innerHTML+" - "+document.getElementById('counterCenTitolari').innerHTML+" - "+document.getElementById('counterAttTitolari').innerHTML;
		// riserve 
		document.getElementById('riserveTipo').value = document.getElementById('counterPorRiserve').innerHTML+" - "+document.getElementById('counterDifRiserve').innerHTML+" - "+document.getElementById('counterCenRiserve').innerHTML+" - "+document.getElementById('counterAttRiserve').innerHTML;
		// returnFromError 
		document.getElementById('returnFromErrorTipo').value = decodeURI(window.location.href);
		
		document.getElementById('saveDataTipo').submit();
	}	
	else {
		alert(":( DOM NON Supportato!");
	}
}
function checkResize() {
	if (window.onresize) {
		Count();	
	}
}
function toggleModule( _module ) {
	if( document.getElementById ) 
	{
		if ( document.getElementById( 'chosenModule' ).innerHTML != _module )
		{
			var the_tds = document.getElementById('sceltaModuli').getElementsByTagName('td');
			for (var i=0; i<the_tds.length; i++)
			{
				the_tds.item(i).style.backgroundColor = 'textColor1';
				the_tds.item(i).style.color = 'textColor0';
			}
				
			document.getElementById('chosenModule').innerHTML = _module;	
			document.getElementById( _module ).style.backgroundColor = 'textColor0';
			document.getElementById( _module ).style.color = 'textColor4';
		}
	}	
	else {
		alert(":( DOM NON Supportato!");
	}
}

