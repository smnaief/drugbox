<?php 
     error_reporting(0);
	session_start();
    
    if(isset($_SESSION["name"])){
        $displayData="block";
    }
    else{
        $displayData="none";
    }
    



	include "database.php"; 
	if(isset($_POST["adminClick"])){
		$username=$_POST["adminName"];
		$password=$_POST["adminPassword"];
 
        $qerryForAdmin="SELECT * FROM admin_panel WHERE username='$username' AND password='$password'";
         
        $result = $conn->query($qerryForAdmin);
        $row_cnt = $result->num_rows;
        if($row_cnt>0){ 
            $displayData="block";
            $_SESSION["name"]="admin";
        }
        else{
            echo "Wromg password";
        }
		 
	}

 ?>








<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/mobile.css">

	</head>
    
    <style>
        .menu{
            display: none;
        }
    </style>
	<body>


		<div class="containe">
            
            
			<div class="header_panel">
                
                <?php
                    include "header-menu.php";
                ?>
			</div>
            
             
            <div class="title-what">
                <h1>Admin Panel Log in</h1>
            </div>
            
            
            <div class="admin-panel">
                <form action="admin.php" method="POST">
                    User Name : <input type="text" name="adminName" placeholder="admin username"  ></input>
                    Password : <input type="text" name="adminPassword" placeholder="admin password"  ></input>
                    <input class="buy_button" type="submit" name="adminClick" value="Log In"></input>
                    <input class="buy_button" type="submit" name="logout" value="Log Out" style='display:<?php echo $displayData; ?>'></input>
                </form>
            </div>



            <div class="adminform" style='display:<?php echo $displayData; ?>'>
                <h1><a href="upload.php" target="_blank">Upload Product</a></h1> 
                <h1><a href="allUser.php" target="_blank">All User</a></h1> 
                <h1><a href="orderPolicy.php" target="_blank">Order policy</a></h1> 
            </div>




<?php 
	if (isset($_POST["logout"])) { 
		session_destroy();
        header("Location:admin.php");
	}
 ?>
           
		</div>



	</body>
    
    
    
    <script> 
    </script>
</html>