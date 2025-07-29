<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Q1</title>
</head>
<body>

<form action="./q1.php" method="post">
    <div class="mb-3">
        <h1>Onde você não está?</h1>
    </div>

    <div class="mb-3">
        <input type="radio" name="q1" id="q1" value="o1">
        <label for="q1">Brasil.</label>
    </div>
    <div class="mb-3">
        <input type="radio" name="q1" id="q1" value="o2">
        <label for="q1">America do Sul.</label>
    </div>
    <div class="mb-3">
        <input type="radio" name="q1" id="q1" value="o3"> <!-- Certo !-->
        <label for="q1">Asia.</label>
    </div>

    <button type="submit" class="btn btn-primary">Próxima questão.</button>
</form>

<?php  
    if(isset($_POST['q1']) && !empty($_POST['q1'])){
        $_SESSION['q1'] = $_POST['q1'];
        header('Location: ./q2.php');
    }

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<script src="./main.js"></script>
</body>
</html>