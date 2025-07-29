<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Usuario - Cadastro</title>
</head>
<body>

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-4">
            <form action="./user.php" method="post">
                <div class="mb-3">
                    <label class="form-label" for="uName">Digite seu nome:</label>
                    <input class="form-control" type="text" name="uName" id="uName" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary">Iniciar</button>
            </form>
        </div>
    </div>
</div>

<?php 

    if (isset($_POST['uName'])) {
        $_SESSION['infoUser'] = $_POST['uName'];
        header('Location: ./q1.php');
    }

    if(!empty($_POST['uName'])) {
        echo 'O nome é obrigatório';
    }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<script src="./main.js"></script>
</body>
</html>
