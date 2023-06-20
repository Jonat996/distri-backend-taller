<?php include("../includes/header.php") ?>
<div class="container">
    <h3>Datos ingresados:</h3>
    <?php
    if (isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['cedula'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cedula'];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellido: $apellido</p>";
        echo "<p>Cédula: $cedula</p>";
    } else {
        echo "<p>No se han recibido datos.</p>";
    }
    ?>
</div>
<?php include("../includes/footer.php") ?>
