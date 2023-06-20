<?php include("../includes/header.php") ?>
<div class="container">
    <h3>Hola! Ingresa Tu Edad: </h3>
    <form method="POST" action="edad">
        <input type="number" class="form-control"  name="age" autofocus >
        <button type="submit" class="btn btn-success mt-5">¿Puedo entrar? </button>
    </form>
    <?php
    if (isset($_POST['age'])) {
        $age = $_POST['age'];

        if ($age >= 18) {
            echo "Si, Eres Mayor de Edad!!";
        } else {
            echo "No, Eres Menor de Edad...";
        }
    }
    ?>
</div>
<?php include("../includes/footer.php") ?>