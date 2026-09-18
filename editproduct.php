<!DOCTYPE html>
<html>
<head>
<title>edit product Information </title>
 <link rel="icon" href="pic.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<center>
<body>
    <center><h1>EDIT PRODUCT RECORD</h1></center>
        <form action="editproductprocess.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM product WHERE id=$id";
                $result = mysqli_query($db_con,$sql);
                $row = mysqli_fetch_array($result);
                ?>
				<P> </P>
				
                     <div class="form-elemnt my-4">
			<label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="name:" value="<?php echo $row["name"]; ?>">
            </div><br>
            <div class="form-elemnt my-4">
			<label for="address">address</label>
                <input type="text" class="form-control" name="address" placeholder="address:" value="<?php echo $row["address"]; ?>">
            </div><br>
			<div class="form-elemnt my-4">
			<label for="email">email</label>
                <input type="text" class="form-control" name="email" placeholder="email:" value="<?php echo $row["email"]; ?>">
                </div><br><br>
             <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Record" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>product Record Does Not Exist</h3>";
            }
            ?>
           
        </form>
      </center>  
        
    </div>
</body>
</html>