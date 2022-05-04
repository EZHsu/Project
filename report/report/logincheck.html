<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Forgot Password</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<?php
    $account = $_POST["account"];
    $password = $_POST["password"];
   
    $link = mysqli_connect("localhost","root","12345678","car");
    $sql = "select * from `authority` where password='$password' and account='$account'";

    $rs  =mysqli_query($link,$sql);
    
    session_start();
if(isset($_POST['name'])){
            $_SESSION['name']=$_POST['name'];
        }
       if(isset($_POST['account'])){
           $_SESSION['account']=$_POST['account'];
       }
       if(isset($_POST['password'])){
           $_SESSION['password'] = $_POST['password'];
       }
 if(isset($_POST['account']) && isset($_POST['password'])){
                      if($_POST['account']== $_SESSION['account'] && $_POST['password'] == $_SESSION['password']){
                           if($record = mysqli_fetch_assoc($rs)){
                                    $_SESSION['name'] = $record['name'];
                                    $_SESSION['level'] = $record['level'];
       
                                    if($_SESSION['level']=="admin"){
                                            header('Location:backindex.php');
        }
        else{
       header('Location:http://localhost/Serenity/indexlogout.php');
    }
    }
                      }else if($_POST['account']!=$_SESSION['account']){
                          echo "帳號不存在";
                      }else if($_POST['password']!=$_SESSION['password']){
                          echo "密碼不正確";
                      }
                }       ?>
<p style="text-align:center">

    <a href="login1.php" class="btn btn-primary btn-user btn-block">重新登入</a></p>



    
</html>





