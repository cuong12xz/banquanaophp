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
                                <li class="breadcrumb-item"><a href="./adminUser.php">Trang chủ</a></li>
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

                                        <a href="../controller/OrderrController.php"><button type="button" class="btn btn-success mb-1" style= "font-size: 15px">Back</button></a>
                                    </div>
                                    <div class="card-header  bg-primary">
                                        <strong class="card-title text-light">Thêm Đơn hàng</strong>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                            </thead>
                                            <tbody>
                                            <form action="../controller/OrderrController.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="card mb-4">
                                                    <div class="card-body">

                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="user-input">Số lượng</label></div>
                                                            <div class="col col-md-10">   <input type="number" name="txt_number" required class="form-control" id="txt_number" ></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="select" class=" form-control-label">Trạng thái đơn</label></div>
                                                            <div class="col col-md-10">
                                                                <select name="cmb_status" id="cmb_status" class="form-control">

                                                                    <option value="0">Please choose</option>
                                                                    <option value="1" selected>Chưa thanh toán</option>
                                                                    <option value="2">Đã thanh toán</option>
                                                                    <option value="3">Đang giao hàng </option>
                                                                    <option value="4">Đã giao hàng </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="user-input">Ngày lập đơn hàng</label></div>
                                                            <div class="col col-md-10">   <input type="date" name="txt_timecreate" required class="form-control" id="txt_timecreate" ></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="user-input">Ngày cập nhật đơn hàng</label></div>
                                                            <div class="col col-md-10">   <input type="date" name="txt_timeupdate" required class="form-control" id="txt_timeupdate" ></div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="select" class=" form-control-label">Khách hàng đặt hàng</label></div>
                                                            <div class="col col-md-10">
                                                                <select name="cmb_user" id="cmb_user" class="form-control">   
                                                                    <?php
                                                                    include_once '../model/UserModel.php';
                                                                    $user = new UserModel("", "", "", "", "", "", "", 0);
                                                                    $data = $user->getAllUser();
                                                                    for ($i = 0; $i < count($data); $i++) {
                                                                        echo' <option value="' . $data[$i]["user_id"] . '">' . $data[$i]["username"] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div>
                                                            <button  name="order_action" value="order_create"  type="submit" class="btn btn-primary">Tạo mới</button>    
                                                        </div>
                                                    </div>
                                            </form>
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