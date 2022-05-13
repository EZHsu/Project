<?php
	session_start();
	// require_once "./functions/login1.php";
	$title = "新增書籍";
	require "./template/header.php";
	require "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_POST['add'])){
		$isbn = trim($_POST['isbn']);
		$isbn = mysqli_real_escape_string($conn, $isbn);
		
		$title = trim($_POST['title']);
		$title = mysqli_real_escape_string($conn, $title);

		$author = trim($_POST['author']);
		$author = mysqli_real_escape_string($conn, $author);
		
		$translator = trim($_POST['tran']);
		$translator = mysqli_real_escape_string($conn, $translator);
		
		$sort = floatval(trim($_POST['sort']));
		$sort = mysqli_real_escape_string($conn, $sort);

		$language = floatval(trim($_POST['lang']));
		$language = mysqli_real_escape_string($conn, $language);

        $id = floatval(trim($_POST['bk_id']));
		$id = mysqli_real_escape_string($conn, $id);

        $date = date("Y-m-d H:i:s");
		
		$publish = trim($_POST['publish']);
		$publish = mysqli_real_escape_string($conn, $publish);

		// add image
		if(isset($_FILES['img']) && $_FILES['img']['name'] != ""){
			$image = $_FILES['img']['name'];
			$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
			$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "bootstrap/img/";
			$uploadDirectory .= $image;
			move_uploaded_file($_FILES['img']['tmp_name'], $uploadDirectory);
		}

		// find publisher and return pubid
		// if publisher is not in db, create new
		$findPub = "SELECT * FROM books WHERE bk_author = '$author'";
		$findResult = mysqli_query($conn, $findPub);
		if(!$findResult){
			// insert into publisher table and return id
			$insertPub = "INSERT INTO books(bk_author) VALUES ('$author')";
			$insertResult = mysqli_query($conn, $insertPub);
			if(!$insertResult){
				echo " 加入失敗，請確認資料是否正確 " . mysqli_error($conn);
				exit;
			}
			$publisherid = mysql_insert_id($conn);
		} else {
			$row = mysqli_fetch_assoc($findResult);
			$publisherid = $row['author'];
		}


		$query = "INSERT INTO books VALUES ('" . $id . "','" . $isbn . "', '" . $title . "', '" . $image . "', '" . $author . "', '" . $translator . "', '" . $publish . "', '" . $sort . "', '" . $language . "','" . $date . "')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "資料新增失敗，請再試一次 " . mysqli_error($conn);
			exit;
		} else {
			header("Location: all-books.php");
		}
	}
?>

<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>新增書籍</h2>
                        <div class="breadcrumb__option">
                            <span>感謝有你，讓OGANI變得更好</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <form method="post" action="add-books.php" enctype="multipart/form-data">
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>書籍資訊</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-11 col-md-6">
                            <div class="checkout__input">
                                <p>書名<span>*</span></p>
                                <input type="text" name="title" required>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>作者<span>*</span></p>
                                        <input type="text" name="author" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>譯者</p>
                                        <input type="text" name="tran">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>ISBN<span>*</span></p>
                                <input type="text" name="isbn">
                            </div>
                            <div class="checkout__input">
                                <p>出版社<span>*</span></p>
                                <input type="text" name="publish" required>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>書籍類別</p>
                                        <select name="sort" required>
                                            <option value="" selected disabled>選擇類別</option>
                                            <option value="dog">文學小說</option>
                                            <option value="cat">商業理財</option>
                                            <option value="hamster">藝術設計</option>
                                            <option value="parrot">大學用書</option>
                                            <option value="cat">人生史地</option>
                                            <option value="hamster">社會科學</option>
                                            <option value="parrot">心理勵志</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="checkout__inputtt">
                                <p>封面照<span>*</span></p>
                                <input type="file" name="img" required>
                            
                            </div>
                            <input type="submit" name="add" value="確認新增" class="btn btn-primary">
	
	
                            </div>                          
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section></form>
	<br/>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>