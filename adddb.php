 <?php
    $conn=mysqli_connect("localhost","root","");

    if ($conn)
    {
        echo "<br><br>Connected To Server Successfully!";
    }
    else
    {
        echo "<br><br>Connection To Server Failed!";
        exit();
    }
    
    $q1="Create Database Car";
    $r1=mysqli_query($conn,$q1);

    if ($r1)
    {
        echo "<br>Database Car Created Successfully!";
    }
    else
    {
        echo "<br>Database Car Not Created!";
    }
    mysqli_close($conn);
?>
