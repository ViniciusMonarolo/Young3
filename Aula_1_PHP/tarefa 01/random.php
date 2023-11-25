<!DOCTYPE html>
<html>
<head>
    <title>Página 2</title>
    <!-- Inclua os links para o Bootstrap CSS e jQuery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Página 2</h1>
        <?php
        // Gera um número aleatório entre 0 e 10
        $numero_aleatorio = rand(0, 10);

        // Exibe o número aleatório
        echo "<h2>Número Aleatório: $numero_aleatorio</h2>";
        ?>
        <form action="random.php" method="post">
            <button type="submit" class="btn btn-primary">Gerar Número Aleatório</button>
        </form>
    </div>
</body>
</html>
