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

    $q1="insert into booked_cars(car_id,user_email,pickup_date,pickup_time,pickup_location,dropoff_date,dropoff_time,dropoff_location,
	number_of_passengers) values('$cid','$uemail','$pdate','$ptime','$plocation','$ddate','$dtime','$dlocation','$passengers')";
    $r1=mysqli_query($conn,$q1);
    if($r1)
    {
        header("Location: bookcar.php");
        exit();
    }
    else
    {
        echo "Data Insertion Failed!";
    }
    mysqli_close($conn);
?>
