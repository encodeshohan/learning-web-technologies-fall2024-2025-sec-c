<?php
require_once('../model/user_model.php');
    $uname = $_REQUEST['uname'];
    $user_info = user_info($uname);
    $ename = $user_info['ename'];
    $cname = $user_info['cname'];
    $contact = $user_info['contact'];
    $uname = $user_info['uname'];
    $pass = $user_info['password'];
?>

<html>
    <head>
        <title>Edit Employee Info</title>
    </head>

    <body>

    <table align="center" >
    <form action="../controller/edit_user_check.php?id=<?php echo $idd  ?>&idt=<?php echo $idt ?>" method="POST">
        <tr align="center">
            <td align="center" colspan="2"><h1>Welcome to Edit Page!</h1></td>
        </tr>

        <tr>
            <td>Employee Name</td>
            <td><input type="text" disabled value="<?php echo $ename ?>" id="old_ename"></td>
        </tr>
        <tr>
            <td>New Employee Name</td>
            <td><input type="text"  name="new_ename" id="new_ename1"></td>
        </tr>

        <tr>
            <td>Company Name</td>
            <td><input type="text" disabled value="<?php echo $cname ?>" id="old_cname"></td>
        </tr>
        <tr>
            <td>New Company Name</td>
            <td><input type="text"  name="new_cname" id="new_cname1"></td>
        </tr>

        <tr>
            <td>Contact No</td>
            <td><input type="text" disabled value="<?php echo $contact ?>" id="old_contact"></td>
        </tr>
        <tr>
            <td>New Contact No</td>
            <td><input type="text"  name="new_contact" id="new_contact1"></td>
        </tr>

        <tr>
            <td>Username</td>
            <td><input type="text" disabled value="<?php echo $uname ?>" id="old_uname"></td>
        </tr>
        <tr>
            <td>New Username</td>
            <td><input type="text"  name="new_uname" id="new_uname1"></td>
        </tr>
        <tr>
        <tr>
            <td>Password</td>
            <td><input type="text" disabled value="<?php echo $pass ?>"></td>
        </tr>
        <tr>
            <td>New Password</td>
            <td><input type="text"  name="new_password" id="new_password1"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" name="submit" onclick="edit_user(event)"> &nbsp; &nbsp; &nbsp;<input type="reset" value="Reset" name="reset"></td>
        </tr>
        </form>
    </table>
    <p id="display"></p>
    <script src="../asset/js/edit_user.js"></script>
        
       
    </body>
</html>