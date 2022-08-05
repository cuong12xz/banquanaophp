<?php
include_once './BaseController.php';
include_once '../util/DataValidation.php';
include_once '../model/OrderrModel.php';
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
class OrderrController extends BaseController {

    public function __construct($order_action) {
        switch ($order_action) {
            case 'order_create':
                $txt_number = $_POST["txt_number"];
                $cmb_status = $_POST["cmb_status"];
                $txt_timecreate = $_POST["txt_timecreate"];
                $txt_timeupdate = $_POST["txt_timeupdate"];
                $cmb_user = $_POST["cmb_user"];
                
                $order = new OrderrModel($txt_number, $cmb_status,$txt_timecreate,$txt_timeupdate,$cmb_user,0);

                $this->insert($order);
                header("Location: ../controller/OrderrController.php");
                break;
           
              case 'edit':
            
                  $id = $_GET["id"];
                   $order = new OrderrModel("", "","","","",$id);
                   $data =  $this->get($order);
                   $this->view("suaDonhang",$data);
             
              break;
            case 'delete':
                $id = $_GET["id"];
                $order = new OrderrModel("", "","","","",$id);
                $data = $this->delete($order);
                $this->Page();
                break;
            case 'order_edit':
                 $txt_number = $_POST["txt_number"];
                $cmb_status = $_POST["cmb_status"];
                $txt_timecreate = $_POST["txt_timecreate"];
                $txt_timeupdate = $_POST["txt_timeupdate"];
                $cmb_user = $_POST["cmb_user"];
                
                $order = new OrderrModel($txt_number, $cmb_status,$txt_timecreate,$txt_timeupdate,$cmb_user,0);

                $this->update($order);
                header("Location: ../controller/OrderrController.php");
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
        header("Location: ../view/adminSanpham.php");
    }

    public function getAll($order) {
        return $order->getAll();
    }

    public function delete($order) {
        $order->delete();
    }
    public  function Page(){
        $order = new OrderrModel("", "","","","",0);
        $data["orders"] = $this->getAll($order);
        $data["title"] = "Danh sách sản phẩm";
        return $this->view('adminDonhang',$data);
    }
}

$order_action = "";
if (count($_POST) > 0) {
    $order_action = $_POST["order_action"];
}else if(count($_GET)>0){
    $order_action = $_GET["action"];
    
}
    
$proContr = new OrderrController($order_action);
?>
