<?php
include('./main/sql.php');
$uid = $_COOKIE['uid'];
$sql = "SELECT * FROM `user` WHERE `id` = $uid";
$result = mysqli_query($con, $sql) or die('資料庫語法錯誤');
$row = mysqli_fetch_array($result);
if ($row['tp'] == 'u') {
    echo "<script>window.location.href = './plus';</script>";
    exit();
} else {
    echo "<script>alert('發生錯誤');window.location.href = './logout';</script>";
    exit();
}
