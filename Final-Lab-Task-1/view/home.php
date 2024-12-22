<?php
session_start();
if($_SESSION['status'] == true){
$idd = $_REQUEST['id'];
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'check');
    $sql = "select * from first_check where id = $idd";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
?>
    <html>
        <head>
            <title>Home Page</title>
        </head>
            <body>
                
                <table align="center" border="1" cellspacing="0" width="500px" height="500px">
                    <tr align="center">
                        <td>
                            <h1>Welcome <?php echo $name. "!" ?></h1>
                            <a href="profile.php?id=<?php echo $idd ?>">Profile</a> <br>
                            <a href="change_info.php?id=<?php echo $idd ?>">Change Information</a> <br>
                            <a href="logout.php">Logout</a> <br>
                        </td>
                    </tr>
                </table>    
            </body>
    </html>

<?php
}
else{
    header("location:login.html");
}
?>