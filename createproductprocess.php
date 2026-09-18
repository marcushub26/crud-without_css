<?php
include('connect.php');

	$name=$_POST['name'];
    $address=$_POST['address'];
	$email=$_POST['email'];
    
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $address= mysqli_real_escape_string($db_con, $_POST["address"]);
    $email= mysqli_real_escape_string($db_con, $_POST["email"]);
    
    $sqlInsert = "INSERT INTO product(name, address ,email) VALUES ('$name','$address','$email')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "product Added Successfully!";
        header("Location:viewproduct.php");
    }else{
        die("Something went wrong");
    }
}


    


?>