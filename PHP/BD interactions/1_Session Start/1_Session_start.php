
<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 d-flex justify-content-center">
      <div class="card p-4 shadow-sm" style="max-width: 350px; width: 100%;">
        <h2 class="text-center">Sign in</h2>
        <form class="mt-3" action="1_Session_start.php" method="POST">
          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Insira seu e-mail">
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Usuario</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Insira seu usuario">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Insira sua senha">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="rememberPassword" id="rememberPassword">
            <label class="form-check-label" for="rememberPassword">Lembrar senha?</label>
          </div>
          <div class="d-flex justify-content-between mb-3">
            <a href="#" class="text-decoration-none">Esqueceu sua senha?</a>
          </div>
          <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
        <div class="text-center mt-3">
          <p>Não tem uma conta?<a href="#" class="text-decoration-none"> Sign up.</a></p>
        </div>
      </div>
    </div>

  <?php
    
    $email = isset($_POST['email']) ? $_POST['email'] : exit();
    $usuario = isset($_POST['username']) ? $_POST['username'] : exit();
    $senha = isset($_POST['password']) ? $_POST['password'] : exit();

    if (empty($email)) {
    echo "O e-mail é obrigatorio. <br>";
    }

    if (empty($usuario)) {
    echo "O nome de usuario é obrigatorio. <br>";
    }

    if (empty($senha)) {
    echo "A senha é obrigatoria. <br>";
    }

    if ($email == "afdb@yahoo.com" && $senha == "#101abc" && $usuario == "foxx") {
      $_SESSION['email'] = $email;
      $_SESSION['username'] = $usuario;
      header('Location: 1.1_Session_start-mainPage.php');
      ?>

      <div class="container">
        <div class="row">
          <div class="col-6 d-flex jusitify-content-center">
            <div class="alert alert-success" role="alert">
            Login efetuado.
            </div>
          </div>
        </div>
      </div>
      
<?php
    }
    else {
      ?>

      <div class="container">
        <div class="row">
          <div class="col-6 d-fle justify-content-center">
            <div class="alert alert-danger" role="alert">
        Senha, Email, ou Nome de usuarios incorretos.
            </div>
          </div>
        </div>
      </div>

      <?php
    }
    
  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
