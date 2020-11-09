<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "0.0.0.0";
$username = "perez";
$password = "moya1234";
$dbname = "TendaDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, modelo, precio FROM Producte";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["id"]. " - Model: " . $row["modelo"]. " " . $row["precio"]. "<br>";
    
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>