<?php
// Conectar ao banco de dados (substitua pelos seus próprios dados de conexão)
$usuario = "root";
$senha = "";
$database = "projetofinal";
$host = "localhost";

$conn = new mysqli($host, $usuario, $senha, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];
$imagem = $_POST['imagem'];
$usuario_id = $_POST['usuario_id'];
$descricao = $_POST['descricao'];

// Inserir dados no banco de dados
$sql = "INSERT INTO tabela_itens (id, nome, imagem, usuario_id, descricao) VALUES ('$id', '$nome', '$imagem', '$usuario_id', '$descricao')";

if ($conn->query($sql) === TRUE) {
    echo "Item adicionado com sucesso!";
} else {
    echo "Erro ao adicionar item: " . $conn->error;
}

// Fechar conexão com o banco de dados
$conn->close();
?>
