<?php 
$host = 'localhost';
$database = 'loja';
$usuario = 'root';
$senha = '';


$msqli = new mysqli($host, $database, $usuario, $senha);

if($msqli->error){
    die("Falha ao Conectar-se, Tente De novo!!!".$msqli->error);
}

?>