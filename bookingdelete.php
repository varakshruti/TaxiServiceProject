<?php
    $uemail=$_POST["user_email"];
    $conn=mysqli_connect("localhost", "root", "", "Car");

    if (!$conn) 
    {
        echo "<br><br>Connection To Server Failed!";
        exit();
    }

    $q1="SELECT book_id FROM booked_cars WHERE user_email='$uemail'";
    $r1=mysqli_query($conn, $q1);

    if ($r1) 
    {
        $n=mysqli_num_rows($r1);
        if ($n==0) 
        {
            header("Location: bookingdelete.html");
            exit();
        }   
        else 
        {
            $q2="DELETE FROM booked_cars WHERE user_email='$uemail'";
            $r2=mysqli_query($conn, $q2);
            if ($r2) 
            {
                echo '<script>alert("Booking Data Deleted Successfully!"); window.location.href="bookingdelete.html"; </script>';
                exit();
            } 
            else 
            {
                echo "<br><br>Error Deleting Booking Data!";
                exit();
            }
        }
    } 
    else 
    {
        echo "<br><br>Error Fetching Booking Data!";
        exit();
    }
?>

