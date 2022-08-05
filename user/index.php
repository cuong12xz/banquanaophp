<?php
	if(!isset($_SESSION)) session_start();
	
	include 'config.php';
	include "class/Utilities.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Trang Chủ</title>
    
    <?php include'layout/head.php'; ?>
  </head>
  <body class="goto-here">


<!--NavEnd-->

    <?php
	
		$controller= isset($_GET["controller"])? $_GET["controller"]:"home";
		switch ($controller) {
			case 'home':
				include "controller/homeController.php";
				break;
			case "shop":
				include "controller/shopController.php";
				break;
			case "user":
				include "controller/userController.php";
				break;
			default:
				# code...
				break;
		}
	?>


        <!-- footer -->
    <?php include'layout/foot.php'; ?>
     <!-- footer -->
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <!--script-->
  <?php include'layout/script.php'; ?>
  <!--end script-->
    
  </body>
</html>