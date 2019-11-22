<?php
    include 'includes/dbh.inc.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "select * from customer where username='$username';";
    $result=mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
        $row = mysqli_fetch_assoc($result);
        if($row['password']!=$password) header("Location: logincustomer.php?entry=fail");
        else header("Location: purchase.html?entry=success");
    }
    else header("Location: logincustomer.php?entry=fail");

?>