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

	$q1="create table booked_cars(book_id int(10) auto_increment primary key,car_id int(10) not null,user_email varchar(20) not null,
	pickup_date date not null,pickup_time varchar(10) not null,pickup_location varchar(15) not null,dropoff_date date not null,
	dropoff_time varchar(10) not null,dropoff_location varchar(15) not null,number_of_passengers int(15) not null);";
    $r1=mysqli_query($conn,$q1);

    if($r1)
    {
        echo "<br><br>Table booked_cars Created Successfully!!";
    }
    else
    {
        echo "<br><br> Table booked_cars Not Created!";
    }
?>
