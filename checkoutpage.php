<?php
include 'db.php';

// Calculate total again for security purposes
$stmt = $conn->query("SELECT * FROM cart");
$cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

$total = 0;
foreach ($cart_items as $item) {
    $total += $item['price'] * $item['quantity'];
}

// If cart is empty, redirect back
if (count($cart_items) == 0) {
    header("Location: cartbackend.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout - Men's Clothing</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
  <div class="logo">
      <a href="indovouge2.html">
      <img src="indovouge logo.png" alt="Men's Clothing Logo"></a>
  </div>
</header>

<main>
  <h2>Checkout</h2>
  <p>Your total is: <strong>INR <?php echo $total; ?></strong></p>

  <form action="place_order.php" method="post" class="checkout-form">
    <h3>Shipping Details</h3>
    <label for="name">Full Name:</label>
    <input type="text" name="name" id="name" required>
    
    <label for="address">Address:</label>
    <textarea name="address" id="address" required></textarea>
    
    <label for="phone">Phone Number:</label>
    <input type="text" name="phone" id="phone" required>
    
    <label for="payment">Payment Method:</label>
    <select name="payment" id="payment" required>
      <option value="">Select Payment Method</option>
      <option value="COD">Cash on Delivery</option>
      <option value="Online">Online Payment</option>
    </select>
    
    <button type="submit">Place Order</button>
  </form>
</main>

<footer>
  <p>&copy; 2025 Men's Clothing. All rights reserved.</p>
</footer>
</body>
</html>
