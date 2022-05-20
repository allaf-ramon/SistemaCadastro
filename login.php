<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
      
      html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
  
  </style>

</head>

<body class="text-center">
    
<main class="form-signin w-100 m-auto">
  
<form method="POST" action="user.login.php">
    <h1 class="h3 mb-3 fw-normal">Acesso Restrito</h1>
    <p class="text-danger"><?= isset($_SESSION['error']) ? $_SESSION['error'] : '' ?></p>
    <?php unset($_SESSION['error']); ?>

    <div class="form-floating">
      <input type="email" class="form-control" id="idEmail" name="inputEmail" placeholder="Informe seu Email">
      <label for="idEmail">Endereço de Email</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" id="idSenha" name="inputSenha" placeholder="Informe sua Senha">
      <label for="idSenha">Senha</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    
  </form>
  
    <p class="mt-2">- OU -</p>
    <a href="recuperar-senha" class="w-100 btn btn-sm btn-outline-danger">Esqueci minha senha</a>
      
    <div class="container mt-5">
      <div class="text-center">Desenvolvido por <strong>Allaf Ramon</strong></div>
        </div>

</main>


  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>