<?php
    include 'layout/menu.php';
?>
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang Chủ</a></span> <span>Sản Phẩm</span></p>
					<h1 class="mb-0 bread">Sản Phẩm Tuyển Chọn</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-10 order-md-last">
					<div class="row">
						
						<?php
						
						
						 foreach($data as $product) {
							 //<a href="#" class="img-prod"><img class="img-fluid" src="'.$data["product"][$i]["image"].'" alt="Colorlib Template">
							echo '<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">';
							echo '<form action="index.php?controller=shop&action=themGioHang"method="POST">';
							echo '	<div class="product">';
							echo '		<a href="index.php?controller=shop&action=detail&id='.$product["id"].'" class="img-prod"><img class="img-fluid" src="'.$product["image"].'" alt="Colorlib Template">';
							echo '			<span class="status">30%</span>';
							echo '			<div class="overlay"></div>';
							echo '		</a>';
							echo '		<div class="text py-3 px-3">';
							echo '			<h3><a href="index.php?controller=shop&action=detail&id='.$product["id"].'">'.$product["name"].'</a></h3>';
							echo '			<div class="d-flex">';
							echo '				<div class="pricing">';
							echo '					<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">'.$product["price"].'</span></p>';
							echo '				</div>';
							echo '				<div class="rating">';
							echo '					<p class="text-right">';
							echo '						<a href="#"><span class="ion-ios-star-outline"></span></a>';
							echo '						<a href="#"><span class="ion-ios-star-outline"></span></a>';
							echo '						<a href="#"><span class="ion-ios-star-outline"></span></a>';
							echo '						<a href="#"><span class="ion-ios-star-outline"></span></a>';
							echo '						<a href="#"><span class="ion-ios-star-outline"></span></a>';
							echo '					</p>';
							echo '				</div>';
							echo '			</div>';
							echo '			<p class="bottom-area d-flex px-3">';
							echo '				<button href="#" class="btn btn-info buy-now text-center py-2">Them Gio Hang<span><i class="ion-ios-cart ml-1"></i></span></button>';
							echo '			</p>';
							 echo ' <input type="text" hidden name="product_id"value="'.$product["id"].'">';
						
							echo '		</div>';
							echo '	</div>';
							 echo '</form>';
							echo '</div>';
						}
						?>

					</div>
					<div class="row mt-5">
						<div class="col text-center">
							<div class="block-27">
								<ul>
									<li><a href="#">&lt;</a></li>
									<li class="active"><span>1</span></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&gt;</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-2 sidebar">
					<div class="sidebar-box-2">
						<h2 class="heading mb-4"><a href="#">Clothing</a></h2>
						<ul>
							<li><a href="#">Shirts &amp; Tops</a></li>
							<li><a href="#">Dresses</a></li>
							<li><a href="#">Shorts &amp; Skirts</a></li>
							<li><a href="#">Jackets</a></li>
							<li><a href="#">Coats</a></li>
							<li><a href="#">Sleeveless</a></li>
							<li><a href="#">Trousers</a></li>
							<li><a href="#">Winter Coats</a></li>
							<li><a href="#">Jumpsuits</a></li>
						</ul>
					</div>
					<div class="sidebar-box-2">
						<h2 class="heading mb-4"><a href="#">Jeans</a></h2>
						<ul>
							<li><a href="#">Shirts &amp; Tops</a></li>
							<li><a href="#">Dresses</a></li>
							<li><a href="#">Shorts &amp; Skirts</a></li>
							<li><a href="#">Jackets</a></li>
							<li><a href="#">Coats</a></li>
							<li><a href="#">Jeans</a></li>
							<li><a href="#">Sleeveless</a></li>
							<li><a href="#">Trousers</a></li>
							<li><a href="#">Winter Coats</a></li>
							<li><a href="#">Jumpsuits</a></li>
						</ul>
					</div>
					<div class="sidebar-box-2">
						<h2 class="heading mb-2"><a href="#">Bags</a></h2>
						<h2 class="heading mb-2"><a href="#">Accessories</a></h2>
					</div>
					<div class="sidebar-box-2">
						<h2 class="heading mb-4"><a href="#">Shoes</a></h2>
						<ul>
							<li><a href="#">Nike</a></li>
							<li><a href="#">Addidas</a></li>
							<li><a href="#">Skechers</a></li>
							<li><a href="#">Jackets</a></li>
							<li><a href="#">Coats</a></li>
							<li><a href="#">Jeans</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>