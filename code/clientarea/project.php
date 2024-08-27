<?php
include('./main/header.php');
include('./main/ragic.php');


$sql = "SELECT * FROM `user` WHERE `id` = $uid";
$result = mysqli_query($con, $sql) or die('資料庫語法錯誤');
$row = mysqli_fetch_array($result);

$nextWeekWed = date('m/d', strtotime("+7 day", strtotime('this week Wednesday')));
$nowWeekLastDay = date('m/d', strtotime('this week Sunday'));
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">案件瀏覽</h1>
            <br>
            <div class="row">
                <?php
                $sql = " SELECT * FROM `project` WHERE `statue` = 1";
                $result = mysqli_query($con, $sql) or die('資料庫語法錯誤');
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                <p><a href="<?php echo $row['map_url']; ?>" target="_blank"><?php echo $row['map_url']; ?></a><br>
                                    專案費用： <?php echo $row['pre_price']; ?> 元<br>
                                    需求人數 <?php echo $row['need_num']; ?> 人<br>
                                    目前人數 <?php echo $row['now_num']; ?> 人<br>
                                </p>
                                <button class="btn btn-success" onclick="window.location.href = './inproject?token=<?php echo $row['token']; ?>';">查看案件</button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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