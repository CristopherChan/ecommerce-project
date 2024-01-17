<?php
include_once("connection.php");
session_start();
include_once("session.php");

$uid = $_GET['uid'];

$select = $conn->prepare("SELECT fname, lname, pword FROM customers WHERE customerID = :id");
$select->bindParam(":id", $uid);
			$select->execute();
			
			while($row = $select->fetch()){
				$firstN = $row['fname'];
				$last = $row['lname'];
                $password = $row['pword'];

			}
			
if(isset($_POST['update'])){
	
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
    $password = $_POST['pword'];

	
	$query = $conn->prepare("UPDATE customers SET fname = :isa, lname = :tatlo, pword = :apat WHERE customerID = :uid");
	$query->bindParam(":isa",$firstname);
	$query->bindParam(":tatlo",$lastname);
    $query->bindParam(":apat",$password);
	$query->bindParam(":uid", $uid);
	$query->execute();
	
	echo "<script>alert('Successfully Updated!')</script>";
	echo "<script>window.open('viewrecords.php','_self')</script>";
	
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration Form</title>
</head>

<body>
<h1>Update Record</h1>
<h3>Hello Welcome <?php echo $pangalan." ".$apelyido;?></h3>
<a href="index.php">Add Records</a> | <a href="viewrecords.php">View Records</a> | <a href="logout.php">Logout</a><br><br>
<form action="" method="post">
    <table>
        <tr>
            <td>Firstname</td>
            <td><input type="text" name="fname" value="<?php echo $firstN; ?>" required></td>
        </tr>
        
        <tr>
            <td>Lastname</td>
            <td><input type="text" name="lname" value="<?php echo $last; ?>" required></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="text" name="pword" value="<?php echo $password; ?>" required></td>
        </tr>
        
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>