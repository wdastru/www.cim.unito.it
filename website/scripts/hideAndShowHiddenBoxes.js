function showFormBox(id) {
    if (document.getElementById) {
        var hiddenBox = document.getElementById('hiddenBox');
        if (hiddenBox != null) {
            var cssObj = window.getComputedStyle(hiddenBox, null);
            var visibility = cssObj.getPropertyValue("visibility");
            if (visibility == 'hidden') {
                var hiddenSeqNameInput = document.getElementById('hiddenSeqNameInput');
                if (hiddenSeqNameInput != null) {
                    var value_attribute = hiddenSeqNameInput.attributes.getNamedItem('value');
                    if (value_attribute != null) {
                        value_attribute.value = id;
                    }
                    else {
                        console.log("value_attribute is null");
                    }
                    hiddenBox.style.display = 'block';
                    hiddenBox.style.visibility = 'visible';
                }
            }
            else {
                console.log("hiddenSeqNameInput is null");
            }
        }
        else {
            console.log("hiddenBox is null");
        }
    }
    else {
        alert(":( DOM not supported!");
    }
}
function hideFormBox() {
    if (document.getElementById) {
        var hiddenBox = document.getElementById('hiddenBox');
        if (hiddenBox != null) {
            var cssObj = window.getComputedStyle(hiddenBox, null);
            var visibility = cssObj.getPropertyValue("visibility");
            if (visibility == 'visible') {
                hiddenBox.style.display = 'none';
                hiddenBox.style.visibility = 'hidden';
            }
            else {
                console.log("visibility is not set to visible");
            }
        }
        else {
            console.log("hiddenBox is null");
        }
    }
    else {
        alert(":( DOM not supported!");
    }
}
