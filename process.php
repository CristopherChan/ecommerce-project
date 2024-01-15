<?php
include_once("connection.php");
if(isset($_POST['login'])){
	
	$username = $_POST['uname'];
	$password = sha1($_POST['pword']);
	
	session_start();
	
	$statement = $conn->prepare("SELECT customerID FROM customers WHERE uname = :uname AND pword = :pword");
	$statement->bindParam(':uname',$username);
	$statement->bindParam(':pword',$password);
	$statement->execute();
	
	$count = $statement->rowCount();
	
	if($count > 0){
		while($row = $statement->fetch()){
			$id = $row['customerID'];
			
			$_SESSION['cid'] = $id;
			header("Location:index.php");
			
		}
	} else {
		echo "<script>alert('Sorry, Wrong Username or Password')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}
	
}

?>