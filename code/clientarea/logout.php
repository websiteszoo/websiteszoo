<?php
include('./main/ragic.php');

setcookie("uid", "", time() - (86400 * 30), "/");
setcookie("name", "", time() - (86400 * 30), "/");
setcookie("mail", "", time() - (86400 * 30), "/");
echo "<script>window.location.href = './login';</script>";
exit();


