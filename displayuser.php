<!DOCTYPE html>
<html>
<head>
	<title>Display User Data</title>
	<style type="text/css">
		.phptable
		{
			background-color: light yellow;
			border-color: black;
			text-align: center;
			margin-left: 200px;
		}
		#t1
		{
			background-color:rgb(255, 253, 208);
			text-align:center;
		}
	</style>
</head>
<body>
	<table border="2" id="t1" class="phptable">
		<caption><b>User Details</b></caption>
		<tr>
			<th>Name</th>
			<th>Gender</th>
			<th>DOB</th>
			<th>Phone</th>
			<th style="text-align:center">Email</th>
			<th>State</th>
			<th>Address</th>
			<th>Service Type</th>
			<th style="text-align:center">Payment Type</th>
		</tr>
	<?php
		$conn=mysqli_connect("localhost","root","","Car");

	    if (!$conn)
	    {
	        echo "<br><br>Connection To Server Failed!";
	        exit();
	    }

		$q1="select * from user_table";
	    $r1=mysqli_query($conn,$q1);
	    if($r1)
	    {
	        $n=mysqli_num_rows($r1);
	        echo "<br>Number Of Rows: ".$n;
	       
	        while($info=mysqli_fetch_array($r1))
	        {
	        	echo "<tr><td>".$info['user_name']."</td>";
	            echo "<td>".$info['user_gender']."</td>";
	            echo "<td>".$info['user_dob']."</td>";
	            echo "<td>".$info['user_phone']."</td>";
	            echo "<td>".$info['user_email']."</td>";
	            echo "<td>".$info['user_state']."</td>";
	            echo "<td>".$info['user_address']."</td>";
	            echo "<td>".$info['service_type']."</td>";
	            echo "<td>".$info['payment_type']."</td>";
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
