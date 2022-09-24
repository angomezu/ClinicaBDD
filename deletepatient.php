<?php
if ( isset($_GET["id"]) ) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "clinicaBDD2022$";
    $database = "clinicaBDD";

    // Conexión Base de Datos
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM pacientes WHERE id=$id";
    $connection->query($sql);
}

header("location: admin.php");
exit;