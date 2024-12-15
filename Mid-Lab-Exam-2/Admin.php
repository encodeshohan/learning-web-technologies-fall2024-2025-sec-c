<?php
    session_start();
    if ($_SESSION['status'] != true) {
        header('Location: Login.html');
    }
    ?>

    <html>
    <head>
        <title>Admin Page</title>
    </head>
    <body align = "center">
        <h1>Welcome <?php echo $_SESSION['name'];?> !</h1>
        <br>
        <p><a href="Profile.php">Profile</a></p>
        <p><a href="ChangePassword.php">Change Password</a></p>
        <p><a href="ViewUsers.php"> View users</a></p>
        <p><a href="Logout.php"> Logout</a></p>

    </body>
    </html>
