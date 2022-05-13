<?php
define("hostName", "localhost");
define("user", "root");
define("password", "12345678");
define("databasename", "Report");
//mysql_connect(); parameters
$conn = mysqli_connect(hostName, user, password, databasename);
//run a simple condition to check your connection
if (!$conn)
{
    die("You DB connection has been failed!: " . mysqli_connect_error());
}
$conn = "You have successfully connected to the mysql database";
//echo $connection;
?>