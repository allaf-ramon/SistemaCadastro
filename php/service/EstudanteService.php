<?php
    
    class EstudanteService {
        private $repository;

        public function __construct()
        {
            $this->repository = new EstudanteRepository();
        }

        public function cadastrar(Estudante $estudante): bool
        {
            return $this->repository->fnCadastrarEstudante($estudante);
        }
        
        public function listar()
        {
            return $this->repository->fnListarEstudantes();
        }

        public function localizarPorId($id)
        {
            return $this->repository->fnLocalizarEstudantePorId($id);
        }

        public function atualizarImagem($estudante): bool
        {
            return $this->repository->fnAtualizarImagemEstudante($estudante);
        }

    }