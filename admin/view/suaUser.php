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
                                        <strong class="card-title text-light">Chỉnh sửa người dùng</strong>
                                    </div>
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                                        <a href="../controller/UserController.php"><button type="button" class="btn btn-success mb-1" style= "font-size: 15px">Back</button></a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                            </thead>
                                            <tbody>
                                            <form action="../controller/UserController.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="user-input">ID</label></div>
                                                            <div class="col col-md-10">   <input type="text" name="txt_userid" readonly value="<?php echo $data["user_id"]; ?> " class="form-control" id="txt_userid" ></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="user-input">Username</label></div>
                                                            <div class="col col-md-10">   <input type="text" name="txt_username" value="<?php echo $data["username"]; ?> " class="form-control" id="txt_username" ></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"> <label for="email-input">Email</label></div>
                                                            <div class="col col-md-10"><input type="email" value="<?php echo $data["email"]; ?> " name="txt_email" id="txt_email" class="form-control" ></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="password-input">Password</label></div>
                                                            <div class="col col-md-10"><input type="password" value="<?php echo $data["password"]; ?> " name="txt_password" class="form-control" id="txt_password"></div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="select" class=" form-control-label">Sex</label></div>
                                                            <div class="col col-md-10">
                                                                <select name="cmb_sex" id="cmb_sex" class="form-control">
                                                                    <?php
                                                                    if ($data["sex"] == "Nam") {
                                                                        echo '<option value="0">Please select</option>';
                                                                        echo'<option value="Nam" selected>Male</option>';
                                                                        echo'<option value="Nữ">Female</option>';
                                                                        echo'<option value="Khác">Other</option>';
                                                                    } elseif ($data["sex"] == "Nữ") {
                                                                        echo '<option value="0">Please select</option>';
                                                                        echo'<option value="Nam" >Male</option>';
                                                                        echo'<option value="Nữ" selected>Female</option>';
                                                                        echo'<option value="Khác">Other</option>';
                                                                    } elseif ($data["sex"] == "Khác") {
                                                                        echo '<option value="0">Please select</option>';
                                                                        echo'<option value="Nam" >Male</option>';
                                                                        echo'<option value="Nữ" >Female</option>';
                                                                        echo'<option value="Khác" selected>Other</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label class=" form-control-label">Role</label></div>
                                                            <div class="col col-md-10">
                                                                <div class="form-check">
                                                                    <div class="radio">
                                                                        <?php
                                                                        if ($data["role"] == "user") {
                                                                            echo'<label for="radio1" class="form-check-label ">';
                                                                            echo' <input type="radio" id="rdg_male" name="rdg_role" checked value="user" class="lbsRadio">User';
                                                                            echo' </label>';
                                                                            echo' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                                                            echo'  <label for="radio2" class="form-check-label ">';
                                                                            echo' <input type="radio" id="rdg_female" name="rdg_role" value="admin" class="lbsRadio">Admin';
                                                                            echo' </label>';
                                                                        } elseif ($data["role"] == "admin") {
                                                                            echo'<label for="radio1" class="form-check-label ">';
                                                                            echo' <input type="radio" id="rdg_male" name="rdg_role"  value="user" class="lbsRadio">User';
                                                                            echo' </label>';
                                                                            echo' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                                                            echo'  <label for="radio2" class="form-check-label ">';
                                                                            echo' <input type="radio" id="rdg_female" name="rdg_role" checked value="admin" class="lbsRadio">Admin';
                                                                            echo' </label>';
                                                                        }
                                                                        ?>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label class=" form-control-label">Prefer</label></div>
                                                            <div class="col col-md-10">
                                                                <div class="form-check">
                                                                    <?php
                                                                    if ($data["prefer"] == ",,football") {
                                                                        echo'<div class="checkbox">';
                                                                        echo'   <label for="checkbox1" class="form-check-label">';
                                                                        echo'      <input type="checkbox" id="chk_football" checked name="chk_football" checked value="football" class="lbsCheck"> Football';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'   <label for="checkbox2" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_swimming" name="chk_swimming" value="swiming" class="lbsCheck"> Swimming';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'    <label for="checkbox3" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_walking" name="chk_walking" value="walking" class="lbsCheck"> Walking';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                    } elseif ($data["prefer"] == ",swiming,") {
                                                                        echo'<div class="checkbox">';
                                                                        echo'   <label for="checkbox1" class="form-check-label">';
                                                                        echo'      <input type="checkbox" id="chk_football"  name="chk_football" value="football" class="lbsCheck"> Football';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'   <label for="checkbox2" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_swimming" checked name="chk_swimming" value="swiming" class="lbsCheck"> Swimming';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'    <label for="checkbox3" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_walking" name="chk_walking" value="walking" class="lbsCheck"> Walking';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                    } elseif ($data["prefer"] == "walking,,") {
                                                                        echo'<div class="checkbox">';
                                                                        echo'   <label for="checkbox1" class="form-check-label">';
                                                                        echo'      <input type="checkbox" id="chk_football"  name="chk_football" value="football" class="lbsCheck"> Football';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'   <label for="checkbox2" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_swimming"  name="chk_swimming" value="swiming" class="lbsCheck"> Swimming';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'    <label for="checkbox3" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_walking" checked name="chk_walking" value="walking" class="lbsCheck"> Walking';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                    } elseif ($data["prefer"] == ",swiming,football") {
                                                                        echo'<div class="checkbox">';
                                                                        echo'   <label for="checkbox1" class="form-check-label">';
                                                                        echo'      <input type="checkbox" id="chk_football" checked name="chk_football" value="football" class="lbsCheck"> Football';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'   <label for="checkbox2" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_swimming" checked name="chk_swimming" value="swiming" class="lbsCheck"> Swimming';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'    <label for="checkbox3" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_walking"  name="chk_walking" value="walking" class="lbsCheck"> Walking';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                    } elseif ($data["prefer"] == "walking,,football") {
                                                                        echo'<div class="checkbox">';
                                                                        echo'   <label for="checkbox1" class="form-check-label">';
                                                                        echo'      <input type="checkbox" id="chk_football" checked name="chk_football" value="football" class="lbsCheck"> Football';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'   <label for="checkbox2" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_swimming"  name="chk_swimming" value="swiming" class="lbsCheck"> Swimming';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'    <label for="checkbox3" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_walking" checked name="chk_walking" value="walking" class="lbsCheck"> Walking';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                    } elseif ($data["prefer"] == "walking,swiming,") {
                                                                        echo'<div class="checkbox">';
                                                                        echo'   <label for="checkbox1" class="form-check-label">';
                                                                        echo'      <input type="checkbox" id="chk_football"  name="chk_football" value="football" class="lbsCheck"> Football';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'   <label for="checkbox2" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_swimming" checked name="chk_swimming" value="swiming" class="lbsCheck"> Swimming';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'    <label for="checkbox3" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_walking" checked name="chk_walking" value="walking" class="lbsCheck"> Walking';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                    } elseif ($data["prefer"] == "walking,swiming,football") {
                                                                        echo'<div class="checkbox">';
                                                                        echo'   <label for="checkbox1" class="form-check-label">';
                                                                        echo'      <input type="checkbox" id="chk_football" checked name="chk_football" value="football" class="lbsCheck"> Football';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'   <label for="checkbox2" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_swimming" checked name="chk_swimming" value="swiming" class="lbsCheck"> Swimming';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'    <label for="checkbox3" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_walking" checked name="chk_walking" value="walking" class="lbsCheck"> Walking';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                    } elseif (($data["prefer"] == ",,")) {
                                                                        echo'<div class="checkbox">';
                                                                        echo'   <label for="checkbox1" class="form-check-label">';
                                                                        echo'      <input type="checkbox" id="chk_football"  name="chk_football" value="football" class="lbsCheck"> Football';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'   <label for="checkbox2" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_swimming"  name="chk_swimming" value="swiming" class="lbsCheck"> Swimming';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                        echo' <div class="checkbox">';
                                                                        echo'    <label for="checkbox3" class="form-check-label ">';
                                                                        echo'       <input type="checkbox" id="chk_walking"  name="chk_walking" value="walking" class="lbsCheck"> Walking';
                                                                        echo'   </label>';
                                                                        echo' </div>';
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col col-md-2"><label for="file-input" class=" form-control-label">Avatar</label></div>
                                                            <div class="col-12 col-md-10"><input type="file" id="file_avatar" name="file_avatar" class="form-control-file"></div>
                                                        </div>
                                                        <div>
                                                            <button  name="user_action" value="user_edit"  type="submit" class="btn btn-primary">Cập nhật</button>    
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