<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/vendor/css/bootstrap.min.css">
    <script src="styles/vendor/js/bootstrap.min.js"></script>


    <title>Calculadora</title>
</head>

<body>
    <?php
    if (isset($_POST['btn-submit'])) {
        $numberOne = $_POST['numberOne'];
        $numberTwo = $_POST['numberTwo'];
        $operation = $_POST['calculator'];

        $res = showMessages($numberOne, $numberTwo, $operation);
    }

    function calculate($numberOne, $numberTwo, $operation)
    {
        switch ($operation) {
            case '+':
                return $numberOne + $numberTwo;
                break;
            case '-':
                return $numberOne - $numberTwo;
                break;
            case '*':
                return $numberOne * $numberTwo;
                break;
            case "/":
                return $numberOne / $numberTwo;
                break;
        }
    }

    function fieldsValidation($numberOne, $numberTwo)
    {
        if (empty($numberOne) || empty($numberTwo)) {
            //echo '<div class="alert alert-danger" role="alert">' . "Preencha todos os campos corretamente" . '</div>';
            return false;
        } else {
            return true;
        }
    }

    function showMessages($numberOne, $numberTwo, $operation)
    {
        if (fieldsValidation($numberOne, $numberTwo)) {
            return '<div class="alert alert-success" role="alert">' . $numberOne . ' ' . $operation . ' ' . $numberTwo . ' = ' . calculate($numberOne, $numberTwo, $operation) . '</div';
        } else {
            return '<div class="alert alert-danger" role="alert">' . "Preencha todos os campos corretamente" . '</div>';
        }
    }

    ?>


    <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
        <div class="container col-3  align-items-center">
            <div class="mb-3">
                <div style="margin-top: 25px; ">
                    <?php echo $res ?>
                </div>
                <label for="numberOne">Numero 1</label><br>
                <input type="text" id="numberOne" name="numberOne" value="" placeholder="0"><br>
                <label for="numberTwo">Numero 2</label><br>
                <input type="text" id="numberTwo" name="numberTwo" value="" placeholder="0" inputmode="floatval" pattern="[0-9]*[.,]?[0-9]*"><br><br>

                <input type="radio" name="calculator" id="adicao" value="+" checked>
                <label for="adicao">Adição</label><br>

                <input type="radio" name="calculator" id="subtracao" value="-">
                <label for="adicao">Subtração</label><br>

                <input type="radio" name="calculator" id="subtracao" value="*">
                <label for="adicao">Multiplicação</label><br>

                <input type="radio" name="calculator" id="subtracao" value="/">
                <label for="adicao">Divisão</label><br><br>

                <input class="btn btn-outline-dark" type="submit" value="Calcular" name="btn-submit">
            </div>
        </div>
    </form>

</body>

</html>