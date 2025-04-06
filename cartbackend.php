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
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f8f8f8, #ffffff);
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            color: #333;
        }

        #cart-items {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            animation: slideUp 0.8s ease;
        }

        th, td {
            padding: 12px 16px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #f0f0f0;
            color: #555;
        }

        button {
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

            button:hover {
                background-color: #e60000;
            }

        .empty-cart {
            text-align: center;
            margin-top: 50px;
            font-size: 1.2rem;
            color: #444;
        }

            .empty-cart a {
                color: purple;
                font-weight: bold;
                text-decoration: underline;
            }

        .total-price {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            font-size: 1.2rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
  </style>
</head>
<body>
  <header>
    <div class="logo">
        <a href="indovouge2.html">
       <img src="indovouge logo.png" alt="Men's Clothing Logo"></a>
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
                <td>INR<?php echo $item['price']; ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>INR<?php echo $item['price'] * $item['quantity']; ?></td>
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
        
     <div class="total-price"> 
    <p>Total: INR      
    <?php
    $total = 0;
    foreach ($cart_items as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    echo $total;
    ?></p>
         </div>
    <div class="empty-cart">
      <?php else: ?>
        <p>Your cart is empty.  <a href="shop.html">Go shopping!</a>🛒</p>
      <?php endif; ?>
    </div>         
          
  </main>
    
  <footer>
    <p>&copy; 2025 Men's Clothing. All rights reserved.</p>
  </footer>
</body>
</html>
