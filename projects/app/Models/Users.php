<?php

class Users
{

    public $id; //int
    public $name; //varchar
    public $surnames; //varchar
    public $email; //varchar
    public $address; //varchar
    public $city; //varchar
    public $state; //varchar
    public $postalCode; //varchar
    public $country; //varchar
    public $password; //varchar

    function constructObject($data){
        $this->id = $data[0];
        $this->name = $data[1];
        $this->surnames = $data[2];
        $this->email = $data[3];
        $this->address = $data[4];
        $this->city = $data[5];
        $this->state = $data[6];
        $this->postalCode = $data[7];
        $this->country = $data[8];
        $this->password = $data[9];

    }

    function construct($id, $name, $surnames, $email, $address, $city, $state, $postalCode, $country, $password){
        $this->id = $id;
        $this->name = $name;
        $this->surnames = $surnames;
        $this->email = $email;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->postalCode = $postalCode;
        $this->country = $country;
        $this->password = $password;

    }

    function getUser(){
        $user= new User();
        $user->id = $this->id;
        $user->name = $this->name;
        $user->surnames = $this->surnames;
        $user->email = $this->email;
        $user->address = $this->address;
        $user->city = $this->city;
        $user->state = $this->state;
        $user->postalCode = $this->postalCode;
        $user->country = $this->country;
        $user->password = $this->password;
        $this->printUsers($user);
        return $user;
    }

    function printUsers($user){
        $str = "----- User ----- <br>";
        $str .= "ID = $user->id <br>";
        $str .= "Name = $user->name <br>";
        $str .= "Surname = $user->surnames <br>";
        $str .= "Email = $user->email <br>";
        $str .= "Address = $user->address <br>";
        $str .= "City = $user->city <br>";
        $str .= "State = $user->state <br>";
        $str .= "Postal Code = $user->postalCode <br>";
        $str .= "Country = $user->country <br>";
        $str .= "Password = $user->password <br>";

        echo $str;
    }

}