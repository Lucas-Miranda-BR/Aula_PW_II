<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    
<h1> O usuário <?php echo "<ins>" . $_SESSION['username'] . "</ins>"; ?> com o email de: <?php echo "<ins>" . $_SESSION['email'] . "</ins>"; ?> foi connectado.</h1>

</body>
</html>