<?php include("../includes/header.php") ?>
<div class="container">
    <div class="row">
        <?php
        if (isset($_POST['num-1']) && isset($_POST['num-2']) && isset($_POST['operation'])) {
            $num1 = $_POST['num-1'];
            $num2 = $_POST['num-2'];
            $operation = $_POST['operation'];


            if (isset($operation)) {

                switch ($operation) {
                    case '-':
                        $result = $num1 - $num2;
                        break;
                    case '+':
                        $result = $num1 + $num2;
                        break;
                    case '/':
                        $result = $num1 / $num2;
                        break;
                    case '*':
                        $result = $num1 * $num2;
                        break;
                    default:
                        # code...
                        break;
                }

                echo "Tu resultado es: " . $result;
            }
            ;
        }

        ?>
    </div>
    <form action="calculadora" method="POST">
        <div class="row">
            <div class="col"> <label for="num-1">Ingrese Número 1:</label>
                <input type="text" id="num-1" name="num-1" class="form-control">
                <label for="num-2">Ingrese Número 2:</label>
                <input type="text" id="num-2" name="num-2" class="form-control">
            </div>
            <div class="col">
                <label for="operation">Selecciona una Operación: </label>
                <select name="operation" id="operation" class="form-select mb-3">
                    <option value=""> selecciona</option>
                    <option value="-">-</option>
                    <option value="+">+</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <button type="submit" class="btn btn-success">
                    Calcular
                </button>
            </div>
        </div>
    </form>

</div>

<?php include("../includes/footer.php") ?>