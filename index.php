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
		</div>


		<div class="title">
		<h1> NITAI MEDICAL SHOP</h1>
		</div>

		<div class="button">
			<a href="newcustomer.html" class="btn"> New Customer</a>
			<a href="logincustomer.php" class="btn"> Start Purchasing</a>
			<a href="admin.php" class="btn">New Entry</a>
	</header>
	<?php
			$sql = "delete from bill;";
			mysqli_query($conn,$sql);
	?>

</body>
</html>
