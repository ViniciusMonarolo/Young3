<?php
// Conectar ao banco de dados (substitua pelos seus próprios dados de conexão)
$ususario = "root";
$senha = "";
$database = "projetofinal";
$host = "localhost";

$conn = new mysqli($host, $usuario, $senha, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter o ID do item a ser excluído
$id_do_usuario = $_POST['id_do_usuario'];

// Excluir o item do banco de dados
$sql = "DELETE FROM itens WHERE id = $id_do_usuario";

if ($conn->query($sql) === TRUE) {
    echo "Item excluído com sucesso!";
} else {
    echo "Erro ao excluir item: " . $conn->error;
}

// Fechar conexão com o banco de dados
$conn->close();
?>
