<?php
include 'db.php';

// Fetch all cart items from the database
$query = $conn->query("SELECT * FROM cart");
$cartItems = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Cart - IndoVouge</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <!-- Header Section -->
  <header>
    <div class="logo">
      <a href="indovouge2.html">
        <img src="indovouge logo.png" alt="IndoVouge Logo">
      </a>
    </div>
    <nav>
      <ul>
        <li><a href="indovouge2.html">Home</a></li>
        <li><a href="login page.html">Login</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="About2.html">About Us</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="cartbackend.php">Cart</a></li>
      </ul>
    </nav>
  </header>

  <!-- Main Cart Section -->
  <main>
    <h2>Your Cart</h2>

    <?php if (count($cartItems) > 0): ?>
      <div id="cart-items">
        <table>
          <thead>
            <tr>
              <th>Product</th>
              <th>Price (INR)</th>
              <th>Quantity</th>
              <th>Total (INR)</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $grandTotal = 0;
            foreach ($cartItems as $item):
                $itemTotal = $item['price'] * $item['quantity'];
                $grandTotal += $itemTotal;
                ?>
            <tr>
              <td><?php echo htmlspecialchars($item['product_name']); ?></td>
              <td><?php echo number_format($item['price']); ?></td>
              <td><?php echo $item['quantity']; ?></td>
              <td><?php echo number_format($itemTotal); ?></td>
              <td>
                <form action="remove_from_cart.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                  <button type="submit">Remove</button>
                </form>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <!-- Grand total display -->
      <p><strong>Grand Total: INR <?php echo number_format($grandTotal); ?></strong></p>

    <?php else: ?>
      <p>Your cart is currently empty. <a href="shop.html">Go shopping!</a></p>
    <?php endif; ?>

  </main>

  <!-- Footer Section -->
  <footer>
    <p>&copy; 2025 IndoVouge. All rights reserved.</p>
  </footer>

</body>
</html>
