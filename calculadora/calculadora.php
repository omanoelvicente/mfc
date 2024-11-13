<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Calculadora</title>
</head>
<body>
    <?php
	if(isset($_POST['btn-submit'])) {
	$numberOne = $_POST['numberOne'];
    $numberTwo = $_POST['numberTwo'];
    $operation = $_POST['calculator'];

    showMessages($numberOne, $numberTwo, $operation);

}

function calculate($numberOne, $numberTwo, $operation) {
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

function fieldsValidation($numberOne, $numberTwo) {
    if(empty($numberOne) || empty($numberTwo)) {
        echo '<h3>' . "Preencha todos os campos corretamente" . '</h3>';
        return false;
    } else {
        return true;
    }
}

function showMessages($numberOne, $numberTwo, $operation){
    if (fieldsValidation($numberOne, $numberTwo)) {
        echo '<h3>' . $numberOne . ' ' . $operation . ' ' . $numberTwo . ' = ' . calculate($numberOne, $numberTwo, $operation) . '</h3>';

    } 

}

?> 

<div class="container-fluid">
    <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
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
    </form>
</div>
</body>
</html> 