<?php
require_once('config/config.php');

$title = "Lista de Estudantes";
include_once('header.php'); 
?>

<div class="text-center" style="color: #FEC92E"><h1>Lista de Estudantes</h1></div>

<div class="container mt-3">

<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Perfil</th>
      <th scope="col">CPF</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Nivel de Escolaridade</th>
      <th scope="col">Curso</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach (unserialize($_SESSION['estudantes']) as $index => $estudante): ?>
    <tr>
      <td><a href="load.php/load-estudante/<?= $estudante->getId() ?>"><i style='color: black;' class="bi bi-person-fill"></i></a></td>
      <td><?= $estudante->getCpf() ?></td>
      <td><?= $estudante->getNome() ?></td>
      <td><?= $estudante->getEmail() ?></td>
      <td><?= $estudante->getTelefone() ?></td>
      <td><?= $estudante->getDataNascimento() ?></td>
      <td><?= $estudante->getNivelEscolaridade() ?></td>
      <td><?= $estudante->getCurso() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

</div>

<?php
include_once('footer.php')
?>