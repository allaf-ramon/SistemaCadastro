<?php
    
    class UsuarioService {
        private $repository;

        public function __construct() {
            $this->repository = new UsuarioRepository();
        }

        public function cadastrar(Usuario $usuario): bool
        {
            return $this->repository->fnCadastrarUsuario($usuario);
        }
        
        public function login(Usuario $usuario)
        {
            return $this->repository->fnLoginUsuario($usuario);
        }

        public function localizarPorId($id)
        {
            return $this->repository->fnLocalizarUsuarioPorId($id);
        }

        public function localizarPorEmail($email)
        {
            return $this->repository->fnLocalizarUsuarioPorEmail($email);
        }
        
        public function atualizarSenha($usuario): bool
        {
            return $this->repository->fnAtualizarSenhaUsuario($usuario);
        }

    }