<?php
    include 'includes/dbh.inc.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "Insert into customer values('$username','$password');";
    mysqli_query($conn,$sql);
    //echo "hello";
    header("Location: purchase.html?entry=success");

?>