<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author acer
 */
class MySQLUtils {
    private $servername;
    private $username;
    private $password;
    private $myDB;
    private static $conn;

    public function __construct() {
        
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->myDB = "ltweb";
        if(self::$conn==null){
           
           $this->connectDB();
        }else{
          
            return self::$conn;
        }
    }
     public function __destruct() {
         $this->servername = "";
        $this->username = "";
        $this->password = "";
        $this->myDB = "";
        self::$conn=null;
     }

     private function connectDB() {
     
        try {
            
            self::$conn = new PDO("mysql:host=$this->servername;dbname=$this->myDB", $this->username, $this->password);
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return  self::$conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function disconnect(){

        self::$conn=null;
    }
     public function insertData($sql, $param = array()) {
        $stmt = self::$conn->prepare($sql);
        $stmt->execute($param);
    }
     public function getAllData($sql) {
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getData($sql, $param = array()) {
        $stmt = self::$conn->prepare($sql);
        $stmt->execute($param);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteData($sql, $param = array()) {
        $stmt = self::$conn->prepare($sql);
        $stmt->execute($param);
        return $stmt->rowCount();
    }
    public function updateData($sql, $param = array()) {
        $stmt = self::$conn->prepare($sql);
        $stmt->execute($param);
        return $stmt->rowCount();
    }

}
    

