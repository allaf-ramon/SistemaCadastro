<?php
require_once('config/config.php');
$estudante = unserialize($_SESSION['estudante']);
$title = "Perfil do estudante";
include_once('header.php');
?>
    
<div class='container'>
    
    <div class="text-center" style="color: #FEC92E"><h1>Perfil do Estudante</h1></div>

    
    <!-- Form -->
    <form id="formCadastro" name="formCadastro" method="POST" action="student.update" enctype="multipart/form-data" class="row g-3 mb-4">
        
        
        <?php if($estudante->getImagemCaminho() != ''): ?>
        <div class="text-center">
            <img id='outputImagem' src="<?=$estudante->getImagemCaminho()?>" width="300px" class="rounded" alt="Foto-do-estudante">
                </div>
        <div class="text-center">
            <input type="file" class="btn-check" id="idImagem" name='inputImagem' onchange="previewImagem(event)" accept=".png, .jpg, .jpeg">
            <label class="btn btn-outline-warning" style="color: black;" for="idImagem" >Alterar Imagem</label>
                </div>
        <?php else: ?>
            <div class="text-center">
            <img id='outputImagem' src='./resources/avatar-none.png' class="img img-responsive" width="300" alt="Estudante-sem-foto"> 
            </div>
            <div class="text-center">
            <input type="file" class="btn-check" id="idImagem" name='inputImagem' onchange="previewImagem(event)" accept=".png, .jpg, .jpeg">
            <label class="btn btn-outline-warning" style="color: black;" for="idImagem" >Adicionar Imagem</label>
                </div>
        <?php endif; ?>

    <div class="col-12">
        <label style="color: #fec92e" for="idCpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="idCpf" name="inputCpf" value="<?= $estudante->getCpf() ?>" readonly>
            </div>
      
    <div class="col-12">
        <label style="color: #fec92e" for="idNome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="idNome" name="inputNome" value="<?= $estudante->getNome() ?>" readonly>
            </div>

    <div class="col-md-6">
          <label style="color: #fec92e" for="idEmail" class="form-label">E-mail</label>
          <input type="text" class="form-control" id="idEmail" name="inputEmail" value="<?= $estudante->getEmail() ?>" readonly>
            </div>
    
    <div class="col-md-6">      
          <label style="color: #fec92e" for="idTelefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="idTelefone" name="inputTelefone" value="<?= $estudante->getTelefone() ?>" readonly>
            </div>

    <div class="col-12">
        <label style="color: #fec92e" for="idEndereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="idEndereco" name="inputEndereco" value="<?= $estudante->getEndereco() ?>" readonly>
            </div>
      
    <div class="col-md-6">
        <label style="color: #fec92e" for="idBairro" class="form-label">Bairro</label>
        <input type="text" class="form-control" id="idBairro" name="inputBairro" value="<?= $estudante->getBairro() ?>" readonly>
            </div>

    <div class="col-md-6">
          <label style="color: #fec92e" for="idDataNascimento" class="form-label">Data de Nascimento</label>
          <input type="text" class="form-control" id="idDataNascimento" name="inputDataNascimento" value="<?= $estudante->getDataNascimento() ?>" readonly>
            </div>

    <div class="col-md-6">
        <label style="color: #fec92e" for="idNivelEscolaridade" class="form-label">Nivel de Escolaridade</label>
        <input type="text" class="form-control" id="idNivelEscolaridade" name="inputNivelEscolaridade" value="<?= $estudante->getNivelEscolaridade() ?>" readonly>
            </div>

    <div class="col-md-6"> 
        <label style="color: #fec92e" for="idInstituicao" class="form-label">Estuda em outra instituição atualmente</label>
        <input type="text" class="form-control" id="idInstituicao" name="inputInstituicao" value="<?= $estudante->getInstituicao() ?>" readonly>
            </div>

    <div class="col-md-6">
        <label style="color: #fec92e" for="idInstituicaoAtual" class="form-label">Caso afirmativo, qual instituição?</label>
        <input type="text" class="form-control" id="idInstituicaoAtual" name="inputInstituicaoAtual" value="<?= $estudante->getInstituicaoAtual() ?>" readonly>
            </div>

    <div class="col-md-6">
        <label style="color: #fec92e" for="idCurso" class="form-label">Qual o Curso?</label>
        <input type="text" class="form-control" id="idCurso" name="inputCurso" value="<?= $estudante->getCurso() ?>" readonly>
            </div>

    <div class="col-12">
        <label style="color: #fec92e" for="idMotivoMatricula" class="form-label">Por qual motivo você escolheu se matricular em um curso do Senac RJ?</label>
        <textarea id="idMotivoMatricula" class="form-control" name="inputMotivoMatricula" readonly><?= $estudante->getMotivoMatricula() ?></textarea>
            </div>

    <div class="col-12">
        <label style="color: #fec92e" for="idMotivoCurso" class="form-label">O que te levou a escolher este curso?</label>
        <textarea id="idMotivoCurso" class="form-control" name="inputMotivoCurso" readonly><?= $estudante->getMotivoCurso() ?></textarea>
            </div>

    <div class="col-12">
        <label style="color: #fec92e" for="idExperienciaProfissional" class="form-label">Você tem experiência na área profissional do curso?</label>
        <textarea id="idExperienciaProfissional" class="form-control" name="inputExperienciaProfissional" readonly><?= $estudante->getExperienciaProfissional() ?></textarea>
            </div>

    <div class="col-12">
        <label style="color: #fec92e" for="idExpectativaCurso" class="form-label">Qual são suas expectativas após a conclusão do curso?</label>
        <textarea id="idExpectativaCurso" class="form-control" name="inputExpectativaCurso" readonly><?= $estudante->getExpectativaCurso() ?></textarea>
            </div>

    </form><!-- End Form -->

    <div class="col-12 text-center mb-3 mt-4">
            <button type="submit" class="btn btn-outline-success" form='formCadastro' style="color: black;">Salvar</button>
        </div>

</div>

<?php
    include_once('footer.php')
?>