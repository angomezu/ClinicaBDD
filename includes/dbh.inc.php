<?php

$serverName= "localhost";
$dBUsername= "root";
$dBPassword= "clinicaBDD2022$";
$dBName= "clinicaBDD";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

