<?php

$host = 'localhost';
$database = 'cadastro';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error)
{
    die("Falaha ao conectar ao banco de dados: ". $msqli->error);
}

?>