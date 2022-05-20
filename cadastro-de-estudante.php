<?php
include_once('config/config.php');
$title = "Cadastro de Estudante";
include_once('header.php');
?>

<div class='container'>
    
    
    <div class="text-center" style="color: #FEC92E"><h1>Cadastro de Estudante</h1></div>
    
    <!-- Form -->
    <form id="formCadastro" name="formCadastro" method="POST" action="student.register.php" enctype="multipart/form-data" class="row g-3">
    
    <div class="text-center">
        <img id="outputImagem" src='./resources/avatar-none.png' class="img img-responsive" width="300"> 
        </div>
    
    <div class="text-center">
        <input type="file" class="btn-check" id="idImagem" name='inputImagem' onchange="previewImagem(event)" accept=".png, .jpg, .jpeg">
        <label class="btn btn-outline-warning" style="color: black;" for="idImagem" >Adicionar Imagem</label>
            </div>

    <div class="col-12">
        <label style="color: #fec92e" for="idCpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="idCpf" name="inputCpf" onKeyDown="return onlyNum(event)" onkeypress="maskCpf(this)" maxlength="14" size="12" placeholder="CPF" required>
            </div>
      
    <div class="col-12">
        <label style="color: #fec92e" for="idNome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="idNome" name="inputNome" placeholder="Nome Completo" required>
            </div>

    <div class="col-md-6">
          <label style="color: #fec92e" for="idEmail" class="form-label">E-mail</label>
          <input type="text" class="form-control" id="idEmail" name="inputEmail" placeholder="E-mail" required>
            </div>
    
    <div class="col-md-6">      
          <label style="color: #fec92e" for="idTelefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="idTelefone" name="inputTelefone" onkeypress="maskTelefone(this)" 
				onKeyDown="return onlyNum(event)" size="9" maxlength="13" placeholder="Telefone" required>
            </div>

    <div class="col-12">
        <label style="color: #fec92e" for="idEndereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="idEndereco" name="inputEndereco" placeholder="Endereço" required>
            </div>
      
    <div class="col-md-6">
        <label style="color: #fec92e" for="idBairro" class="form-label">Bairro</label>
        <input type="text" class="form-control" id="idBairro" name="inputBairro" placeholder="Bairro" required>
            </div>

    <div class="col-md-6">
          <label style="color: #fec92e" for="idDataNascimento" class="form-label">Data de Nascimento</label>
          <input type="text" class="form-control" id="idDataNascimento" name="inputDataNascimento" maxlength="10" size="8" onKeyDown="return onlyNum(event)" onkeypress="maskData(this)" placeholder="dd/mm/aaaa" required>
            </div>

    <div class="col-md-6">
        <label style="color: #fec92e" for="idNivelEscolaridade" class="form-label">Nivel de Escolaridade</label>
        <select id="idNivelEscolaridade" name='inputNivelEscolaridade' class="form-select" required>
            <option disabled value="" selected>Escolha uma opção</option>
            <option value="Ensino Fundamental">Ensino Fundamental</option>
            <option value="Ensino Medio">Ensino Medio</option>
            <option value="Ensino Superior">Ensino Superior</option></select>
            </div>

    <div class="col-md-6"> 
        <label style="color: #fec92e" for="idInstituicao" class="form-label">Estuda em outra instituição atualmente</label>
        <select id="idInstituicao" name='inputInstituicao' class="form-select" required>
            <option disabled value="" selected>Escolha uma opção</option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option></select>
            </div>

    <div class="col-md-6">
        <label style="color: #fec92e" for="idInstituicaoAtual" class="form-label">Caso afirmativo, qual instituição?</label>
        <input type="text" class="form-control" id="idInstituicaoAtual" name="inputInstituicaoAtual" placeholder="Informe a Instituição">
            </div>

    <div class="col-md-6">
        <label style="color: #fec92e" for="idCurso" class="form-label">Qual o Curso?</label>
        <input type="text" class="form-control" id="idCurso" name="inputCurso" placeholder="Informe o curso realizado" required>
            </div>

    <div class="col-12">
        <label style="color: #fec92e" for="idMotivoMatricula" class="form-label">Por qual motivo você escolheu se matricular em um curso do Senac RJ?</label>
        <textarea id="idMotivoMatricula" class="form-control" name="inputMotivoMatricula" placeholder="Informe o motivo" required></textarea>
            </div>

    <div class="col-12">
        <label style="color: #fec92e" for="idMotivoCurso" class="form-label">O que te levou a escolher este curso?</label>
        <textarea id="idMotivoCurso" class="form-control" name="inputMotivoCurso" placeholder="Informe o motivo" required></textarea>
            </div>

    <div class="col-12">
        <label style="color: #fec92e" for="idExperienciaProfissional" class="form-label">Você tem experiência na área profissional do curso?</label>
        <textarea id="idExperienciaProfissional" class="form-control" name="inputExperienciaProfissional" placeholder="Informe a sua experiência" required></textarea>
            </div>

    <div class="col-12">
        <label style="color: #fec92e" for="idExpectativaCurso" class="form-label">Qual são suas expectativas após a conclusão do curso?</label>
        <textarea id="idExpectativaCurso" class="form-control" name="inputExpectativaCurso" placeholder="Informe a sua expectativa" required></textarea>
            </div>

    </form><!-- End Form -->
        <div class="col-12 text-center mb-3 mt-4">
            <button type="submit" class="btn btn-outline-success" form='formCadastro' style="color: black;">Salvar Cadastro</button>
        </div>

</div>

<?php
    include_once('footer.php')
?>