<?php
if (!isset($_COOKIE['uid']) || !isset($_COOKIE['name'])) {
    echo "<script>alert('請重新登入');window.location.href = './logout';</script>";
    exit();
}
$uid = $_COOKIE['uid'];
$name = $_COOKIE['name'];
include('./main/sql.php');
$sql = "SELECT * FROM `user` WHERE `id` = $uid";
$result = mysqli_query($con, $sql) or die('資料庫語法錯誤');
$row = mysqli_fetch_array($result);
if ($row['tp'] != 'u') {
    echo "<script>alert('發生錯誤');window.location.href = './logout';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>樂創後台</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="/clientarea">樂創後台</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </div>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="./ppersonal">個人資料</a></li>
                    <li><a class="dropdown-item" href="./logout.php">登出</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion  sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="/clientarea/">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            總覽
                        </a>
                        <a class="nav-link" href="./project">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            在線案件
                        </a>
                        <a class="nav-link" href="./paylist">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            出帳紀錄
                        </a>
                        <a class="nav-link" href="./ppersonal">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            修改個人資料
                        </a>
                        <a class="nav-link" href="https://line.me/R/ti/p/@156akamf" target="_blank">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            聯絡客服
                        </a>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">目前登入 IP</div>
                    <?php
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $myip = $_SERVER['HTTP_CLIENT_IP'];
                    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $myip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $myip = $_SERVER['REMOTE_ADDR'];
                    }
                    echo $myip;
                    ?>
                </div>
            </nav>
        </div>