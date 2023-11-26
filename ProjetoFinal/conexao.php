<?php 

$host = 'localhost';
$database = 'projetofinal';
$usuario = 'root';
$senha = '';

$msqli = new mysqli($host,$usuario, $senha, $database);

if($msqli ->error)
{
 die("Falha ao conectar ao banco de dados:". $msqli->error);
}

?>