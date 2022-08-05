<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
        @include("../layouts/header.php");
        ?>
    </head>

    <body class="bg-gradient-login">
        <!-- Login Content -->
        <div class="container-login">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-12 col-md-9">
                    <div class="card shadow-sm my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-form">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                        </div>
                                        <form class="user" action="../controller/UserController.php" method="POST" id="form_login">
                                            <div class="form-group">
                                                <input type="email" id="login_txt_email" required name="login_txt_email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                                                       placeholder="Enter Email Address">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="login_txt_password" required class="form-control" id="exampleInputPassword" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Remember
                                                        Me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" id="user_action"  name="user_action" value="user_login" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                                            </div>
                                            <hr>
                                            <a href="../controller/logincontroller.php" class="btn btn-google btn-block">
                                                <i class="fab fa-google fa-fw"></i> Login with Google
                                            </a>
                                            <a href="index.html" class="btn btn-facebook btn-block">
                                                <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                            </a>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="font-weight-bold small" href="themUser.php">Create an Account!</a>
                                        </div>
                                        <div class="text-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Content -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/ruang-admin.min.js"></script>
    </body>

</html>