<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
<style>
    body {
margin: 0;
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
background-color: #f0f0f0;
}
.form-container {
background-color: white;
border-radius: 8px;
padding: 20px;
box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
text-align: center;
}
.profile-pic {
width: 100px;
height: 100px;
border-radius: 50%;
object-fit: cover;
margin: -50px auto 10px auto;
display: block;
box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}
.input-field {
width: 100%;
padding: 10px;
margin-bottom: 10px;
border: 1px solid #ccc;
border-radius: 4px;
}
.submit-button {
background-color: #007bff;
color: white;
border: none;
border-radius: 4px;
padding: 10px 20px;
cursor: pointer;
}
  </style>
</head>
<body>
<div class="form-container">
    <img class="profile-pic" src="img/guest.png" alt="Foto de Perfil">
    <form action="" method="Post">
      <input class="input-field" type="email" name="email" placeholder="Email" required>
      <input class="input-field" type="password" name="senha" placeholder="Senha" required>
      <button class="submit-button" value="Enviar" type="submit">Enviar</button>
    </form>
  </div>










<!-- <form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> -->

</body>
</html>
