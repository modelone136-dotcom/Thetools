<?php 
// include our data file so the header has access to it if needed
include 'data.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Tools</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/collection.css">        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <div class="top-bar">
        <div class="social-icons">
            <i class="fab fa-facebook-f"></i> <i class="fab fa-pinterest-p"></i> <i class="fab fa-twitter"></i> <i class="fab fa-youtube"></i> <i class="fab fa-instagram"></i>
        </div>
        <div class="promo-text">Summer Sale 15% off! Shop Now!</div>
        <div class="top-settings">
            <span>ENGLISH <i class="fas fa-chevron-down"></i></span> <span>United States (USD $) <i class="fas fa-chevron-down"></i></span>
        </div>
    </div>

    <header class="main-header">
        <div class="logo"><h2><i class="fas fa-gem" style="color: #e6b800;"></i> Jewelry</h2></div>
        <div class="search-container">
            <input type="text" placeholder="Search Product">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
        <div class="header-icons">
            <i class="fas fa-shopping-cart"></i> <i class="far fa-heart"></i> <i class="far fa-user"></i>
        </div>
    </header>

    <nav class="main-nav">
        <div class="nav-left">
            <button class="collection-btn">All Collection <i class="fas fa-chevron-down"></i></button>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="collection.php">Collection</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="gift.php">Gifting</a></li>
                <li><a href="sale.php">Sale</a></li>
                <li><a href="bap.php">BAP</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="contact-info">
            <i class="fas fa-phone-alt"></i>
            <div><small>Call Us</small><br><strong>+91 9530455XXX</strong></div>
        </div>
    </nav>