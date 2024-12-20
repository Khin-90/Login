<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Example: Save user data (Replace this with real database logic)
    echo 'Sign up successful for ' . htmlspecialchars($name) . '!';
}
?>
