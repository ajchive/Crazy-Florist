<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crazy Florist</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="site-header">
  <div class="header-inner container">
    <a href="index.php" class="brand">
      <img src="..\CrazyFlorist\img\tcf-logo.jpg" class="logo" alt="Crazy Florist">
      <span class="brand-name">Crazy Florist</span>
    </a>
    <nav class="main-nav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>

      <?php if (isset($_SESSION['user_id'])): ?>

      <li><a href="cart.php">Cart</a></li>
      <li><a href="my_orders.php">My Orders</a></li>

      <li style="font-weight:600; color:#6d2c91;">
        Hello, <?php echo $_SESSION['fullname']; ?> 
      </li>

      <li><a href="logout.php">Logout</a></li>

      <?php else: ?>

      <li><a href="login.php">Login</a></li>

      <?php endif; ?>
      </ul> 
    </nav>
  </div>
</header>
<main class="container">
