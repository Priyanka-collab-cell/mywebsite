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
  <title>Your Cart - IndoVouge</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { padding: 15px; text-align: center; border-bottom: 1px solid #ddd; }
    img.cart-img { width: 80px; height: 80px; object-fit: cover; border-radius: 8px; }
    button { padding: 8px 12px; margin: 2px; border: none; border-radius: 5px; cursor: pointer; }
    button:hover { opacity: 0.8; }
    .increase, .decrease { background-color: #4caf50; color: white; }
    .remove { background-color: #f44336; color: white; }
    .summary-box { background-color: #f4f4f4; padding: 20px; margin-top: 30px; border-radius: 10px; text-align: right; }
    .action-buttons { margin-top: 20px; text-align: right; }
    .action-buttons a button { background-color: #2196f3; color: white; margin-left: 10px; }
  </style>
</head>
<body>
<header>
  <div class="logo">
    <a href="indovouge2.html">
      <img src="indovouge logo.png" alt="Logo">
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

<main>
  <h2>Your Cart 🛒</h2>
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
          <tr data-id="<?php echo $item['id']; ?>">
            <td>
              <strong><?php echo $item['product_name']; ?></strong>
              <br>
              <img src="product-placeholder.jpg" alt="Product" class="cart-img">
            </td>
            <td>INR <span class="price"><?php echo $item['price']; ?></span></td>
            <td>
              <button class="decrease">-</button>
              <span class="quantity"><?php echo $item['quantity']; ?></span>
              <button class="increase">+</button>
            </td>
            <td>INR <span class="line-total"><?php echo $item['price'] * $item['quantity']; ?></span></td>
            <td>
              <form action="remove_from_cart.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                <button class="remove" type="submit">Remove</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <div class="summary-box">
      <h3>Grand Total: INR <span id="grand-total">
        <?php
        $total = 0;
        foreach ($cart_items as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        echo $total;
        ?>
      </span></h3>
      <div class="action-buttons">
        <a href="shop.html"><button>Continue Shopping</button></a>
        <a href="#"><button>Proceed to Checkout</button></a>
      </div>
    </div>
  <?php else: ?>
    <p>Your cart is empty. <a href="shop.html">Start Shopping</a> 😊</p>
  <?php endif; ?>
</main>

<footer>
  <p>&copy; 2025 IndoVouge. All rights reserved.</p>
</footer>

<script>
  const cartRows = document.querySelectorAll('tr[data-id]');
  cartRows.forEach(row => {
    const price = parseFloat(row.querySelector('.price').innerText);
    const quantitySpan = row.querySelector('.quantity');
    const lineTotal = row.querySelector('.line-total');
    const decreaseBtn = row.querySelector('.decrease');
    const increaseBtn = row.querySelector('.increase');

    decreaseBtn.addEventListener('click', () => {
      let quantity = parseInt(quantitySpan.innerText);
      if (quantity > 1) {
        quantity--;
        quantitySpan.innerText = quantity;
        lineTotal.innerText = price * quantity;
        updateGrandTotal();
      }
    });

    increaseBtn.addEventListener('click', () => {
      let quantity = parseInt(quantitySpan.innerText);
      quantity++;
      quantitySpan.innerText = quantity;
      lineTotal.innerText = price * quantity;
      updateGrandTotal();
    });
  });

  function updateGrandTotal() {
    let grandTotal = 0;
    document.querySelectorAll('.line-total').forEach(item => {
      grandTotal += parseFloat(item.innerText);
    });
    document.getElementById('grand-total').innerText = grandTotal.toFixed(2);
  }
</script>
</body>
</html>
