<?php
include_once("connection.php");
?>


  
  <?php
  if(isset($_POST['find'])){
  $search = $_POST['search'];
  
  $query = $conn->prepare("SELECT * FROM product WHERE product_name LIKE '%$search%' ");
	$query->execute();
	
  $count = $query->rowCount();
  
  if($count < 1){
    echo "no records!";
    
  }else
  {
    echo "$count record found! for $search";
  }
  

  
			while($row = $query->fetch()){
        $product_image = $row['product_image'];
				$productName = $row['product_name'];
				$product_discrip = $row['produc_discrip'];
        $price = $row['price'];

    
        echo  "<table border>".
        "<tr>".
        "<td><img src=".$product_image."></td>".
        "<td>".$productName."</td>".
        "<td>".$product_discrip."</td>".
        "<td>".$price."</td>".
        "</tr>".
        "</table>";
      }				
}
?>
