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
            <h2 class="m-8 font-weight-bold text-primary">Thêm danh mục bài viết</h2>
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

                  <a href="adminBaiviet.php"><button type="button" class="btn btn-success mb-1" style= "font-size: 15px">Back</button></a>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    </thead>
                    <tbody>
                      <tr>
                        <div class="card mb-4">
                <div class="card-body">
                  
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Mã danh mục</label>
                      <input type="text" name="txt_ma_danhmucbaiviet" class="form-control" id="" placeholder="Nhập mã danh mục bài viết">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Tên danh mục</label>
                      <input type="text" name="txt_name_danhmucbaiviet" class="form-control" id="" placeholder="Nhập tên danh mục bài viết">
                    </div>

                    <button type="submit" class="btn btn-primary">Tạo mới</button>    
                </div>
              </div>
                      </tr>
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