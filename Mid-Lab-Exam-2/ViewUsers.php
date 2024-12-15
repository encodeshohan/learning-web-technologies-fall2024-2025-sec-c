<?php

?>

<html>
<head>
    <title>View Users</title>
</head>
<body>
        <table border = "1" cellspacing = "0">
            <tr>
                <td colspan ="3">
                    Users
                </td>
            </tr>

            <td>
                ID
            </td>
            <td>
                NAME
            </td>
            <td>
                USER TYPE
            </td>
            <?php 
                for($i=0; $i<count($users); $i++){
            ?>
            <tr>
                <td><?php echo $users[$i]['id']; ?></td>
                <td><?php echo $users[$i]['name']; ?></td>
                <td><?=$users[$i]['U']?></td>
            </tr>
            <?php } ?>

            <tr align = "right">
                <td colspan= "2">
                    <a href="">GO Home</a>
                </td>
            </tr>
        </table>
</body>
</html>