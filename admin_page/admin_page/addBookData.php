<!--新增書籍資料表單之資料庫寫入 --> 
<?php

    include("AdminCheck.php");
    $host = "localhost";
    $dbuser = "root";
    $dbpassword = "12345678";
    $dbname = "book";
    $link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
    

    if($link){
        $name = $_POST["book_name"];
        $book_author = $_POST["book_author"];
        $book_trans = $_POST["book_trans"];
        $book_public = $_POST["book_public"];
        $book_date = $_POST["book_date"];
        $book_ISBN = $_POST["book_ISBN"];
        $book_type = $_POST["book_type"];
 
        $image = $_FILES['book_img']['name'];
        $book_img = addslashes(file_get_contents($_FILES['book_img']['tmp_name']));
        //echo  print_r($_FILES['book_img']);
        $apply_date = date('Y-m-d');


        $book_intro = $_POST["book_intro"];
        $apply_status = $_POST["apply_status"];
        $apply_applicant = $_POST["apply_applicant"];

        $sql_query= "INSERT INTO book_data (name, bk_author, bk_trans, bk_public, bk_publicdate, bk_isbn, bk_type, bk_img, bk_intro, apply_status, apply_applicant, apply_date, bk_img_blob) VALUES ('$name', '$book_author', '$book_trans', '$book_public', '$book_date', '$book_ISBN', '$book_type' ,'$image', '$book_intro','$apply_status','$apply_applicant','$apply_date', '$book_img')";
        if($link->query($sql_query) === TRUE){
            echo "<script> alert('成功新增！將關閉頁面');window.close();</script>";
        }
        else{
            echo $link->error;
        }

    }
    else{
        echo "error</br>".mysqli_connect_error();
    }

    //取得請求過來的資料
    // $name = $_POST["book_name"] ;
    // $author = $_POST["book_authorA"] ; 

    //INSERT INTO 就是新建一筆資料進哪個表的哪個欄位
    // $sql_query= "INSERT INTO books (bk_title,bk_author) VALUES ('$name','$author')";

    //對資料庫執行查訪的動作
    // mysqli_query($link,$sql_query);

?>