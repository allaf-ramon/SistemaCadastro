<?php
class UsuarioRepository
{
    private $conn;

    public function __construct() {

        $connection = new Connection();
        $this->conn = $connection->getConnection();
    }
    
    private function openConnection() {
        $connection = new Connection();
        $this->conn = $connection->getConnection();
    }
    
    function fnCadastrarUsuario(Usuario $usuario): bool
    {
        try {

            $query = "insert ignore into usuario (matricula, nome, email, nivel, senha) values (:pmatricula, :pnome, :pemail, :pnivel, :psenha)";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pmatricula", $usuario->getMatricula());
            $stmt->bindValue(":pnome", $usuario->getNome());
            $stmt->bindValue(":pemail", $usuario->getEmail());
            $stmt->bindValue(":pnivel", $usuario->getNivel());
            $stmt->bindValue(":psenha", md5($usuario->getSenha()));

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao cadastrar o usuario. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnLoginUsuario(Usuario $usuario)
    {
        try {

            $query = "select id, matricula, nome, email, nivel from usuario where email = :pemail and senha = :psenha";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pemail", $usuario->getEmail());
            $stmt->bindValue(":psenha", md5($usuario->getSenha()));

            if ($stmt->execute())
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
                if($usuario = $stmt->fetch())
                    return $usuario;

            return null;
        } catch (PDOException $error) {
            echo "Erro ao efetuar o login do usuário. Erro: {$error->getMessage()}";
            return null;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnLocalizarUsuarioPorId($id)
    {
        try {

            $query = "select id, matricula, nome, email, nivel from usuario where id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pid', $id);

            if($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao localizar o usuário. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
    
    public function fnLocalizarUsuarioPorEmail($email)
    {
        try {

            $query = "select id, matricula, nome, email from usuario where email = :pemail";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pemail', $email);

            if($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao localizar o usuário. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnAtualizarSenhaUsuario(Usuario $usuario): bool
    {
        try {
            $this->openConnection();
            $query = "update usuario set senha = :psenha where id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":psenha", md5($usuario->getSenha()));
            $stmt->bindValue(":pid", $usuario->getId());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao atualizar a senha do usuário. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
    
}