<?php 
require_once "app/config/config.php"; 
require_once "app/classes/User.php";
$user = new User();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Filip's shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha256-PI8n5gCcz9cQqQXm3PEtDuPG8qx9oFsFctPg0S5zb8g=" crossorigin="anonymous">
</head>
<body>

<div class="container">


    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">Filip's Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse-navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="navbar-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">

                    <?php if(!$user->is_logged()) : ?>
                        <li class="navbar-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">
                                Cart 
                            </a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link" href="orders.php">My Orders</a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php if(isset($_SESSION['message'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['message']['type']; ?> alert-dismissible fade show" role="alert">
            <?php
            echo $_SESSION['message']['text'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif; ?>
