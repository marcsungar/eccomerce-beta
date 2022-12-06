<?php

class LoginController extends ClassParentController
{
    private $model;

    function construct()
    {
        $this->model = $this->model($this->model);
    }
}