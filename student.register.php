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
    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone = filter_input(INPUT_POST, 'inputTelefone', FILTER_SANITIZE_SPECIAL_CHARS);
    $dataNascimento = filter_input(INPUT_POST, 'inputDataNascimento', FILTER_SANITIZE_SPECIAL_CHARS);
    $endereco = filter_input(INPUT_POST, 'inputEndereco', FILTER_SANITIZE_SPECIAL_CHARS);
    $bairro = filter_input(INPUT_POST, 'inputBairro', FILTER_SANITIZE_SPECIAL_CHARS);
    $nivelEscolaridade = filter_input(INPUT_POST, 'inputNivelEscolaridade', FILTER_SANITIZE_SPECIAL_CHARS);
    $instituicao = filter_input(INPUT_POST, 'inputInstituicao', FILTER_SANITIZE_SPECIAL_CHARS);
    $instituicaoAtual = filter_input(INPUT_POST, 'inputInstituicaoAtual', FILTER_SANITIZE_SPECIAL_CHARS);
    $curso = filter_input(INPUT_POST, 'inputCurso', FILTER_SANITIZE_SPECIAL_CHARS);
    $motivoMatricula = filter_input(INPUT_POST, 'inputMotivoMatricula', FILTER_SANITIZE_SPECIAL_CHARS);
    $motivoCurso = filter_input(INPUT_POST, 'inputMotivoCurso', FILTER_SANITIZE_SPECIAL_CHARS);
    $experienciaProfissional = filter_input(INPUT_POST, 'inputExperienciaProfissional', FILTER_SANITIZE_SPECIAL_CHARS);
    $expectativaCurso = filter_input(INPUT_POST, 'inputExpectativaCurso', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $estudante = new Estudante();
    $estudante->setCpf($cpf);
    $estudante->setNome($nome);
    $estudante->setEmail($email);
    $estudante->setTelefone($telefone);
    $estudante->setDataNascimento($dataNascimento);
    $estudante->setEndereco($endereco);
    $estudante->setBairro($bairro);
    $estudante->setNivelEscolaridade($nivelEscolaridade);
    $estudante->setInstituicao($instituicao);
    $estudante->setInstituicaoAtual($instituicaoAtual);
    $estudante->setCurso($curso);
    $estudante->setMotivoMatricula($motivoMatricula);
    $estudante->setMotivoCurso($motivoCurso);
    $estudante->setExperienciaProfissional($experienciaProfissional);
    $estudante->setExpectativaCurso($expectativaCurso);
    $estudante->setImagemCaminho($imagemCaminho);

  
    if($service->cadastrar($estudante))
    {
        echo "<script>alert('Cadastrado com sucesso');</script>";
        echo "<script>window.location='home';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar estudante');</script>";
        echo "<script>window.location='student.form';</script>";
    }