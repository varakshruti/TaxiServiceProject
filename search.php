<!DOCTYPE html>
<html>
<head>
    <title>Search Car Data</title>
    <style type="text/css">
        body
         {
            background-color: rgba(255,215,0,0.6);
         }

         .pre-title
         {
            background-color:white;
            padding: 15px 15px 15px 15px;
            margin: 2px 2px 2px;
         }  
      
         #title
         {
            margin: 15px;
            color:gold;
            position: relative;
         }

         .table1
         {
            margin: -45px  0px 0px 750px ;
         }

         #effect a:link,#footer a:link  
         {
            color:#FFCC00; 
         }

         #effect a:visited,#footer a:visited
         {
            color: orange; 
         }

         #effect a:hover,#footer a:hover
         {
            color: greenyellow; 
         }

         #effect a:active,#footer a:active
         {
            color: blue; 
         }

         table
         {
            text-align: center;
            margin-top: 110px;
            margin-bottom: 110px;
         }
         
         #th
         {
            padding: 15px 15px;
            text-align: right;
            font-size: 20px;             
         }

         #t1
         {
            background-color:rgb(255, 253, 208);
            text-align:center;
         }
    </style>
</head>
<body>
 <header>
   <div class="pre-title" >
      <h1 id="title" style="font-family:Verdana">GOA TAXI SERVICE</h1> 
      <table class="table1">
         <tr id="effect">
            <th id="th"><a href="adminhome.html" style="font-family:Verdana">Home</a></th>
            <th id="th"><a href="operations.html" target="_blank" style="font-family:Verdana">Operations</a></th>
            <th id="th"><a href="services.html" target="_blank" style="font-family:Verdana">Services</a></th>
            <th id="th"><a href="aboutus.html" target="_blank" style="font-family:Verdana"> About Us</a></th>
         </tr>
      </table>
   </div>
</header>
    <table id="t1" border="2">
        <tr>
            <th>Car ID</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Photo</th>
            <th>Type</th>
            <th>M Year</th>
            <th>Seats</th>
            <th>Fuel</th>
            <th>Features</th>
        </tr>
    <?php
        $ID=$_POST["cid"];
        $conn=mysqli_connect("localhost","root","","Car");

        if (!$conn)
        {
            echo "<br><br>Connection To Server Failed!";
            exit();
        }

        $q1="select * from cars where car_id='$ID'";
        $r1=mysqli_query($conn,$q1);
        if($r1)
        {
           $n=mysqli_num_rows($r1);
           echo "<br>Number Of Rows:".$n;
           if($n==0)
           {
                header("Location: searchdata.php");
                exit();
           }
           else
           {
            while($info=mysqli_fetch_array($r1))
            {
                echo "<tr><td>".$info['car_id']."</td>";
                echo "<td>".$info['car_name']."</td>";
                echo "<td>".$info['car_brand']."</td>";
                echo "<td>".$info['car_photo']."</td>";
                echo "<td>".$info['car_type']."</td>";
                echo "<td>".$info['car_myear']."</td>";
                echo "<td>".$info['car_seater']."</td>";
                echo "<td>".$info['car_fuel']."</td>";
                echo "<td>".$info['car_feature']."</td></tr>";
            }
           } 
         }
         else
         {
            echo "<br>Error In Displaying Data!";
         }
    ?>
    </table>
    
   <footer style="background-color: #f1f1f1; color: #333; text-align: center; padding: 20px; margin-top: 150px; padding-top: 50px;">
         <p style="font-family:Verdana">@2024 Your Taxi Service. All Content Owned By <b>S3</b></p>
         <p style="font-family:Verdana">
            <b>Privacy Policy</b> | 
            <b>Terms Of Service</b>
         </p>
   </footer>
</body>
</html>
