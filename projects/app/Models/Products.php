<?php

class Products
{
    public $id; //int
    public $type; //char
    public $product; //varchar
    public $description; //text
    public $price; //decimal
    public $discount; //decimal
    public $shipping; //decimal
    public $image; //varchar
    public $date; //date

    function constructObject($data){
        $this->id = $data[0];
        $this->type = $data[1];
        $this->product = $data[2];
        $this->description = $data[3];
        $this->price = $data[4];
        $this->discount = $data[5];
        $this->shipping = $data[6];
        $this->image = $data[7];
        $this->date = $data[8];

    }

    function construct($id, $type, $product, $description, $price, $discount, $shipping, $image, $date){
        $this->id = $id;
        $this->type = $type;
        $this->product = $product;
        $this->description = $description;
        $this->price = $price;
        $this->discount = $discount;
        $this->shipping = $shipping;
        $this->image = $image;
        $this->date = $date;

    }

    function createProduct($product){

        $SQL = new ConnectionSQL();
        $ok = $SQL ->InsertProducts($product);
        if($ok){
            $this->printProducts($product);
        }
    }

    function getProduct(){
        $product= new Products();
        $product->id = $this->id;
        $product->type = $this->type;
        $product->product = $this->product;
        $product->description = $this->description;
        $product->price = $this->price;
        $product->discount = $this->discount;
        $product->shipping = $this->shipping;
        $product->image = $this->image;
        $product->date = $this->date;
        $this->printProducts($product);
        return $product;
    }

    function searchProduct($product){
        $SQL = new ConnectionSQL();
        $data = $SQL ->searchProducts($product);
        $this->printProducts($data);


    }
    function printProducts($product){
        $str = "----- Product ----- <br>";
        $str .= "ID = $product->id <br>";
        $str .= "Type = $product->type <br>";
        $str .= "Product = $product->product <br>";
        $str .= "Description = $product->description <br>";
        $str .= "Price = $product->price <br>";
        $str .= "Discount = $product->discount <br>";
        $str .= "Shipping = $product->shipping <br>";
        $str .= "Image = <img width='50' src='images/Productos/$product->image'> <br>";
        $str .= "Created = $product->date <br>";

        echo $str;
    }

}