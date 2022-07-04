<?php include('config/constants.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo-coffe.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php SITEURL; ?>" > Home</a>
                    </li>
                    <li>
                        <a href="<?php SITEURL; ?>categories.php">Ctegories</a>
                    </li>
                    <li>
                        <a href="<?php SITEURL; ?>Drinks.php">Drinks</a>
                    </li>
                    <li>
                        <a href="<?php SITEURL; ?>order.php">order</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->
