<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio de Sesión</title>
    <link rel = "stylesheet" href="css/reset.css">
    <link rel = "stylesheet" href="css/style.css">
</head>
<body>

    <nav>
        <div class = "wrapper">
            <a href="index.php"></a>
            <ul>
                <li><a href = "index.php">Paginia Principal</a></li>
                <li><a href = "index.php">Sobre Nosotros</a></li>
                <li><a href = "index.php">Servicios</a></li>
                <?php
                  if (isset($_SESSION["useruid"])) {
                    echo "<li><a href ='profile.php'>Perfil</a></li>";
                    echo "<li><a href ='includes/logout.inc.php'>Cerrar Sesión</a></li>";
                  }
                  else {
                    echo "<li><a href ='signup.php'>Registrarse</a></li>";
                    echo "<li><a href ='login.php'>Iniciar Sesión</a></li>";
                  }
                ?>
            </ul>
        </div>
    </nav>
<div class="wrapper">
