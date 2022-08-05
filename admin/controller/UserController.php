<?php

include_once './BaseController.php';
include_once '../util/DataValidation.php';
include_once '../model/UserModel.php';

class UserController extends BaseController {

    public function __construct($user_action) {
        switch ($user_action) {
            case 'user_create':
                $txt_username = $_POST["txt_username"];
                $txt_email = $_POST["txt_email"];
                $txt_password = md5($_POST["txt_password"]);

                $cmb_sex = $_POST["cmb_sex"];
                $rdg_role = $_POST["rdg_role"];
                $chk_walking = isset($_POST["chk_walking"]) ? $_POST["chk_walking"] : "";
                $chk_swimming = isset($_POST["chk_swimming"]) ? $_POST["chk_swimming"] : "";
                $chk_football = isset($_POST["chk_football"]) ? $_POST["chk_football"] : "";
                $file_avatar = $_FILES["file_avatar"]["name"];
                $strSoThich = $chk_walking . "," . $chk_swimming . "," . $chk_football;
                $user_02 = new UserModel($txt_username, $txt_password, $txt_email, $cmb_sex, $strSoThich, $rdg_role,$file_avatar,0);
 
                $this->insertUser($user_02);
                header("Location: ../controller/UserController.php");
                break;
            case 'user_login':

                $login_txt_email = $_POST["login_txt_email"];
                $login_txt_password = md5($_POST["login_txt_password"]);
                $usr = new UserModel("", $login_txt_password, $login_txt_email, "", "", "", "",0);
                $data=$this->getUser($usr);
                $user = new UserModel($data["username"],$data["password"],$data["email"],$data["sex"],"","","","");
       
                    if ($this->checkEmailValid($login_txt_email)&&$this->isUser($login_txt_email, $login_txt_password, $user)) {
                            session_start();
                        $_SESSION["email"] = $login_txt_email;
                  
   
                        header("Location: ../controller/UserController.php");
                  
                    }else{
                      header("Location: ../controller/UserController.php");
                           
                       
                    }
                   
        
                break;
              case 'edit':
            
                  $id = $_GET["id"];
                   $user = new UserModel("", "", "", "", "", "", "",$id);
                   $data =  $this->getUser1($user);
                   $this->view("suaUser",$data);
             
              break;
            case 'delete':
                $id = $_GET["id"];
                $user = new UserModel("", "", "", "", "", "", "", $id);
                $data = $this->deleteUser($user);
                $this->usersPage();
                break;
            case 'user_edit':
                $txt_username = $_POST["txt_username"];
                $txt_email = $_POST["txt_email"];
                $txt_password = md5($_POST["txt_password"]);

                $cmb_sex = $_POST["cmb_sex"];
                $rdg_role = $_POST["rdg_role"];
                $chk_walking = isset($_POST["chk_walking"]) ? $_POST["chk_walking"] : "";
                $chk_swimming = isset($_POST["chk_swimming"]) ? $_POST["chk_swimming"] : "";
                $chk_football = isset($_POST["chk_football"]) ? $_POST["chk_football"] : "";
                $file_avatar = $_FILES["file_avatar"]["name"];
                $strSoThich = $chk_walking . "," . $chk_swimming . "," . $chk_football;
                $user_02 = new UserModel($txt_username, $txt_password, $txt_email, $cmb_sex, $strSoThich, $rdg_role,$file_avatar,0);
 
                $this->updateUser($user_02);
                header("Location: ../controller/UserController.php");
                break;
            default :
             $this->usersPage();
                break;
        }
    }

    public function isUser($email,$pass,$user){
        $isUser = false;
        if($user->getEmail()==$email && $user->getPassword()==$pass){
            $isUser =true ;
        }
        return $isUser;
    }
     public function checkEmailValid($email){
         $validData = new DataValidation();
         return  $validData->checkEmailValid($email);
     }

    public function dataValid($email, $pass) {
        $validData = new DataValidation();
        return $validData->checkEmailValid($email);
    }

    public function insertUser($user) {
        $user->insertUser();
        header("Location: ../view/adminUser.php");
    }

    public function getUser($user) {
        return $user->getUser();
    }
     public function getUser1($user) {
        return $user->getUser1();
    }

    public function updateUser($user) {
        $user->updateUser();
        header("Location: ../view/adminUser.php");
    }

    public function getAllUser($user) {
        return $user->getAllUser();
    }

    public function deleteUser($user) {
        $user->deleteUser();
    }
    public  function usersPage(){
        $user = new UserModel("", "", "", "", "", "", "",0);
        $data["users"] = $this->getAllUser($user);
        $data["title"] = "Danh sách người dùng";
        return $this->view('adminUser',$data);
    }
}

$user_action = "";
if (count($_POST) > 0) {
    $user_action = $_POST["user_action"];
}else if(count($_GET)>0){
    $user_action = $_GET["action"];
    
}
    
$userContr = new UserController($user_action);

?>
