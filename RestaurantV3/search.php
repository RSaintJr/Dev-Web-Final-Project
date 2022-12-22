<?php

include_once('Config.php');

// Execute the SELECT statement
$sql = "SELECT * FROM pessoa WHERE nome LIKE '%$term%' OR telefone LIKE '%$term%'";
$result = mysqli_query($conn, $sql);

// Fetch the search results
$results = array();
while ($row = mysqli_fetch_assoc($result)) {
  $results[] = $row;
}

// Return the results as a JSON object
echo json_encode($results);

// Close the connection
mysqli_close($conn);
