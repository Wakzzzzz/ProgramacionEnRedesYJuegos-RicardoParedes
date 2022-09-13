<?php 
//$name = $_POST["name"];
//$mail = $_POST["email"];

//echo "name" . $name . "\nmail" . $mail;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miBase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO datos (idDatos, level, points)
VALUES (2, 25, 35)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


 ?>