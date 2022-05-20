<?php
require_once('config/config.php');
$usuario = unserialize($_SESSION['usuario']);
$title = "Meu Perfil";
include_once('header.php');
?>
    
    <div class="text-center" style="color: #FEC92E"><h1>Meu Perfil</h1></div>

<div class="container">

    <!-- Form -->
    <form id="formCadastro" name="formCadastro" action="#" method="post" class="row g-3">

            <div class="col-12">
                <label style="color: #fec92e"for="idMatricula" class="form-label">Matrícula</label>
                <input type="text" class="form-control" id="idMatricula" name="inputMatricula" value="<?= $usuario->getMatricula() ?>" readonly>
            </div>
              
            <div class="col-12">
                <label style="color: #fec92e"for="idNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="idNome" name="inputNome" value="<?= $usuario->getNome() ?>" readonly>
            </div>

            <div class="col-12">
                  <label style="color: #fec92e"for="idEmail" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="idEmail" name="inputEmail" value="<?= $usuario->getEmail() ?>" readonly>
                </div>

            <div class="col-12">
                <label style="color: #fec92e"for="idNivel" class="form-label">Nivel</label>
                <input type="text" id="idNivel" name="inputNivel" class="form-control" value="<?=$usuario->getNivel()?>" readonly>
                </div>

    </form><!-- End Form -->
</div>

<?php
include_once('footer.php')
?>