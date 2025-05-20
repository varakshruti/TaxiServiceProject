<!DOCTYPE html>
<html>
<head>
	<title>Display Booking Data</title>
	<style type="text/css">
		.phptable
		{
			background-color: lightyellow;

			text-align: center;
			margin-left: -5px;
		}
	</style>
</head>
<body>
	<table border="2" class="phptable">
		<tr>
			<th>Book ID</th>
			<th>Car ID</th>
			<th>Name</th>
			<th>Brand</th>
			<th>Type</th>
			<th>Fuel</th>
			<th>Features</th>
			<th>Pickup_Date</th>
			<th>Pickup_Time</th>
			<th>Pickup From</th>
			<th>Dropoff_Date</th>
			<th>Dropoff_Time</th>
			<th>Drop At</th>
			<th>Passengers</th>
			<th>User Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>State</th>
			<th>Address</th>
			<th>Service</th>
			<th>Payment</th>
		</tr>
	<?php
		$conn=mysqli_connect("localhost","root","","Car");

	    if (!$conn)
	    {
	        echo "<br><br>Connection To Server Failed!";
	        exit();
	    }

		$q1="SELECT * FROM cars JOIN booked_cars ON cars.car_id = booked_cars.car_id JOIN user_table ON 
		booked_cars.user_email = user_table.user_email";
	    $r1=mysqli_query($conn,$q1);
	    if($r1)
	    {
	        $n=mysqli_num_rows($r1);
	        echo "<br>Number Of Rows:".$n;
	       
	        while($info=mysqli_fetch_array($r1))
	        {
	        	echo "<tr><td>".$info['book_id']."</td>";
	        	echo "<td>".$info['car_id']."</td>";
	            echo "<td>".$info['car_name']."</td>";
	            echo "<td>".$info['car_brand']."</td>";
	            echo "<td>".$info['car_type']."</td>";	            
	            echo "<td>".$info['car_fuel']."</td>";
	            echo "<td>".$info['car_feature']."</td>";
	            echo "<td>".$info['pickup_date']."</td>";
	            echo "<td>".$info['pickup_time']."</td>";
	            echo "<td>".$info['pickup_location']."</td>";
				echo "<td>".$info['dropoff_date']."</td>";
	            echo "<td>".$info['dropoff_time']."</td>";
	            echo "<td>".$info['dropoff_location']."</td>";
	            echo "<td>".$info['number_of_passengers']."</td>";
	            echo "<td>".$info['user_name']."</td>";	            
			 	echo "<td>".$info['user_phone']."</td>";
	            echo "<td>".$info['user_email']."</td>";
	            echo "<td>".$info['user_state']."</td>";
	            echo "<td>".$info['user_address']."</td>";
	            echo "<td>".$info['service_type']."</td>";
	            echo "<td>".$info['payment_type']."</td></tr>";  
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
