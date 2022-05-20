<?php 
    require_once('config/config.php');

    $service = new UsuarioService();

    $matricula = filter_input(INPUT_POST, 'inputMatricula', FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_SPECIAL_CHARS);
    $nivel = filter_input(INPUT_POST, 'inputNivel', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'inputSenha', FILTER_SANITIZE_SPECIAL_CHARS);
    $senhaRepetida = filter_input(INPUT_POST, 'inputSenhaRepetida', FILTER_SANITIZE_SPECIAL_CHARS);

    if($senha !== $senhaRepetida) {
        echo "<script>alert('Senha não confere');</script>";
        echo "<script>window.location='cadastro-de-usuario';</script>";
        exit;
    }

    $usuario = new Usuario();
    $usuario->setMatricula($matricula);
    $usuario->setNome($nome);
    $usuario->setEmail($email);
    $usuario->setNivel($nivel);
    $usuario->setSenha($senha);

    if($service->cadastrar($usuario))
    {
        echo "<script>alert('Cadastrado com sucesso');</script>";
        echo "<script>window.location='home';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar usuario');</script>";
        echo "<script>window.location='user.form';</script>";
    }
