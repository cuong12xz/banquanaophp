<?php
include_once '../util/MySQLUtils.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrderModel
 *
 * @author acer
 */
class OrderrModel {
    //put your code here
    private $orderID;
    private $amount;
    private $status;
    private $createAt;
    private $updateAt;
    private $userID;

    
    
        public function __construct($uamount, $ustatus, $ucreate,$uupdate,$uuserID,$uID) {
       
        $this->amount = $uamount;
        $this->status = $ustatus;
        $this->createAt = $ucreate;
        $this->updateAt = $uupdate;
        $this->userID = $uuserID;
         $this->orderID = $uID;
        }
            function getOrderID() {
        return $this->orderID;
    }

    function getAmount() {
        return $this->amount;
    }

    function getStatus() {
        return $this->status;
    }

    function getCreateAt() {
        return $this->createAt;
    }

    function getUpdateAt() {
        return $this->updateAt;
    }

    function getUserID() {
        return $this->userID;
    }

    function setOrderID($orderID) {
        $this->orderID = $orderID;
    }

    function setAmount($amount) {
        $this->amount = $amount;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setCreateAt($createAt) {
        $this->createAt = $createAt;
    }

    function setUpdateAt($updateAt) {
        $this->updateAt = $updateAt;
    }

    function setUserID($userID) {
        $this->userID = $userID;
    }
     public function insert() {
        $myDB = new MySQLUtils();
        $query = "INSERT INTO orderr (amount, status, createAt,updateAt,userID) VALUES (:amount,:status,:createAt,:updateAt,:userID)";
        $param = array( ":amount" => $this->getAmount(), ":status" => $this->getStatus(), ":createAt" => $this->getCreateAt(),":updateAt" => $this->getUpdateAt(),":userID" => $this->getUserID());
        $myDB->insertData($query, $param);
        $myDB->disconnect();
    }

    
    public function update() {
        $myDB = new MySQLUtils();
        $query = "UPDATE orderr set amount=:amount, status=:status, createAt=:createAt,updateAt=:updateAt,userID=:userID where userID=:userID";
        $param = array(":amount" => $this->getAmount(), ":status" => $this->getStatus(), ":createAt" => $this->getCreateAt(),":updateAt" => $this->getUpdateAt(),":userID" => $this->getUserID());
        $myDB->updateData($query, $param);
        $myDB->disconnect();
    }


       public function get() {
        $myDB = new MySQLUtils();

        $query = "SELECT orderID, amount, status, createAt,updateAt,userID FROM orderr where orderID=:orderID";
        $param = array(":orderID"=> $this->getOrderID());
        $user = $myDB->getData($query, $param);
        $myDB->disconnect();
        return $user[0];
    }

    public function getAll() {
        $myDB = new MySQLUtils();

        $query = "SELECT orderID, amount, status, createAt,updateAt,userID FROM orderr";

        $data = $myDB->getAllData($query);
        $myDB->disconnect();
        return $data;
    }


    public function delete() {
        $myDB = new MySQLUtils();
        $query = "DELETE from orderr  where orderID=:orderID";
        $param = array(":orderID" => $this->getOrderID());
        $myDB->deleteData($query, $param);
        $myDB->disconnect();
    }

}
