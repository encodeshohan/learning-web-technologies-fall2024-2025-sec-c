<?php
    session_start();
    if ($_SESSION['status'] != true) {
        header('Location: Login.html');
        //exit();
    }

    //$user = $_SESSION['user'];
    ?>

    <html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <table align="center">
            <tr>
                <td colspan="2">
                    <h1>Welcom to Home Page</h1>
                </td>
            </tr>
            <tr>
                <td>
                    Name:
                </td>
                <td>
                    <?php echo $_SESSION['name']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                <?php echo $_SESSION['email']; ?>
                </td>
            </tr>
            <tr>
                <td>

                        <button type="submit" name="logout"><a href="Logout.php">Log Out</a></button>
                    

                </td>
            </tr>
        </table>
    </body>
    </html>
