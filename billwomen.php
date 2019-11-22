<?php
    include 'includes/dbh.inc.php';
    $x=1;
    $sql1 = "select * from women;";
		$result1 = mysqli_query($conn,$sql1);
        $resultCheck1 = mysqli_num_rows($result1);
    if($resultCheck1>0)
    while($row = mysqli_fetch_assoc($result1)){
        if(isset($_GET["call$x"])){

            $sql = "Insert into bill values('".$row['name']."',".$row['price'].");";
            mysqli_query($conn,$sql);
            echo $x;


        }

        $x=$x+1;
    }
    //echo "hello";
    header("Location: purchase.html?entry=success");

?>