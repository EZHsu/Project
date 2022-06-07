<?php
if($_POST['act']=='add'){ //如果是按下新增的按鈕

    //取得各項使用者輸入的資料
    $id = $_POST['form_id'];
    $title = $_POST['form_title'];
    $author = $_POST['form_author'];
    $translator = $_POST['form_translator'];
    $publish = $_POST['form_publish'];
    $date = $_POST['form_date'];
    $isbn = $_POST['form_isbn'];
    $intro = $_POST['form_intro'];
    $lang = $_POST['lang'];

    //類型是取得使用者選擇的id，再轉回相對應的類型名稱
    $sortid = $_POST['form_sort'];
    $array_sort = array("商業與經濟", "科學與科普", "電腦科學", "醫學", "語言", "社會科學", "人文史地", "藝術與設計", "生活與旅遊", "大專院校教科書", "考試用書", "文學小說", "漫畫", "圖文書", "兒童圖書");
    $sort = $array_sort[$sortid];
    
    //更新各項資料
    $host = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "book_share";
    $link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
    if($link){
        $sql = "UPDATE book_data SET name = '$title' WHERE bk_id = '$id' ";
        mysqli_query($link, $sql);
        $sql = "UPDATE book_data SET bk_author = '$author' WHERE bk_id = '$id' ";
        mysqli_query($link, $sql);
        $sql = "UPDATE book_data SET bk_trans = '$translator' WHERE bk_id = '$id' ";
        mysqli_query($link, $sql);
        $sql = "UPDATE book_data SET bk_public = '$publish' WHERE bk_id = '$id' ";
        mysqli_query($link, $sql);
        $sql = "UPDATE book_data SET bk_publicdate = '$date' WHERE bk_id = '$id' ";
        mysqli_query($link, $sql);
        $sql = "UPDATE book_data SET bk_isbn = '$isbn'  WHERE bk_id = '$id' ";
        mysqli_query($link, $sql);
        $sql = "UPDATE book_data SET apply_status = '1'  WHERE bk_id = '$id' ";
        mysqli_query($link, $sql);
        $sql = "UPDATE book_data SET bk_intro = '$intro'  WHERE bk_id = '$id' ";
        mysqli_query($link, $sql);
        $sql = "UPDATE book_data SET bk_type = '$sort'  WHERE bk_id = '$id' ";
        mysqli_query($link, $sql);
        $sql = "UPDATE book_data SET bk_lang = '$lang'  WHERE bk_id = '$id' ";
        mysqli_query($link, $sql);


        //更新圖片
        if($_FILES["image"]["tmp_name"] != "") //如果有選擇新的圖片
        {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

            $sql = "UPDATE book_data SET bk_img_blob = '$imgContent' WHERE bk_id = '$id' ";
            mysqli_query($link, $sql);
        }

    }
    else{
        echo "error</br>".mysqli_connect_error();
    }

}elseif($_POST['act']=="refuse"){ //如果是按下不新增的按鈕

    //刪除這筆資料
    $id = $_POST['form_id'];
    $host = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "book_share";
    $link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
    if($link){
        $sql = "DELETE FROM book_data WHERE bk_id = '$id' ";
        mysqli_query($link, $sql);
    }
    else{
        echo "error</br>".mysqli_connect_error();
    }
}

?>

<script>
    //更新完資料後回到addbookapply.php
    window.location.href = 'addbookapply.php';
</script>