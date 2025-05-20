<?php
 	$conn=mysqli_connect("localhost","root","","Car");

    if ($conn)
    {
        echo "<br><br>Connected To Server Successfully!";
    }
    else
    {
        echo "<br><br>Connection To Server Failed!";
        exit();
    }

	$q1="CREATE VIEW AdminCarBookingView AS SELECT 
         b.book_id,
         b.car_id,
         c.car_name,
         c.car_brand,
         c.car_type,
         c.car_fuel,
         b.number_of_passengers,
         b.pickup_date,
         b.pickup_time,
         b.dropoff_date,
         b.dropoff_time,
         b.pickup_location,
         b.dropoff_location
    FROM 
        booked_cars b
    JOIN 
        cars c ON b.car_id = c.car_id";

    $r1=mysqli_query($conn,$q1);
    if($r1)
    {
        echo "<br><br>Admin Car Booking View Created Successfully!!";
    }
    else
    {
        echo "<br><br>View Not Created!";
    }

    mysqli_close($conn);
?>
