<?php

    class Estudante {

        private int $id;
        private string $cpf;
        private string $nome;
        private string $email;
        private string $telefone;
        private string $dataNascimento;
        private string $endereco;
        private string $bairro;
        private string $nivelEscolaridade;
        private string $instituicao;
        private string $instituicaoAtual;
        private string $curso;
        private string $motivoMatricula;
        private string $motivoCurso;
        private string $experienciaProfissional;
        private string $expectativaCurso;
        private string $imagemCaminho;
        private string $criadoEm;

        public function __construct() {}

        public function getId():int{
            return $this->id;
        }

        public function setId($id): void {
            $this->id = $id;
        }
        
        public function getCpf(): string {
            return $this->cpf;
        }

        public function setCpf(string $cpf): void {
            $this->cpf = $cpf;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function setNome(string $nome): void {
            $this->nome = $nome;
        }

        public function getEmail(): string {
            return $this->email;
        }

        public function setEmail(string $email): void {
            $this->email = $email;
        }

        public function getTelefone(): string {
            return $this->telefone;
        }

        public function setTelefone(string $telefone): void {
            $this->telefone = $telefone;
        }

        public function getDataNascimento(): string {
            return $this->dataNascimento;
        }

        public function setDataNascimento(string $dataNascimento): void {
            $this->dataNascimento = $dataNascimento;
        }

        public function getEndereco(): string {
            return $this->endereco;
        }

        public function setEndereco(string $endereco): void {
            $this->endereco = $endereco;
        }

        public function getBairro(): string {
            return $this->bairro;
        }

        public function setBairro(string $bairro): void {
            $this->bairro = $bairro;
        }

        public function getNivelEscolaridade(): string {
            return $this->nivelEscolaridade;
        }

        public function setNivelEscolaridade(string $nivelEscolaridade): void {
            $this->nivelEscolaridade = $nivelEscolaridade;
        }

        public function getInstituicao(): string {
            return $this->instituicao;
        }

        public function setInstituicao(string $instituicao): void {
            $this->instituicao = $instituicao;
        }

        public function getInstituicaoAtual(): string {
            return $this->instituicaoAtual;
        }

        public function setInstituicaoAtual(string $instituicaoAtual): void {
            $this->instituicaoAtual = $instituicaoAtual;
        }

        public function getCurso(): string {
            return $this->curso;
        }

        public function setCurso(string $curso): void {
            $this->curso = $curso;
        }

        public function getMotivoMatricula(): string {
            return $this->motivoMatricula;
        }

        public function setMotivoMatricula(string $motivoMatricula): void {
            $this->motivoMatricula = $motivoMatricula;
        }

        public function getMotivoCurso(): string {
            return $this->motivoCurso;
        }

        public function setMotivoCurso(string $motivoCurso): void {
            $this->motivoCurso = $motivoCurso;
        }

        public function getExperienciaProfissional(): string {
            return $this->experienciaProfissional;
        }

        public function setExperienciaProfissional(string $experienciaProfissional): void {
            $this->experienciaProfissional = $experienciaProfissional;
        }

        public function getExpectativaCurso(): string {
            return $this->expectativaCurso;
        }

        public function setExpectativaCurso(string $expectativaCurso): void {
            $this->expectativaCurso = $expectativaCurso;
        }

        public function getImagemCaminho(): string {
            return $this->imagemCaminho;
        }

        public function setImagemCaminho(string $imagemCaminho): void {
            $this->imagemCaminho = $imagemCaminho;
        }

        public function getCriadoEm(): string {
            return date('d/m/Y - H:i:s', strtotime($this->criadoEm));
        }

        public function setCriadoEm(string $criadoEm): void {
            $this->criadoEm = $criadoEm;
        }
        
    }