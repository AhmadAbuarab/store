<?php

class Base {

    public function model($model) {
        require_once '../app/model/' . $model . '.php';

        return new $model();
    }

    public function view($view, $data = array()) {

        if(file_exists('../app/view/' . $view . '.php')) {
            require_once '../app/view/' . $view . '.php';
        } else {
            die('view is not exist');
        }
    }
}