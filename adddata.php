<?php
    $carname=$_POST["cname"];
    $carbrand=$_POST["cbrand"];
    $carphoto=$_POST["cimage"];
    $cartype=$_POST["ctype"];
    $carmanufactureyear=$_POST["myear"];
    $carseater=$_POST["seats"];
    $carfueltype=$_POST["fuel"];
    $carfeatures=$_POST["features"];

    echo "<br> Car Details:-";
    echo "<br> Car Name Is:".$carname;
    echo "<br> Car Brand Is:".$carbrand;
    echo "<br> Car File Is:".$carphoto;
    echo "<br> Car Type Is:".$cartype;
    echo "<br> Car Manufacture Year Is:".$carmanufactureyear;
    echo "<br> Car Seater:".$carseater;
    echo "<br> Car Fuel Type:".$carfueltype;
    $t="";
    foreach ($carfeatures as $features)
    {
       $t=$t." ".$features;
    }
    echo "<br>Car Features Selected Are:".$t;

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

    $q1="insert into cars(car_name,car_brand,car_photo,car_type,car_myear,car_seater,car_fuel,car_feature) 
	values('$carname','$carbrand','$carphoto','$cartype','$carmanufactureyear','$carseater','$carfueltype','$t')";
    $r1=mysqli_query($conn,$q1);
    if($r1)
    {
        echo "<script>window.location.href='addcardata.php';</script>";
        exit();
    }
 
    mysqli_close($conn);
?>

