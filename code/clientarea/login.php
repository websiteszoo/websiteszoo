<?php
include('./main/ragic.php');
include('./main/sql.php');
if (isset($_POST['submit'])) {
    $mail = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user` WHERE `username` LIKE '$mail'";
    $result = mysqli_query($con, $sql) or die('資料庫語法錯誤');
    $row = mysqli_fetch_array($result);
    if (!password_verify($password, $row['password'])) {
        echo "<script>alert('帳號或密碼錯誤');window.location.href = './login';</script>";
        exit();
    }
    setcookie("uid", $row['id'], time() + (86400 * 30), "/");
    setcookie("name", $row['chinesename'], time() + (86400 * 30), "/");
    setcookie("mail", $mail, time() + (86400 * 30), "/");
    if ($row['chinesename'] == "c") {
        echo "<script>window.location.href = './';</script>";
    } else {
        echo "<script>window.location.href = './plus';</script>";
    }

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
    <title>樂創後台登入</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">樂創後台 - 登入</h3>
                                </div>
                                <div class="card-body">
                                    <form action="#" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" required />
                                            <label for="inputEmail">電子信箱</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" required />
                                            <label for="inputPassword">密碼</label>
                                        </div>
                                        <div class="form-check mb-3">

                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            <button type="submit" name="submit" class="btn btn-primary">登入</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your 樂創數位行銷 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>