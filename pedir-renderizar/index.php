<?php include("../includes/header.php") ?>
<div class="container">
    <h3>Ingrese sus datos:</h3>
    <form method="GET" action="pedir-renderizar/renderizar.php">
        <div class="mb-3">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" name="apellido" id="apellido" required>
        </div>
        <div class="mb-3">
            <label for="cedula">Cédula:</label>
            <input type="text" class="form-control" name="cedula" id="cedula" required>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
</div>
<?php include("../includes/footer.php") ?>
