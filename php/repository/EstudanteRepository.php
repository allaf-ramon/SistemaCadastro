<?php
class EstudanteRepository
{
    private $conn;

    public function __construct() {

        $connection = new Connection();
        $this->conn = $connection->getConnection();
    }
    
    function fnCadastrarEstudante(Estudante $estudante): bool
    {
        try {

            $query = "insert ignore into estudante (cpf, nome, email, telefone, dataNascimento, endereco, bairro, nivelEscolaridade, instituicao, instituicaoAtual, curso, motivoMatricula, motivoCurso, experienciaProfissional, expectativaCurso, imagemCaminho) 
            values (:pcpf, :pnome, :pemail, :ptelefone, :pdataNascimento, :pendereco, :pbairro, :pnivelEscolaridade, :pinstituicao, :pinstituicaoAtual, :pcurso, :pmotivoMatricula, :pmotivoCurso, :pexperienciaProfissional, :pexpectativaCurso, :pimagemCaminho)";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pcpf", $estudante->getCpf());
            $stmt->bindValue(":pnome", $estudante->getNome());
            $stmt->bindValue(":pemail", $estudante->getEmail());
            $stmt->bindValue(":ptelefone", $estudante->getTelefone());
            $stmt->bindValue(":pdataNascimento", $estudante->getDataNascimento());
            $stmt->bindValue(":pendereco", $estudante->getEndereco());
            $stmt->bindValue(":pbairro", $estudante->getBairro());
            $stmt->bindValue(":pnivelEscolaridade", $estudante->getNivelEscolaridade());
            $stmt->bindValue(":pinstituicao", $estudante->getInstituicao());
            $stmt->bindValue(":pinstituicaoAtual", $estudante->getInstituicaoAtual());
            $stmt->bindValue(":pcurso", $estudante->getCurso());
            $stmt->bindValue(":pmotivoMatricula", $estudante->getMotivoMatricula());
            $stmt->bindValue(":pmotivoCurso", $estudante->getMotivoCurso());
            $stmt->bindValue(":pexperienciaProfissional", $estudante->getExperienciaProfissional());
            $stmt->bindValue(":pexpectativaCurso", $estudante->getExpectativaCurso());
            $stmt->bindValue(":pimagemCaminho", $estudante->getImagemCaminho());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao cadastrar o estudante. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnLocalizarEstudantePorId($id)
    {
        try {

            $query = "select id, cpf, nome, email, telefone, dataNascimento, endereco, bairro, nivelEscolaridade, instituicao, instituicaoAtual, curso, motivoMatricula, motivoCurso, experienciaProfissional, expectativaCurso, imagemCaminho from estudante where id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pid', $id);

            if($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Estudante');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao localizar o estudante. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnListarEstudantes()
    {
        try {

            $query = "select id, cpf, nome, email, telefone, dataNascimento, endereco, bairro, nivelEscolaridade, instituicaoAtual, instituicaoAtual, curso, motivoMatricula, motivoCurso, experienciaProfissional, expectativaCurso from estudante";

            $stmt = $this->conn->prepare($query);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Estudante');
                return  $stmt->fetchAll();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar os estudantes. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnAtualizarImagemEstudante(Estudante $estudante): bool
    {
        try {
            $query = "update estudante set imagemCaminho = :pimagemCaminho where cpf = :pcpf";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pimagemCaminho", $estudante->getImagemCaminho());
            $stmt->bindValue(":pcpf", $estudante->getCpf());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao atualizar a imagem do estudante. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
    
}