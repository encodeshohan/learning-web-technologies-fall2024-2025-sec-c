<?php
session_start();
require_once('../model/usermodel.php');
if(isset($_POST["signup"])){

$id = trim($_POST["id"]);
$password = trim($_POST["password"]);
$name = trim($_POST["name"]);
$email = trim($_POST['email']);

if(empty($id) || empty($name) || empty($email) || empty($password)){
    echo "<h3>Input Fields can not be Emtpy!!</h3>";
}
else{
    if(!isset($_SESSION['users'])){
        $_SESSION['users'] = [];
    }
     $addUser = addUser($name, $password, $id, $email);
     if($addUser){
        header("location:../view/login.html");
     }
     else{
        header("location:../view/reg.html");
     }
}

}
else{
    header("location:../view/reg.html");
}

?>