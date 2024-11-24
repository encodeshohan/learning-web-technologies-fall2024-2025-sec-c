<?php
    session_start();
    //echo $_SESSION['user']['username'];
    if(isset($_REQUEST['submit']))
    {
        
        $username = trim($_POST['username']);
        $password = trim($_REQUEST['password']);

        if($username == null || empty($password))
        {
            echo("Null username/password!");

        }
        else if ($username === $_SESSION['username'] && $password === $_SESSION['password']) 
        {
            /*$_SESSION['users'][$name] = $user_data;
            $_SESSION['user'] = $user_data;
            $_SESSION['status'] = true;*/

            //print_r($user_data);
            $_SESSION['status'] = true;
            header('location: home.php');
        }
        else
        {
            echo("invalid user!");
        }
    }
    else
    {
        header('location: login.html');
    }

?>