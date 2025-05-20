<?php
	$username=$_POST["username"];
	$password=$_POST["pwd"];

	$conn=mysqli_connect("localhost","root","");

    if (!$conn)
    {
        echo "<br><br>Connection To Server Failed!";
        exit();
    }
    
        if($username=='sam@gmail.com'&&$password=='Sam@12')
        {
            	
            echo '<script>window.location.href = "adminhome.html"; </script>';
            exit(); 	
        }
        else
    	{
 			echo '<script>alert("Incorrect Username Or Password!");
            window.location.href = "adminlogin.html"; </script>';
            exit();
    	}

    mysqli_close($conn);
?>

