<?php

$xml = simplexml_load_file('clover.xml');
// echo '<pre>';
// print_r($xml->project->metrics);

$coveredStatements = $xml->project->metrics['coveredstatements'];
$totalStatements = $xml->project->metrics['statements'];
if (0 === $coveredStatements) {
    $percentageString = '0 %';
} else {
    $percentage = round(min(1, $coveredStatements / $totalStatements) * 100);
    $percentageString = $percentage . '%';
}


echo $percentageString;