<?php

define('HOST', 'localhost');
define('USUARIO', 'u424235430_root');
define('SENHA', 'Gabi0607');
define('DB', 'u424235430_vetin');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

?>