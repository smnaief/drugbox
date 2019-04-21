<?php
     error_reporting(0);
    ob_start();
    session_start();
    if(isset($_SESSION["name"])){ 
        header("Location:index.php");
    }
    else{ 
    }
?>





<?php
    
    include "database.php";


    if(isset($_POST["signupClick"])){
        $name=$_POST["name"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];
        $password=$_POST["password"];
        
        
        $querry="insert into user values('','$name','$phone','$address','$password')";
        
        
        if($conn->query($querry)===TRUE){ 
            session_start(); 
            $_SESSION["name"]=$name; 
            $_SESSION["id"]=$phone;
            header("Location:index.php");



        }
        else{
           echo "Try again";
        }
        
    }
 
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Belt</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/mobile.css">

	</head>
	<body>


		<div class="containe">
            
            
			<div class="header_panel">
                
                <?php
                    include "header-menu.php";
                ?>
			</div>
            
             
            <div class="title-what">
                <h1>Sign up</h1>
            </div>
            
            
            
            <div class="body_panel-for-product">
                
                <div class="container">
                   
                     
                    <div class="form-group" style="color: white;">
                        <form action="" method="POST">
                            <label for="usr">Name</label>
                            <input class="form-control" type="text" name="name" required>

                            <label for="usr">Phone</label>
                            <input class="form-control" type="text" name="phone" required>

                            <label for="usr">Address</label>
                            <input class="form-control" type="text" name="address" required>


                            <label for="usr">Password</label>
                            <input class="form-control" type="text" name="password" required>

                            <input type="submit" value="Sign up" name="signupClick" class="btn btn-primary" style="background-color: white; color: black;"> 
                        </form>
                    </div>
                    
                    
			</form>
		</div>
            
            
                        
                        
                </div>
                </div>
            </div>
		</div>



	</body>
    

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/custom.js"> </script>
    
    
    <script> 
    </script>
</html>