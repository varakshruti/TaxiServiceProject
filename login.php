<?php
	$username=$_POST["username"];
	$password=$_POST["pswd"];

	$conn=mysqli_connect("localhost","root","","Car");

    if (!$conn)
    {
        echo "<br><br>Connection To Server Failed!";
        exit();
    }

    $q1="select user_email,user_password from user_table";
    $r1=mysqli_query($conn,$q1);
    if($r1)
    {
        $n=mysqli_num_rows($r1);
        if($n==0)
        {
            echo '<script>alert("Incorrect username or password");
            window.location.href = "userlogin.html"; </script>';
            exit();
        }
        else
        {
         while($info=mysqli_fetch_array($r1))
         {
            if($username==$info['user_email']&&$password==$info['user_password'])
            {
            	
            		header("Location: userhome.html");
            		exit(); 	
            }   
         }
            echo '<script>alert("Incorrect Username Or Password!");
            window.location.href = "userlogin.html"; </script>';
            exit();
        }
    }
    mysqli_close($conn);
?>
