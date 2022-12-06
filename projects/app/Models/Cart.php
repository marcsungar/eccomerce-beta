<?php

class Cart
{

    public $idProduct; //int
    public $idUser; //int
    public $product; //varchar
    public $price; //decimal
    public $discount; //decimal
    public $shipping; //decimal
    public $state; //char
    public $quantity; //int
    public $date; //timestamp

    function constructObject($data){
        $this->idProduct = $data[0];
        $this->idUser = $data[1];
        $this->product = $data[2];
        $this->price = $data[3];
        $this->discount = $data[4];
        $this->shipping = $data[5];
        $this->state = $data[6];
        $this->quantity = $data[7];
        $this->date = $data[8];

    }

    function construct($idProduct, $idUser, $product, $price, $discount, $shipping, $state, $quantity, $date){
        $this->idProduct = $idProduct;
        $this->idUser = $idUser;
        $this->product = $product;
        $this->price = $price;
        $this->discount = $discount;
        $this->shipping = $shipping;
        $this->state = $state;
        $this->quantity = $quantity;
        $this->date = $date;

    }

    function createCart($cart){

        $SQL = new ConnectionSQL();
        $ok = $SQL ->InsertCart($cart);
        if($ok){
            $this->printCarts($cart);
        }
    }

    function getCart(){
        $cart= new Cart();
        $cart->idProduct = $this->idProduct;
        $cart->idUser = $this->idUser;
        $cart->product = $this->product;
        $cart->price = $this->price;
        $cart->discount = $this->discount;
        $cart->shipping = $this->shipping;
        $cart->state = $this->state;
        $cart->quantity = $this->quantity;
        $cart->date = $this->date;
        $this->printCarts($cart);
        return $cart;
    }

    function searchCart($cart){
        $SQL = new ConnectionSQL();
        $data = $SQL ->searchCarts($cart);
        $this->printCarts($data);


    }
    function printCarts($cart){
        $str = "----- Cart ----- <br>";
        $str .= "Product ID = $cart->idProduct <br>";
        $str .= "User ID = $cart->idUser <br>";
        $str .= "Product = $cart->product <br>";
        $str .= "Price = $cart->price <br>";
        $str .= "Discount = $cart->discount <br>";
        $str .= "Shipping = $cart->shipping <br>";
        $str .= "State = $cart->state <br>";
        $str .= "Quantity = $cart->quantity <br>";
        $str .= "Created = $cart->date <br>";

        echo $str;
    }

}