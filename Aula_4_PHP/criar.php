<?php 
// Sessão
session_start();
//Conexão com DB
require_once 'conection.php';

if(isset($_POST['btn-cadastrar'])){
    $nome = mysqli_escape_string($mysqli, $_POST['name']);
    $sobrenome = mysqli_escape_string($mysqli, $_POST['lastname']);
    $email = mysqli_escape_string($mysqli, $_POST['email']);
    $idade = mysqli_escape_string($mysqli, $_POST['idade']);
    $senha = mysqli_escape_string($mysqli, $_POST['senha']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade, senha)
    VALUES ('$nome', '$sobrenome', '$email', '$idade', '$senha')";

    if(mysqli_query($mysqli, $sql)){
        $_SESSION['status'] = "Cadastrado com sucesso!";
        header('Location: index.php');
    }else{
        $SESSION['status'] = "Falha ao cadastrar!";
        header('Location: index.php');
    }
}
?>