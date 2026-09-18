<?php
include('connect.php');

	$name=$_POST['name'];
    $address=$_POST['address'];
    $qlf=$_POST['qlf'];
	

	if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
    $qlf = mysqli_real_escape_string($db_con, $_POST["qlf"]);
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE staff SET name = '$name', address = '$address', qlf  = '$qlf' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "staff Record Updated Successfully!";
        header("Location:viewstaff.php");
    }else{
        die("Something went wrong");
    }
}

?>