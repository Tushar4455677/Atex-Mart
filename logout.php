<?php
session_start();

// Unset the cart and all session variables
if (isset($_SESSION['cart'])) {
    unset($_SESSION['cart']); // Clear the cart
}

session_unset(); // Clear all other session variables
session_destroy(); // Destroy the session completely

// Redirect to homepage or login page
header("Location: index.php");
exit();
?>