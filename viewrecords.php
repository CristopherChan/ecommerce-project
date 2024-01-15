<?php
include_once("connection.php");
session_start();
include_once("session.php");


?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration Form</title>
</head>

<body>
<h1>All Records</h1>
<h3>Hello Welcome <?php echo $pangalan." ".$apelyido;?></h3>
<a href="index.php">Add Records</a> | <a href="viewrecords.php">View Records</a> | <a href="logout.php">Logout</a><br><br>

<table border>
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Username</th>
			<th>Picture</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$select = $conn->prepare("SELECT * FROM customers");
			$select->execute();
			
			while($row = $select->fetch()){
				$id = $row['customerID'];
				$firstN = $row['fname'];
				$last = $row['lname'];
				$email = $row['email'];
				$username = $row['uname'];
				$password = $row['pword'];
				$picture = $row['img'];
				
			
		?>
		<tr>
			<td><?php echo $firstN." ".$last;?></td>
			<td><?php echo $email;?></td>
			<td><?php echo $username;?></td>
			<td><?php echo $password;?></td>
			<td><img src="upload/<?php echo $picture;?>" alt="Picture" width="100"></td>
			<td><a href="edit.php?uid=<?php echo $id;?>">Edit</a> | <a href="delete.php?uid=<?php echo $id;?>" onclick="return confirm('Are you sure?')">Delete</a></td>
		</tr>
			<?php } ?>
	</tbody>
</table>
</body>
</html>