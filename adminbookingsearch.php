<!DOCTYPE html>
<html>
<head>
	<title>Search Booking Data</title>
	<style>
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
      
        #th
        {
            padding: 15px 15px;
            text-align: right;            
        }
         
		th
        {
         	font-size: 20px;
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
		
		form
	    {
	        font-family:Georgia;
	        width: 500px;
	        margin: 160px 370px;
	        background-color: rgba(255, 215, 0,0.7);
	        padding: 50px 50px;
	        border: solid black;
	        border-radius: 15px;
	        text-align: center;
	    }

		.forms
		{
			position: relative;
		}

		.book
		{
			padding: 2px 10px;
			margin-left: 30px;
		}

		#carcolor
		{
			margin-left: 30px;
		}

		#btn
		{
			border-radius: 10px;
	        padding: 6px;
	        font-size: 17px;
	        border: solid black;
			color:black;
	        background-color: grey;
		}

		.sbtn
		{
			margin-right: 17px;
		}

		.rbtn
		{
			margin-left: 17px;
		}
	</style>
	
	<script type="text/javascript">
		function validate()
		{
			var ID="";
			ID=document.getElementById("bid").value;
			if(ID=="")
			{
				alert("Please Enter Booking ID!");
				return false;
			}
		}
	</script>
</head>
<body>
	<header>
   <div class="pre-title">
      <h1 id="title" style="font-family:Verdana">GOA TAXI SERVICE</h1> 
      
      <table class="table1" style="font-family:Verdana">
         <tr id="effect">
            <th id="th"><a href="adminhome.html">Home</a></th>
            <th id="th"><a href="operations.html" target="_blank">Operations</a></th>
            <th id="th"><a href="services.html" target="_blank">Services</a></th>
            <th id="th"><a href="aboutus.html" target="_blank"> About Us</a></th>
         </tr>
      </table>
   </div>
</header>
<?php include 'bookingdisplay.php' ?>
	<div>
		<form action="bookingsearch.php" method="POST" class="forms" onsubmit="return validate()">
			<h1 style="text-align: center;color:rgb(43, 41, 41);font-family:Verdana;"><u>Search Booking Data</u></h1><br><br>
			<div style="font-family:Verdana">
				<label>Book ID</label>
				<input type="number" id= "bid" name="bid" class="book" placeholder="Eg. 1" autocomplete="off">
			</div>
			<br><br>
			<div>
				<input type="submit" id="btn" class="sbtn" value="Submit">
			
				<input type="reset" id="btn" class="rbtn" value="Reset">
			</div>
		</form>
	</div>
		<footer style="background-color: #f1f1f1; color: #333; text-align: center; padding: 20px; margin-top: 150px; padding-top: 50px;">
         <p style="font-family:Verdana">@2024 Your Taxi Service. All Content Owned By <b>S3</b></p>
         <p style="font-family:Verdana">
            <b>Privacy Policy</b> | 
            <b>Terms Of Service</b>
         </p>
     </footer>
</body>
</html>

