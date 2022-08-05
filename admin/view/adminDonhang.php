<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
        @include("../layouts/header.php");
        ?>
    </head>

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
                            <h3 class="m-8 font-weight-bold text-primary" ></h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./index.php">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="./adminUser.php">QLý User</a></li>
                                <li class="breadcrumb-item"><a href="./adminDonhang.php">QLý Đơn hàng</a></li>
                                <li class="breadcrumb-item"><a href="./adminSanpham.php">QLý Sản phẩm</a></li>
                                <li class="breadcrumb-item"><a href="./adminDanhmuc.php">QLý DMục sản phẩm</a></li>
                                <li class="breadcrumb-item"><a href="./adminBaiviet.php">QLý bài viết</a></li>
                                <li class="breadcrumb-item"><a href="./adminDanhmucbaiviet.php">QLý DMục bài viết</a></li>
                            </ol>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <!-- Simple Tables -->
                                <div class="card">
                                    <div class="card-header  bg-primary">
                                        <strong class="card-title text-light"><?php echo $data["title"] ?></strong>
                                    </div>
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <a href="../view/themDonhang.php"> <button type="button" class="btn btn-success mb-1" style= "font-size: 15px">Thêm đơn hàng</button></a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th style="color:red">ID đơn hàng</th>
                                                    <th style="color:red">ID khách hàng</th>
                                                    <th style="color:red">Số lượng</th>
                                                    <th style="color:red">Trạng thái</th>

                                                    <th style="color:red">Ngày lập đơn</th>
                                                    <th style="color:red">Ngày cập nhật đơn</th>

                                                    <th style="color:red">Hiệu chỉnh</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                                <?php
                                                for ($i = 0; $i < count($data["orders"]); $i++) {
                                                    echo' <tr>';
                                                    echo' <td style="color:#FF1493">' . $data["orders"][$i]["orderID"] . '</td>';
                                                    echo' <td style="color:#FF1493">' . $data["orders"][$i]["userID"] . '</td>';
                                                    echo' <td style="color:#FF1493">' . $data["orders"][$i]["amount"] . ' </td>';
                                                    echo' <td style="color:#FF1493">' . $data["orders"][$i]["status"] . '</td>';
                                                    echo' <td style="color:#FF1493">' . $data["orders"][$i]["createAt"] . '</td>';
                                                    echo' <td style="color:#FF1493">' . $data["orders"][$i]["updateAt"] . '</td>';
                                                    echo' <td> 
                        <a href="../controller/OrderrController.php?action=edit&id=' . $data["orders"][$i]["orderID"] . '" type="button" class="btn btn-warning mb-1" style= "font-size: 17px">Sửa</a>
                         <a href="../controller/OrderrController.php?action=delete&id=' . $data["orders"][$i]["orderID"] . '" type="button" class="btn btn-danger mb-1" style= "font-size: 17px">Xóa</a>
                       
                      </td>';
                                                    echo '</tr>';
                                                }
                                                ?>


                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer"></div>
                                </div>
                            </div>
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