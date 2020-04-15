<?php
    session_start();
    // 用户名判断
    if(isset($_SESSION["account"]))
        session_destroy();
        echo "<script>window.location='../index.php';</script>";
?>