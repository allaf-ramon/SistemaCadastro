<?php
require_once('config/config.php');
$title = "Página Inicial";
include_once('header.php');
?>

<div class="container">

    <div class="text-center" style="color: #FEC92E"><h1>Gerenciamento</h1></div>

    <div class="row mt-5">

    <div class="col-sm">
      <div class="text-center mt-3">
      <h3>Cadastro de Estudante</h3></div>
      <div class="text-center">
      <img src="" class="bi bi-clipboard2-check-fill" style="font-size: 150px" alt=""></div>
      <div class="text-center">
      <a href="cadastro-de-estudante" class="w-50 btn btn-primary mb-3">Acessar</a></div>
    </div>

    <div class="col-sm">
      <div class="text-center mt-3">
      <h3>Lista de Estudantes</h3></div>
      <div class="text-center">
      <img src="" class="bi bi-person-lines-fill" style="font-size: 150px" alt=""></div>
      <div class="text-center">
      <a href="load.php/load-estudantes" class="w-50 btn btn-primary mb-3">Acessar</a></div>
    </div>

    <div class="col-sm">
      <div class="text-center mt-3">
      <h3>Cadastro de Usuário</h3></div>
      <div class="text-center">
      <img src="" class="bi bi-person-plus-fill" style="font-size: 150px" alt=""></div>
      <div class="text-center">
      <a href="cadastro-de-usuario" class="w-50 btn btn-primary mb-3">Acessar</a></div>
    </div>
    
  </div>

</div>

<?php include_once('footer.php') ?>