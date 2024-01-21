<?php
include_once("connection.php");
if(isset($_POST['login'])){
	
	$username = $_POST['uname'];
	$password = sha1($_POST['pword']);
	
	session_start();
	
	$statement = $conn->prepare("SELECT customerID, user_type FROM customers WHERE uname = :uname AND pword = :pword");
	$statement->bindParam(':uname',$username);
	$statement->bindParam(':pword',$password);
	$statement->execute();
	
	$count = $statement->rowCount();
	
	if($count > 0){
		while($row = $statement->fetch()){
			$id = $row['customerID'];
			$role = $row['user_type'];
			$_SESSION['cid'] = $id;

			if ($role == 'user') {
			header("Location:index.php");
			}else if ($role == 'admin'){
			header("Location:viewrecords.php");
			}
	}
	} else {
		echo "<script>alert('Sorry, Wrong Username or Password')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}
	
}

?>