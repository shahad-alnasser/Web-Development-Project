<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= isset($pageTitle) ? $pageTitle : "Vision 2030 | Visit Saudi" ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<header class="site-header">
  <div class="topbar">
    <div class="contact">
      <a href="mailto:contact@ccis.imsiu.edu.sa">contact@ccis.imsiu.edu.sa</a>
      <span>|</span>
      <a href="tel:+966110000000">+966 11 000 0000</a>
    </div>
    <div class="social">
      <a href="https://x.com" target="_blank">X</a>
      <a href="https://www.instagram.com" target="_blank">Instagram</a>
    </div>
  </div>

  <div class="brandbar">
    <img src="assets/logo-ccis.png" alt="IMSIU CCIS Logo" class="logo">
    <h1 class="site-title">
      <?php if (isset($_SESSION['user'])): ?>
        Welcome, <?= htmlspecialchars($_SESSION['user']) ?>
      <?php else: ?>

        Visit Saudi
      <?php endif; ?>
    </h1>
  </div>

  <nav class="main-nav">
    <ul class="menu">
      <li><a href="index.php">Home</a></li>

      <li class="dropdown">
        <a href="destinations.php">Destinations</a>
        <ul class="submenu">
          <li><a href="destinations.php#riyadh">Riyadh</a></li>
          <li><a href="destinations.php#jeddah">Jeddah</a></li>
          <li><a href="destinations.php#alula">AlUla</a></li>
          <li><a href="destinations.php#abha">Abha</a></li>
        </ul>
      </li>

      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="about.php">About Us</a></li>

      <?php if (isset($_SESSION['user'])): ?>
        <li><a href="visa.php">Get Visa</a></li>
        <li><a href="feedback_add.php">Feedback</a></li>
        <li><a href="feedback_list.php">All Feedbacks</a></li>
        <li><a href="ai_chat.php">Chatbot</a></li>
        <li><a href="logout.php">Logout</a></li>
      <?php else: ?>
        <li class="dropdown">
          <a href="#">Account</a>
          <ul class="submenu">
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="login.php">Sign In</a></li>
          </ul>
        </li>
      <?php endif; ?>
    </ul>
  </nav>
</header>

<main class="page">
