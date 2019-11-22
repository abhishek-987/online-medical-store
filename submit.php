<?php
    include 'includes/dbh.inc.php';
    $name = $_GET['name'];
    $price = $_GET['Price'];
    $quantity = $_GET['Quantity'];
    if($_GET['type']=='Soaps')
    $sql = "Insert into soaps(name,price,quantity) values('$name',$price,$quantity);";
    else if($_GET['type']=='Shampoo')
    $sql = "Insert into shampoo(name,price,quantity) values('$name',$price,$quantity);";
    else if($_GET['type']=='Drugs')
    $sql = "Insert into drugs(name,price,quantity) values('$name',$price,$quantity);";
    else if($_GET['type']=='KidsCare')
    $sql = "Insert into kidscare(name,price,quantity) values('$name',$price,$quantity);";
    else if($_GET['type']=='Women')
    $sql = "Insert into women(name,price,quantity) values('$name',$price,$quantity);";
    mysqli_query($conn,$sql);
    header("Location: index.php?entry=success");

?>