<?php
include 'db.php';

$stmt = $conn->query("SELECT * FROM cart");
$cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Men's Clothing - Cart</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <div class="logo">
      <span class="logo-text">Indovouge</span>
    </div>
    <nav>
      <ul>
        <li><a href="indovouge2.html">Home</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="about2.html">About Us</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="cartbackend.php">Cart</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h2>Your Cart</h2>
    <div id="cart-items">
      <?php if (count($cart_items) > 0): ?>
        <table>
          <thead>
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($cart_items as $item): ?>
              <tr>
                <td><?php echo $item['product_name']; ?></td>
                <td>$<?php echo $item['price']; ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>$<?php echo $item['price'] * $item['quantity']; ?></td>
                <td>
                  <form action="remove_from_cart.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                    <button type="submit">Remove</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php else: ?>
        <p>Your cart is empty.</p>
      <?php endif; ?>
    </div>
    <p>Total: $<?php
    $total = 0;
    foreach ($cart_items as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    echo $total;
    ?></p>
  </main>
  <footer>
    <p>&copy; 2023 Men's Clothing. All rights reserved.</p>
  </footer>
</body>
</html>
