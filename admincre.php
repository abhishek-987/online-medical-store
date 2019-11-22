<?php
    include 'includes/dbh.inc.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username=='admin'&&$password=='admin') header("Location: new.php?entry=fail");
    else header("Location: admin.php?entry=fail");

?>