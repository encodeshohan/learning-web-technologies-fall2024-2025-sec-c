<?php
    session_start();
    if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
        header('Location: Login.html');
        exit();
    }

    $user = $_SESSION['user'];
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
                    <?php echo $user['name']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                <?php echo $user['email']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <form method="post" action="home.php">
                        <button type="submit" name="logout">Logout</button>
                    </form>

                    <?php
                    if (isset($_POST['logout'])) {
                        unset($_SESSION['status']); 
                        unset($_SESSION['user']);

                        header('Location: Login.html');
                        exit();
                    }
                    ?>
                </td>
            </tr>
        </table>
    </body>
    </html>