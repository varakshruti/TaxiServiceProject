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

	$q1="create table cars(car_id int(10) auto_increment primary key,car_name varchar(20) not null,car_brand varchar(20) not null,
	car_photo varchar(20) not null,car_type varchar(20) not null,car_myear varchar(20) not null,car_seater varchar(10) not null,
	car_fuel varchar(15) not null,car_feature varchar(30) not null)";
    $r1=mysqli_query($conn,$q1);
    if($r1)
    {
        echo "<br><br>Table Cars Created Successfully!!";
    }
    else
    {
        echo "<br><br>Table Cars Failed To Create!";
    }

    mysqli_close($conn);
?>

