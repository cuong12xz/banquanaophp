<?php
include_once './BaseController.php';
include_once '../util/DataValidation.php';
include_once '../model/ProductModel.php';
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
class ProductController extends BaseController {

    public function __construct($product_action) {
        switch ($product_action) {
            case 'product_create':
                $txt_name = $_POST["txt_name"];
                $cmb_img = $_POST["cmb_img"];
                $txt_price = $_POST["txt_price"];
                $txt_number = $_POST["txt_number"];
                $cmb_category = $_POST["cmb_category"];
                $product = new ProductModel ($txt_name, $cmb_img,$txt_price,$txt_number,$cmb_category,0);
                
                $this->insert($product);
                header("Location: ../controller/ProductController.php");
                break;
           
              case 'edit':
            
                  $id = $_GET["id"];
                   $product = new ProductModel("", "","","","",$id);
                   $data =  $this->get($product);
                   $this->view("suaSanpham",$data);
             
              break;
          case 'detail':
            
                  $id = $_GET["id"];
                   $product = new ProductModel("", "","","","",$id);
                   $data =  $this->get($product);
                   $this->view("chitietSanpham",$data);
             
              break;
            case 'delete':
                $id = $_GET["id"];
                $product = new ProductModel("", "","","","",$id);
                $data = $this->delete($product);
                $this->Page();
                break;
            case 'product_edit':
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

    

    public function insert($product) {
        $product->insert();
        header("Location: ../view/adminSanpham.php");
    }


     public function get($product) {
        return $product->get();
    }

    public function update($product) {
        $product->update();
        header("Location: ../view/adminSanpham.php");
    }

    public function getAll($product) {
        return $product->getAll();
    }

    public function delete($product) {
        $product->delete();
    }
    public  function Page(){
        $product = new ProductModel("", "","","","",0);
        $data["products"] = $this->getAll($product);
        $data["title"] = "Danh sách sản phẩm";
        return $this->view('adminSanpham',$data);
    }
}

$product_action = "";
if (count($_POST) > 0) {
    $product_action = $_POST["product_action"];
}else if(count($_GET)>0){
    $product_action = $_GET["action"];
    
}
    
$proContr = new ProductController($product_action);
?>
