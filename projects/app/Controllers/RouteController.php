<?php

class RouteController
{
    public $routes = array(
        "index" => array(
            "public"=> "http://www.myphpshop.com/",
            "php" => "/index.php",
            "js" => "js/index.js",
            "css" => "/css/index.css",
            "images" => "/images"
        ),
        "home" => array(
            "public"=> "?home",
            "php" => "/components/Home/home.php",
            "js" => "/components/Home/js/home.js",
            "css" => "/components/Home/css/home.css",
            "images" => "/components/Home/images"
        ),
        "navbar" => array(
            "php" => "/components/Navbar/navbar.php",
            "js" => "/components/Navbar/js/navbar.js",
            "css" => "/components/Navbar/css/navbar.css",
            "images" => "/components/Navbar/images"
        ),
        "login" => array(
            "public"=> "?login",
            "php" => "/components/Login/login.php",
            "js" => "/components/Login/js/login.js",
            "css" => "/components/Login/css/login.css",
            "images" => "/components/Login/images"
        ),
        "register" => array(
            "public"=> "?register",
            "php" => "/components/Register/register.php",
            "js" => "/components/Register/js/register.js",
            "css" => "/components/Register/css/register.css",
            "images" => "/components/Register/images"
        ),
        "forgotPwd" => array(
            "public"=> "?forgotPwd",
            "php" => "/components/ForgotPwd/forgotPwd.php",
            "js" => "/components/ForgotPwd/js/forgotPwd.js",
            "css" => "/components/ForgotPwd/css/forgotPwd.css",
            "images" => "/components/ForgotPwd/images"
        ),
        "changePwd" => array(
            "public"=> "?changePwd",
            "php" => "/components/ChangePwd/changePwd.php",
            "js" => "/components/ChangePwd/js/changePwd.js",
            "css" => "/components/ChangePwd/css/changePwd.css",
            "images" => "/components/ChangePwd/images"
        ),
    );

    public $backRoutes = array(
        "User" => array(
            "login"=> "/app/Views/Users/Login.php",
            "register" => "/app/Views/Users/Register.php",
            "forgotPwd" => "/app/Views/Users/ForgotPwd.php",
            "changePwd" => "/app/Views/Users/ChangePwd.php",
        ),
        "Cart" => array(
            "get"=> "/app/Views/Users/Get.php",
            "add" => "/app/Views/Users/Add.php",
            "modify" => "/app/Views/Users/Modify.php",
            "delete" => "/app/Views/Users/Delete.php",
        ),
        "Products" => array(
            "get"=> "/app/Views/Products/Get.php",
            "add" => "/app/Views/Products/Add.php",
            "modify" => "/app/Views/Products/Modify.php",
            "delete" => "/app/Views/Products/Delete.php",
        ),
    );
}