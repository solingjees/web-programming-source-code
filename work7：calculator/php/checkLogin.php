<?php
    session_start();
    // 获取用户端输入
    $account = $_GET["account"];
    $password = $_GET["password"];
    // 用户名判断
    if($account == "1600346867@qq.com" && $password == "123"){
        $_SESSION["account"] = "1600346867@qq.com";
        echo "<script>window.location='../pages/calculate.php';</script>";
    }else{
        echo "<script>window.location='../index.php';</script>";
    }
?>