<?php
    if (isset($_POST['btn-submit'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $idade = $_POST['idade'];

        if ($nome == ''|| $sobrenome == '' || $idade == '') {
            echo "Preencha todos os campos";
        } else {
            echo  'Nome:' . ' ' . $nome . ' ' . 'Sobrebnome:' . ' ' . $sobrenome . PHP_EOL;
            echo 'Idade:' . $idade . ' ' . PHP_EOL;

        }

    }
    
?>



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="index.php" method="post"></form>
    <input type="text" name="nome">
    <label for="nome"> Nome</label>
    <input type="text" name="sobrenome">
    <label for="sobrenome">Sobrenome</label>
    <input type="number" name="idade">
    <label for="idade">Idade</label>
    <button type="submit" name="btn-submit"> Enviar</button>
</body>
</html>