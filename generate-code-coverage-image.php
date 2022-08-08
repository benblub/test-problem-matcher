<?php

if (file_exists('coverage.xml')) {
    $xml = simplexml_load_file('coverage.xml');

    sprintf('::set-output name=var::%s', $xml->asXML());
} else {
    exit('Konnte coverage.xml nicht öffnen.');
}
