<?php

if (file_exists('clover.xml')) {
    $xml = simplexml_load_file('clover.xml');

    echo '<pre>';
    print_r($xml);
} else {
    exec('ls -la');
    exit('Konnte clover.xml nicht öffnen.');
}
