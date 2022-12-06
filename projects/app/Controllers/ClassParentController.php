<?php

class ClassParentController
{
    function construct(){
        echo "Entrastte a ClassParentController <br>";
    }

    public function model($model){
        require_once ("../Models/".$model.".php");
        return $model;
    }

    public function page($page){
        if(file_exists("../Views/".$page.".php")){
            require_once ("../Views/".$page.".php");
        }else{
            die("That page not exist: " . $page);
        }
    }
}