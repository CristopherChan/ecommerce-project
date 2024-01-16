<?php
include_once("connection.php");
?>


  
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
        
        echo "<table border>
        <tr>
        <td>$productName</td>
        <td>$price</td>
        </tr>
        </table>";
          
      }				
}
?>
