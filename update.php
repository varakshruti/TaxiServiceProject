<?php
	$ID=$_POST["ucid"];
    $ucarname=$_POST["uname"];
    $ucarbrand=$_POST["ubrand"];
    $ucarphoto=$_POST["uimage"];
    $ucartype=$_POST["utype"];
    $ucarmanufactureyear=$_POST["umyear"];
    $ucarseater=$_POST["useats"];
    $ucarfueltype=$_POST["ufuel"];
    $ucarfeatures=$_POST["ufeatures"];
    $ut="";
    foreach ($ucarfeatures as $ufeatures)
    {
       $ut=$ut." ".$ufeatures;
    }

	$conn=mysqli_connect("localhost","root","","Car");
    if (!$conn)
    {
        echo "<br><br>Connection To Server Failed!";
        exit();
    }

    $q1="update cars set car_name='$ucarname',car_brand='$ucarbrand',car_photo='$ucarphoto',car_type='$ucartype',car_myear='$ucarmanufactureyear',
	car_seater='$ucarseater',car_fuel='$ucarfueltype',car_feature='$ut' where car_id='$ID'";
    $r1=mysqli_query($conn,$q1);
    if($r1)
    {
        header("Location: updatedata.php");
        exit();
    }
    if (!$r1) {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>