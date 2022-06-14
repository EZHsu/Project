<?php
include("AdminCheck.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=big5">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>新增書籍申請審核</title>

    <!-- 使用SweetAlert需要加這行 (notice) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="charts.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">返回首頁</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
   
 
   

   
   
   

    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="addbookapply.php">
            <i class="fas fa-fw fa-table"></i>
            <span>新增書籍申請</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="javascript:window.open('bookdatafrom.php','winname','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=800,height=700');">
            <i class="fas fa-fw fa-table"></i>
            <span>添加書籍資料</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="bookdata.php">
            <i class="fas fa-fw fa-table"></i>
            <span>書籍資料列表</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button><div>
                        <h3>輔仁二手書平台後台系統</h3></div>
                    </form>

                    <!-- Topbar Search -->

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <!--<li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>-->
                                <!-- Counter - Alerts -->
                                <!--<span class="badge badge-danger badge-counter">3+</span>
                            </a>-->
                            <!-- Dropdown - Alerts -->
                            <!--<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    通知中心
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"> 4月12日, 2022</div>
                                        <span class="font-weight-bold">已經產生新的月報表可供下載</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">4月7日, 2022</div>
                                        本月借閱量為XXXXXX冊
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">4月2日, 2022</div>
                                        有XXXXX件客服待處理
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">顯示全部</a>
                            </div>
                        </li>-->

                        <!-- Nav Item - Messages -->
                        <!--<li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>-->
                                <!-- Counter - Messages -->
                                <!--<span class="badge badge-danger badge-counter">7</span>-->
                            <!--</a>-->
                            <!-- Dropdown - Messages -->
                            <!--<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    訊息中心
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">您好,我遭遇了XXXXX需要管理員您的協助</div>
                                        <div class="small text-gray-500">顧客1 · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">我們是XXXX希望能跟你們商談</div>
                                        <div class="small text-gray-500">商家1 · 3hr</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">檢查出的問題是OOOO 已經修正</div>
                                        <div class="small text-gray-500">工程師1 · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">&(&(*@#&$()*#$*#)($*#)(</div>
                                        <div class="small text-gray-500">不知道哪裡來的智障 · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">查看更多...</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>-->

                        <!-- Nav Item - User Information -->
                        <!--<li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Username</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>-->
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $_SESSION['name']?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                           <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <!--<a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>-->
                                <!--<a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>-->
                                <!--<a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>-->
                                <!--<div class="dropdown-divider"></div>-->

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    登出
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">新增書籍申請列表</h1>
                    <p class="mb-4">對使用者所申請書籍資料進行審核</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">申請列表</h6>
                        </div>
                        
                       
                        <!-- 彈跳出來的表單 (notice) -->
                        <div id="id01" class="modal">
                            <div class="modal-content animate"> 
                            <form enctype="multipart/form-data" id="form" name="theForm" action="updateBook.php" method="post">
                                書名&emsp;&emsp;：<input id="form_title" name="form_title" type="text" placeholder="請輸入書名"><br>
                                作者&emsp;&emsp;：<input id="form_author" name="form_author" type="text" placeholder="請輸入作者(英文名請輸入英文)"><br>
                                譯者&emsp;&emsp;：<input id="form_translator" name="form_translator" type="text" placeholder="請輸入譯者"><br>
                                出版社&emsp;：<input id="form_publish" name="form_publish" type="text" placeholder="請輸入出版社"><br>
                                出版日期：<input id="form_date" name="form_date" type="text" placeholder="YYYY/MM/DD"><br>
                                ISBN &emsp;&ensp;：<input id="form_isbn" name="form_isbn" type="text" placeholder="ISBN"><br>
                            
                                
                                語言&emsp;&emsp;：<label><input id="0" type="radio" name="lang" value="繁中">繁體中文
                                            <input id="1" type="radio" name="lang" value="簡中">簡體中文
                                            <input id="2" type="radio" name="lang" value="外文" >外文
                                            </label><br>

                                類別&emsp;&emsp;：<label><select name="form_sort" id="selectID" >
                                                    <option>請選擇</option>
                                                    
                                                    <option value="0">商業與經濟</option>
                                                    <option value="1">科學與科普</option>
                                                    <option value="2">電腦科學</option>
                                                    <option value="3">醫學</option>
                                                    <option value="4">語言</option>
                                                    <option value="5">社會科學</option>
                                                    <option value="6">人文史地</option>
                                                    <option value="7">藝術與設計</option>
                                                    <option value="8">生活與旅遊</option>
                                                    <option value="9">大專院校教科書</option>
                                                    <option value="10">考試用書</option>
                                                    <option value="11">文學小說</option>
                                                    <option value="12">漫畫</option>
                                                    <option value="13">圖文書</option>
                                                    <option value="14">兒童圖書</option>
                                                    
                                                </select></label><br>
                                    <!-- 封面照片： -->
                                    <?php
                                        echo "<label style='vertical-align: top'>封面照片：</label>";
                                        echo "<img id='form_img' style='width: 65%;' alt='未上傳'>";
                                        echo "<br>";
                                    ?>
                                    <nobr>更新照片：<input name="image" type="file"></nobr>
                                    書本簡介：<label style="vertical-align: top"><textarea id="form_intro" name="form_intro" cols="20" rows="5"></textarea></label><br>

                                    <input type='hidden' name='act'> <!-- 判斷是按哪個按鈕 -->
                                    <input type='hidden' id='form_id' name="form_id"> <!-- 判斷是按哪一欄 -->
                                    <div style="text-align: right"><input type="submit" value="新增" onclick="document.forms['theForm'].act.value='add'; sweet_add()"> <input type="submit" value="不新增(駁回該申請)" onclick="document.forms['theForm'].act.value='refuse'; sweet_refuse()">&emsp;</div>
                                    
                                </form>
                            </div>
                        </div>
                        
        

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>書名</th>
                                            <th width="100px">作者 </th>
                                            <th>類型</th>
                                            <th>出版日期</th>
                                            <th>出版社</th>
                                            <th>ISBN</th>
                                            <th>申請時間</th>
                                            <th>申請人</th>
                                            <th width="50px">審核</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- (notice) -->
                                        <?php 
                                        $host = "localhost";
                                        $dbuser = "root";
                                        $dbpassword = "12345678";
                                        $dbname = "book";
                                        $link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
                                        if($link){
                                            $allData = "SELECT * from book_data";
                                            $result = mysqli_query($link, $allData);
                                            while($row=mysqli_fetch_assoc($result)){
                                                $id = $row['bk_ID'];
                                                $titleid = "title".$id;
                                                $authorid = "author".$id;
                                                $sortid = "sort".$id;
                                                $dateid = "date".$id;
                                                $publishid = "publish".$id;
                                                $isbnid = "isbn".$id;

                                                $langid = "lang".$id;
                                                $tranid = "trans".$id;
                                                $introid = "intro".$id;

                                                if($row['apply_status'] == 1)
                                                {
                                                    continue;
                                                }else
                                                {
                                                    $row['apply_status'] = "審核";
                                                }

                                                //隱藏三個div，存從DB抓下來的資料
                                                echo "<div style='display:none' id={$tranid}>".$row['bk_trans']."</div>";
                                                echo "<div style='display:none' id={$introid}>".$row['bk_intro']."</div>";

                                                echo "<tr>";
                                                echo "<td id={$titleid}>".$row['name']."</td>";
                                                echo "<td id={$authorid}>".$row['bk_author']."</td>";
                                                echo "<td id={$sortid}>".$row['bk_type']."</td>";
                                                echo "<td id={$dateid}>".$row['bk_publicdate']."</td>";
                                                echo "<td id={$publishid}>".$row['bk_public']."</td>";
                                                echo "<td id={$isbnid}>".$row['bk_ISBN']."</td>";
                                                echo "<td>".$row['apply_date']."</td>";
                                                echo "<td>".$row['apply_applicant']."</td>";
                                                echo "<td><button class='btn' onclick='show({$id})'>".$row['apply_status']."</button></td>";
                                                echo "</tr>";
                                            }
                                        }
                                        else{
                                            echo "error</br>".mysqli_connect_error();
                                        }
                                    ?>
             
                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 輔仁大學資訊管理學系 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">確定登出?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">如要登出，請按確定.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">取消</button>
                    <a class="btn btn-primary" href="Login.php" onclick="Logout()">確定</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showButtonEvent() {
            document.getElementById("bechangeText").textContent="已新增";
        }
   </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

<!-- (notice) -->
<style>

/* 表單框框的底層 */
.modal {
    display: none; /* 預設是看不見的 */
    position: fixed; 
    z-index: 2; /* 維持在最上方 */
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto;
    background-color: rgba(0,0,0,0.4); 
    padding-top: 30px;
}

/* 表單框框 */
.modal-content {
    z-index: 2;
    background-color: #fefefe;
    margin: 0% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 22%; /* Could be more or less, depending on screen size */
}

/* 彈跳出來的動畫 */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

.btn {
    background-color: white;
    border: 0;
    color: green;
}

.btn:hover { 
    color: blue;
    text-decoration:underline;
}

form{
    margin: 5%;
}

input{
    margin: 2% 0%;
}
</style>

<script>

//如果點選表單外的區域，就重新整理頁面
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        window.location.reload();
    }
};

//設定表單的預設值
function show(id)
{
    var titleid = "title" + id;
    var authorid = "author" + id;
    var sortid = "sort" + id;
    var dateid = "date" + id;
    var publishid = "publish" + id;
    var isbnid = "isbn" + id;
    var langid = "lang" + id;
    var tranid = "trans" + id;
    var introid = "intro" + id;
    document.getElementById('id01').style.display='block'; //顯示表單
    document.getElementById('form_title').value = document.getElementById(titleid).innerHTML;
    document.getElementById('form_author').value = document.getElementById(authorid).innerHTML;
    document.getElementById('form_date').value = document.getElementById(dateid).innerHTML;
    document.getElementById('form_publish').value = document.getElementById(publishid).innerHTML;
    document.getElementById('form_isbn').value = document.getElementById(isbnid).innerHTML;
    document.getElementById('form_id').value = id;
    document.getElementById('form_translator').value = document.getElementById(tranid).innerHTML;
    document.getElementById('form_intro').value = document.getElementById(introid).innerHTML;

    var osel=document.getElementById("selectID"); //得到select的ID
    var opts=osel.getElementsByTagName("option"); //得到陣列option
    var array_sort =  ["商業與經濟", "科學與科普", "電腦科學", "醫學", "語言", "社會科學", "人文史地", "藝術與設計", "生活與旅遊", "大專院校教科書", "考試用書", "文學小說", "漫畫", "圖文書", "兒童圖書"];
    var select = array_sort.indexOf(document.getElementById(sortid).innerHTML)
    select = select + 1; //加1是因為第一個選項(index=0)是請選擇
    opts[select].selected=true;

    var array_lang =  ["繁中", "簡中", "外文"];
    var radio_idx = array_lang.indexOf(document.getElementById(langid).innerHTML)
    document.getElementById(radio_idx).setAttribute("checked", "checked");

    var src = "tempimg.php?id=" + id; //加id是判斷現在是點選哪個資料
    document.getElementById('form_img').setAttribute("src", src);
}

//按下不新增的sweetAlert
function sweet_refuse()
{
    event.preventDefault();
    Swal.fire({
        icon: 'warning',
        title: '審核',
        text: '確定要駁回申請嗎',
        allowOutsideClick: true,
        showCancelButton: true,
    }).then((result) => {   
        if (result.isConfirmed) {    
            document.forms['theForm'].act.value='refuse';
            document.getElementById("form").submit(); 
        }
    })
}

//按下新增的sweetAlert
function sweet_add()
{
    event.preventDefault();
    Swal.fire({
        icon: 'warning',
        title: '審核',
        text: '確定要通過申請嗎',
        allowOutsideClick: true,
        showCancelButton: true,
    }).then((result) => {  
        if (result.isConfirmed) {    
            document.forms['theForm'].act.value='add';
            document.getElementById("form").submit(); 
        }
    })
}

</script>
<script type="text/javascript">
    function Logout(){
                //get the input value
            jQuery.ajax({
            //the url to send the data to
            url: "Logout.php",
            success: function(){
                console.log("***********Success***************"); //You can remove here
                    alert("已成功登出");
                    window.location.href = "Login.php";
            },
            //on error
            error: function(){
                    console.log("***********Error***************"); //You can remove here
            }
        });
    }
</script>

    