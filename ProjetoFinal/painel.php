<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<style>
.menu {
    background-color: gray;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    border-bottom: 0.1rem solid var(--gray-color);
    z-index: 99;
}

.menu-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 30px;
}

.menu h1 {
    font-size: 2rem;
    color: var(--primary-color);
}

.menu h1 a {
    color: inherit;
}

.menu ul {
    list-style: none;
    display: flex;
}

.menu ul li a {
    padding: 2rem;
    display: block;
    font-size: 1rem;
    color: black;
    position: relative;
}

.menu ul li a::after {
    content: '';
    position: absolute;
    background: #0a112f;
    width: 0;
    bottom: 0.5rem;
    left: 50%;
    min-height: 0.2rem;
    transition: all 300ms ease-in-out
}

.menu ul li a:hover::after {
    width: 50%;
    left: 25%;
}

.menu-spacing {
    min-height: 6.1rem;
}

.boasvindas{
    margin-top: -4rem;
    padding: 5px;
    text-align: justify;
    color: black;
}
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    color: #333;
}

.container {
    max-width: 800px;
    margin: 20px auto;
}

.item {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.item img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 10px;
}

.item h2 {
    color: #333;
}

.item p {
    color: #555;
}

/* Botão de voltar */
.back-btn {
    display: block;
    margin-top: 20px;
    text-align: center;
}

.back-btn a {
    text-decoration: none;
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border-radius: 4px;
    display: inline-block;
}

.back-btn a:hover {
    background-color: #45a049;
}


</style>
<body>
<aside class="menu">
        <div class="menu-content">
            <h1 onclick="getElementById('close-menu').checked = false;"><a href="#">WishList</a></h1>
            <nav>
                <ul onclick="getElementById('close-menu').checked = false;">
                    <li><a href="cadastrar.php">Adicionar</a></li>
                    <li><a href="logout.php">Deslogar</a></li>
                </ul>
            </nav>
        </div>
    </aside>
</body>
</html>

<?php
// Conectar ao banco de dados
$usuario = "root";
$senha = "";
$database = "projetofinal";
$host = "localhost";

$conn = new mysqli($host, $usuario, $senha, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recuperar itens do banco de dados
$sql = "SELECT * FROM itens";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Itens</title>
</head>
<body>
    <h1>Painel de Itens</h1>

    <?php
    // Exibir itens
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='item'>";
            echo "<img src='https://drive.google.com/uc?export=view&amp;id=". $row['imagem'] ."'>";
            echo "<h2>" . $row['nome'] . "</h2>";
            echo "<p><strong>Descrição:</strong> " . $row['descricao'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>Nenhum item encontrado.</p>";
    }

    // Fechar conexão com o banco de dados
    $conn->close();
    ?>
</body>
</html>
