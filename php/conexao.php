<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'arthur');
define('SENHA', '384729');
define('DB', 'Login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possivel conectar');
