<?php
include('connect.php');

	$name=$_POST['name'];
    $age=$_POST['age'];
	$address=$_POST['address'];
    
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
    $qlf= mysqli_real_escape_string($db_con, $_POST["qlf"]);
    
    $sqlInsert = "INSERT INTO staff(name, address ,qlf) VALUES ('$name','$address','$qlf')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "staff A dded Successfully!";
        header("Location:viewstaff.php");
    }else{
        die("Something went wrong");
    }
}


    


?>