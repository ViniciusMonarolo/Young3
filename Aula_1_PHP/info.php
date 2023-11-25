<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <h1>INFORMAÇÕES DO USUÁRIO</h1>
    </header>
    <?php 
        $email = $_GET["email"] ?? "sem e-mail";
        $senha = $_GET["pass"] ?? "SAI DAE INXERIDO(A)";
        echo "<p>O seu email é $email e a sua senha é $senha";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar Ao Formulario</a></p>
</body>
</html>