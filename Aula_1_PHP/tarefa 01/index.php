<!DOCTYPE html>
<html>
<head>
    <title>Página 1</title>
    <!-- Inclua os links para o Bootstrap CSS e jQuery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Página 1</h1>
        <?php
        // Inicializa a variável de sessão para armazenar o número atual
        session_start();

        // Verifica se a variável de sessão está definida, caso contrário, define-a como 0
        if (!isset($_SESSION['numero'])) {
            $_SESSION['numero'] = 0;
        }

        // Verifica se o botão "Próximo" foi clicado
        if (isset($_POST['proximo'])) {
            $_SESSION['numero']++;
        }

        // Verifica se o botão "Anterior" foi clicado
        if (isset($_POST['anterior'])) {
            $_SESSION['numero']--;
        }

        // Exibe o número atual e os botões
        echo "<h2>Número Atual: {$_SESSION['numero']}</h2>";
        ?>
        <form method="post">
            <button type="submit" name="anterior" class="btn btn-primary">Anterior</button>
            <button type="submit" name="proximo" class="btn btn-primary">Próximo</button>
        </form>
    </div>
</body>
</html>

