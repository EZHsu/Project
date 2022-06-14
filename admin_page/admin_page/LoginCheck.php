<?php
// Start the session
session_start();
include("database.php");
$db= $conn;
$tableName="authority";
$columns= ['account','password','name','level'];
$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns){
    if(empty($db)){
     $msg= "Database connection error";
    }elseif (empty($columns) || !is_array($columns)) {
     $msg="columns Name must be defined in an indexed array";
    }elseif(empty($tableName)){
      $msg= "Table Name is empty";
   }
   else{
   
   $columnName = implode(", ", $columns);
   $query = "SELECT ".$columnName." FROM $tableName"."";
   $result = $db->query($query);
   
   if($result== true){ 
    if ($result->num_rows > 0) {
       $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
       $msg= $row;
    } else {
       $msg= "No Data Found"; 
    }
   }else{
     $msg= mysqli_error($db);
   }
   }
   return $msg;
}
if (isset($_POST['uname'])) { 
    $acc = $_POST['uname'];
}
if (isset($_POST['psw'])) { 
    $psw = $_POST['psw'];
}
$i = 0;
while(isset($fetchData[$i])){
    if($acc == $fetchData[$i]['account'] && $psw == $fetchData[$i]['password']){
        if($fetchData[$i]['level'] == "admin"){
            $_SESSION['admin_power'] = 1;
            $_SESSION['name'] = $fetchData[$i]['name'];
        }
        echo "Session variables are set.";
        header("Location: charts.php");
        die();
        break;
    }
    $_SESSION['admin_power'] = 0;
    $i++;
}
?>
<!DOCTYPE html>
<html lang="en">
    <script>alert("帳號或是密碼有誤");
    window.location.href = "Login.php";
    </script>