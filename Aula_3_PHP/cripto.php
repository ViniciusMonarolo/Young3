<?php 
    $senha = '3197@0a';
    $nova_senha = base64_encode($senha);
    $senha_decode = base64_decode($nova_senha);
    echo "Senha: ".$senha."<br>";
    echo "base 64: ".$nova_senha."<br>";
    echo "Senha decodificada: ".$senha_decode."<br>";
    echo "Md5: ".md5($senha)."<br>";
    echo "Sha1".sha1($senha)."<br>";
    echo "<hr>";
    echo "Senha mais segura: ";
    $senha_segura = password_hash($senha, PASSWORD_DEFAULT);
    echo $senha_segura;

    $senha_db = '$2y$10$cc5UhR5bM2dVWkyiNL4RgOIsFXWC/y6g3vEeMHVDxZTPWXy2zFMDm';

    if (password_verify($senha, $senha_db)){
        echo "Senha Válida!";
    }else {
        echo "Senha Inválida!";
    }
?>