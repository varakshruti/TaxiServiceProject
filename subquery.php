<!DOCTYPE html>
<html>
<head>
	<title>Display Car Fuel</title>
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

        .phptable
		{
			background-color: rgb(255, 253, 208);
			border-color: black;
			text-align: center;
            font-size:20px;
			margin-left: 300px;
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

<table border="2" class="phptable">
		<caption><b>Car Details</b></caption>
		<tr>
			<th>Car Name</th>
            <th>Car Fuel Type</th>
		</tr>
	<?php
		$conn=mysqli_connect("localhost","root","","Car");

	    if (!$conn)
	    {
	        echo "<br><br>Connection To Server Failed!";
	        exit();
	    }

		$q1="SELECT car_name, car_fuel FROM cars WHERE car_fuel IN (SELECT DISTINCT car_fuel FROM cars)";
	    $r1=mysqli_query($conn,$q1);
	    if($r1)
	    {
	        $n=mysqli_num_rows($r1);
	        echo "<br>Number Of Rows:".$n;
	       
	        while($info=mysqli_fetch_array($r1))
	        {
	            echo "<tr><td>" . $info['car_name'] . "</td><td>" . $info['car_fuel'] . "</td></tr>";
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
