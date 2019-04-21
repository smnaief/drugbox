<?php
   error_reporting(0);
    include "database.php";
   session_start();

    $for="";

    if(isset($_GET['for'])){ 
        $for= $_GET['for'];
    }
    else{
        $for="";
    }

    

    if(isset($_POST["buyClick"])){ 
        
        if(isset($_SESSION["name"])){ 
            $code=$_POST["code"];
            $user=$_SESSION["id"];  
            $querryOrder="insert into product_order values('','$code','$user',NOW(),'')";
 
            if($conn->query($querryOrder)===TRUE){ 
           }
           else{ 
              echo "Try again";
           }
        }
        else{
            header('Location:login.php');
        }
        
        
        
    }

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Fever</title>

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
            
             
            <div class="title-what" id="tw" style="display: none;">
                <h1>Analgesic Medicine</h1>
            </div>
            
            
            
            <div class="body_panel-for-product">
                
                <div class="container">
                    <div class="row">
                        <div class="left-bars col-xs-2 col-sm-2 col-md-2 col-lg-2" id="pm-l" style="display: none;">
                            <?php
                                include "product-menus.php";
                            ?>
                        </div>
                        
                        
                        
                        <div class="right-bars col-xs-10 col-sm-10 col-md-10 col-lg-10" id="pm-r" style="display: none;">
                            
                            
                            
                            
                             <?php
                            include "database.php"; 
                            $queryForProduct="select * from product where product_cat='anal' ";
                             
                            
                            $result = $conn->query($queryForProduct);
                            $count=0;
                            while($row = $result->fetch_assoc()){
                            
                            if($count==3) {
                                $count=0;
                            }
                            if($count==0){
                                echo '<div class="row">';
                            } 
                            
                        ?>
                            
                            
<!--                            <div class="row">-->
                                <div class="left-product col-xs-12 col-sm-5 col-md-4 col-lg-4">
                                    <div class="product">
                                        <p><?php echo $row["name"];?></p>
                                        <img src='<?php echo 'upload/'.$row["photo"].'.jpg';?>'>
                                        <p><?php echo $row["rate"];?></p>
                                        <form action="<?php echo 'fever.php?for='.$for;?>" method="post">
                                            <input type="text" value='<?php echo $row["id_auto"];?>' name="code" hidden>
                                            <input class="buy_button" type="submit" value="Buy" name="buyClick">
                                        </form>
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
                            ?> 
                            
                            
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