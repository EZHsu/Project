<?php
session_start();
if($_SESSION['admin_power']!=1){
    echo '<script>alert("您的權限不是管理員 將跳回登入頁面")
    window.location.href = "/admin_page/Login.php"
    </script>';
} 
?>
