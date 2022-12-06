<?php

    $user = $_POST;

        $objUser = new Users();
        $user->$objUser->constructObject($user);
        $SQL = new ConnectionSQL();
        $data = $SQL ->LoginUsers($user);
        $this->printUsers($data);

?>