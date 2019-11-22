

<?php

include 'includes/dbh.inc.php';


?>

<html>
<head>
<title> Menu </title>
<link rel="stylesheet" type="text/css" href="page1.css">
</head>

<body>

<header>
    <div class="main">
    <div class="logo">
        <img src="logo.jpg">
    </div>
    <ul>
				<li> <a href="index.php">  Home </a> </li>
				<li> <a href="soap.php">Soap</a> </li>
				<li> <a href="shampoo.php"> Shampoo </a> </li>
				<li"> <a href="drugs.php"> Drugs </a> </li>
				<li> <a href="kidscare.php"> Kids Care</a> </li>
				<li> <a href="women.php"> Women</a> </li>
				<li class="active"> <a href=cart.php> Cart </a> </li>
		</ul>
    </div>


    <div class="title">
    <h1> NITAI MEDICAL SHOP</h1>
    </div>

    <div class="main-heading">
        <h2> CART </h2>
    </div>
</header>
<div class = "products">
<?php
    $sql = "select * from bill;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<h4 class='product-name'>".$row['name']."---------------------------------".$row['price']."</h4><br>";
        }
    }
 ?>
 <h4 class='product-name'> Total Price  :</h4>
 <?php
	$sql1 = "select sum(price) as sum1 from bill;";
    $result1 = mysqli_query($conn,$sql1);
    $resultCheck1 = mysqli_num_rows($result1);
    if($resultCheck1>0){
        while($row = mysqli_fetch_assoc($result1)){
            //echo "hello";
            echo "<h4 class='product-name'>".$row['sum1']."</h4>";
        }
    }

?>
 </div>

</body>
</html>
