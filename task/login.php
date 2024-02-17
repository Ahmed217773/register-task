<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    if (isset($_COOKIE['email']) && isset($_COOKIE['password']) && $_COOKIE['email'] == $email && $_COOKIE['password'] == $password) {
        
        $name = $_COOKIE['name'];
        echo "Hello $name";
    } else {
        
        header("Location: login.php");
        exit;
    }
}
?>
