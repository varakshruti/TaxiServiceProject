<!DOCTYPE html>
<html>
<head>
	<title>Display Car Data</title>
	<style type="text/css">
		.phptable
		{
			background-color: rgb(255, 253, 208);
			border-color: black;
			text-align: center;
			margin-left: 300px;
		}
	</style>
</head>
<body>
	<table border="2" class="phptable">
		<caption><b>Car Details</b></caption>
		<tr>
			<th>Car ID</th>
			<th>Name</th>
			<th style="text-align:center">Brand</th>
			<th>File</th>
			<th>Type</th>
			<th>M Year</th>
			<th>Seats</th>
			<th>Fuel</th>
			<th style="text-align:center">Features</th>
		</tr>
	<?php
		$conn=mysqli_connect("localhost","root","","Car");

	    if (!$conn)
	    {
	        echo "<br><br>Connection To Server Failed!";
	        exit();
	    }

		$q1="select * from cars";
	    $r1=mysqli_query($conn,$q1);
	    if($r1)
	    {
	        $n=mysqli_num_rows($r1);
	        echo "<br>Number Of Rows:".$n;
	       
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
	            echo "<td>".$info['car_feature']."</td>";
	        }
	    }
	    else
	    {
	        echo "<br>Error In Displaying Data!";
	    }
	?>
	</table>
</body>
</html>
