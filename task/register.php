<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    setcookie("name", $name, time() + (86400 * 30), "/");
    setcookie("email", $email, time() + (86400 * 30), "/");
    setcookie("password", $password, time() + (86400 * 30), "/");

    
    header("Location: login.html");
    exit;
}
?>
