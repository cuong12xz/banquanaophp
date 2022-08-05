<?php

include_once './BaseController.php';
include_once '../util/DataValidation.php';
include_once '../model/CategoryProductModel.php';

class CategoryProductController extends BaseController {

    public function __construct($cate_action) {
        switch ($cate_action) {
            case 'cate_create':
                $txt_name = $_POST["txt_name"];
                $txt_origin = $_POST["txt_origin"];
                
                $cate = new CategoryProductModel ($txt_name, $txt_origin,0);
 
                $this->insert($cate);
                header("Location: ../controller/CategoryProductController.php");
                break;
           
              case 'edit':
            
                  $id = $_GET["id"];
                   $cate = new CategoryProductModel("", "",$id);
                   $data =  $this->get($cate);
                   $this->view("suaDanhmuc",$data);
             
              break;
            case 'delete':
                $id = $_GET["id"];
                $cate = new CategoryProductModel("", "", $id);
                $data = $this->delete($cate);
                $this->Page();
                break;
            case 'cate_edit':
                $txt_name = $_POST["txt_name"];
                $txt_origin = $_POST["txt_origin"];
               
                $cate = new CategoryProductModel ($txt_name, $txt_origin,0); 
                $this->update($cate);
                header("Location: ../controller/CategoryProductController.php");
                break;
            default :
             $this->Page();
                break;
        }
    }

    

    public function insert($cate) {
        $cate->insert();
        header("Location: ../view/adminDanhmuc.php");
    }


     public function get($cate) {
        return $cate->get();
    }

    public function update($cate) {
        $cate->update();
        header("Location: ../view/adminDanhmuc.php");
    }

    public function getAll($cate) {
        return $cate->getAll();
    }

    public function delete($cate) {
        $cate->delete();
    }
    public  function Page(){
        $cate = new CategoryProductModel("", "",0);
        $data["cates"] = $this->getAll($cate);
        $data["title"] = "Danh sách danh mục";
        return $this->view('adminDanhmuc',$data);
    }
}

$cate_action = "";
if (count($_POST) > 0) {
    $cate_action = $_POST["cate_action"];
}else if(count($_GET)>0){
    $cate_action = $_GET["action"];
    
}
    
$cateContr = new CategoryProductController($cate_action);

?>
