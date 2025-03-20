<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Men's Clothing - Shop</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <div class="logo">
     <img src="C:\Users\asus\Downloads\indovouge logo.png" alt="Men's Clothing Logo">
    </div>
   <h1 class="heading">Men's Clothing</h1>
        <nav>
            <ul>
                <li><a href="indovouge2.html">Home</a></li>
                <li><a href="login page.html">Login</a></li>
                <li><a href="shopbackend.php">Shop</a></li>
                <li><a href="About2.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="cartbackend.php">Cart</a></li>
            </ul>
        </nav>
  </header>
  <main>
    <h2>Shop Our Collection</h2>
    <div class="products">
      <div class="product">
         <a href="shirt2.html">
                <img src="https://i.pinimg.com/736x/23/39/27/23392776149943eddc3825e34ce82edc.jpg" alt="Shirt"></a>
                <h3>Casual Shirts</h3>
        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="Casual Shirt" value="Casual Shirt">
          <input type="hidden" name="price" value="29.99">
          <input type="number" name="quantity" value="1" min="1">
          <button type="submit">Add to Cart</button>
        </form>
      </div>
      <div class="product">
        <img src="https://i.pinimg.com/736x/6c/d8/4c/6cd84c694ee0b67d4a21adb2b3b5951e.jpg" alt="Jeans">
        <h3>Denim Jeans</h3>
        <p>$49.99</p>
        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="product_name" value="Denim Jeans">
          <input type="hidden" name="price" value="49.99">
          <input type="number" name="quantity" value="1" min="1">
          <button type="submit">Add to Cart</button>
        </form>
      </div>
    </div>
  </main>
  <footer>
    <p>&copy; 2023 Men's Clothing. All rights reserved.</p>
  </footer>
</body>
</html>