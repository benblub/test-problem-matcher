<?php

$xml = simplexml_load_file('clover.xml');

$coveredStatements = $xml->project->metrics['coveredstatements'];
$totalStatements = $xml->project->metrics['statements'];
$percentage = round(min(1, $coveredStatements / $totalStatements) * 100);
$percentageString = $percentage . '%';
$imageHeight = 20;
$imageWidth = 160;
$xMargin = 5;
$font = 3;

echo '<pre>';
print_r($xml);