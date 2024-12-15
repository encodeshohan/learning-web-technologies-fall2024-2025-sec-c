<?php
    session_start();
    if ($_SESSION['status'] != true) {
        header('Location: User.php');
    }
    ?>

<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <table align ="center" border="1" cellspacing="0">
        <tr align = "center">
            <td colspan ="2">
                Profile
            </td>
        </tr>

        <tr>
            <td>
                ID
            </td>
            <td>
            <?php echo $id; ?>
            </td>
        </tr>

        <tr>
            <td>
                NAME
            </td>
            <td>
            <?php echo $name; ?>
            </td>
        </tr>

        <tr>
            <td>
                USER TYPE
            </td>
            <td>
            
            </td>
        </tr>
    </table>
</body>
</html>