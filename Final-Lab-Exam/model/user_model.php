<?php
function get_connection(){

    $conn = mysqli_connect("127.0.0.1", "root", "", "crud" );
    return $conn;
}

/*function add_user($name, $password, $email, $age)
{
    $conn = get_connection();
    $sql = "insert into user values ('$name', '$password', '$email', '$age')";
    $result = mysqli_query($conn, $sql);
    return $result;
}*/

function add_user($ename, $cname, $contact,  $uname, $password)
{
    $conn = get_connection();
    $sql = "insert into einfo values ('$ename', '$cname', '$contact', '$uname', '$password')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function login($uname, $password){
    $conn = get_connection();
    $sql = "select * from einfo where uname = '{$uname}' and password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        return true;
    }
    else{
        return false;
    }
}

function show_users(){
    $conn = get_connection();
    $sql = "select * from einfo";
    $result = mysqli_query($conn, $sql);
    return $result;
    // while($row = mysqli_fetch_assoc($result)){
    //     echo "<br>";
    //     print_r($row);
    // }
}

function user_info($uname){
    $conn = get_connection();
    $sql = "select * from einfo where uname = '$uname'";
    $result = mysqli_query($conn, $sql);
    // var_dump($result);

    $row = mysqli_fetch_assoc($result);
    return $row; 
}


function change_user($old_uname, $new_ename, $new_cname, $new_contact, $new_uname, $new_password) {
    $conn = get_connection();
    $sql = "update einfo set ename = '$new_ename', cname = '$new_cname', contact = '$new_contact', uname = '$new_uname', password = '$new_password' where uname = '$old_uname'";
    $result = mysqli_query($conn, $sql);
    return $result;
}


function delete_user($uname){
    $conn = get_connection();
    $sql = "delete from einfo where uname = '$uname'";
    $result = mysqli_query($conn, $sql);
    return $result;
}


?>