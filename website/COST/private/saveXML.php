<?php

$books = array();
$books[] = array('description' => 'I meeting', 'file' => 'pippo', 'date' => "1/1/2011");
$books[] = array('description' => 'II meeting', 'file' => 'poppa', 'date' => "25/12/2011");

$doc = new DOMDocument();
$doc -> formatOutput = true;

$r = $doc -> createElement("minutes");
$doc -> appendChild($r);

foreach ($books as $book) {
    $b = $doc -> createElement("meeting");

    $author = $doc -> createElement("description");
    $author -> appendChild($doc -> createTextNode($book['description']));
    $b -> appendChild($author);

    $title = $doc -> createElement("file");
    $title -> appendChild($doc -> createTextNode($book['file']));
    $b -> appendChild($title);

    $publisher = $doc -> createElement("date");
    $publisher -> appendChild($doc -> createTextNode($book['date']));
    $b -> appendChild($publisher);

    $r -> appendChild($b);
}

$doc -> save('minutes.xml');
?>