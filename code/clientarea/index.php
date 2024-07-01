<?php
include('./main/header.php');
include('./main/ragic.php');


?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">顧客中心</h1>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">帳戶餘額</h5>
                                        <h2>NT$ 0.00</h2>
                                    </div>
                                </div>
                                
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">您的資料</h5>
                                        <p>樂創數位行銷有限公司<br>
                                        宗動 謝<br>
                                        台中市南區南平路39-3號<br>
                                        台中市, 台灣, 402015<br>
                                        Taiwan</p>
                                        <button class="btn btn-success">修改資料</button>
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
                                <h2>1</h2>
                                <p>服務</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h2>0</h2>
                                <p>網域</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h2>0</h2>
                                <p>服務單</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h2>1</h2>
                                <p>帳單</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">您目前可用的產品與服務</h5>
                        <p>台灣 Linux 經銷商擁主機 (Taiwan Linux Reseller Hosting) - [2024] TW-RE-Stand...</p>
                        <div class="d-flex justify-content-between">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                    登入 WHM
                                </button>
                            </div>
                            <button class="btn btn-primary">檢視詳情</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">未支付帳單</h5>
                                <p>您有 1 張未支付的帳單，總金額為 NT$ 3,200，請您盡速完成支付以開通服務。</p>
                                <button class="btn btn-danger">檢視全部</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">近期送出的服務單</h5>
                                <p>未發現任何近期送出的服務單。如果您需要協助，請 建立服務單。</p>
                                <button class="btn btn-info">建立新服務單</button>
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
