<?php

require_once("../model/user_model.php");

$ename = $_REQUEST['ename'];
$cname = $_REQUEST['cname'];
$contact = $_REQUEST['contact'];
$uname = $_REQUEST['uname'];
$password = $_REQUEST['password'];
$confirm_password = $_REQUEST['confirm_password'];


if (empty(trim($ename)) || empty(trim($cname)) || empty(trim($contact)) || empty(trim($uname)) || empty(trim($password)) || empty(trim($confirm_password))) {
    echo "Please fill all the input fields<br>";
}

else if ($password !== $confirm_password) {
    echo "Missmatch Password and confirm password!<br>";
}
// Proceed to add the user
else {
    $result = add_user($ename, $cname, $contact, $uname, $password);
    if ($result) {
        header("Location: ../view/signin.html");
        exit();
    } else {
        echo "Error";
    }
}

?>
