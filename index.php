<?php
    include_once 'header.php';
?>

<section class="index-intro">
    <?php
        if (isset($_SESSION["useruid"])) {
            echo "<p>Bienvernido " . $_SESSION["useruid"] . "</p>";
            echo "<li><a href ='includes/logout.inc.php'>Cerrar Sesión</a></li>";
            }
    ?>
    <h1>Bienvenido a la página de Inicio de Sesión</h1>
    <p></p>
</section>

<?php
    include_once 'footer.php';
?>