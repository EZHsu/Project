<?php
$hostName = "localhost";
$userName = "root";
$password = "12345678";
$databaseName = "Book";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>