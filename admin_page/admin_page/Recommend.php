<?php
include("database.php");
$db= $conn;
$tableName="admin_prefer";
$columns= ['prefer_id', 'bk_ISBN','name','bk_img','add_time'];
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
      $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY add_time ASC";
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
$conn->close();

$ISBN = 0;
$name = "";
$img = "";
if (isset($_POST['name'])) { 
    $name = $_POST['name'];
}
if(isset($_POST['ISBN'])){
    $ISBN = $_POST['ISBN'];
}
if(isset( $_POST['img'])){
    $img = $_POST['img'];
}
$date = date('Y-m-d');
$i = 0;
while($fetchData[$i]['bk_ISBN'] != NULL){
    if($fetchData[$i]['bk_ISBN'] == $ISBN){
        $message = "這本書已經被推薦";
        echo $message;
        exit();
    }
    $i++;
}
$Oldest = $fetchData[0]['bk_ISBN'];
$updateconn = new mysqli("localhost", "root", "12345678", "book");
if ($updateconn->connect_error) {
    die("Connection failed: " . $updateconn->connect_error);
}

$sql = "UPDATE admin_prefer SET name = '$name', bk_img = '$img', add_time = '$date', bk_ISBN = '$ISBN' WHERE bk_ISBN = '$Oldest'";
if ($updateconn->query($sql) === TRUE) {
    //echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$updateconn->close();
?>