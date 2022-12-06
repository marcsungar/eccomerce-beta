<?php

    $user = $_POST;

        $objUser = new Users();
        $user->$objUser->constructObject($user);
        $SQL = new ConnectionSQL();
        $ok = $SQL ->InsertUsers($user);
        if($ok){
            echo "User Created";
            $this->printUsers($user);
        }

?>