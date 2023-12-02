
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Item</title>
</head>
<style>
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

form {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    color: #333;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Adicione estilos adicionais conforme necessário */
</style>
<body>
    <h1>Adicionar Item</h1>
    <form action="painel.php" method="POST">
        <label for="id">ID:</label>
        <input type="text" name="id" required><br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="imagem">Link da Imagem (Google Drive):</label>
        <input type="text" name="imagem" required><br>

        <label for="usuario_id">ID do Usuário:</label>
        <input type="text" name="usuario_id" required><br>

        <label for="descricao">Breve Descrição:</label>
        <textarea name="descricao" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Adicionar Item">
    </form>
</body>
</html>
