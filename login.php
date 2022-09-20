<?php
  include_once 'header.php';
?>

<section class="signup-form">
    <h2>Iniciar Sesión</h2>
    <form action="includes/login.inc.php" method = "post">
      <input type="text" name="uid" placeholder="Usuario/Email">
      <input type="password" name="pwd" placeholder="Contraseña">
      <button type="submit" name="submit">Iniciar Sesión</button> 
    </form>
    <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Por favor llenar todos los campos.</p>";
    }
    else if ($_GET["error"] == "wronglogin") {
      echo "<p>Usuario o Contreña Incorrectos.</p>";
    }   
  }
?>
</section>

<?php
  include_once 'footer.php';
?>