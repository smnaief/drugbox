<?php 
	include "database.php";

	error_reporting(0);
    
	session_start();
    
    if(isset($_SESSION["name"])){
        
    }
    else{
        $displayData="none";
        header("Location:admin.php");
    }
 ?>







 <!DOCTYPE html>
<html>
	<head>
		<title>Admin: All User</title>

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


		<div class="contaid">
            
            
			<div class="header_panel">
                
                <?php
                    include "header-menu.php";
                ?>
			</div>
            
             
            <div class="title-what">
                <h1>Our Clients</h1>
            </div>
            
            
            
            
            <div class="all-user">
                <?php 
                	include "database.php";

                	$query="select * from user";

                	$result = $conn->query($query);
                    while($row = $result->fetch_assoc()){
                    	echo $row["name"];
                    	echo "<br>";
                    	echo $row["phone"];
                    	echo "<br>";
                    	echo $row["address"];
                    	echo "<br>";
                    	echo "<br>";
                    	echo "<br>";
                    }
                ?>
            </div>
            
            
            
           
		</div>



	</body>
    
    
    
    <script> 
    </script>
</html>