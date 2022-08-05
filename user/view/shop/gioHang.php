<!--Nav-->
<?php include 'layout/menu.php' ?>
<!-- END nav -->

<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang Chủ</a></span> <span>Giỏ Hàng</span></p>
                <h1 class="mb-0 bread">Giỏ Hàng Cá Nhân</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($_SESSION["cart"] as $pro) {
                            ?>
                                <form action="index.php?controller=shop&action=addQuantity" method="POST">
                                    <input type="text" name="id" value="<?php echo $pro["id"] ?>" hidden>
                                    <tr class="text-center">
                                        <td class="product-remove"><a href="index.php?controller=shop&action=xoaGioHang&id=<?php echo $pro["id"] ?>"><span class="ion-ios-close"></span></a></td>

                                        <td class="image-prod">
                                            <div class="img" style="background-image:url(<?php echo $pro["image"] ?>);"></div>
                                        </td>

                                        <td class="product-name">
                                            <h3><?php echo $pro["name"] ?></h3>
                                        </td>

                                        <td class="price"><?php echo $pro["price"] ?></td>

                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="number" name="quantity" class="quantity form-control input-number" value="<?php echo $pro["number"] ?>" min="1" max="100">

                                            </div>
                                        </td>

                                        <td class="total"><?php echo $pro["number"] * $pro["price"] ?></td>
                                        <td><input type="submit" value="lưu"></td>
                                    </tr><!-- END TR-->
                                </form>
                            <?php
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span>$20.60</span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>$0.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Discount</span>
                        <span>$3.00</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>$17.60</span>
                    </p>
                </div>
                <p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            </div>
        </div>
    </div>
</section>