/**
 * @author WAleViolaeIvan
 */
function loadXMLDoc(dname) {
    if(window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    } else {
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.open("GET", dname, false);
    xhttp.send("");
    return xhttp.responseXML;
}

function fillCOSTContainer() {
    var container = document.getElementById("costContainer");
    var xmlFile = "cost.xml";
    var xslFile = "cost.xsl";

    // code for IE
    if(window.ActiveXObject) {
        var xml = new ActiveXObject("Microsoft.XMLDOM");
        xml.async = "false";
        xml.load(xmlFile);

        var xsl = new ActiveXObject("Microsoft.XMLDOM");
        xsl.async = "false";
        xsl.load(xslFile);
        ex = xml.transformNode(xsl);
        document.getElementById("costContainer").innerHTML = ex;
    }
    // code for Mozilla, Firefox, Opera, etc.
    else if(document.implementation && document.implementation.createDocument) {
        var xsl = loadXMLDoc(xslFile);
        var xml = loadXMLDoc(xmlFile);
        xsltProcessor = new XSLTProcessor();
        xsltProcessor.importStylesheet(xsl);
        resultDocument = xsltProcessor.transformToFragment(xml, document);

        document.getElementById("costContainer").innerHTML = '';
        document.getElementById("costContainer").appendChild(resultDocument);
    }
}

function changeUploadFormVisibility(id) {

    var uploadForm = document.getElementById(id);
    var uploadButton = document.getElementById('button_' + id);

    if(uploadForm.style.visibility != 'visible') {
        uploadForm.style.visibility = 'visible';
        uploadButton.style.display = 'none';
    } else {
        uploadForm.style.visibility = 'hidden';
    }
}

var id = "";

function sendForm() {

    if(document.getElementById) {
        form = document.getElementById(id);
        form.action = 'upload.php';
        form.submit();

    } else {
        alert(":( DOM NON Supportato!");
    }
}

function sendFormMinutes() {

    if(document.getElementById) {
        form = document.getElementById(id);
        form.submit();

    } else {
        alert(":( DOM NON Supportato!");
    }
}

function sendFormWGs() {

    if(document.getElementById) {
        form = document.getElementById(id);
        form.submit();

    } else {
        alert(":( DOM NON Supportato!");
    }
}

function validateFormWGs(_id) {

    if(document.getElementById) {
        var form = document.getElementById("uploadFormWG" + _id);
        var patt1 = new RegExp("[0-9]{4}-[0-9]{2}-[0-9]{2}");
        //var patt2 = new RegExp("[\:\*\?\"\<\>\|\'\]");

        if(patt1.test(form.date.value)) {
            if(form.desc.value != '') {
                if(form.filename.value != '') {
                    form.submit();

                    //if(!patt2.test(form.filename.value)) {
                    //    form.submit();
                    //} else {
                    //    alert("The file name is invalid !");
                    //}

                } else {
                    alert("The filename field is empty !");
                }
            } else {
                alert("The description field is empty !");
            }
        } else {
            alert("The date format has to be yyyy-mm-dd !");
        }

    } else {
        alert(":( DOM NON Supportato!");
    }
}

function showConfirmBox(_id) {
    id = _id;
    if(document.getElementById) {
        var hiddenBox = document.getElementById("confirmDeletionHiddenBox");
        hiddenBox.style.visibility = 'visible';
        hiddenBox.style.top = '30%';
    } else {
        alert(":( DOM NON Supportato!");
    }
}

function hideBox() {
    if(document.getElementById) {
        var hiddenBox = document.getElementById("confirmDeletionHiddenBox");
        hiddenBox.style.visibility = 'hidden';
    } else {
        alert(":( DOM NON Supportato!");
    }
}