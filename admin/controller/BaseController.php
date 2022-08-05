<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseController
 *
 * @author DELL
 */
class BaseController {

    public function model($model) {
        require_once "../model/" . $model . ".php";
        return new $model;
    }

    public function view($name, $data = []) {
        include_once  "../view/" . $name . ".php";
    }

}
