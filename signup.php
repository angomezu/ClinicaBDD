<?php
  include_once 'header.php';
?>

<section class="signup-form">
    <h2>Registro</h2>
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="name" placeholder="Nombre Completo">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="uid" placeholder="Usuario">
      <input type="password" name="pwd" placeholder="Contraseña">
      <input type="password" name="pwdrepeat" placeholder="Confirmar Contraseña">
      <button type="submit" name="submit">Registrarse</button> 
    </form>
    <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Por favor llenar todos los campos.</p>";
    }
    else if ($_GET["error"] == "invaliduid") {
      echo "<p>Por favor escoja un usuario valido.</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
      echo "<p>Correo invalido.</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
      echo "<p>¡OOPS! Algo ha salido mal, por favor intentelo de nuevo.</p>";
    }
    else if ($_GET["error"] == "usernametaken") {
      echo "<p>Usuario ya existe.</p>";
    }
    else if ($_GET["error"] == "none") {
      echo "<p>¡Ha iniciado sesión exitosamente!</p>";
    }
  }
?>
</section>


<?php
  include_once 'footer.php';
?>