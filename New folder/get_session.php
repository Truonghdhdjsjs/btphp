<?php
    session_start();
    if(isset($_SESSION["userid"]) && isset($_SESSION["username"]))
    {
        echo"Chào mừng bạn " . $_SESSION['username'] . " ". "đến với trang website" ;
    }
    else
    {
        echo"không có tài khoản nào tồn tại";
    }
?>