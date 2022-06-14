<?php
session_start();
if($_SESSION['admin_power']!=1){
    echo '<script>alert("您的權限不是管理員 將跳回首頁")
    window.close();
    </script>';
} 
?>