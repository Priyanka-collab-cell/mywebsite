<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $stmt = $conn->prepare("INSERT INTO cart (product_name, price, quantity) VALUES (:product_name, :price, :quantity)");
    $stmt->bindParam(':product_name', $product_name);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':quantity', $quantity);

    if ($stmt->execute()) {
        echo "Item added to cart!";
    } else {
        echo "Error adding item to cart.";
    }
}
?>
