

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
				<li > <a href="index.php">  Home </a> </li>
				<li class="active"> <a href="soap.php">Soap</a> </li>
				<li> <a href="shampoo.php"> Shampoo </a> </li>
				<li> <a href="drugs.php"> Drugs </a> </li>
				<li> <a href="kidscare.php"> Kids Care</a> </li>
				<li> <a href="women.php"> Women</a> </li>
				<li> <a href="contact.php"> Contact </a> </li>
		</ul>
		</div>


		<div class="title">
		<h1> NITAI MEDICAL SHOP</h1>
		</div>

		<div class="main-heading">
			<h2> SOAPS </h2>
    	</div>
	</header>
	<div class = "products">
	<?php
		$sql = "select * from soaps;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck>0){
			echo "<form action='billsoap.php' method='GET'>";
			$x=1;
			while($row = mysqli_fetch_assoc($result)){
				echo "<input type='radio' name='call".$x."' value='bill'><h4 class='product-name'>".$row['name']."&nbsp".$row['price']."</h4><br><hr>";
				$x=$x+1;
			}

		}
			echo "<button type='submit' class='main-button'> Done</button></form>";
	 ?>
	 </div>

</body>
</html>