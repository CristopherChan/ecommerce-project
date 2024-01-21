<?php
session_start();
include_once("session.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration Form</title>
</head>

<body>
    
<h1>Registration Form</h1>
<h3>Hello Welcome <?php echo $pangalan." ".$apelyido;?></h3> <img src="upload/<?php echo $picture;?>" alt="User Profile" width="70">
<a href="viewrecords.php">View Records</a> | <a href="logout.php">Logout</a><br><br>

<form action="search.php" method="post">
<input type="text" placeholder="search here..." name="search">
<input type="submit" name="find" id="find" value="search">

</form>
<br>
<form action="insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Firstname</td>
            <td><input type="text" name="fname" placeholder="Enter First Name" required></td>
        </tr>
        <tr>
            <td>Lastname</td>
            <td><input type="text" name="lname" placeholder="Enter LastName" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" placeholder="Enter Email" required></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="uname" placeholder="Enter Username" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pword" placeholder="Enter Password" required></td>
        </tr>
        <tr>
            <select name="user_type">
                <option value="admin">Admin</option>
                <option value="user">user</option>
            </select>
        </tr>
		<tr>
            <td>Picture</td>
            <td><input type="file" name="img" accept="image/*" required></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="register" value="Register"></td>
        </tr>
    </table>
</form>
</body>
</html>