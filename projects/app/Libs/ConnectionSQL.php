<?php
class ConnectionSQL
{
    private $server = "172.17.0.2";
    private $db_name = "eCommerce";
    private $username = "root";
    private $pwd = "root";
    private $connection;
    private $tables = array(
        "Login",
        "ProductsView",
        "Cart"
    );


    function connect(){

        $this->connectToServer();
        $this->createBD();

        for($i = 0; $i < count($this->tables); $i++){
            $tableName = $this->tables[$i];
             $tableCode = array(
                "CREATE TABLE IF NOT EXISTS  $this->db_name.$tableName(
                                                            id int (11) NOT NULL, 
                                                            name varchar (100) NOT NULL,
                                                            surnames varchar (200) NOT NULL,
                                                            email varchar (200) NOT NULL,
                                                            address varchar (150) NOT NULL,
                                                            city varchar (100) NOT NULL,
                                                            state varchar (50) NOT NULL,
                                                            postalCode varchar (10) NOT NULL,
                                                            country varchar (100) NOT NULL,
                                                            password varchar (200) NOT NULL
                                                        )",
                 "CREATE TABLE IF NOT EXISTS $this->db_name.$tableName (
                                                            id int (11) NOT NULL, 
                                                            type char (1) NOT NULL,
                                                            product varchar (200) NOT NULL,
                                                            description text NOT NULL,
                                                            price decimal (10,2) NOT NULL,
                                                            discount decimal (10,2) NOT NULL,
                                                            shipping decimal (10,2) NOT NULL,
                                                            image varchar (100) NOT NULL,
                                                            date date NOT NULL
                                                        )",
                 "CREATE TABLE IF NOT EXISTS $this->db_name.$tableName (
                                                            idProduct int (11) NOT NULL, 
                                                            idUser int (11) NOT NULL, 
                                                            product varchar (200) NOT NULL,
                                                            price decimal (10,2) NOT NULL,
                                                            discount decimal (10,2) NOT NULL,
                                                            shipping decimal (10,2) NOT NULL,
                                                            state char (1) NOT NULL,
                                                            quantity int (11) NOT NULL,
                                                            date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
                                                            )"
            );
            $this->createTable($tableName, $tableCode[$i]);
        }
    }

   function connectToServer(){
       $this->connection = new mysqli($this->server, $this->username, $this->pwd);
       if(mysqli_connect_errno()) die("Cannot connect to database " . mysqli_error());
       else echo "Connected successfully <br>";
   }

   function createBD(){
       $ok = $this->connection->query("CREATE DATABASE IF NOT EXISTS $this->db_name");
       if(!$ok) echo "Error to create Database " . mysqli_error() ." <br>";
       else echo "Created successfully <br>";
   }

   function createTable($tableName, $tableCode){
       $ok = $this->connection->query($tableCode);
       if(!$ok) echo "Error to create table $tableName " . mysqli_error() ." <br>";
       else echo "Table $tableName created successfully <br>";

   }

   //USERS //TODO

   function InsertUsers($user){
       $this->connectToServer();
       $tableName = $this->tables[0];
       $ok = $this->connection->query("INSERT INTO $this->db_name.$tableName VALUES ($user->id, '$user->name', '$user->surnames', '$user->email', '$user->address', '$user->city', '$user->state', '$user->postalCode', '$user->country', '$user->password')");
       if(!$ok) echo "Error to insert user " . mysqli_error() ." <br>";
       else echo "User created successfully <br>";
       return $ok;
   }

   function LoginUsers($user){

       $this->connectToServer();
       $tableName = $this->tables[0];
       $registro = $this->connection->query("SELECT * FROM $this->db_name.$tableName WHERE email = '$user->email' AND password = '$user->password'");
       $filas = $registro->num_rows;
       $convertToUser = new Users();
       if($filas > 0){
           $i = 0;
           while ($row = $registro -> fetch_row()) {
               $convertToUser->constructObject($row);
               $i++;
           }

       }else{
           die("User not found");
       }

       return $convertToUser;
   }

    function InsertProducts($product){
        $this->connectToServer();
        $tableName = $this->tables[1];
        $ok = $this->connection->query("INSERT INTO $this->db_name.$tableName VALUES ($product->id, '$product->type', '$product->product', '$product->description', '$product->price', '$product->discount', '$product->shipping', '$product->image', '$product->date')");
        if(!$ok) echo "Error to insert product " . mysqli_error() ." <br>";
        else echo "Product created successfully <br>";
        return $ok;
    }

    function searchProducts($product){

        $this->connectToServer();
        $tableName = $this->tables[1];
        $registro = $this->connection->query("SELECT * FROM $this->db_name.$tableName WHERE id = '$product->id'");
        $filas = $registro->num_rows;
        $convertToProduct = new Products();
        if($filas > 0){
            $i = 0;
            while ($row = $registro -> fetch_row()) {
                $convertToProduct->constructObject($row);
                $i++;
            }

        }else{
            die("Product not found");
        }

        return $convertToProduct;
    }

    function InsertCart($cart){
        $this->connectToServer();
        $tableName = $this->tables[2];
        echo "INSERT INTO $this->db_name.$tableName VALUES ($cart->idProduct, '$cart->idUser', '$cart->product', '$cart->price', '$cart->discount', '$cart->shipping', '$cart->state', '$cart->quantity', '$cart->date')";
        $ok = $this->connection->query("INSERT INTO $this->db_name.$tableName VALUES ($cart->idProduct, '$cart->idUser', '$cart->product', '$cart->price', '$cart->discount', '$cart->shipping', '$cart->state', '$cart->quantity', '$cart->date')");
        if(!$ok) echo "Error to insert cart " . mysqli_error() ." <br>";
        else echo "Cart created successfully <br>";
        return $ok;
    }

    function searchCarts($cart){

        $this->connectToServer();
        $tableName = $this->tables[2];
        $registro = $this->connection->query("SELECT * FROM $this->db_name.$tableName WHERE idProduct = '$cart->idProduct' AND idUser = '$cart->idUser'");
        $filas = $registro->num_rows;
        $convertToCart = new Cart();
        if($filas > 0){
            $i = 0;
            while ($row = $registro -> fetch_row()) {
                $convertToCart->constructObject($row);
                $i++;
            }

        }else{
            die("Cart not found");
        }

        return $convertToCart;
    }
}