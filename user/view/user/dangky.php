<?php include 'layout/menu.php';
if (isset($result)) {
	include "./layout/alert.php";
}


?>
<!-- END nav -->



<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding" style="margin-top: 15px; ">
	<ol class="breadcrumb">
		<li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a><br></li>
		<li class="active">Đăng kí</li>
	</ol>
	<div class="panel panel-info "style="margin-top: 15px;margin-left:20%  ">

		<div class="panel-body">
			<form class="form-horizontal" method="post" action="index.php?controller=user&action=xuLyDangKy">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-offset-2 col-sm-2 control-label">Họ tên</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="inputEmail3" placeholder="" name="txt_username" value="">
					</div>
					<div class="col-sm-3">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class=" col-sm-offset-2 col-sm-2 control-label">Email</label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="inputEmail3" placeholder="" name="txt_email" value="">
					</div>
					<div class="col-sm-3">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-offset-2 col-sm-2 control-label">Mật khẩu</label>
					<div class="col-sm-4">
						<input type="password" class="form-control" id="inputEmail3" placeholder="" name="txt_password">
					</div>
					<div class="col-sm-3">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class=" col-sm-offset-2 col-sm-2 control-label">Nhập lại mật khẩu</label>
					<div class="col-sm-4">
						<input type="password" class="form-control" id="inputEmail3" placeholder="" name="re_password">
					</div>
					<div class="col-sm-3">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-offset-2 col-sm-2 control-label">Địa chỉ</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="inputEmail3" placeholder="" name="address" value="">
					</div>
					<div class="col-sm-3">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-offset-2 col-sm-2 control-label">Số điện thoại</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="inputEmail3" placeholder="" name="phone" value="">
					</div>
					<div class="col-sm-3">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-7">
						<button type="submit" class="btn btn-danger">Đăng ký</button>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>