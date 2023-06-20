<?php include("../includes/header.php") ?>
<div class="container">
    <h3>¿Cual es tu fecha de nacimiento?</h3>
    <form action="calcular-nacimiento" method="POST">
        <input type="date" class="form-control mb-3" name="date" required autofocus max="<?php echo date('Y-m-d'); ?>" />
        <button type="submit" class="btn btn-success">Calcular </button>
    </form>

    <?php
    if (isset($_POST['date'])) {
        $date = $_POST['date'];
        $now = date("Y-m-d");
        $diff = date_diff(date_create($date), date_create($now));
        $age = $diff->format('%y');


        if ($age < 18) {
            echo "Su edad es:  " . $age . "</br> Por lo tanto es Menor de edad.";
        } else {
            echo "Su edad es: " . $age . "</br> Por lo tanto es Mayor de edad.";
        }
    }
    ?>
</div>
<?php include("../includes/footer.php") ?>