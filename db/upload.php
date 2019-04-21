
<?php 
	include "database.php";

    
	session_start();
    
    if(isset($_SESSION["name"])){
        
    }
    else{
        $displayData="none";
        header("Location:admin.php");
    }
    






    if(isset($_POST["productSubmitClick"])){ 
        
			$temp=$_FILES['productPicture']['tmp_name'];
			$name=$_POST["productName"]; 
			$rate=$_POST["productRate"];
			$about=$_POST["productAbout"];
			$catagory=$_POST["productCatagory"];
            
            $photo=microtime();
			$location="upload/";

			if(move_uploaded_file($temp, $location.$photo.".jpg")){
				$querryInsert="INSERT INTO product VALUES ('','$name','$rate',
					'$about','$catagory','$photo')";
                
//				$run_querryInsert=mysql_query($querryInsert);
                
				if($conn->query($querryInsert)===TRUE){
                    echo "Added";
				}
				else{
					echo "Problem1";
				}

			}
			else{
				echo "Problem2";
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


		<div class="contain">
            
            
			<div class="header_panel">
                
                <?php
                    include "header-menu.php";
                ?>
			</div>
            
             
            <div class="title-what">
                <h1>Upload Product</h1>
            </div>
            
            
            
            
            <div class="upload-product">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <label>Select your image</label> <br>
                    <input type="file" name="productPicture" required></input> <br>
                    <label>Name</label> <br>
                    <input type="text" name="productName" required></input> <br> 
                    <label>Rate</label> <br>
                    <input type="text" name="productRate" required></input> <br>
                    <label>About</label><br>
                    <textarea  name="productAbout" required></textarea> <br>
                    <label>Product Catagory</label><br>
                    <select name="productCatagory">
                        <option value="fever">Fever</option>
                        <option value="ulcer" selected>Ulcertic</option>
                        <option value="hypertension">Hypertension</option>
                        <option value="diabetic">Diabetics</option>
                        <option value="sleeping">Sleeping Pill</option>
                        <option value="anal">Analgesic</option>
                    </select> <br> 

                    <!-- <label>Product for</label><br>
                    <select name="productFor">
                        <option value="boys" selected>Boy</option>
                        <option value="girls">Girl</option>
                        <option value="kids">Kid</option> 
                    </select> <br><br> -->
                    <input type="submit" name="productSubmitClick"></input>

                </form>
            </div>
            
            
            
           
		</div>



	</body>
    
    
    
    <script> 
    </script>
</html>