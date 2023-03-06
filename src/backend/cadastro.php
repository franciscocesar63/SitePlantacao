<?php
header('Access-Control-Allow-Origin: *');
include_once './DBConnection.php';

if (isset($_POST['nome']) && isset($_POST['idade'])) {
     $nome = $_POST['nome'];
     $idade = $_POST['idade'];
}

$db = new DBConnection();
echo $db->cadastrarUsuario($nome, $idade);
// return json_encode($db->cadastrarUsuario($nome, $idade));
