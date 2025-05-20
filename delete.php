<?php
	$ID=$_POST["cid"];
	$conn=mysqli_connect("localhost","root","","Car");

    if (!$conn)
    {
        echo "<br><br>Connection To Server Failed!";
        exit();
    }

    $q1="delete from cars where car_id='$ID'";
    $r1=mysqli_query($conn,$q1);
    if($r1)
    {
        echo "<script>alert('Car Deleted Successfully!');</script>";
        echo "<script>window.location.href = 'deletedata.php';</script>";
        exit();
    }
?>
