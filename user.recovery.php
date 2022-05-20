<?php
    require_once('config/config.php');
    require_once('sendmail.php');

    $service = new UsuarioService();

    $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_SPECIAL_CHARS);
    $senhaNova = uniqid();

    if($usuario = $service->localizarPorEmail($email)) {
        $id = $usuario->getId();
    }

    else {
        echo "<script>alert('Email não cadastrado');</script>";
        echo "<script>window.location='login';</script>";
    }
    
    $usuario->setId($id);
    $usuario->setSenha($senhaNova);

    if($service->atualizarSenha($usuario)) {
        enviarEmail($usuario);
    }
    

