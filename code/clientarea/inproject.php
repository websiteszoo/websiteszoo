<?php
include('./main/header.php');
include('./main/ragic.php');
$token = $_GET['token'];

$sql = "SELECT * FROM `project` WHERE `token` LIKE '$token'";
$result = mysqli_query($con, $sql) or die('資料庫語法錯誤');
$row = mysqli_fetch_array($result);
if (!isset($row['id'])) {
    echo "<script>alert('發生錯誤');window.location.href = './project';</script>";
    exit();
}

if (isset($_POST['submit'])) {
    $pid = $row['id'];
    $mail = $_POST['mail'];
    $url = $_POST['url'];
    $now_num = $row['now_num'] + 1;
    $sql = "INSERT INTO `p_list` (`id`, `uid`, `pid`, `mail`, `url`, `statue`, `is_pay`) VALUES (NULL, '$uid', '$pid', '$mail', '$url', '0', '0');";
    $result = mysqli_query($con, $sql) or die('資料庫語法錯誤');
    $sql = "UPDATE `project` SET `now_num` = '$now_num' WHERE `token` LIKE '$token'";
    $result = mysqli_query($con, $sql) or die('資料庫語法錯誤');
    echo "<script>alert('回報成功');window.location.href = './inproject.php?token=$token ';</script>";
    exit();
}
$fin = 0;
$sqlfin = "SELECT * FROM `p_list` WHERE `uid` LIKE '$uid' AND `pid` LIKE '" . $row['id'] . "'";
$resultfin  = mysqli_query($con, $sqlfin) or die('資料庫語法錯誤');
while ($rowfin  = mysqli_fetch_array($resultfin)) {
    $fin++;
}

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">
                <a href="./project" style="text-decoration: none;">
                    < </a> &nbsp;<?php echo $row['name']; ?>
            </h1>
            <br>
            <div class="row">

                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <p><a href="<?php echo $row['map_url']; ?>" target="_blank"><?php echo $row['map_url']; ?></a><br>
                                專案費用： <?php echo $row['pre_price']; ?> 元<br>
                                需求人數 <?php echo $row['need_num']; ?> 人<br>
                                目前人數 <?php echo $row['now_num']; ?> 人<br>
                                已評論次數 <?php echo $fin; ?> 人<br>
                            </p>
                            <hr>
                            <p><?php echo $row['intr']; ?>
                            </p>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">回報完成</button>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="./inproject.php?token=<?php echo $token; ?>" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">回報完成</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">評論的 Email</label>
                            <input type="email" class="form-control" name="mail" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">評論的網址</label>
                            <input type="text" class="form-control" name="url" id="exampleInputPassword1">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your 樂創數位行銷 2024</div>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
</body>

</html>