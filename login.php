
<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration Form</title>
</head>

<body>
<h1>Security Access</h1>
<form action="process.php" method="post">
    <table>
        
        <tr>
            <td>Username</td>
            <td><input type="text" name="uname" placeholder="Enter Username" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pword" placeholder="Enter Password" required></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="login" value="Sign In"></td>
        </tr>
    </table>
</form>
</body>
</html>