<?php
//取得點選的資料id
$id = $_GET['id'];

//查詢此id的圖片資料
$link=mysqli_connect("localhost","root","","book_share");
$sql="SELECT bk_img_blob FROM book_data WHERE bk_id = {$id}";
$cur=mysqli_query($link, $sql);
$data=mysqli_fetch_array($cur);

//設定網頁資料格式(定義網頁的編碼)
header("Content-type: image/jpg"); 
//輸出圖片資料
echo $data['bk_img_blob'];

?>