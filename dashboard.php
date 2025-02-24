<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

echo "Welcome, " . htmlspecialchars($_SESSION['username']) . "!";
?>
