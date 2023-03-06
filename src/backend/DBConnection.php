<?php

class DBConnection
{

    private $_dbHostname = "localhost";
    private $_dbName = "u860166086_igreja";
    private $_dbUsername = "u860166086_igreja";
    private $_dbPassword = "w=&Uo]YEOx0@";
    private $_con;

    public function __construct()
    {
        try {
            $this->_con = new PDO("mysql:host=$this->_dbHostname;dbname=$this->_dbName", $this->_dbUsername, $this->_dbPassword);
            $this->_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conectado com sucesso.";
        } catch (PDOException $e) {
            echo "<h1>Ops, algo deu errado: " . $e->getMessage() . "</h1>";
            // echo "<pre>";
            echo print_r($e);
        }
    }
    // return Connection
    public function returnConnection()
    {
        return $this->_con;
    }


    public function cadastrarPedido($nome, $telefone, $email, $idade, $referencia, $pertenceigreja, $pedidooracao, $datahora)
    {
        try {
            //code...


            $pdo = $this->returnConnection();
            $stmt = $pdo->prepare('INSERT INTO `formulario`(`id`, `nome`, `telefone`, `email`, `idade`, `referencia`, `pertenceigreja`, `pedidooracao`, `datahora`) VALUES
        (null,:nome, :telefone, :email, :idade, :referencia, :pertenceigreja, :pedidooracao, :datahora)');
            $stmt->execute(
                array(
                    ':nome' => $nome,
                    ':telefone' => $telefone,
                    ':email' => $email,
                    ':idade' => $idade,
                    ':referencia' => $referencia,
                    ':pertenceigreja' => $pertenceigreja,
                    ':pedidooracao' => $pedidooracao,
                    ':datahora' => $datahora
                )
            );
            if ($stmt->rowCount() > 0) {
                return "sucess";
            } else {
                return 'error';
            }
        } catch (\Throwable $th) {
            return "error";
        }
    }

    public function selectPedidos()
    {
        $pdo = $this->returnConnection();
        $stmt = $pdo->query("SELECT * FROM formulario");
        $user = $stmt->fetchAll();
        return $user;
    }


    public function deleteFormulario($id)
    {
        try {
            $pdo = $this->returnConnection();
            $stmt = $pdo->prepare('DELETE FROM formulario WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            echo "sucess";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function selectFormularioByID($id)
    {
        $pdo = $this->returnConnection();
        $stmt = $pdo->query("SELECT * FROM formulario WHERE id =" . $id);
        $user = $stmt->fetch();
        return $user;
    }

    public function updateFormulario($id, $nome, $idade)
    {
        try {
            $pdo = $this->returnConnection();
            $stmt = $pdo->prepare('UPDATE usuario SET nome = :nome, idade = :idade WHERE id = :id');
            $stmt->execute(
                array(
                    ':id' => $id,
                    ':nome' => $nome,
                    ':idade' => $idade
                )
            );
            return "sucess";
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
}
?>