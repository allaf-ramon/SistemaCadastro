<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body>

<div class="container-fluid">
  <div class="row">

    <div class="col-auto me-auto">
        <a href="home" style='color:black; text-decoration: none;' class="bi bi-arrow-left-square"> Início</a>
        </div>
        
    <div class="col-auto">
            <a href='load.php/load-usuario/<?= $_SESSION['usuario_details'] ?>' style='color:black; text-decoration: none;' class="bi bi-person"> Meu Perfil</a>
        </div>

    <div class="col-auto">
        <a href="logout" style='color:red; text-decoration: none;' class="bi bi-door-open"> Sair</a>
        </div>


    </div>
</div>