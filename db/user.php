<?php
    ob_start();
    session_start();
    if(empty($_SESSION["name"])){ 
        header("Location:products.php");
    }
    else{ 
//        session_destroy();
//        header("Location:index.php");
    }
?>



<!DOCTYPE html>
<html>
	<head>
		<title>My Product</title>

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
            
             
            <div class="title-what">
                <h1>My Poducts</h1>
            </div>
            
            
            
            <div class="body_panel-for-product">
                
                <div class="container">
                   
                        
                            



                            
                             <?php
                            include "database.php"; 

                            $user=$_SESSION["id"];

                            $querryForBuyProduct="select * from product_order where user_id='$user'";
                            $resultBuy = $conn->query($querryForBuyProduct);
                            $count=0;

                            while($rowBuy=$resultBuy->fetch_assoc()){
                                $pro_code=$rowBuy["product_id"];
                                // echo $pro_code;



                            $queryForProduct="select * from product where id_auto='$pro_code'";
                             
                            
                            $result = $conn->query($queryForProduct);
                            


                            while($row = $result->fetch_assoc()){
                            
                            if($count==3) {
                                $count=0;
                            }
                            if($count==0){
                            } 
                            
                        ?>
                            
                            
<!--                            <div class="row">-->
                                <div class="left-product ">
                                    <div class="productForBuy">
                                        <p><?php echo $row["name"];?></p>
                                        <img src='<?php echo 'upload/'.$row["photo"].'.jpg';?>'>
                                        <p><?php echo $row["rate"];?></p>
                                        <!-- <form>
                                            <input type="text" value='<?php echo $row["id_auto"];?>' hidden>
                                            <input class="buy_button" type="submit" value="Buy">
                                        </form> -->
                                    </div>
                                </div>
                            
                            <?php
                                
                                        if($count==2) {
                                            echo '</div>';
                                        }
                                        if($count==0){
        //                                    echo '<div class="row">';
                                        } 
                                        
                                        $count=$count+1;
                                    }


                                     if($count==2) {
                                        }
                                        if($count==0){
        //                                    echo '<div class="row">';
                                        } 
                                        
                                        $count=$count+1;


                                }
                            ?>


                            
                        </div>
                        
                        
            </div>
		</div>



	</body>
    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/custom.js"> </script>
    
    <script> 
    </script>
</html>