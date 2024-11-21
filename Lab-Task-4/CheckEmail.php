<?php
    $email = $_POST["email"];
    $check = strpos($email, ".com");

    if(empty($email)){
        echo "Please Enter an Email";
    }
    else if($check == null){
        echo "Invalid Email";
    }
    else{
        echo("Email : " . $email);
    }
?>