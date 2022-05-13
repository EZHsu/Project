<?php
  session_start();
  $count = 0;
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT bk_isbn, bk_img ,name , bk_sort FROM books";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $title = "所有書籍";
  require_once "./template/header.php";
?>

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__search">
                        <div class="hero__search__form">
                        <form action="search-book.php" method="POST">
                            
                            <input type="text" placeholder="關鍵字搜尋" name="name" />
                            <input type="submit" class="site-btn" name="submit" >搜尋</input>   
                        </form>
                        </div>
                    </div>
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>所有類別</span>
                        </div>
                        <ul>
                            <li><a href="#">文學小說</a></li>
                            <li><a href="#">商業理財</a></li>
                            <li><a href="#">藝術設計</a></li>
                            <li><a href="#">大學用書</a></li>
                            <li><a href="#">人生史地</a></li>
                            <li><a href="#">社會科學</a></li>
                            <li><a href="#">心理勵志</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
      <div class="row">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="featured__item">
          <div class="featured__item__pic set-bg"  >
          <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row['bk_img']; ?>">
          <ul class="featured__item__pic__hover">
          <li><div class="test2">
          <a href="book.php?bookisbn=<?php echo $query_row['bk_isbn']; ?>">
          <i class="fa fa-book-bookmark"></i></a>
          </div></li>
          <li><div class="test3"><a href="sharer-info.php"><i class="fa fa-plus"></i></a></div></li></ul>
          </div>
          <div class="featured__item__text">
          <?php echo '<h6>'.$query_row['name'].'</h6>'; ?></div>
        </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?> 
</div>
        <?php
      } ?>
      </div></div>
      </div>
        
    </section>
    
        <br><br><div class="section-title">
        <a href="add-books.php" class="primary-btn">找不到你想租借的書籍?<br>點我新增您的愛書資訊</a>
        </div>
       

    <!-- Categories Section End -->
    

                
                <!-- <div class="col-lg-9">
                    <div class="container">
                        <div class="col-lg-12"> -->
                            <!-- <div class="filter__item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="filter__sort">
                                            <span>分類</span>
                                            <select>
                                                <option value="0">預設</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="filter__found">
                                            <h6><span>12</span> 筆資料</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <div class="filter__option">
                                            <span class="icon_grid-2x2"></span>
                                            <span class="icon_ul"></span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
        
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
                                            <h6><a href="book-details.php">暮光之城</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                                    <div class="featured__item">
                                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-2.jpg">
                                            <ul class="featured__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-book-bookmark"></i></a></li>
                                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
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
                                                <li><a href="#"><i class="fa fa-book-bookmark"></i></a></li>
                                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="featured__item__text">
                                            <h6><a href="#">Me Before You</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                                    <div class="featured__item">
                                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-4.jpg">
                                            <ul class="featured__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-book-bookmark"></i></a></li>
                                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
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
                                                <li><a href="#"><i class="fa fa-book-bookmark"></i></a></li>
                                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
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
                                                <li><a href="#"><i class="fa fa-book-bookmark"></i></a></li>
                                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
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
                                                <li><a href="#"><i class="fa fa-book-bookmark"></i></a></li>
                                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
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
                                                <li><a href="#"><i class="fa fa-book-bookmark"></i></a></li>
                                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="featured__item__text">
                                            <h6><a href="#">無以名狀、恐懼及貓的消失</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 ">
                                    <div class="featured__item">
                                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpg" >
                                            <ul class="featured__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-book-bookmark"></i></a></li>
                                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="featured__item__text">
                                            <h6><a href="book-details.php">暮光之城</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                                    <div class="featured__item">
                                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-2.jpg">
                                            <ul class="featured__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-book-bookmark"></i></a></li>
                                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
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
                                                <li><a href="#"><i class="fa fa-book-bookmark"></i></a></li>
                                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="featured__item__text">
                                            <h6><a href="#">Me Before You</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                                    <div class="featured__item">
                                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-4.jpg">
                                            <ul class="featured__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-book-bookmark"></i></a></li>
                                                <li><a href="#"><i class="fa fa-plus"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="featured__item__text">
                                            <h6><a href="#">大概是時間在煮我吧</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div> -->
                    <!-- </div>
                </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Breadcrumb Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" width="500" height="275" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" width="500" height="275" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->
    <!-- Checkout Section Begin -->
    <!-- <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> 還沒加入會員? <a href="#">按這裡</a>
                </div>
            </div>
            
        </div>
    </section>
     Checkout Section End -->、
   

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
    
    <?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>
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