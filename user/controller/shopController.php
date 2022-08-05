<?php
$action = isset($_GET["action"]) ? $_GET["action"] : "index";

switch ($action) {
    case 'index':
        include './model/product.php';
        $data = product::getAllProduct();
        include "view/shop/index.php";
        break;
    case "themGioHang":
        include "./class/products.php";
        if (!isset($_SESSION)) session_start();

        $id = Utilities::post("product_id");
        if (!isset($_SESSION["cart"][$id])) {
            include './model/product.php';
            $productInfo = product::getProductById($id);
            $_SESSION["cart"][$id] = ["id" => $productInfo[0]["id"], "name" => $productInfo[0]["name"], "image" => $productInfo[0]["image"], "price" => $productInfo[0]["price"], "number" => 1];
        } else {
            $num = $_SESSION["cart"][$id]["number"];
            $_SESSION["cart"][$id]["number"] = $num + 1;
        }
        include "./view/shop/gioHang.php";
        break;
    case "xoaGioHang":
        include "./class/products.php";
        if (!isset($_SESSION)) session_start();

        $id = Utilities::get("id");
        if (isset($_SESSION["cart"][$id])) {
            unset($_SESSION["cart"][$id]);
        }
        include "./view/shop/gioHang.php";
        break;
    case "gioHang":
        include "./view/shop/gioHang.php";
        break;
    case "addQuantity":
        $soLuong = Utilities::post("quantity");
        $id = Utilities::post("id");
        if ($soLuong != "" && $id != "") {
            if (isset($_SESSION["cart"][$id])) {
                $_SESSION["cart"][$id]["number"] = $soLuong;
                include "./view/shop/gioHang.php";
            }
        }
        break;
    case "find":
        $keyword = Utilities::post("keyword");
        if ($keyword != "") {
            include "./model/product.php";
            $data = product::findProductByKeyword($keyword);
            include "view/shop/index.php";
        }
        break;
    case "detail":
        $id = Utilities::get("id");
        if ($id != "") {
            include "./model/product.php";
            $info = product::getProductById($id)[0];
            
            include "./view/shop/detail.php";
        } else {
            echo "sản phẩm khong co chi tiet";
        }
        break;
    default:
        # code...
        break;
}
