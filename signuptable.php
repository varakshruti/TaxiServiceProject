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

	$q1="create table user_table(user_name varchar(20) not null,user_gender varchar(20) not null,user_dob date not null,
	user_phone varchar(10) not null,user_email varchar(20) primary key,user_state varchar(10) not null,user_address varchar(10) not null,
	user_password varchar(15) not null,service_type varchar(30) not null,payment_type varchar(30) not null)";
    $r1=mysqli_query($conn,$q1);
    if($r1)
    {
        echo "<br><br>Table user_table Created Successfully!!";
    }
    else
    {
        echo "<br><br>Table user_table Failed To Create!";
    }

    mysqli_close($conn);
?>
