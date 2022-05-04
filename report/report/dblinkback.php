<?php
$method=$_POST["method"];
$post_content=$_POST["post_content"];
$postid=$_POST["postid"];
$postdate=$_POST["postdate"];
$name = $_POST["name"];
$account = $_POST["account"];
$password = $_POST["password"];
$level="user";

  $link=mysqli_connect("localhost","root","12345678","car");

  mysqli_select_db($link,"car");



 if($method=="addnews")

    {

	   $sql="insert into newpost (postid,post_content,postdate) values ('$postid','$post_content','$postdate')";

	   echo $sql;

	   if(mysqli_query($link,$sql))

		{

		   header('location:backindex.php?');

		}
 }
	
elseif($method=="newregister"){
	   $sql="insert into authority (name,account,password,level) values ('$name','$account','$password','$level')";

	   echo $sql;

	   if(mysqli_query($link,$sql))

		{

		   header('location:login1.php?');
           

		}


}


  




/*
$method = $_POST["method"];
$post_content=$_POST["post_content"];

$postid=$_POST["postid"];
  

  $link=mysqli_connect("localhost","root","12345678","car");

  mysqli_select_db($link,"car");


echo $link;

 
f(method="addnews") {

	   $sql="insert into newpost (postid,post_content) values (NULL,'$post_content')";

	   echo $sql;

	   if(mysqli_query($link,$sql))

		{

		   header('location:backindex.php');

		}

	}

  */



?>