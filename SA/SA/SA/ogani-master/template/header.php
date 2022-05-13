<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $title; ?></title>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">

    <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>

  <body>
  <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>最佳書籍共享平台</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a>
                            </div>
                            
                            <div class="header__top__right__auth">
                                <a href="login1.php"><i class="fa fa-user"></i> 登入</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->

    <?php
      if(isset($title) && $title == "ogani主頁" || isset($title) && $title == "新增書籍" ) {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index1.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index1.php">首頁</a></li>
                            <li><a href="./all-books.php">所有書籍</a></li>
                            <li><a href="add-books.php">新增書籍</a></li>
                            <li><a href="./index.php">會員中心</a></li>
                            
                        </ul>
                        
                    </nav>
                
                </div>
                    <div class="hero__search">
                        <div class="hero__search__form">
                        <form action="search-book.php" method="POST">
                            
                                <input type="text" placeholder="關鍵字搜尋" name="name" ></input>  
                                <input type="submit" class="site-btn" name="submit" >搜尋</input>   
                            </form>
                        </div>
                        <div class="hero__search__phone">
                        </div>
                    </div>
                 </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    <?php } ?>



    <!-- Header Section Begin -->
    <?php
      if(isset($title) && $title == "所有書籍"||isset($title) && $title == "共享書籍" ||isset($title) && $title == $row['book_title'] || isset($title) && $title == "查詢書籍") {
    ?>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index1.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index1.php">首頁</a></li>
                            <li><a href="./all-books.php">所有書籍</a></li>
                            <li><a href="add-books.php">新增書籍</a></li>
                            <li><a href="./index.php">會員中心</a></li>                            
                        </ul>                       
                    </nav>                
                </div>                    
                 </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>

    <?php } ?>

      <div class="container" id="main">