<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Indvogue</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            padding: 10px 0;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 14px 20px;
            transition: 0.3s;
        }

        .navbar a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        .logo img {
            height: 60px;
        }

        .cart-container {
            max-width: 1000px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        th {
            background-color: #333;
            color: white;
        }

        .remove-btn {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
        }

        .remove-btn:hover {
            background-color: #d63031;
        }

        .total-amount {
            text-align: right;
            font-weight: bold;
            font-size: 1.3rem;
            margin-top: 20px;
            color: #333;
        }

        .checkout-btn {
            display: block;
            margin: 30px auto 0;
            background-color: #28a745;
            color: #fff;
            padding: 12px 28px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .checkout-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="indovouge logo.png" alt="Indvogue Logo">  <!-- Replace with your logo -->
    </div>
    <a href="indovouge2.html">Home</a>
    <a href="login page.html">Login</a>
    <a href="shop.html">Shop</a>
    <a href="about2.html">About Us</a>
    <a href="contact.html">Contact Us</a>
</div>

<div class="cart-container">
    <h1>Your Cart</h1>
    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        <?php
        // Example loop for cart items:
        // Replace this with your PHP logic
        $cart_items = [
            ["product_name" => "Solid Color Shirt", "price" => 350, "quantity" => 1],
            ["product_name" => "Casual Blazer", "price" => 750, "quantity" => 2]
        ];
        $grand_total = 0;

        foreach ($cart_items as $item) {
            $total = $item["price"] * $item["quantity"];
            $grand_total += $total;
            echo "<tr>";
            echo "<td>{$item['product_name']}</td>";
            echo "<td>INR {$item['price']}</td>";
            echo "<td>{$item['quantity']}</td>";
            echo "<td>INR {$total}</td>";
            echo "<td><button class='remove-btn'>Remove</button></td>";
            echo "</tr>";
        }
        ?>

    </table>
    <div class="total-amount">
        <?php echo "Total: INR  $grand_total"; ?>
    </div>

    <button class="checkout-btn">Proceed to Checkout</button>
</div>

</body>
</html>
