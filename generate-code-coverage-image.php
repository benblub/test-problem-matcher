<?php

if (file_exists('coverage.xml')) {
    $xml = simplexml_load_file('coverage.xml');

    echo $xml->asXML();
} else {
    exit('Konnte coverage.xml nicht öffnen.');
}
