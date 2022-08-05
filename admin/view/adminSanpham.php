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
                                        <a href="../view/themSanpham.php"> <button type="button" class="btn btn-success mb-1" style= "font-size: 15px">Thêm sản phẩm</button></a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th style="color:red">ID</th>
                                                    <th style="color:red">Tên sản phẩm</th>
                                                    <th style="color:red">Hình ảnh</th>

                                                    <th style="color:red">Số lượng tồn</th>
                                                    <th style="color:red">Giá tiền</th>
                                                    <th style="color:red">Thuộc danh mục</th>      
                                                    <th style="color:red">Hiệu chỉnh</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                                <?php
                                                for ($i = 0; $i < count($data["products"]); $i++) {
                                                    echo' <tr>';
                                                    echo' <td style="color:#FF1493">' . $data["products"][$i]["id"] . '</td>';
                                                    echo' <td style="color:#FF1493">' . $data["products"][$i]["name"] . '</td>';
                                                    echo' <td ><img width="80" height src="../images/' . $data["products"][$i]["image"] . '"> </td>';

                                                    echo' <td style="color:#FF1493">' . $data["products"][$i]["number"] . ' </td>';
                                                    echo' <td style="color:#FF1493">' . $data["products"][$i]["price"] . '$</td>';
                                                    echo' <td style="color:#FF1493">' . $data["products"][$i]["category"] . '</td>';
                                                    echo' <td> 
                        <a href="../controller/ProductController.php?action=edit&id=' . $data["products"][$i]["id"] . '" type="button" class="btn btn-warning mb-1" style= "font-size: 17px">Sửa</a>
                         <a href="../controller/ProductController.php?action=delete&id=' . $data["products"][$i]["id"] . '" type="button" class="btn btn-danger mb-1" style= "font-size: 17px">Xóa</a>
                       <a href="../controller/ProductController.php?action=detail&id=' . $data["products"][$i]["id"] . '" type="button" class="btn btn-info mb-1" style= "font-size: 17px">Chi tiết</a>
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