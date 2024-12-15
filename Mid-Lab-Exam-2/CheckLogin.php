<?php
    session_start();
    if(isset($_REQUEST['submit']))
    {
        
        $id = trim($_POST['id']);
        $pass = trim($_REQUEST['pass']);

        if($id == null || empty($pass))
        {
            echo("Null Id/Password!");

        }
        else if ($id === $_SESSION['id'] && $pass === $_SESSION['pass']) 
        {
            $_SESSION['status'] = true;
            header('location: User.php');
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