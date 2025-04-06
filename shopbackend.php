<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Men's Clothing - Shop</title>
  <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>
<body>
  <header>
    <div class="logo">
      <img src="indovouge logo.png" alt="Men's Clothing Logo">
    </div>
    <nav>
      <ul>
        <li><a href="indovouge2.html">Home</a></li>
          <li><a href="login page.html">Login</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="cartbackend.php">Cart</a></li>
      </ul>
    </nav>
  </header>
  <main>
     <h2 class="shop">Casual Shirts</h2>
    <div class="products">
      <div class="product">
        <img src="https://i.pinimg.com/736x/13/77/8a/13778a82cac45f08ba970d03192bfa38.jpg" alt="Shirt">
                <h3>Solid color Shirt</h3>
                <p>350.00 INR</p>
        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="product_name" value="Solid color Shirt">
          <input type="hidden" name="price" value="350.00">
          <input type="number" name="quantity" value="1" min="1">
          <button type="submit">Add to Cart</button>
        </form>
      </div>
      <div class="product">
         <img src="https://i.pinimg.com/736x/7a/f1/b7/7af1b7fc98c438f3bcc2476e9060764c.jpg" alt="Short Sleeve Pattern">
                <h3>Short Sleeve Pattern</h3>
                <p>800.00 INR</p>
        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="product_name" value="Short Sleeve Pattern">
          <input type="hidden" name="price" value="800.00">
          <input type="number" name="quantity" value="1" min="1">
          <button type="submit">Add to Cart</button>
        </form>
      </div>
         <div class="product">
        <img src="https://i.pinimg.com/736x/2a/91/28/2a912889edaf524e2cf3aabd4dffa7f5.jpg" alt="Solid Beige">
                <h3>Solid beige</h3>
                <p>500.00 INR</p>
        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="product_name" value="Solid Beige">
          <input type="hidden" name="price" value="500.00">
          <input type="number" name="quantity" value="1" min="1">
          <button type="submit">Add to Cart</button>
        </form>
      </div>
    </div>

      <div class="products">
      <div class="product">
        <img src="https://i.pinimg.com/736x/da/cb/56/dacb56a7cf224727f7c041fb97491b69.jpg" alt="Strip Pattern Shirt">
                <h3>Strip Pattern Shirt</h3>
                <p>300.00 INR</p>
        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="product_name" value="Strip Pattern Shirt">
          <input type="hidden" name="price" value="300.00">
          <input type="number" name="quantity" value="1" min="1">
          <button type="submit">Add to Cart</button>
        </form>
      </div>
      <div class="product">
         <img src="https://i.pinimg.com/736x/23/4d/12/234d1243be19c784d03ccee018a2918f.jpg" alt="Check Shirt">
                <h3>Check Shirt</h3>
                <p>400.00 INR</p>
        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="product_name" value="Check Shirt">
          <input type="hidden" name="price" value="400.00">
          <input type="number" name="quantity" value="1" min="1">
          <button type="submit">Add to Cart</button>
        </form>
      </div>
         <div class="product">
        <img src="https://i.pinimg.com/736x/d4/a5/19/d4a519058171cd5380d7810aac7c58ae.jpg" alt="Green Men Brushed Check">
                <h3>Green Men Brushed Check</h3>
                <p>600.00 INR</p>
        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="product_name" value="Green Men Brushed Check">
          <input type="hidden" name="price" value="600.00">
          <input type="number" name="quantity" value="1" min="1">
          <button type="submit">Add to Cart</button>
        </form>
      </div>
    </div>
  </main>
  <footer>
    <p>&copy; 2025 Men's Clothing. All rights reserved.</p>
  </footer>
</body>
</html>