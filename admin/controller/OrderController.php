<?php
include_once './BaseController.php';
include_once '../util/DataValidation.php';
include_once '../model/OrderModel.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductController
 *
 * @author acer
 */
class OrderController extends BaseController {

    public function __construct($order_action) {
        switch ($order_action) {
            case 'order_create':
                $txt_number = $_POST["txt_number"];
                $cmb_status = $_POST["cmb_status"];
                $txt_timecreate = $_POST["txt_timecreate"];
                $txt_timeupdate = $_POST["txt_timeupdate"];
                $cmb_user = $_POST["cmb_user"];
                
                $order = new OrderModel($txt_number, $cmb_status,$txt_timecreate,$txt_timeupdate,$cmb_user,0);

                $this->insert($order);
                header("Location: ../controller/OrderController.php");
                break;
           
              case 'edit':
            
                  $id = $_GET["id"];
                   $product = new ProductModel("", "","","","",$id);
                   $data =  $this->get($product);
                   $this->view("suaSanpham",$data);
             
              break;
            case 'delete':
                $id = $_GET["id"];
                $product = new ProductModel("", "","","","",$id);
                $data = $this->delete($product);
                $this->Page();
                break;
            case 'order_edit':
                $txt_name = $_POST["txt_name"];
                $cmb_img = $_POST["cmb_img"];
                $txt_price = $_POST["txt_price"];
                $txt_number = $_POST["txt_number"];
                $cmb_category = $_POST["cmb_category"];
                $product = new ProductModel ($txt_name, $cmb_img,$txt_price,$txt_number,$cmb_category,0);
 
                $this->update($product);
                header("Location: ../controller/ProductController.php");
                break;
            default :
             $this->Page();
                break;
        }
    }

    

    public function insert($order) {
        $order->insert();
        header("Location: ../view/adminDonhang.php");
    }

 
     public function get($order) {
        return $order->get();
    }

    public function update($order) {
        $order->update();
        header("Location: ../view/adminDonhang.php");
    }

    public function getAll($order) {
        return $order->getAll();
    }

    public function delete($order) {
        $order->delete();
    }
    public  function Page(){
        $product = new OrderModel("", "","","","",0);
        $data["orders"] = $this->getAll($order);
        $data["title"] = "Danh sách đơn hàng";
        return $this->view('adminDonhang',$data);
    }
}

$order_action = "";
if (count($_POST) > 0) {
    $order_action = $_POST["order_action"];
}else if(count($_GET)>0){
    $order_action = $_GET["action"];
    
}
    
    
$proContr = new OrderController($order_action);
?>
