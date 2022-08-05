<?php

include_once '../util/MySQLUtils.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserModel
 *
 * @author acer
 */
class UserModel {

    private $username;
    private $userID;
    private $password;
    private $email;
    private $sex;
    private $prefer;
    private $role;
    private $avatar;

    public function __construct($uname, $upass, $uemail, $usex, $uprefer, $urole, $uavatar, $uID) {
        $this->username = $uname;
        $this->password = $upass;
        $this->email = $uemail;
        $this->sex = $usex;
        $this->prefer = $uprefer;
        $this->role = $urole;

        $this->avatar = $uavatar;
        $this->userID = $uID;
    }

    function getUsername() {
        return $this->username;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function getSex() {
        return $this->sex;
    }

    function getPrefer() {
        return $this->prefer;
    }

    function getRole() {
        return $this->role;
    }

    function getAvatar() {
        return $this->avatar;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSex($sex) {
        $this->sex = $sex;
    }

    function setPrefer($prefer) {
        $this->prefer = $prefer;
    }

    function setRole($role) {
        $this->role = $role;
    }

    function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    public function getUserID() {
        return $this->userID;
    }

    public function insertUser() {
        $myDB = new MySQLUtils();
        $query = "INSERT INTO user (username, password, email, sex,prefer,role) VALUES (:username, :password, :email, :sex,:prefer,:role)";
        $param = array(":username" => $this->getUsername(), ":email" => $this->getEmail(), ":password" => $this->getPassword(), ":sex" => $this->getSex(), ":prefer" => $this->getPrefer(), ":role" => $this->getRole());
        $myDB->insertData($query, $param);
        $myDB->disconnect();
    }
    
    public function updateUser() {
        $myDB = new MySQLUtils();
        $query = "UPDATE user set username=:username, password=:password, email=:email, sex=:sex, prefer=:prefer,role=:role where email=:email";
        $param = array(":username" => $this->getUsername(), ":email" => $this->getEmail(), ":password" => $this->getPassword(), ":sex" => $this->getSex(), ":prefer" => $this->getPrefer(), ":role" => $this->getRole());
        $myDB->updateData($query, $param);
        $myDB->disconnect();
    }

    public function getUser() {
        $myDB = new MySQLUtils();

        $query = "SELECT user_id,username,password,email,sex,prefer,role FROM user where email=:email";
        $param = array(":email" => $this->getEmail());
        $user = $myDB->getData($query, $param);
        $myDB->disconnect();
        return $user[0];
    }
       public function getUser1() {
        $myDB = new MySQLUtils();

        $query = "SELECT user_id,username,password,email,sex,prefer,role FROM user where user_id=:user_id";
        $param = array(":user_id" => $this->getUserID());
        $user = $myDB->getData($query, $param);
        $myDB->disconnect();
        return $user[0];
    }

    public function getAllUser() {
        $myDB = new MySQLUtils();

        $query = "SELECT user_id,username,password,email,sex,prefer,role FROM user";

        $data = $myDB->getAllData($query);
        $myDB->disconnect();
        return $data;
    }


    public function deleteUser() {
        $myDB = new MySQLUtils();
        $query = "DELETE from user  where user_id=:user_id";
        $param = array(":user_id" => $this->getUserID());
        $myDB->deleteData($query, $param);
        $myDB->disconnect();
    }

}
