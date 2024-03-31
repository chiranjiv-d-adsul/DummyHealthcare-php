<?php
require_once 'config/database.php';
?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
   <!-- _font link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <!-- swiper css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/card.css">
    <link rel="stylesheet" href="/p6/card.css">

</head>
<body>

    <!-- header section starts from here -->
    <section class="header">
        <a href="index.php" class="logo">Hospital</a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="/about.php">about</a>
            <a href="/departments.php">departments</a>
            <a href="/services.php">services</a>
            <a href="/help.php">help & support</a>
            <a href="/loginregister.php">Login/register</a>

        </nav>


        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
