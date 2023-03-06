<?php

header('Access-Control-Allow-Origin: *');
include_once './DBConnection.php';

if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['idade'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
}

$db = new DBConnection();

echo json_encode($db->updateUsuario($id, $nome, $idade));
