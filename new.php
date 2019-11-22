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
				<li class="active"> <a href="index.php">  Home </a> </li>
				<li> <a href="soap.php">Soap</a> </li>
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
    </header>
    
    <div class="new-entry"><form action = "submit.php">
        ProductName:
        <input type="text" name="name" placeholder="ProductName"><br>
        Price:
        <input type="text" name="Price" placeholder="Price"><br>
        Quantity:
        <input type="text" name="Quantity" placeholder="Quantity"><br>
        <input type="radio" name="type" value="Soaps" checked> Soaps
        <input type="radio" name="type" value="Shampoo"> Shampoo<br>
        <input type="radio" name="type" value="Drugs"> Drugs
        <input type="radio" name="type" value="KidsCare"> KidsCare<br>
        <input type="radio" name="type" value="Women"> Women<br>
        <button type="submit" class="main-button"> Done</button>
    </form></div>
    <?php

       

    ?>

    
</body>
</html>
