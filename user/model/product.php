<?php
include "./class/Db.php";
class product{
	 function getAllProduct(){
		$productObj= new Db();
		$query= "select * from product";
		return $productObj->selectQuery($query);
	}
	function getProductById($id){
		$productObj= new Db();
		$query= "select * from product where id=?";
		return $productObj->selectQuery($query, [$id]);
	}
	function findProductByKeyword($keyword){
		$productObj= new Db();
		$query="select * from product where name like  ? or content like ?";
		return $productObj->selectQuery($query, ["%$keyword%", "%$keyword%"]);
	}
}
?>