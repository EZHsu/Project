<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$key = "";
$acc = "";
if (isset($_POST['name'])) { 
    $key = $_POST['name'];
}
if (isset($_POST['acc'])) { 
    $acc = $_POST['acc'];
}


$sql = "UPDATE report SET report_end = 1 WHERE report_id = '$key'";
$sql2 = "UPDATE authority SET report_count = report_count + 1 WHERE account = '$acc'";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
$conn->close();
?>