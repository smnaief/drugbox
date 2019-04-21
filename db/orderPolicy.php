<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.myDrive{
		display: block;
		margin-top: 20px;
	}
</style>
<body>

</body>
</html>

<?php 
	include "database.php";
	session_start();

	if(isset($_SESSION["name"])){
		$querryForOrder="SELECT * from product_order";
		$run_querryForOrder=$conn->query($querryForOrder);
		 while($array1 = $run_querryForOrder->fetch_assoc()){
			$index=$array1["id_auto"];
			$product_code=$array1["product_id"];
			$user_code=$array1["user_id"];
			$report=$array1["report"];
			if($report=="ok"){
				$deliveryValue="Delivered";
				$deliveryName="not";
			}
			else{
				$deliveryValue="Not Delivered";
				$deliveryName="yes";
			}
            
            
            $queryForProduct="select * from product where id_auto='$product_code'";
            
            $result = $conn->query($queryForProduct);
            $image="";
            while($row = $result->fetch_assoc()){
                $image='upload/'.$row["photo"].'.jpg';
            }
            
            
			

			echo "
			<div class='myDrive'>
				<form action='orderPolicy.php' method='POST'>
				<img src='$image' altr='No image' style='width:30%;'>
				<input type='text' name='index' value='$index'  hidden></input>
				Product: <input type='text' name='' value='$product_code' readonly></input>
				User: <input type='text' name='' value='$user_code' readonly ></input>
				<input class='buyButton' type='submit' value='$deliveryValue' name='$deliveryName'>
				</form>
			</div>
				";
		}
	}
	else{
		echo "Log in first";
	}


	if(isset($_POST["not"])){
		echo "string ee";
		$index=$_POST["index"];
		echo $index;
		$querryNotDeli="UPDATE product_order SET report='' WHERE id_auto=$index";
//		$run_querryNotDeli=mysql_query($querryNotDeli);
        
        
        if($conn->query($querryNotDeli)===true){
            echo " Updated ";
            header('Location:orderPolicy.php');
        }
        else{
            echo " Not updated ";
        }
        
//        
//		if($run_querryNotDeli){ 
//			header('Location:orderPolicy.php');
//		}
//		else{
//			echo "Problem";
//		}
	}


	if(isset($_POST["yes"])){
		if(!empty($_POST["index"])){
		$in=$_POST["index"];
	}
		echo $in;
		$val="ok";
		$querryDeli="UPDATE product_order SET report='$val' WHERE id_auto=$in";
//		$run_querryDeli=mysql_query($querryDeli);
        
        if($conn->query($querryDeli)===true){
            echo " Updated ";
            header('Location:orderPolicy.php');
        }
        else{
            echo " Not updated ";
        }
        
        
//		if($run_querryDeli){
//			header('Location:orderPolicy.php');
//		}
//		else{
//			echo "Problem";
//		}
	}
 ?>