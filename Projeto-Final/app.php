<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['product-name'])) {
        $productName = $_POST['product-name'];
        $stmt = $conn->prepare('INSERT INTO products (name) VALUES (?)');
        $stmt->bind_param('s', $productName);
        $stmt->execute();
        $stmt->close();
    } elseif (isset($_POST['existing-product-name'])) {
        $productName = $_POST['existing-product-name'];
        $stmt = $conn->prepare('DELETE FROM products WHERE name = ?');
        $stmt->bind_param('s', $productName);
        $stmt->execute();
        $stmt->close();
    }
}

$result = $conn->query('SELECT * FROM products');

while ($row = $result->fetch_assoc()) {
    echo "<li>{$row['name']}</li>";
}

$conn->close();
?>