<?php
session_start();
include('conexao.php');

if (empty($_POST(['usuario']) || empty($_POST['senha']))) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_id, ususario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

echo $query;exit;


if(row ==1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
} else {
    header('Location index.php');
    exit();
}

