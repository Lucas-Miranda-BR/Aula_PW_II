<?php
    include '../../config/connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        
        $idUser = isset($_GET['idUser']) ? $_GET['idUser'] : exit();
        $usernameUser = isset($_GET['usernameUser']) ? $_GET['usernameUser'] : exit();
        $passwordUser = isset($_GET['passwordUser']) ? $_GET['passwordUser'] : exit();
    
        if (empty($idUser)) {
            echo 'É necessário informar o idUser.';
            exit();
        }

        if (empty($usernameUser)) {
            echo 'É necessário informar o Nome.';
            exit();
        }

        if (empty($passwordUser)) {
            echo 'É necessário informar a Senha.';
            exit();
        }

        $stmt = $pdo -> prepare('SELECT * FROM infouser WHERE idUser=:idUser');
        $stmt -> bindParam(':idUser', $idUser);
        $stmt -> execute();
        $userInfoFetch = $stmt -> fetchAll();

        
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $idUser = isset($_POST['idUser']) ? $_POST['idUser'] : exit();
        $usernameUser = isset($_POST['usernameUser']) ? $_POST['usernameUser'] : exit();
        $passwordUser = isset($_POST['passwordUser']) ? $_POST['passwordUser'] : exit();
    
        if (empty($idUser)) {
            echo 'É necessário informar o ID.';
            exit();
        }

        if (empty($usernameUser)) {
            echo 'É necessário informar o Nome.';
            exit();
        }

        if (empty($passwordUser)) {
            echo 'É necessário informar a Senha.';
            exit();
        }

        $stmt = $pdo -> prepare('UPDATE infouser SET usernameUser=:usernameUser, passwordUser=:passwordUser WHERE idUser=:idUser');
        $stmt -> bindParam(':idUser', $idUser);
        $stmt -> bindParam(':usernameUser', $usernameUser);
        $stmt -> bindParam(':passwordUser', $passwordUser);
        $stmt -> execute();
        Header("Location: read.php");

    }

?>

<fieldset>
    <legend>Edit user info</legend>

    <form action="create.php" method="POST">
        <input type="hidden" name="idUser" value="<?php echo $userInfoFetch[0]["idUser"]; ?>">

        <label for="usernameUser">Username</label>
        <input type="text" name="usernameUser" id="usernameUser" value="<?php echo $userInfoFetch[0]["usernameUser"]; ?>" required autocomplete="off">

        <br><br>

        <label for="passwordUser">Password</label>
        <input type="password" name="passwordUser" id="passwordUser" required autocomplete="off">

        <br><br>

        <button type="submit">Edit</button>
    </form>
</fieldset>
