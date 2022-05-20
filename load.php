<?php
    require_once('config/config.php');

    $usuarioService = new UsuarioService();
    $estudanteService = new EstudanteService();

    $pathUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $urlSegments = explode('/', substr($pathUri, 1));

    if($urlSegments[count($urlSegments) - 1] == 'load-estudantes') {
        $_SESSION['estudantes'] = serialize($estudanteService->listar());

        header('location: /sistemacadastro/lista-de-estudantes');
        exit;
    }

    if($urlSegments[count($urlSegments) - 2] == 'load-estudante') {
        $id = $urlSegments[count($urlSegments) - 1];
        $_SESSION['estudante'] = serialize($estudanteService->localizarPorId($id));

        header('location: /sistemacadastro/perfil-do-estudante');
        exit;
    }

    if($urlSegments[count($urlSegments) - 2] == 'load-usuario') {
        $id = $urlSegments[count($urlSegments) - 1];
        $_SESSION['usuario'] = serialize($usuarioService->localizarPorId($id));

        header('location: /sistemacadastro/meu-perfil');
        exit;
    }

