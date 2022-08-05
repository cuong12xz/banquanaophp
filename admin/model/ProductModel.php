<?php
include_once '../util/MySQLUtils.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductModel
 *
 * @author acer
 */
class ProductModel {
    //put your code here
    private $id;
    private $name;
    private $image;
    private $price;
    private $number;
    private $category;
   

    
        public function __construct( $uname, $uimage, $uprice, $unumber,$ucategory,$uid) {
        $this->id = $uid;
        $this->name = $uname;
        $this->image = $uimage;
        $this->price = $uprice;
        $this->number = $unumber;
         $this->category = $ucategory;
       
    }
        function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getImage() {
        return $this->image;
    }

    function getPrice() {
        return $this->price;
    }

    function getNumber() {
        return $this->number;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setNumber($number) {
        $this->number = $number;
    }
     function getCategory() {
        return $this->category;
    }

    function setCategory($category) {
        $this->category = $category;
    }
     public function insert() {
        $myDB = new MySQLUtils();
            $query = "INSERT INTO product (name, image, price, number,category) VALUES (:name, :image, :price, :number,:category)";
        $param = array(":name" => $this->getName(), ":image" => $this->getImage(), ":price" => $this->getPrice(), ":number" => $this->getNumber(),":category" => $this->getCategory());
        $myDB->insertData($query, $param);
        $myDB->disconnect();
    }
    
    public function update() {
        $myDB = new MySQLUtils();
        $query = "UPDATE product set name=:name, image=:image, price=:price, number=:number,category=:category where name=:name";
        $param = array(":name" => $this->getName(), ":image" => $this->getImage(), ":price" => $this->getPrice(), ":number" => $this->getNumber(),":category" => $this->getCategory());
        $myDB->updateData($query, $param);
        $myDB->disconnect();
    }


       public function get() {
        $myDB = new MySQLUtils();

        $query = "SELECT id,name,image,price,number,category FROM product where id=:id";
        $param = array(":id" => $this->getId());
        $user = $myDB->getData($query, $param);
        $myDB->disconnect();
        return $user[0];
    }

    public function getAll() {
        $myDB = new MySQLUtils();

        $query = "SELECT id,name,image,price,number,category FROM product";

        $data = $myDB->getAllData($query);
        $myDB->disconnect();
        return $data;
    }


    public function delete() {
        $myDB = new MySQLUtils();
        $query = "DELETE from product  where id=:id";
        $param = array(":id" => $this->getId());
        $myDB->deleteData($query, $param);
        $myDB->disconnect();
    }
}
