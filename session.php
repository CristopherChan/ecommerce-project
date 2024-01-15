
<?php
include_once("connection.php");
if(isset($_SESSION['cid'])){
	$uid = $_SESSION['cid'];
	$userQuery = $conn->prepare("SELECT fname, lname, img FROM customers WHERE customerID = :uid");
	$userQuery->bindParam(':uid', $uid);
	$userQuery->execute();
	
	while($data = $userQuery->fetch()){
		$pangalan = $data['fname'];
		$apelyido = $data['lname'];
		$larawan = $data['img'];
	}
} else {
	header("Location:login.php");
	die();
}
?>