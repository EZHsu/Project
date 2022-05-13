<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "ogani主頁";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    

  

    

    <!-- Header Section Begin -->
   
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                </div>
                
                <div class="col-lg-12">
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>共享書籍</span>
                            <h2>環保方便 <br /></h2>
                            <p>找不到要看的書？來Ogani尋寶！</p>
                            <a href="all-books.php" class="primary-btn">瀏覽書籍</a>
                        </div>
                    </div>
                
                </div>
                    
            </div>
        </div>
    </section>
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>熱門書籍</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">所有</li>
                            <li data-filter=".oranges">中文</li>
                            <li data-filter=".fresh-meat">外文</li>
                            <li data-filter=".vegetables">絕版</li>
                            <li data-filter=".fastfood">其他</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
          

          <?php echo '<div class="featured__item">'; ?>
          <?php echo '<div class="featured__item__pic set-bg"  >'; ?>
          <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['bk_img']; ?>">
          <?php echo '<ul class="featured__item__pic__hover">'; ?>
          <?php echo '<li><div class="test2">'; ?> 
          <a href="book.php?bookisbn=<?php echo $book['bk_isbn']; ?>">
          <?php echo '<i class="fa fa-book-bookmark"></i>'; ?> </a>
          <?php echo '</div></li>'; ?>
          <?php echo '<li><div class="test3"><a href="sharer-info.php"><i class="fa fa-plus"></i></a></div></li>'; ?>
          <?php echo '</ul>'; ?>
          <?php echo '</div>'; ?>
          <?php echo '<div class="featured__item__text">'; ?>
          <?php echo '<h6>'.$row['name'].'</h6>'; ?>
          <?php echo '</div>'; ?>
          <?php echo '</div>'; ?>


        </div> 
        <?php } ?>
      </div>
      
      

            <!-- <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpg" >
                            <ul class="featured__item__pic__hover">
                                <li><div class="test2"><a href="book-details.php"><i class="fa fa-book-bookmark"></i></a></div></li>
                                <li><div class="test3"><a href="sharer-info.php"><i class="fa fa-plus"></i></a></div></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6>暮光之城</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-2.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><div class="test2"><a href="book-details.php"><i class="fa fa-book-bookmark"></i></a></div></li>
                                <li><div class="test3"><a href="sharer-info.php"><i class="fa fa-plus"></i></a></div></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">30年青春‧震耳欲聾</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-3.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><div class="test2"><a href="book-details.php"><i class="fa fa-book-bookmark"></i></a></div></li>
                                <li><div class="test3"><a href="sharer-info.php"><i class="fa fa-plus"></i></a></div></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6>Me Before You</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-4.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><div class="test2"><a href="book-details.php"><i class="fa fa-book-bookmark"></i></a></div></li>
                                <li><div class="test3"><a href="sharer-info.php"><i class="fa fa-plus"></i></a></div></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">大概是時間在煮我吧</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-5.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><div class="test2"><a href="book-details.php"><i class="fa fa-book-bookmark"></i></a></div></li>
                                <li><div class="test3"><a href="sharer-info.php"><i class="fa fa-plus"></i></a></div></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">How It Feels To Float</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-6.jpg">
                        <ul class="featured__item__pic__hover">
                                <li><div class="test2"><a href="book-details.php"><i class="fa fa-book-bookmark"></i></a></div></li>
                                <li><div class="test3"><a href="sharer-info.php"><i class="fa fa-plus"></i></a></div></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">時代革命</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-7.jpg">
                        <ul class="featured__item__pic__hover">
                                <li><div class="test2"><a href="book-details.php"><i class="fa fa-book-bookmark"></i></a></div></li>
                                <li><div class="test3"><a href="sharer-info.php"><i class="fa fa-plus"></i></a></div></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Harry Potter</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-8.jpg">
                        <ul class="featured__item__pic__hover">
                                <li><div class="test2"><a href="book-details.php"><i class="fa fa-book-bookmark"></i></a></div></li>
                                <li><div class="test3"><a href="sharer-info.php"><i class="fa fa-plus"></i></a></div></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">無以名狀、恐懼及貓的消失</a></h6>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Categories Section End -->
    <div class="section-title">
        <a href="add-books.php" class="primary-btn">找不到你想租借的書籍?<br>點我新增您的愛書資訊</a>
    </div>
    
    <?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>
    <!-- Footer Section Begin -->
    <!-- <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index1.php"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>地址: 天主教輔仁大學</li>
                            <li>電話: 02 2905 2000</li>
                            <li>Email: info@domain.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>重要連結</h6>
                        <ul>
                            <li><a href="./index1.php">書籍首頁</a></li>
                            <li><a href="./all-books.php">所有書籍</a></li>
                            <li><a href="./add-books.php">新增書籍</a></li>
                            
                        </ul>
                        <ul>
                            <li><a href="./index.php">會員中心</a></li>
                            <li><a href="./contact.php">客服信箱</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>加入 OGANI</h6>
                        <p>輸入E-mail以獲得更多資訊</p>
                        <form action="#">
                            <input type="text" placeholder="輸入您的mail">
                            <button type="submit" class="site-btn">訂閱</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.</p></div> -->
                        <!-- <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
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