// JavaScript Document

var IE = document.all ? true : false
// If NS -- that is, !IE -- then set up for mouse capture
if(!IE)
    document.captureEvents(Event.MOUSEMOVE)
var tempX = 0
var tempY = 0

document.onmousedown = getMouseXY;
// Main function to retrieve mouse x-y pos.s

function getYScroll() {
    var pageY;
    if( typeof (window.pageYOffset) == 'number') {
        // FF
        pageY = window.pageYOffset;
    } else {
        // IE
        pageY = document.documentElement.scrollTop;
    }
    return pageY;
}

function getMouseXY(e) {

    if(IE) {// grab the x-y pos.s if browser is IE
        //tempX = event.clientX + document.body.scrollLeft
        //tempY = event.clientY + document.body.scrollTop
        tempX = event.clientX + document.documentElement.scrollLeft
        tempY = event.clientY + document.documentElement.scrollTop
    } else {// grab the x-y pos.s if browser is NS
        tempX = e.pageX
        tempY = e.pageY
    }
    // catch possible negative values in NS4
    if(tempX < 0) {
        tempX = 0
    }
    if(tempY < 0) {
        tempY = 0
    }
    // show the position values in the form named Show
    // in the text fields named MouseX and MouseY
    //document.Show.MouseX.value = tempX
    //document.Show.MouseY.value = tempY

    return true
}

function getHeight() {
    return tempY;
}

function oreStrumento(_strumento) {
    if(_strumento == "600MHz") {
        ore = Array(900, 915, 930, 945, 1000, 1100, 1200, 1300, 1400, 1500, 1600, 1700, 1800, 1900, 2000);
    } else {
        ore = Array(800, 900, 1000, 1100, 1200, 1300, 1400, 1500, 1600, 1700, 1800, 1900, 2000);
    }
    return ore;
}

function formatHour(_ora) {
    if(_ora >= 1000) {
        return _ora.toString().substring(0, 2) + ":" + _ora.toString().substring(2, 4);
    } else {
        return _ora.toString().substring(0, 1) + ":" + _ora.toString().substring(1, 3);
    }
}

function showNewPrenoBox(_date, _startHour, _strumento) {

    var ore = new Array();
    ore = oreStrumento(_strumento);
    aBoxIsOn = true;
    if(document.getElementById && document.getElementsByTagName) {
        var cancPrenoBox = document.getElementById('cancPrenoBox');
        if(cancPrenoBox.style.visibility == 'visible') {
            cancPrenoBox.style.visibility = 'hidden';
        }

        var newPrenoBox = document.getElementById('newPrenoBox');
        var visibility = newPrenoBox.style.visibility;
        var spans = newPrenoBox.getElementsByTagName('span');

        var str = new String(_date);
        var d = new Date();

        d.setUTCFullYear(str.substr(0, 4), str.substr(4, 2) - 1, str.substr(6, 2));
        spans.item(0).innerHTML = d.toDateString() + ' ore ' + formatHour(_startHour);
        // data e ora

        for(var i = 0; i < ore.length; i++) {
            if(ore[i] <= _startHour) {
                var id = 'o' + ore[i];
                document.getElementById('select').removeChild(document.getElementById(id));
            }
        }

        if(_startHour == 2000)
            document.getElementById('xRemove').removeChild(document.getElementById('toRemove'));

        var inputs = newPrenoBox.getElementsByTagName('input');
        inputs.item(15).value = 'preno';
        inputs.item(16).value = _date;
        inputs.item(17).value = _startHour;
        inputs.item(20).value = _date;

        //alert("height = " + getHeight());
        //alert("top = "+ newPrenoBox.style.posTop);

        if(!IE) {
            newPrenoBox.style.top = getHeight() - 300;
        } else {
            newPrenoBox.style.posTop = getHeight() - 300;
        }

        //alert("top = " + newPrenoBox.style.top);

        if(visibility == 'hidden') {
            newPrenoBox.style.visibility = 'visible';
            document.getElementById('warning').style.visibility = 'visible';
        }
    } else {
        alert(":( DOM NON Supportato!");
    }
}

function showCancPrenoBox(_date, _startHour, _strumento) {
    aBoxIsOn = true;
    if(document.getElementById && document.getElementsByTagName) {
        var newPrenoBox = document.getElementById('newPrenoBox');
        if(newPrenoBox.style.visibility == 'visible') {
            newPrenoBox.style.visibility = 'hidden';
        }

        var cancPrenoBox = document.getElementById('cancPrenoBox');
        var visibility = cancPrenoBox.style.visibility;
        var spans = cancPrenoBox.getElementsByTagName('span');
        var inputs = cancPrenoBox.getElementsByTagName('input');

        var hiddenDivs = document.getElementById('a' + _date + _startHour);

        inputs.item(1).value = hiddenDivs.getElementsByTagName('div').item(1).innerHTML;
        // utente
        inputs.item(2).value = hiddenDivs.getElementsByTagName('div').item(0).innerHTML;
        // data
        inputs.item(3).value = hiddenDivs.getElementsByTagName('div').item(2).innerHTML;
        // start
        inputs.item(4).value = hiddenDivs.getElementsByTagName('div').item(3).innerHTML;
        // end
        inputs.item(7).value = hiddenDivs.getElementsByTagName('div').item(0).innerHTML;
        // data

        var str = new String(hiddenDivs.getElementsByTagName('div').item(0).innerHTML);
        var d = new Date();
        d.setUTCFullYear(str.substr(0, 4), str.substr(4, 2) - 1, str.substr(6, 2));

        if(hiddenDivs.getElementsByTagName('div').item(2).innerHTML != 2000) {// orario inizio
            if(hiddenDivs.getElementsByTagName('div').item(3).innerHTML == 2100) {// orario fine
                document.getElementById('cancPrenoBox').removeChild(document.getElementById('notte'));
                document.getElementById('cancPrenoBox').removeChild(document.getElementById('giorno'));

                spans.item(1).innerHTML = d.toDateString();
                // data
                spans.item(3).innerHTML = formatHour(hiddenDivs.getElementsByTagName('div').item(2).innerHTML);
                // start
            } else {
                document.getElementById('cancPrenoBox').removeChild(document.getElementById('notte'));
                document.getElementById('cancPrenoBox').removeChild(document.getElementById('giornonotte'));

                spans.item(1).innerHTML = d.toDateString();
                // data
                spans.item(3).innerHTML = formatHour(hiddenDivs.getElementsByTagName('div').item(2).innerHTML);
                // start
                spans.item(5).innerHTML = formatHour(hiddenDivs.getElementsByTagName('div').item(3).innerHTML);
                // end
            }
        } else {
            document.getElementById('cancPrenoBox').removeChild(document.getElementById('giorno'));
            document.getElementById('cancPrenoBox').removeChild(document.getElementById('giornonotte'));

            spans.item(1).innerHTML = d.toDateString();
            // data
        }

        if(!IE) {
            cancPrenoBox.style.top = getHeight() - 300;
        } else {
            cancPrenoBox.style.posTop = getHeight() - 300;
        }

        if(visibility == 'hidden') {
            cancPrenoBox.style.visibility = 'visible';
        }
    } else {
        alert(":( DOM NON Supportato!");
    }
}

function noUserCheck() {
    if(document.getElementById) {
        if(document.getElementById('user').value == '') {
            document.getElementById('warning').style.visibility = 'visible';
            document.getElementById('user').style.backgroundColor = '#FF9999';
            document.getElementById('submit').style.visibility = 'hidden';
        } else {
            document.getElementById('warning').style.visibility = 'hidden';
            document.getElementById('user').style.backgroundColor = '#FFFFFF';
            document.getElementById('submit').style.visibility = 'visible';
        }
    } else {
        alert(":( DOM NON Supportato!");
    }
}

function On(id) {
    if(document.getElementById) {
        document.getElementById(id).style.borderColor = '#FF6600';
        document.getElementById(id).style.color = '#FF6600';
    } else {
        alert(":( DOM NON Supportato!");
    }
}

function Off(id) {
    if(document.getElementById) {
        document.getElementById(id).style.borderColor = '#333333';
        document.getElementById(id).style.color = '#CCCCCC';
    } else {
        alert(":( DOM NON Supportato!");
    }
}