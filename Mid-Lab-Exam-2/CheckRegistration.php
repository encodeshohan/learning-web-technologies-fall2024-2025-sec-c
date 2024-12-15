<?php
session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $id = $_POST['id'];
        $pass = $_POST['pass'];
        $conpass = $_POST['conpass'];
        $name = $_POST['name'];

        if(empty($id) || empty($pass) || empty($conpass) || empty($name) || !isset($_POST['U'])){
            echo "Please Fill the Input Field!";
        }
        elseif($pass !== $conpass){
            echo "Password and Confirm Password does Not Match";
        }
        else{
            if (!isset($_SESSION['users'])) {
                $_SESSION['users'] = [];
            }

            $user_data = [
                'id' => $id,
                'pass' => $pass,
                'conpass' => $conpass,
                'name' => $name,
            ];
    
            $_SESSION = $user_data;
            
            header('Location: Login.html');
            exit();
        }
    } 
    else 
    {
        echo("Invalid");
    }
?>