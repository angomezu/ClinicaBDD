<?php

    $database= new mysqli("localhost","angomezu","clinicaBDD2022$","clinicaBDD");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>