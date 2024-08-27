<?php
include('./main/header.php');
include('./main/ragic.php');


$sql = "SELECT * FROM `user` WHERE `id` = $uid";
$result = mysqli_query($con, $sql) or die('資料庫語法錯誤');
$row = mysqli_fetch_array($result);

$nextWeekWed = date('m/d', strtotime("+7 day", strtotime('this week Wednesday')));
$nowWeekLastDay = date('m/d', strtotime('this week Sunday'));

$wait = 0;
$success = 0;
$money = 0;
$sqlsel = "SELECT * FROM `p_list` WHERE `statue` < 3";
$resultsel = mysqli_query($con, $sqlsel) or die('資料庫語法錯誤');
while ($rowsel = mysqli_fetch_array($resultsel)) {
    $sqlp = "SELECT * FROM `project` WHERE `id` = " . $rowsel['pid'];
    $resultp = mysqli_query($con, $sqlp) or die('資料庫語法錯誤');
    $rowp = mysqli_fetch_array($resultp);
    if ($rowsel['statue'] == 0) {
        $wait++;
    } else if ($rowsel['statue'] == 1) {
        $success++;
        $money = $money + $rowp['pre_price'];
    }
}
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">費用總覽</h1>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">當周累積金額</h5>
                            <h2>NT$ <?php echo $money; ?></h2>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">您的資料</h5>
                            <p><?php echo $name; ?><br>
                                <?php echo $row['username']; ?><br>
                                銀行代碼：<?php echo $row['atmcode']; ?><br>
                                銀行帳號：<?php echo $row['atm_number']; ?></p>
                            <button class="btn btn-success" onclick="window.location.href = './ppersonal';">修改資料</button>
                        </div>
                    </div>

                    <!-- 聯絡人卡片 -->
                    <!-- 捷徑卡片 -->
                </div>

                <div class="col-md-9">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h2><?php echo $wait; ?></h2>
                                    <p>待審評論</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h2><?php echo $success; ?></h2>
                                    <p>已審評論</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h2><?php echo $nowWeekLastDay; ?></h2>
                                    <p>本週結算日</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h2><?php echo $nextWeekWed; ?></h2>
                                    <p>本週發薪日</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">未出帳金額</h5>
                                    <p>您有 1 筆未出帳金額，總金額為 NT$ 3,200。</p>
                                    <button class="btn btn-danger">檢視全部</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">聯絡樂創</h5>
                                    <p>如果您需要協助，請點擊聯絡樂創。</p>
                                    <button class="btn btn-info" onclick="window.open('https://lin.ee/Y61ODQN');">聯絡樂創</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">註冊新網域</h5>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="輸入域名">
                            <button class="btn btn-success" type="button">註冊</button>
                            <button class="btn btn-secondary" type="button">轉移</button>
                        </div>
                    </div>
                </div>
-->
                    <!-- 新聞卡片 -->

                </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your 樂創數位行銷 2024</div>
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