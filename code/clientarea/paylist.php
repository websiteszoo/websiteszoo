<?php
include('./main/header.php');


?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">出帳紀錄</h1>
            <br>
            <div class="card">
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="row mb-3">
                            <label for="customerName" class="col-sm-2 col-form-label form-label">名稱</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="customerName" value="<?php echo $row['chinesename']; ?>" required disabled>
                            </div>
                            <label for="customerId" class="col-sm-2 col-form-label form-label">E-mail</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="customerId" value="<?php echo $row['username']; ?>" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="contactPerson" class="col-sm-2 col-form-label form-label">銀行代碼</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="contactPerson" value="<?php echo $row['atmcode']; ?>" disabled>
                            </div>
                            <label for="email" class="col-sm-2 col-form-label form-label">銀行帳號</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" value="<?php echo $row['atm_number']; ?>" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <Br>
            <div class="card">
                <div class="card-body">

                    <div class="row mb-3">
                        <div class="col-3">結算日期</div>
                        <div class="col-3">金額</div>
                        <div class="col-3">匯款日期</div>
                        <div class="col-3">狀態</div>
                    </div>
                    <?php
                    $sql = "  SQL語法  ";
                    $result = mysqli_query($con, $sql) or die('MySQL query error');
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="row mb-3">
                            <div class="col-3">結算日期</div>
                            <div class="col-3">金額</div>
                            <div class="col-3">匯款日期</div>
                            <div class="col-3">狀態</div>
                        </div>
                    <?php } ?>
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