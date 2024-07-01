<?php
include('./main/header.php');
include('./main/ragic.php');
$mail = $_COOKIE['mail'];
$acc = sel("ragicforms6/20004","where=3000908,eq,$mail");
$acc = json_decode($acc, true);
foreach ($acc as $key => $value) {
    if (isset($value['_ragicId'])) {
        $indexid = $key;
    }
}
if(isset($_POST['submit'])){
    $repass = $_POST['repass'];
    $pass = $_POST['pass'];
    if(isset($pass) && $repass!=$pass){
        echo "<script>alert('兩次密碼不一致');window.location.href = './personal';</script>";
        exit();
    }
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $phone = $_POST['phone'];
    $fax = $_POST['fax'];
    if($pass==""){
        edit($indexid,array('3001449' => $name ,'3000483' => $tel,'3000909' => $phone,'3001450' => $fax));
        echo "<script>alert('更新成功');window.location.href = './personal';</script>";
        exit();
    }else{
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        edit($indexid,array('3001449' => $name ,'3000483' => $tel,'3000909' => $phone,'3001450' => $fax,'1000220' => $hash));
        echo "<script>alert('更新成功，請重新登入');window.location.href = './logoutcode/clientarea/personal.php';</script>";
        exit();
    }
    


}

//print_r($acc[$indexid]);

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">個人資料</h1>
                        <br>
                        <div class="card">
            <div class="card-header bg-custom">
                客戶資訊
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="row mb-3">
                        <label for="customerName" class="col-sm-2 col-form-label form-label">*客戶名稱</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="customerName" value="<?php echo $acc[$indexid]['客戶名稱'];?>" required disabled>
                        </div>
                        <label for="customerId" class="col-sm-2 col-form-label form-label">統一編號/身分證號</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="customerId" value="<?php echo $acc[$indexid]['統一編號'];?>"  disabled>
                        </div>
                    </div>
                    <br><br>
                    <div class="row mb-3">
                        <label for="contactPerson" class="col-sm-2 col-form-label form-label">主要聯絡窗口</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="contactPerson" value="<?php echo $acc[$indexid]['主要聯絡窗口'];?>" name="name">
                        </div>
                        <label for="email" class="col-sm-2 col-form-label form-label">窗口E-mail</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="email" value="<?php echo $acc[$indexid]['窗口E-mail'];?>" name="email" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="phone" class="col-sm-2 col-form-label form-label">電話號碼</label>
                        <div class="col-sm-4">
                            <input type="tel" class="form-control" id="phone" value="<?php echo $acc[$indexid]['電話號碼'];?>" name="tel">
                        </div>
                        <label for="cellphone" class="col-sm-2 col-form-label form-label">窗口手機</label>
                        <div class="col-sm-4">
                            <input type="tel" class="form-control" id="cellphone" value="<?php echo $acc[$indexid]['窗口手機'];?>" name="phone">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fax" class="col-sm-2 col-form-label form-label">傳真號碼</label>
                        <div class="col-sm-4">
                            <input type="tel" class="form-control" id="fax" value="<?php echo $acc[$indexid]['傳真號碼'];?>" name="fax">
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
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="submit" name="submit" class="btn btn-primary">保存</button>
                            <button type="button" class="btn btn-secondary">取消</button>
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
