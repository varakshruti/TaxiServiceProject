<?php
	$name=$_POST["name"];
	$gender=$_POST["gender"];
	$dob=$_POST["dob"];
	$phone=$_POST["num"];
	$email=$_POST["email"];
	$state=$_POST["states"];
	$address=$_POST["address"];
	$password=$_POST["password"];
	$type=$_POST["service"];
	$payment=$_POST["payment"];
	$p="";
	foreach ($payment as $pay)
	{
		$p=$p." ".$pay;
	}

	echo "Name: ".$name;
	echo "<br>gender: ".$gender;
	echo "<br>dob: ".$dob;
	echo "<br>phone: ".$phone;
	echo "<br>email: ".$email;
	echo "<br>state: ".$state;
	echo "<br>address: ".$address;
	echo "<br>password: ".$password;
	echo "<br>type: ".$type;
	echo "<br>payment: ".$p;

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

    $q1="insert into user_table values('$name','$gender','$dob','$phone','$email','$state','$address','$password','$type','$p')";
    $r1=mysqli_query($conn,$q1);
    if($r1)
    {
        header("Location: userlogin.html");
        exit();
    }

    mysqli_close($conn);
?>
