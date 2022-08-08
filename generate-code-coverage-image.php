<?php

if (file_exists('coverage.xml')) {
    $xml = simplexml_load_file('coverage.xml');

    echo '<pre>';
    print_r($xml);
} else {
    exit('Konnte coverage.xml nicht öffnen.');
}
