<?php
    include "database.php";

    
	session_start();
    $button="";
    $user="Guest";

    if(isset($_SESSION["name"])){
        $user=$_SESSION["name"];
        $button='<a href="logout.php">Log out</a>';
    }
    else{
        $user="Guest";
        $button='';
    }
?>





                <div class="logo" id="logo1" style="display: none;">
                    <img src="image/logo1.png">
                </div>
                
                <div class="logo-info" id="logo2" style="display: none;">
                    <img src="image/logo-info.png">
                </div>
                
                <div class="menu" id="menu" style="display: none;">
                    <div class="row">
                        <div class="ropm col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <a href="index.php">Home</a>
                        </div>
                        
                        <div class="pm col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <a href="products.php">Products</a>
                        </div>
                        
                        <div class="nm col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <a href="user.php"><?php echo $user;?></a>
                            <a href="user.php"><?php echo $button;?></a>
                        </div>
                        
                        <div class="sm col-xs-12 col-sm-3 col-md-3 col-lg-3">
<!--                            <input type="text" placeholder="search">-->
                            
                            <h5 style="color: white;">Thank you !!!</h5>
                        </div>
                    </div>
                </div>