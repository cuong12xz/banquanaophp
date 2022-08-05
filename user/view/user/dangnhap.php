<?php
include 'layout/menu.php';
if (isset($result)) {
    include "./layout/alert.php";
}
?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding" style="margin-top: 15px;">
    <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
        <li class="active">Đăng nhập</li>
    </ol>
    <div class="panel panel-info" style="margin-left:20%">
        <div class="panel-body ">
            <form class="form-horizontal" method="POST" action="index.php?controller=user&action=xulyLogin">
                <div class="form-group">
                    <h3 style="color: red"></h3>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class=" col-sm-offset-2 col-sm-2 control-label">User Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="userlogin_txt_username" class="form-control" id="inputEmail3" placeholder="" value="">
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-offset-2 col-sm-2 control-label">Mật khẩu</label>
                    <div class="col-sm-4">
                        <input type="password" name="userlogin_txt_password" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
                <div class="form-group dndk">
                    <div class="col-sm-offset-4 ">
                        <button type="submit" class="btn btn-success">Đăng nhập</button>


                        <span class="btn-outline-secondary" style="margin-left: 10%;"><a  href="index.php?controller=user&action=dangky">Đăng kí</a></span>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>