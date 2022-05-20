<?php
    require_once('config/config.php');

    if(isset($_FILES['inputImagem']) && $_FILES['inputImagem']['error'] == 0)
    {
    $ext = strtolower(substr($_FILES['inputImagem']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = './resources/img/'; //Diretório para uploads
    $imagemCaminho = ($dir.$new_name);

    move_uploaded_file($_FILES['inputImagem']['tmp_name'], $imagemCaminho); //Fazer upload do arquivo
    }
    else{
    $imagemCaminho = '';
    }

    $service = new EstudanteService();
    
    $cpf = filter_input(INPUT_POST, 'inputCpf', FILTER_SANITIZE_SPECIAL_CHARS);

    $estudante = new Estudante();
    
    $estudante->setCpf($cpf);
    $estudante->setImagemCaminho($imagemCaminho);

  
    if($service->atualizarImagem($estudante))
    {
        echo "<script>alert('Cadastro atualizado com sucesso');</script>";
        echo "<script>window.location='home';</script>";
    } else {
        echo "<script>alert('Erro ao atualizar cadastro');</script>";
        echo "<script>window.location='load.php/load-estudantes';</script>";
    }