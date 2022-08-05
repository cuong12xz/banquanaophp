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
                            <h3 class="m-8 font-weight-bold text-primary" >Quản lý bài viết</h3>
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
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <a href="themBaiviet.php"> <button type="button" class="btn btn-success mb-1" style= "font-size: 15px">Thêm bài viết</button></a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Mã bài viết</th>
                                                    <th>Tiêu đề</th>
                                                    <th>Mô tả ngắn</th>
                                                    <th>Danh mục</th>

                                                    <th>Hiệu chỉnh</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                                <?php
                                                $arrTieude = array("Xu hướng trang phục", "Street Style", "Trend mùa đông", "Top sale", "Sản phẩm hot hiện tại");
                                                $arrMota = array("Xu hướng hiện đại", "Street Style 2022", "Áo len-Trend tháng 12", "Phụ kiện đang sale, giá tốt", "Nội y");
                                                $arrDanhmuc = array("Tin tức", "Điểm nhấn", "Trendy", "TOP", "Hot search");



                                                for ($i = 0; $i < count($arrTieude); $i++) {
                                                    echo' <tr>';
                                                    echo' <td>' . $i . '</td>';
                                                    echo' <td>' . $arrTieude[$i] . '</td>';
                                                    echo' <td>' . $arrMota[$i] . '</td>';
                                                    echo' <td>' . $arrDanhmuc[$i] . '</td>';

                                                    echo' <td> 
                                                <a href="suaBaiviet.php?ID=' . ($i + 1) . '"><button type="button" class="btn btn-warning mb-1" style= "font-size: 7px">Sửa</button>
                                               <button type="button" class="btn btn-danger mb-1" style= "font-size: 7px">Xóa</button></a>
                     


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