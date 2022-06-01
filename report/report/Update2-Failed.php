<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$key = "";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['name'])) { 
    $key = $_POST['name'];
}

$sql = "UPDATE report SET report_end = 2 WHERE report_id = '$key'";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>