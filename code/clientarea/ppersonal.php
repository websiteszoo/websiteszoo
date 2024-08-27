<?php
include('./main/header.php');
if (isset($_POST['submit'])) {
    if ($_POST['pass'] != "" && $_POST['repass'] != "") {
        if ($_POST['pass'] != $_POST['repass']) {
            echo "<script>alert('兩次密碼不一樣');window.location.href = './ppersonal';</script>";
            exit();
        } else {
            $hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $sql2 = ",`password`='$hash'";
        }
    } else {
        $sql2 = "";
    }
    $atmcode = $_POST['atmcode'];
    $atm_number = $_POST['atm_number'];
    $sql2 = "UPDATE `user` SET `atmcode` = '$atmcode',`atm_number` = '$atm_number' $sql2  WHERE `user`.`id` = $uid;";
    $result2 = mysqli_query($con, $sql2) or die('資料庫語法錯誤');
    echo "<script>alert('修改成功');window.location.href = './ppersonal';</script>";
}

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">修改個人資料</h1>
            <br>
            <div class="card">
                <div class="card-header bg-custom">
                    客戶資訊
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="row mb-3">
                            <label for="customerName" class="col-sm-2 col-form-label form-label">*名稱</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="customerName" value="<?php echo $row['chinesename']; ?>" required disabled>
                            </div>
                            <label for="customerId" class="col-sm-2 col-form-label form-label">*E-mail</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="customerId" value="<?php echo $row['username']; ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="contactPerson" class="col-sm-2 col-form-label form-label">銀行代碼</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="contactPerson" value="<?php echo $row['atmcode']; ?>" name="atmcode">
                            </div>
                            <label for="email" class="col-sm-2 col-form-label form-label">銀行帳號</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" value="<?php echo $row['atm_number']; ?>" name="atm_number">
                            </div>
                        </div>

                        <br><br>
                        <div class="row mb-3">
                            <label for="customerCode" class="col-sm-2 col-form-label form-label">顧客密碼</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" id="customerCode" name="pass">
                            </div>
                            <label for="confirmCode" class="col-sm-2 col-form-label form-label">確認密碼</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" id="confirmCode" name="repass">
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-12 text-center">
                                <button type="submit" name="submit" class="btn btn-primary" value="submit">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2023</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>

</html>