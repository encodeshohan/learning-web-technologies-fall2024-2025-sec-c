<?php
session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!isset($_SESSION['users'])) {
            $_SESSION['users'] = [];
        }
        $user_data = [
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => $password,
        ];

       // $_SESSION['users'][$name] = $user_data;
        //$_SESSION['user'] = $user_data;
        $_SESSION = $user_data;
        

        header('Location: Login.html');
        exit();
    } 
    else 
    {
        echo("Invalid");
    }
?>
