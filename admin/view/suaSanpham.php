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
                                    <div class="card-header  bg-primary">
                                        <strong class="card-title text-light">Chỉnh sửa sản phẩm</strong>
                                    </div>
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                                        <a href="../controller/ProductController.php"><button type="button" class="btn btn-success mb-1" style= "font-size: 15px">Back</button></a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                            </thead>
                                            <tbody>
                                            <form action="../controller/ProductController.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="user-input">ID Sản phẩm</label></div>
                                                            <div class="col col-md-10">   <input type="text" readonly="" name="txt_id" value="<?php echo $data["id"]; ?>" required class="form-control" id="txt_name" ></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="user-input">Tên Sản phẩm</label></div>
                                                            <div class="col col-md-10">   <input type="text" name="txt_name" value="<?php echo $data["name"]; ?>" required class="form-control" id="txt_name" ></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="select" class=" form-control-label">Ảnh sản phẩm</label></div>
                                                            <div class="col col-md-1"><?php echo' <img width="80" height src="../images/' . $data["image"] . '">'; ?></div>
                                                                 <div class="col col-md-9">
                                                                <select name="cmb_img" id="cmb_img" class="form-control"> 
                                                                    <?php
                                                                    if ($data["image"] == "product-1.jpg") {
                                                                        echo ' <option value="product-1.jpg" selected>Áo jeans cách tân</option>';
                                                                        echo '  <option value="product-2.jpg" >Váy summer</option>';
                                                                        echo ' <option value="product-3.jpg">Đầm trễ vai Pop</option>';
                                                                        echo ' <option value="product-4.jpg">T-shirt và quần XCX</option>';
                                                                        echo '  <option value="product-5.jpg">Váy cách điệu Aladin</option>';
                                                                        echo ' <option value="product-6.jpg">Đầm dạ hội Aqe</option>';
                                                                        echo '  <option value="product-7.jpg">Váy công sở Agun</option>';
                                                                        echo '  <option value="product-8.jpg">Khoác jeans Telles</option>';
                                                                    } elseif ($data["image"] == "product-2.jpg") {
                                                                        echo ' <option value="product-1.jpg" >Áo jeans cách tân</option>';
                                                                        echo '  <option value="product-2.jpg" selected>Váy summer</option>';
                                                                        echo ' <option value="product-3.jpg">Đầm trễ vai Pop</option>';
                                                                        echo ' <option value="product-4.jpg">T-shirt và quần XCX</option>';
                                                                        echo '  <option value="product-5.jpg">Váy cách điệu Aladin</option>';
                                                                        echo ' <option value="product-6.jpg">Đầm dạ hội Aqe</option>';
                                                                        echo '  <option value="product-7.jpg">Váy công sở Agun</option>';
                                                                        echo '  <option value="product-8.jpg">Khoác jeans Telles</option>';
                                                                    } elseif ($data["image"] == "product-3.jpg") {
                                                                        echo ' <option value="product-1.jpg" >Áo jeans cách tân</option>';
                                                                        echo '  <option value="product-2.jpg" >Váy summer</option>';
                                                                        echo ' <option value="product-3.jpg" selected>Đầm trễ vai Pop</option>';
                                                                        echo ' <option value="product-4.jpg">T-shirt và quần XCX</option>';
                                                                        echo '  <option value="product-5.jpg">Váy cách điệu Aladin</option>';
                                                                        echo ' <option value="product-6.jpg">Đầm dạ hội Aqe</option>';
                                                                        echo '  <option value="product-7.jpg">Váy công sở Agun</option>';
                                                                        echo '  <option value="product-8.jpg">Khoác jeans Telles</option>';
                                                                    } elseif ($data["image"] == "product-4.jpg") {
                                                                        echo ' <option value="product-1.jpg" >Áo jeans cách tân</option>';
                                                                        echo '  <option value="product-2.jpg" >Váy summer</option>';
                                                                        echo ' <option value="product-3.jpg" >Đầm trễ vai Pop</option>';
                                                                        echo ' <option value="product-4.jpg" selected>T-shirt và quần XCX</option>';
                                                                        echo '  <option value="product-5.jpg">Váy cách điệu Aladin</option>';
                                                                        echo ' <option value="product-6.jpg">Đầm dạ hội Aqe</option>';
                                                                        echo '  <option value="product-7.jpg">Váy công sở Agun</option>';
                                                                        echo '  <option value="product-8.jpg">Khoác jeans Telles</option>';
                                                                    } elseif ($data["image"] == "product-5.jpg") {
                                                                        echo ' <option value="product-1.jpg" >Áo jeans cách tân</option>';
                                                                        echo '  <option value="product-2.jpg" >Váy summer</option>';
                                                                        echo ' <option value="product-3.jpg" >Đầm trễ vai Pop</option>';
                                                                        echo ' <option value="product-4.jpg" >T-shirt và quần XCX</option>';
                                                                        echo '  <option value="product-5.jpg" selected>Váy cách điệu Aladin</option>';
                                                                        echo ' <option value="product-6.jpg">Đầm dạ hội Aqe</option>';
                                                                        echo '  <option value="product-7.jpg">Váy công sở Agun</option>';
                                                                        echo '  <option value="product-8.jpg">Khoác jeans Telles</option>';
                                                                    } elseif ($data["image"] == "product-6.jpg") {
                                                                        echo ' <option value="product-1.jpg" >Áo jeans cách tân</option>';
                                                                        echo '  <option value="product-2.jpg" >Váy summer</option>';
                                                                        echo ' <option value="product-3.jpg" >Đầm trễ vai Pop</option>';
                                                                        echo ' <option value="product-4.jpg" >T-shirt và quần XCX</option>';
                                                                        echo '  <option value="product-5.jpg" >Váy cách điệu Aladin</option>';
                                                                        echo ' <option value="product-6.jpg" selected>Đầm dạ hội Aqe</option>';
                                                                        echo '  <option value="product-7.jpg">Váy công sở Agun</option>';
                                                                        echo '  <option value="product-8.jpg">Khoác jeans Telles</option>';
                                                                    } elseif ($data["image"] == "product-6.jpg") {
                                                                        echo ' <option value="product-1.jpg" >Áo jeans cách tân</option>';
                                                                        echo '  <option value="product-2.jpg" >Váy summer</option>';
                                                                        echo ' <option value="product-3.jpg" >Đầm trễ vai Pop</option>';
                                                                        echo ' <option value="product-4.jpg" >T-shirt và quần XCX</option>';
                                                                        echo '  <option value="product-5.jpg" >Váy cách điệu Aladin</option>';
                                                                        echo ' <option value="product-6.jpg" selected>Đầm dạ hội Aqe</option>';
                                                                        echo '  <option value="product-7.jpg">Váy công sở Agun</option>';
                                                                        echo '  <option value="product-8.jpg">Khoác jeans Telles</option>';
                                                                    } elseif ($data["image"] == "product-7.jpg") {
                                                                        echo ' <option value="product-1.jpg" >Áo jeans cách tân</option>';
                                                                        echo '  <option value="product-2.jpg" >Váy summer</option>';
                                                                        echo ' <option value="product-3.jpg" >Đầm trễ vai Pop</option>';
                                                                        echo ' <option value="product-4.jpg" >T-shirt và quần XCX</option>';
                                                                        echo '  <option value="product-5.jpg" >Váy cách điệu Aladin</option>';
                                                                        echo ' <option value="product-6.jpg">Đầm dạ hội Aqe</option>';
                                                                        echo '  <option value="product-7.jpg" selected>Váy công sở Agun</option>';
                                                                        echo '  <option value="product-8.jpg">Khoác jeans Telles</option>';
                                                                    } elseif ($data["image"] == "product-8.jpg") {
                                                                        echo ' <option value="product-1.jpg" >Áo jeans cách tân</option>';
                                                                        echo '  <option value="product-2.jpg" >Váy summer</option>';
                                                                        echo ' <option value="product-3.jpg" >Đầm trễ vai Pop</option>';
                                                                        echo ' <option value="product-4.jpg" >T-shirt và quần XCX</option>';
                                                                        echo '  <option value="product-5.jpg" >Váy cách điệu Aladin</option>';
                                                                        echo ' <option value="product-6.jpg">Đầm dạ hội Aqe</option>';
                                                                        echo '  <option value="product-7.jpg" >Váy công sở Agun</option>';
                                                                        echo '  <option value="product-8.jpg" selected>Khoác jeans Telles</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                      
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="user-input">Giá</label></div>
                                                            <div class="col col-md-10">   <input type="number" name="txt_price" value="<?php echo $data["price"]; ?>" required class="form-control" id="txt_price" ></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="user-input">Số lượng</label></div>
                                                            <div class="col col-md-10">   <input type="number" name="txt_number" value="<?php echo $data["number"]; ?>"required class="form-control" id="txt_number" ></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="select" class=" form-control-label">Danh mục sản phẩm cũ: <?php echo $data["category"]; ?></label></div>
                                                            <div class="col col-md-9"></div>
                                                            </div>
                                                                <div class="row form-group">
                                                                     <div class="col col-md-2"><label for="select" class=" form-control-label">Chọn mới danh mục sản phẩm</label></div>
                                                            <div class="col col-md-10">
                                                                <select name="cmb_category" id="cmb_category" class="form-control">   
                                                                    <?php
                                                                    include_once '../model/CategoryProductModel.php';
                                                                    $cate = new CategoryProductModel("", "", 0);
                                                                    $data = $cate->getAll();
                                                                    $cate1 = new CategoryProductModel("", "", 0);
                                                                    $data1 = $cate1->get();
                                                                    for ($i = 0; $i < count($data); $i++) {
                                                                        for ($i = 0; $i < count($data); $i++) {
                                                                            if ($data[$i]["catename"])
                                                                                echo' <option value="' . $data[$i]["catename"] . '"  >' . $data[$i]["catename"] . '</option>';
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                                </div>
                                                       


                                                        <div>
                                                            <button  name="product_action" value="product_edit"  type="submit" class="btn btn-primary">Cập nhật</button>    
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