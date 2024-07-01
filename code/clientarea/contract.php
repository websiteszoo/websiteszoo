<?php
include('./main/header.php');
include('./main/ragic.php');


//print_r($acc[$indexid]);

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">我的合約</h1>
                        <br>
                        <div class="card">
            <div class="card-header bg-custom">
                我的合約
            </div>
            <div class="card-body">
            <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>狀態</th>    
                                            <th>合約名稱</th>
                                            <th>合約金額</th>
                                            <th>查看合約</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>狀態</th>    
                                            <th>合約名稱</th>
                                            <th>合約金額</th>
                                            <th>查看合約</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    $mail = $_COOKIE['mail'];
                                    $acc = sel("ragicforms6/20003","where=1000094,eq,$mail");
                                    $acc = json_decode($acc, true);
                                    foreach ($acc as $key => $value) {
                                        if (isset($value['_ragicId'])) {
                                            $indexid = $key;
                                            if($acc[$indexid]['簽核狀態']=="簽核完成" || $acc[$indexid]['下一位簽核人'][0]==$mail)
                                                if($acc[$indexid]['PDF 檔案']!=""){
                                                    $show_PDF = "<a href='https://ap11.ragic.com/sims/file.jsp?a=websiteszoo&f=".$acc[$indexid]['PDF 檔案']."' target='_blank' >查看合約 </a>";
                                                }else{
                                                    $show_PDF ="";
                                                }
                                            echo '
                                                <tr>
                                                    <td>'.$acc[$indexid]['簽核狀態'].'</td>
                                                    <td>'.$acc[$indexid]['合約名稱'].'</td>
                                                    <td>'.$acc[$indexid]['合計'].'</td>
                                                    <td>'.$show_PDF.'</td>
                                                </tr>
                                            ';
                                        }
                                    }
                                    ?>
                                    
                                    </tbody>
                                </table>    




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
