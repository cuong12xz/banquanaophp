<!DOCTYPE html>
<html lang="en">


    <?php
    @include("../layouts/header.php");
    ?>


    <body id="page-top">
        <div id="wrapper">
            <!-- Sidebar -->
            <?php
            @include("../layouts/sidebar.php");
            ?>
            <!-- Sidebar -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <!-- TopBar -->
                    <?php
                    @include("../layouts/topbar.php");
                    ?>
                    <!-- Topbar -->

                    <!-- Container Fluid-->
                    <div class="container-fluid" id="container-wrapper">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                        </div>

                        <div class="row mb-3">
                            <!-- Earnings (Monthly) Card Example -->

                            <!-- Area Chart -->
                            <div class="col-xl-12 col-lg-7">
                                <div class="card mb-4">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Thống kê tháng</h6>

                                    </div>
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <canvas id="myAreaChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pie Chart -->

                            <!-- Invoice Example -->
                            <div class="col-xl-12 col-lg-7 mb-4">
                                <div class="card">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Thông tin cá nhân <ADMIN></ADMIN></h6>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light" >
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Họ tên</th>
                                                    <th>MSSV</th>
                                                    <th>Giới tính</th>
                                                    <th>Email</th>
                                                    <th>Lớp</th>
                                                    <th>Địa chỉ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $arrTen = array("Ngô Anh Cương", "Nguyễn Tăng Thảo", "Võ Phương Nam");
                                                $arrMssv = array("DH51804380", "DH51800085", "DH51801584");
                                                $arrGioitinh = array("Nam", "Nam", "Nam");
                                                $arrEmail = array("dh51804380@student.stu.edu.vn", "dh51800085@student.stu.edu.vn", "vonam012345@gmail.com");
                                                $arrDiachi = array("Đồng Nai", "Đà Nẵng", "Long An");
                                                $arrLop = array("D18_TH14", "D18_TH07", "D18_TH13");


                                                for ($i = 0; $i < count($arrTen); $i++) {
                                                    echo' <tr>';
                                                    echo' <td>' . ($i + 1) . '</td>';
                                                    echo' <td><strong style=color:#B950C7>' . $arrTen[$i] . '</strong></td>';
                                                    echo' <td><strong style=color:#505FC7>' . $arrMssv[$i] . '</strong></td>';
                                                    echo' <td><strong style=color:#138724>' . $arrGioitinh[$i] . '</strong></td>';
                                                    echo' <td><strong style=color:#D42889>' . $arrEmail[$i] . '</strong></td>';
                                                    echo' <td><strong style=color:#767A26>' . $arrLop[$i] . '</strong></td>';
                                                    echo' <td><strong style=color:#BA9172>' . $arrDiachi[$i] . '</strong></td>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer"></div>
                                </div>
                            </div>
                            <!-- Message From Customer-->

                        </div>
                        <!--Row-->
                        <!-- Modal Logout -->


                    </div>
                    <!---Container Fluid-->
                </div>
                <!-- Footer -->
                <?php
                @include("../layouts/footer.php");
                ?>
                <!-- Footer -->
            </div>
        </div>

        <!-- Scroll to top -->
        <?php
        @include("../layouts/script.php");
        ?>
    </body>

</html>