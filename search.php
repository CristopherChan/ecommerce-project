<?php
include_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="main">
  <?php
  if(isset($_POST['find'])){
  $search = $_POST['search'];
  
  $query = $conn->prepare("SELECT * FROM product_tbl WHERE productName LIKE '%$search%' ");
	$query->execute();
	
  $count = $query->rowCount();
  
  if($count < 1){
    echo "no records!";
    
  }else
  {
    echo "$count record found! for $search";
  }
  
  
  
  
  
			while($row = $query->fetch()){
				$productName = $row['productName'];
				$price = $row['productPrice'];

      
      
      }
				
}
?>
<table border>
<tr>
			
			<td><?php echo $productName?></td>
			<td><?php echo $price?></td>
			
		</tr>
</table>
</body>
</html>