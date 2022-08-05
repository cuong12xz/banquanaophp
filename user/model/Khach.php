<?php
    include "class/Db.php";
    function getAllKhach(){
        $obj= new Db();
        $query= "select * from Khach";
        return $obj->selectQuery($query);
    }
    function getKhachByUsername($username){
        $obj= new Db();
        $query="select * from khach where username=?";
        return $obj->selectQuery($query, [$username]);
    }
    function insertKhach($value){
        $obj= new Db();
        $query="insert into khach(username,email,password,address,phone) values(?,?,?,?,?)";
        //2
        return $obj->insertQuery($query, $value);
    }
?>