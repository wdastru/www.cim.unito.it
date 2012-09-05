<?php

$localizer = "../../";

$doc = new DOMDocument();

/*
 * remove element
 */
$doc -> load('minutes.xml');

$minutes = $doc -> getElementsByTagName("minutes");
$meetings = $doc -> getElementsByTagName("meeting");

foreach ($meetings as $meeting) {

    $descriptions = $meeting -> getElementsByTagName("description");
    $description = $descriptions -> item(0) -> nodeValue;

    $dates = $meeting -> getElementsByTagName("date");
    $date = $dates -> item(0) -> nodeValue;

    $files = $meeting -> getElementsByTagName("file");
    $file = $files -> item(0) -> nodeValue;

    if ($file == $_POST['file'] && $description == $_POST['description'] && $date == $_POST['date']) {

        try {
            $meeting -> parentNode -> removeChild($meeting);
        } catch (DOMException $e) {
            echo $e -> getMessage();
        }

        if (unlink($localizer . "COST/private/uploads/minutes/" . $file)) {
        } else {
            header("Location: " . $localizer . "/COST/private/error.php?error=delete");
        }

    }
}
/* END remove element */

$doc -> save('minutes.xml');

header("Location:" . $localizer . "COST/private/minutes.php");
?>