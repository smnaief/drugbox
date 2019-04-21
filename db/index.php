<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/mobile.css">

	</head>
	<body>


		<div class="contain">
            
            
			<div class="header_panel"> 
                
                <?php
                    include "header-menu.php";
                ?>
			</div>
            
            
            
            <div class="slider" id="slider" style="display: none;">
                
                <div class="row">
                
                    <div class="w3-content w3-section" style="width:100%; height:420px;">
                      <img class="mySlides" src="image/pic1.jpg"  >
                      <img class="mySlides" src="image/pic2.jpg"  >
                      <img class="mySlides" src="image/pic3.jpg"  >
                    </div>

                </div> 
                
            </div>
            
            
            
            
            <div class="body_panel" id="body_panel" style="display: none;">
                
                <div class="allPromotions">
                    <div class="row">
                        <div class="sign-log col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            <h1>Welcome</h1>
                            <a href="login.php">Log in</a>
                            <a href="signup.php">Register</a>
                        </div>

                        <div class="best-seeling-product col-xs-12 col-sm-5 col-md-5 col-lg-5">
                            <h1>About</h1>
                            <p>We are trying to bring all the medicines available<br>
                            <br>
                            Only we can provide products in the fastest time possible.
                            <br>
                            Thank you !!!!
                            </p>
                        </div>

                        <div class="top-view col-xs-12 col-sm-5 col-md-5 col-lg-5">
                            <h1>Contact Us</h1>
                            <p>Mail us : info@drugboxbd.com</p>
                            <br>
                            <p>Phone : 0000000000</p>
                        </div>


                    </div>
                </div>
            </div>
		</div>



	</body>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/custom.js"> </script>
    
    
    
    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>
</html>