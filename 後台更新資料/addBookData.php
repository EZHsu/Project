<!--新增書籍資料表單之資料庫寫入 --> 
<?php

    $host = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "book_share";
    $link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);

    if($link){
        echo "connect";
        $name = $_POST["book_name"];
        $book_author = $_POST["book_author"];
        $book_trans = $_POST["book_trans"];
        $book_public = $_POST["book_public"];
        $book_date = $_POST["book_date"];
        $book_ISBN = $_POST["book_ISBN"];
        $book_type = $_POST["book_type"];
        $book_lang = $_POST["book_lang"];
        $book_img = $_POST["book_img"];
        $book_intro = $_POST["book_intro"];
        $apply_status = $_POST["apply_status"];
        $apply_applicant = $_POST["apply_applicant"];

        $sql_query= "INSERT INTO book_data (name, bk_author, bk_trans, bk_public, bk_publicdate, bk_isbn, bk_type , bk_lang , bk_img, bk_intro, apply_status, apply_applicant) VALUES ('$name', '$book_author', '$book_trans', '$book_public', '$book_date', '$book_ISBN', '$book_type', '$book_lang' ,'$book_img', '$book_intro','$apply_status','$apply_applicant')";
        if($link->query($sql_query) === TRUE){
            echo "pass";
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