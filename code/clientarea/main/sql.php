<?php
$server = '172.17.160.3'; // 主機
$db_username = 'websiteszoo'; // 資料庫帳號
$db_password = 'LP6u~m;Hp90~bHjJ'; // 資料庫密碼
$db_tables = 'websiteszoo'; // 資料庫名稱

$connect = mysqli_connect($server, $db_username, $db_password, $db_tables);
$con = $connect;
if (!$connect) // 資料庫連線失敗
{
    $response = array(
        'success' => false,
        'text' => 'MySQL!'
    );
    echo json_encode($response);
    exit();
}
mysqli_query($connect, 'set names utf8mb4');
date_default_timezone_set('Asia/Taipei');
