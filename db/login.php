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


    if(isset($_POST["loginClick"])){ 
        $phone=$_POST["phone"]; 
        $password=$_POST["password"];
        
        
        $querry="SELECT * FROM user WHERE phone='$phone' AND password='$password'";;
        
        
        $result = $conn->query($querry);
        $row_cnt = $result->num_rows;
        if($row_cnt>0){  
            session_start();
            while($row = $result->fetch_assoc()){
                $_SESSION["name"]=$row["name"];
            }
            $_SESSION["id"]=$phone;
            header("Location:index.php");
        }
        else{
            echo "Wromg password";
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


		<div class="container-fluid">
            
            
			<div class="header_panel">
                
                <?php
                    include "header-menu.php";
                ?>
			</div>
            
             
            <div class="title-what">
                <h1>Log in</h1>
            </div>
            
            
            
            <div class="body_panel-for-product">
                
                <div class="container">
                   
                     
                    <div class="form-group">
                        <form action="" method="POST"> 

                            <label for="usr">Phone</label>
                            <input class="form-control" type="text" name="phone" required> 

                            <label for="usr">Password</label>
                            <input class="form-control" type="text" name="password" required>

                            <input type="submit" value="Log in" name="loginClick" class="btn btn-primary"> 
                        </form>
                        
                        <a href="signup.php" style="color: white;">Sign Up</a>
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