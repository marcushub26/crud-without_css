<?php
include('connect.php');

	$name=$_POST['name'];
    $age=$_POST['address'];
    $address=$_POST['email'];
	

	if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
    $email = mysqli_real_escape_string($db_con, $_POST["email"]);
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE product SET name = '$name', address = '$address', email  = '$email' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "product Record Updated Successfully!";
        header("Location:viewproduct.php");
    }else{
        die("Something went wrong");
    }
}

?>