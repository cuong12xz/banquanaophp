<!--nav-->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php" style="flex-grow: 1; display: flex; justify-content: center">Winkel</a>
          <form action="index.php?controller=shop&action=find" method="post"  style="flex-grow: 1; display: flex; justify-content: center">
            <input type="text" name="keyword">
            <input type="submit" value="Tìm kiếm" class="btn btn-outline-warning btn-primary" style="border-radius:0;">
          </form>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.php" class="nav-link">Trang Chủ</a></li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cửa Hàng</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                
                <!--
                  
                      <a class="dropdown-item" href="shop.php"></a>
                  
               -->
                <a class="dropdown-item" href="index.php?controller=shop&action=index">Cửa Hàng</a>
                <a class="dropdown-item" href="product-single.php">Sản Phẩm Đơn</a>
                <a class="dropdown-item" href="cart.php">Giỏ</a>
                <a class="dropdown-item" href="checkout.php">Thanh Toán</a>
              </div>
            </li>
              <li class="nav-item"><a href="about.php" class="nav-link">Về Chúng Tôi</a></li>
              <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="contact.php" class="nav-link">Liên Hệ</a></li>
              <li class="nav-item cta cta-colored"><a href="index.php?controller=shop&action=gioHang" class="nav-link"><span class="icon-shopping_cart"></span>[<?php echo isset($_SESSION["cart"])?count($_SESSION["cart"]):0 ?>]</a></li>
               <?php
                if(!isset($_SESSION)) session_start();
                if(isset($_SESSION["username"])){
                  echo '<div class="nav-item dropdown">';
                    echo '<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Welcome '.$_SESSION["username"].'</a>';
                    echo '<div class="dropdown-menu">';
                    echo '<a href="index.php?controller=user&action=dangxuat" class="dropdown-item">Logout</a>';
                    echo '</div>';
                    echo '</div>';
                }else{
                  ?>
                    <li class="nav-item"><a href="index.php?controller=user&action=login" class="nav-link">Đăng nhập</a></li>
                  <?php
                }
              ?>
              
                
            </ul>
          </div>
          
        </div>
      </nav>
    <!-- END nav -->