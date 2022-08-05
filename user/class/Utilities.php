<?php
    class Utilities{
        public static function get($value, $default=""){
            return isset($_GET[$value])?$_GET[$value]: $default;
        }
        public static function post($value, $default=""){
            return isset($_POST[$value])? $_POST[$value]:$default;
        }
    }
?>