<?php

$localizer = "../../";

$doc = new DOMDocument();

/*
 * read document
 */
$doc -> load('minutes.xml');
$minutes = $doc -> getElementsByTagName("minutes");
/* END read */

/*
 * upload file to server
 */
if ($_FILES['ufile'] != null) {
    
    if (move_uploaded_file($_FILES['ufile']['tmp_name'], $localizer . "COST/private/uploads/minutes/" . $_FILES['ufile']['name'])) {; /* OK */
    } else {
        header("Location: " . $localizer . "COST/private/error.php?error=upload");
    }
}
/* END upload file */

/*
 * add new element
 */
$b = $doc -> createElement("meeting");

$new_description = $doc -> createElement("description");
$new_description -> appendChild($doc -> createTextNode($_POST['description']));
$b -> appendChild($new_description);

$new_date = $doc -> createElement("date");
$new_date -> appendChild($doc -> createTextNode($_POST['date']));
$b -> appendChild($new_date);

$new_file = $doc -> createElement("file");
$new_file -> appendChild($doc -> createTextNode($_FILES['ufile']['name']));
$b -> appendChild($new_file);

$minutes -> item(0) -> appendChild($b);

$doc -> save('minutes.xml');
/* END add new element */

header("Location:" . $localizer . "COST/private/minutes.php");
?>