<?php
    $cid=$_POST["carid"];
    $uemail=$_POST["email"];
    $pdate=$_POST["date"];
    $ptime=$_POST["time"];
    $plocation=$_POST["ploc"];
    $ddate=$_POST["ddate"];
    $dtime=$_POST["dtime"];
    $dlocation=$_POST["dloc"];
    $passengers=$_POST["nop"];

	$conn=mysqli_connect("localhost","root","","Car");
    if (!$conn)
    {
        echo "<br><br>Connection To Server Failed!";
        exit();
    }

    $q1="update booked_cars set car_id='$cid',user_email='$uemail',pickup_date='$pdate',pickup_time='$ptime',pickup_location='$plocation',
	dropoff_date='$ddate',dropoff_time='$dtime',dropoff_location='$dlocation',number_of_passengers='$passengers' where user_email='$uemail'";
    $r1=mysqli_query($conn,$q1);
    if($r1)
    { 
        echo "<script>alert('Booking Details Updated Successfully!');</script>";
        echo "<script>window.location.href='bookupdate.php';</script>";
        exit();
    }

    mysqli_close($conn);
?>
