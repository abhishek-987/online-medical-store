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
				<li class="active"> <a herf="index.php">  Home </a> </li>
				<li> <a href="soap.php">Soap</a> </li>
				<li> <a herf="#"> Shampoo </a> </li>
				<li> <a herf="#"> Drugs </a> </li>
				<li> <a herf="#"> First Aid </a> </li>
				<li> <a herf="#"> Kids Care</a> </li>
				<li> <a herf="#"> Women</a> </li>
				<li> <a herf="#"> Cantact </a> </li>
		</ul>
		</div>


		<div class="title">
		<h1> NITAI MEDICAL SHOP</h1>
		</div>
    </header>
    
    <div class="new-entry"><form action = "submit.php">
        ProductName:
        <input type="text" name="name" placeholder="Soapname"><br>
        Price:
        <input type="text" name="Price" placeholder="Price"><br>
        Quantity:
        <input type="text" name="Quantity" placeholder="Quantity"><br>
        <input type="radio" name="type" value="Soaps" checked> Soaps<br>
        <input type="radio" name="type" value="Shampoo"> Shampoo<br>
        <input type="radio" name="type" value="Drugs"> Drugs
        <button type="submit"> Done</button>
    </form></div>
    <?php

       

    ?>

    
</body>
</html>
