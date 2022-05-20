<?php
include_once('config/config.php');
$title = "Cadastro de Usuário";
include_once('header.php');
?>
    
    <div class="text-center" style="color: #FEC92E"><h1>Cadastro de Usuário</h1>
    </div>

<div class="container">

    <!-- Form -->
    <form id="formCadastro" name="formCadastro" action="user.register.php" method="post" class="row g-3">

            <div class="ccol-12">
                <label style="color: #fec92e"for="idCpf" class="form-label">Matrícula</label>
                <input type="text" class="form-control" id="idMatricula" name="inputMatricula" placeholder="Matrícula" required>
            </div>
              
            <div class="col-12">
                <label style="color: #fec92e"for="idNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="idNome" name="inputNome" placeholder="Nome Completo" required>
            </div>

            <div class="col-12">
                <label style="color: #fec92e"for="idEmail" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="idEmail" name="inputEmail" placeholder="E-mail" required>
                </div>

            <div class="col-12">
                <label style="color: #fec92e"for="idNivel" class="form-label">Nivel</label>
                <select id="idNivel" name="inputNivel" class="form-select" required>
                    <option disabled value="" selected>Escolha uma opção</option>
                    <option value="Super Usuario">Super Usuario</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Aluno">Aluno</option>
                </select>
                </div>

            <div class="col-md-6">      
                <label style="color: #fec92e"for="idSenha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="idSenha" name="inputSenha" placeholder="Senha">
                </div>
            
            <div class="col-md-6">
                  <label style="color: #fec92e"for="idSenhaRepetida" class="form-label">Confirmar Senha</label>
                  <input type="password" class="form-control" id="idSenhaRepetida" name="inputSenhaRepetida" placeholder="Confirmar Senha">
                </div>

    </form><!-- End Form -->
        <div class="col-12 text-center mb-3 mt-4">
            <button type="submit" class="btn btn-outline-success" form="formCadastro" style="color: black;">Cadastrar Usuario</button>
        </div>
</div>

<?php
include_once('footer.php')
?>