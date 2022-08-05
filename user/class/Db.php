<?php
    class Db{
        private static $conn;
        function __construct()
        {
            self::$conn= new PDO("mysql:host=localhost;dbname=quanao","root","");
            self::$conn->query("set names utf8");
        }
        public function selectQuery($query, $dk=[]){
            $stm= self::$conn->prepare($query);
            $stm->execute($dk);
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }
        public function insertQuery($query, $dk=[]){
            $stm= self::$conn->prepare($query);
            $stm->execute($dk);
            //1
            return $stm->rowCount();
        }
    }
?>