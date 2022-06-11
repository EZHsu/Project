<!DOCTYPE html>
<!-- 管理員手動新增書籍資料表單 --> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增書籍表單</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Serenity - v4.6.0
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .form-btn {
            text-align: center;
            font-size: 20px;

        }

        .submit-btn {
            color: #fff;
            background-color: #94c045;
            border-style: none;
            border-radius: 25px;
            width: 200px;
            height: 35px;
            font-weight: 800;


        }

        .submit-btn:hover {
            color: #fff;
            background-color: darkgreen;
            border-radius: 25px;

        }
    </style>


</head>

<body>

<main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>添加書籍列表</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li>後臺管理</li>
                    <li>添加書籍資料</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->
    </main>

    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">

                        <form enctype="multipart/form-data" name="add_book" ; method="post" action="addBookData.php">
                            <div class="form-group">
                                <span class="form-label">書名:</span>
                                <input class="form-control" name="book_name" type="text" placeholder="請輸入書名">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">作者:</span>
                                        <input class="form-control" name="book_author" type="text" placeholder="請輸入作者(英文名請輸入英文)">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">譯者:</span>
                                        <input class="form-control" name="book_trans" type="text" placeholder="請輸入譯者">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">出版日期：</span>
                                        <input class="form-control" name="book_date" type="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">出版社：</span>
                                        <input class="form-control" name="book_public" type="text" placeholder="請輸入出版社">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">ISBN：</span>
                                <input class="form-control" name="book_ISBN" type="text" placeholder="ISBN">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">請選擇語言</span>
                                        <select class="form-control" name="book_lang">
                                            <option value="繁中">繁體中文</option> 
                                            <option value="簡中">簡體中文</option>
                                            <option value="外文">外文</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">書籍類別</span>
                                        <select class="form-control" name="book_type">
                                        <option value="no">請選擇</option>
                        <option value="人文史地">人文史地</option>
                        <option value="商業與經濟">商業與經濟</option>
                        <option value="科學與科普">科學與科普</option>
                        <option value="電腦科學">電腦科學</option>
                        <option value="醫學">醫學</option>
                        <option value="語言">語言</option>
                        <option value="社會科學">社會科學</option>
                        <option value="藝術與設計">藝術與設計</option>
                        <option value="生活與旅遊">生活與旅遊</option>
                        <option value="大專院校教科書">大專院校教科書</option>
                        <option value="考試用書">考試用書</option>
                        <option value="文學小說">文學小說</option>
                        <option value="漫畫">漫畫</option>
                        <option value="圖文書">圖文書</option>
                        <option value="兒童圖書">兒童圖書</option>
                        
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                上傳封面照片 :
                                <input name="book_img" type="file"><br>
                            </div>
                            <br>
                            <div>
                                <span class="form-label">書本簡介:</span>
                                <textarea class="form-control" placeholder="請輸入書本簡介" name="book_intro"cols="100%" rows="5"></textarea><br>        
                            </div>


        <input type="hidden" name="apply_status" value="1">
        <input type="hidden" name="apply_applicant" value="admin">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-btn">
                                        <button class="submit-btn" type="submit">新增</button>
                                        <br><br><br><br><br><br><br><br><br><br><br><br>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-btn">
                                        <button class="submit-btn" type="reset">重置</button>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-btn">
                                        <button class="submit-btn" type="button" onclick="window.open('', '_self', ''); window.close();">取消</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>




