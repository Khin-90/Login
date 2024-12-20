<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Example: Validate with hardcoded credentials
    if ($email === 'test@example.com' && $password === 'password') {
        echo 'Login successful!';
    } else {
        echo 'Invalid email or password.';
    }
}
?>
