drop database if exists senac;
create database if not exists senac;

use senac;

drop table if exists usuario cascade;
create table if not exists usuario(
    id int auto_increment primary key,
    matricula int not null,
    nome varchar(255) not null,
    email varchar(255) not null,
    nivel varchar(150) not null,
    senha varchar(255) not null,
    criado_em timestamp not null default current_timestamp
);

drop table if exists estudante cascade;
create table if not exists estudante(
    id int auto_increment primary key,
    cpf varchar(55) not null,
    nome varchar(255) not null,
    email varchar(255) not null,
    telefone varchar(55) not null,
    dataNascimento varchar(55) not null,
    endereco varchar(255) not null,
    bairro varchar(255) not null,
    nivelEscolaridade varchar(55) not null,
    instituicao varchar(255) not null,
    instituicaoAtual varchar(255),
    curso varchar(255) not null,
    motivoMatricula varchar(255) not null,
    motivoCurso varchar(255) not null,
    experienciaProfissional varchar(255) not null,
    expectativaCurso varchar(255) not null,
    imagemCaminho varchar(255),
    criado_em timestamp not null default current_timestamp
);

insert into usuario (matricula, nome, email, nivel, senha) values (1, 'Allaf', 'Allaf@Ramon.com', 'Administrador', md5(123));