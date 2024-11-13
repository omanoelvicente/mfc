<?php
if (isset($_POST['btn-submit'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];

    $res = validadarCampos($nome, $sobrenome, $idade);
}

function validadarCampos($nome, $sobrenome, $idade)
{
    if ($nome == '' || $sobrenome == '' || $idade == '') {
        return '<div class="alert alert-danger" role="alert">Preencha todos os campos</div>';
    } else {
        return '<div class="alert alert-success" role="alert">' . 'Nome: ' . $nome . '<br>'. 'Sobrenome: ' . $sobrenome. '<br>'. 'Idade: ' . $idade .  '</div>';
    }
}

?>



<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Form</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post">
                <div class="mb-3">
                    <div style="margin-top: 25px; ">
                        <?php echo $res ?>
                    </div>

                    <label for="userName-fluid" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="userName" aria-describedby="emailHelp" name="nome">
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="lastName" name="sobrenome">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Idade</label>
                    <input type="text" class="form-control" id="age" name="idade">
                </div>
                <button type="submit" class="btn btn-primary" name="btn-submit">Enviar</button>
        </div>
        </form>
    </div>
</body>
</html>