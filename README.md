# Sistema de Cadastro

Sistema web desenvolvido em PHP para gerenciamento de cadastros de estudantes e usuários.

## 🚀 Funcionalidades

- Login e autenticação de usuários
- Recuperação de senha via email
- Cadastro de estudantes com informações acadêmicas e pessoais
- Perfil do estudante com visualização completa dos dados
- Níveis de acesso (Super Usuario, Administrador, Aluno)
- Upload de imagens de perfil
- Sistema de logs para envio de emails

## 💻 Tecnologias

- PHP
- MySQL
- Bootstrap 5
- JavaScript
- HTML5
- CSS3

## 📋 Pré-requisitos

- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Servidor web (Apache/Nginx)
- Composer (Gerenciador de dependências PHP)

## 🔧 Configuração

1. Clone o repositório
2. Configure seu servidor web para apontar para o diretório do projeto
3. Configure as credenciais do banco de dados
4. Configure as credenciais de email para recuperação de senha
5. Execute as migrações do banco de dados

## 📦 Estrutura do Projeto

- `cadastro-de-estudante.php`: Formulário de cadastro de estudantes
- `perfil-do-estudante.php`: Visualização do perfil do estudante
- `login.php`: Sistema de autenticação
- `recuperar-senha.php`: Sistema de recuperação de senha
- `sendmail.php`: Configuração de envio de emails
- `header.php`: Cabeçalho padrão do sistema

## 👥 Níveis de Acesso

- Super Usuario: Acesso total ao sistema
- Administrador: Gerenciamento de usuários e estudantes
- Aluno: Acesso ao próprio perfil e informações

