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

                                        <a href="../view/themDanhmuc.php"><button type="button" class="btn btn-success mb-1" style= "font-size: 15px">Thêm danh mục</button></a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th style="color:red">ID</th>
                                                    <th style="color:red">Tên danh mục</th>
                                                    <th style="color:red">Xuất xứ</th>
                                                    <th style="color:red">Hiệu chỉnh</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                                <?php
                                                for ($i = 0; $i < count($data["cates"]); $i++) {
                                                    echo' <tr>';
                                                    echo' <td style="color:#FF1493">' . $data["cates"][$i]["cateID"] . '</td>';
                                                    echo' <td style="color:#FF1493">' . $data["cates"][$i]["catename"] . '</td>';
                                                    echo' <td style="color:#FF1493">' . $data["cates"][$i]["origin"] . '</td>';
                                                    echo' <td style="color:#FF1493"> 
                        <a href="../controller/CategoryProductController.php?action=edit&id=' . $data["cates"][$i]["cateID"] . '" type="button" class="btn btn-warning mb-1" style= "font-size: 10px">Sửa</a>
                         <a href="../controller/CategoryProductController.php?action=delete&id=' . $data["cates"][$i]["cateID"] . '" type="button" class="btn btn-danger mb-1" style= "font-size: 10px">Xóa</a>
                       
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
