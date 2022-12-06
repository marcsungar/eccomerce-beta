<?php
    require_once ("Libs/Control.php");
    require_once("Libs/ConnectionSQL.php");
    require_once("Models/Users.php");
    require_once("Models/Products.php");
    require_once("Models/Cart.php");

    print ("<br> %%%START%%%</br>");
    $Obj = new Control();
    $Connection = new ConnectionSQL();
    $Connection ->connect();
    $timestamp = date('Y-m-d H:i:s');

    /*$user = new Users();
    $user ->construct(1,"Test","1","test@gmail.com","Test", "BCN","Test","08030","BCN","Test");
    $user ->createUser($user);
    $user ->getUser();
    $user ->login($user);
    echo $timestamp .'<br>';*/
    /*$product = new Products();
    $product ->construct(1,'1',"Tostadora","Tostadora negra",20.2, 0,0,"tostadora.jpg", $timestamp);
    $product ->createProduct($product);
    $product ->getProduct();
    $product ->searchProduct($product);*/
    $cart = new Cart();
    $cart ->construct(1,1,"Tostadora",20.2,0, 0,"1",1, $timestamp);
   // $cart ->createCart($cart);
   // $cart ->getCart();
    $cart ->searchCart($cart);
