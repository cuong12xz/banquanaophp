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
class CategoryProductModel {

    private $catename;
    private $cateID;
    private $origin;
    

    
    public function __construct($ucatename, $uorigin,$ucateID) {
        $this->cateID = $ucateID;
        $this->catename = $ucatename;
        $this->origin = $uorigin;
        
    }
    function getCatename() {
        return $this->catename;
    }

    function getCateID() {
        return $this->cateID;
    }

    function getOrigin() {
        return $this->origin;
    }

    function setCatename($catename) {
        $this->catename = $catename;
    }

    function setCateID($cateID) {
        $this->cateID = $cateID;
    }

    function setOrigin($origin) {
        $this->origin = $origin;
    }

    public function insert() {
        $myDB = new MySQLUtils();
        $query = "INSERT INTO cate_product (catename, origin) VALUES (:catename, :origin)";
        $param = array(":catename" => $this->getCatename(), ":origin" => $this->getOrigin());
        $myDB->insertData($query, $param);
        $myDB->disconnect();
    }
    
    public function update() {
        $myDB = new MySQLUtils();
        $query = "UPDATE cate_product set  catename=:catename, origin=:origin where catename=:catename";
        $param = array(":catename" => $this->getCatename(), ":origin" => $this->getOrigin());
        $myDB->updateData($query, $param);
        $myDB->disconnect();
    }


       public function get() {
        $myDB = new MySQLUtils();

        $query = "SELECT cateID,catename,origin FROM cate_product where cateID=:cateID";
        $param = array(":cateID" => $this->getCateID());
        $user = $myDB->getData($query, $param);
        $myDB->disconnect();
        return $user[0];
    }

    public function getAll() {
        $myDB = new MySQLUtils();

        $query = "SELECT cateID,catename,origin FROM cate_product";

        $data = $myDB->getAllData($query);
        $myDB->disconnect();
        return $data;
    }


    public function delete() {
        $myDB = new MySQLUtils();
        $query = "DELETE from cate_product  where cateID=:cateID";
        $param = array(":cateID" => $this->getCateID());
        $myDB->deleteData($query, $param);
        $myDB->disconnect();
    }

}
