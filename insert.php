<?php
include_once("connection.php");

if(isset($_POST['register'])){
    $fname = htmlentities($_POST['fname']);
    $lname = htmlentities($_POST['lname']);
    $email = htmlentities($_POST['email']);
    $uname = htmlentities($_POST['uname']);
    $pword = sha1($_POST['pword']);
    
    // Check for existing username
    $checkUsernameQuery = $conn->prepare("SELECT customerID FROM customers WHERE uname = :uname");
    $checkUsernameQuery->bindParam(":uname", $uname);
    $checkUsernameQuery->execute();

    // Check for existing email
    $checkEmailQuery = $conn->prepare("SELECT customerID FROM customers WHERE email = :email");
    $checkEmailQuery->bindParam(":email", $email);
    $checkEmailQuery->execute();

    if ($checkUsernameQuery->rowCount() > 0) {
        echo "<script>alert('This username already exists. Please try another username!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } else 
    if ($checkEmailQuery->rowCount() > 0) {
        echo "<script>alert('This email already exists. Please try another email!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } else {

    $imgFile = $_FILES['img']['name'];
    $tmpName = $_FILES['img']['tmp_name'];
    $imgSize = $_FILES['img']['size'];
    
    $upload_dir = "upload/";

    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $validExtensions = array('jpeg', 'jpg', 'png');

    $newname = rand(1000, 100000000).".".$imgExt;

    if(in_array($imgExt, $validExtensions)){
        if($imgSize <5000000){
          move_uploaded_file($tmpName,$upload_dir.$newname);
          
                $query = $conn->prepare("INSERT INTO customers (fname, lname,  email, uname, pword, img) 
                VALUES (:fname,  :lname,  :email, :uname, :pword, :img)");
                $query->bindParam(":fname", $fname);
                $query->bindParam(":lname", $lname);

                $query->bindParam(":email", $email);
                $query->bindParam(":uname", $uname);
                $query->bindParam(":pword", $pword);
                $query->bindParam(":img", $newname);
                $query->execute();

                echo "<script>alert('COMPLETED!')</script>";
                echo "<script>window.open('login.php','_self')</script>";
                echo "<script>alert('File sucessfully uploaded')</script>";
                 echo "<script>window.open('index.php','_self')</script>";
            }else {
                echo "<script>alert('your file is to large')</script>";
                 echo "<script>window.open('index.php','_self')</script>";
            
            }
    } echo "<script>alert('Sorry, only jpeg, jpg and png is allowed')</script>";
    echo "<script>window.open('index.php','_self')</script>";
      }
    }
?>