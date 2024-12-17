<?php
function generateTableRows($csvFile) {
  $rows = array_map('str_getcsv', file($csvFile));
  
  array_shift($rows);
  
  $tableRows = '';
  foreach ($rows as $row) {
      $tableRows .= "<tr>";
      foreach ($row as $cell) {
          $tableRows .= "<td>" . htmlspecialchars($cell) . "</td>";
      }
      $tableRows .= "</tr>";
  }
  return $tableRows;
};

function generateTableHeaders($csvFile) {
  $rows = array_map('str_getcsv', file($csvFile));
  
  $headers = array_shift($rows);
  
  $tableHeaders = '';
  foreach ($headers as $header) {
    $header = strtolower($header);
    $header = ucfirst($header);

    $tableHeaders .= "<th>" . htmlspecialchars($header) . "</th>";
  }
  
  return $tableHeaders;
};
?>
