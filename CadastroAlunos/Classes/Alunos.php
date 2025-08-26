<?php
require_once "Conexao.php";

class Alunos
{
    public $matricula;
    public $nome;
    public $sexo;
    public $email;
    public $endereco;
    public $telefone;
    public $senha;

    private $dadosValidar = ["nome", "senha", "sexo", "telefone", "email", "endereco"];

    private function validar()
    {
        foreach ($this->dadosValidar as $dado) {
            if (!(isset($_POST[$dado]) && !empty($_POST[$dado]))) {
                return false;
            }
            return true;
        }
    }

    public function listarTodos ()
    {
        try {
            $bd = new Conexao();
            $con = $bd->conectar();
            $sql = $con->prepare("select * from alunos");
            $sql->execute();

            if ($sql->rowCount() > 0)
            {
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
            }
        } catch (PDOException $msg) {
            echo "Retorno com erro: {$msg}";
        }
    }

    public function excluir($matricula)
    {
        try {
            if (isset($matricula)) {
                $bd = new Conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("delete from alunos where matricula = ?");

                $sql->execute(array(
                    $matricula
                ));

                if ($sql->rowCount() > 0)
                {
                    header("location: index_alunos.php");
                }
            } else {
                header("location: index_alunos.php");
            }
        } catch (PDOException $msg) {
            echo "Não foi possível excluir:" . $msg->getMessage();
        }
    }

    public function inserir()
    {
        try {
            if ($this->validar())
            {
                $this->nome = $_POST["nome"];
                $this->sexo = $_POST["sexo"];
                $this->senha = $_POST["senha"];
                $this->email = $_POST["email"];
                $this->endereco = $_POST["endereco"];
                $this->telefone = $_POST["telefone"];
            } else {
                header("location: index.html");
            }

            $bd = new Conexao();
            $con = $bd->conectar();
            $sql = $con->prepare("insert into alunos(matricula, nome, sexo, email, endereco, telefone, senha)
                values(null, ?,?,?,?,?,?) ");
            $sql->execute(array(
                $this->nome,
                $this->sexo,
                $this->email,
                $this->endereco,
                $this->telefone,
                $this->senha
            ));

            if ($sql->rowCount() > 0)
            {
                header("location: index_alunos.php");
            }

        } catch (PDOException $msg) {
            echo"Erro ao inserir aluno: {$msg->getMessage()}";
        }
    }
};
