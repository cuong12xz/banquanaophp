<?php
$action = isset($_GET["action"]) ? $_GET["action"] : "index";

switch ($action) {
    case 'login':

        include "view/user/dangnhap.php";
        break;
    case "xulyLogin":
        include "model/Khach.php";
        $txt_username = Utilities::post("userlogin_txt_username");
        $txt_password = Utilities::post('userlogin_txt_password');

        $old = getKhachByUsername($txt_username);
        $txt_password = md5($txt_password);
        if (count($old) > 0) {
            if ($old[0]["password"] == $txt_password) {
                if (!isset($_SESSION)) session_start();
                $_SESSION["username"] = $txt_username;
                include "./view/home/index.php";
            } else {
                include "./view/user/dangnhap.php";
            }
        } else {
        }
        break;
    case "dangky":
        include "view/user/dangky.php";
        break;
    case "xuLyDangKy":
        include "./model/Khach.php";
        $txt_username = Utilities::post("txt_username");
        $txt_email = Utilities::post('txt_email');
        $txt_password = Utilities::post('txt_password');
        $re_password = Utilities::post('re_password');
        $txt_address = Utilities::post('txt_address');
        $txt_phone = Utilities::post('txt_phone');
        if ($txt_password != $re_password) {
            $result= ["success" => false, "message"=>"Mật khẩu không trùng khớp!"];
            
            include "view/user/dangky.php";
            exit;
        }

        $old = getKhachByUsername($txt_username);
        $txt_password = md5($txt_password);
        if (count($old) > 0) {
            $result= ["success" => false, "message"=>"Tài khoản đã tồn tại!"];
            
            include "view/user/dangky.php";
            
        } else {
            //3
            $row = insertKhach([$txt_username, $txt_email, $txt_password, $txt_address, $txt_phone]);
            if ($row > 0) {
                $result= ["success" => true, "message"=>"Đăng ký thành công!"];
                
                include "view/user/dangnhap.php";
            } else {
                $result= ["success" => false, "message"=>"Đã xảy ra lỗi. Vui lòng thử lại!"];
            
                include "view/user/dangky.php";
            }
        }
        break;
    case "dangxuat":
        if (!isset($_SESSION)) session_start();
        if (isset($_SESSION["username"])) {
            unset($_SESSION["username"]);
            
            include "./view/home/index.php";
        }
        break;
    default:
        # code...
        break;
}

?>










<!-- 

// if (count($_POST) > 0) {
// // getAllUser();
// // die();
// $username = $_POST["username"];
// $passwd = $_POST["passwd"];
// if ($username == "admin@gmail.com" && $passwd == "12345") {
// session_start();
// $_SESSION["user_name"] = $username;

// header("Location: index.php");

// }
// }
// $txt_username = "";
// $txt_email = "";
// $txt_password = "";
// $re_password = "";
// $txt_address = "";
// $txt_phone = "";
// $txt_username = "";
// if (isset($_POST['txt_username'])) {
// $txt_username = $_POST['txt_username'];
// }
// if (isset($_POST['txt_email'])) {
// $txt_email = $_POST['txt_email'];
// }
// if (isset($_POST['txt_password'])) {
// $txt_password = $_POST['txt_password'];
// }
// if (isset($_POST['re_password'])) {
// $re_password = $_POST['re_password'];
// }
// if (isset($_POST['txt_address'])) {
// $txt_address = $_POST['txt_address'];
// }
// if (isset($_POST['txt_phone'])) {
// $txt_phone = $_POST['txt_phone'];
// }
// var_dump($_POST); -->