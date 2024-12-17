<?php
include 'table.php';

$csvFile = "data.csv";
$tableRows = generateTableRows($csvFile);
$tableHeaders = generateTableHeaders($csvFile);

include 'template.html';
?>
