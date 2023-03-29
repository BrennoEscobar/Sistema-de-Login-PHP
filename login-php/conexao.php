<?php
define('HOST', 'db4free.net:3306');
define('USUARIO', 'root_breno');
define('SENHA', 'ficafrio12');
define('DB', 'localhost_breno');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');