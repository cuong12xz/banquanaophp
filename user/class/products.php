<?php
    class Products{
        private $id;
        private $name;
        private $image;
        private $price;
        private $number;
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getImage(){
            return $this->image;
        }

        public function setImage($image){
            $this->image = $image;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setPrice($price){
            $this->price = $price;
        }
        public function getNumber(){
            return $this->number;
        }

        public function setNumber($number){
            $this->number = $number;
        }


        public function __construct($id,$name,$image,$price,$number)
        {
            $this->id = $id;
            $this-> name= $name;
            $this->image = $image;
            $this->price = $price;
            $this->number = $number;
        }
    }
?>