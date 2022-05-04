<?php
  $method="delete";
 
  $postid= $_GET["postid"];
  $link=mysqli_connect("localhost","root","12345678","car");
  mysqli_select_db($link,"car");

   // 讀取該公告原有資料
  $sql="delete from newpost where postid='$postid'";
  if(mysqli_query($link,$sql))
    {
       header('location:backindex.php?');
    }
  else
    {
        header('location:backindex.php?');
    }
 
?>
 