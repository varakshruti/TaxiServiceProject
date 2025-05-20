<!DOCTYPE html>
<html>
<head>
	<title>Update Car Data</title>
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
      
        th
        {
            padding: 15px 15px;
            text-align: right;
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
	    }

		.forms
		{
			position: relative;
		}

		.car
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
	        background-color: grey;
		}

		.sbtn
		{
			margin-left: 110px;
		}

		.rbtn
		{
			margin-left: 110px;
		}
	</style>
	
	<script type="text/javascript" src="updatedata.js">	</script>
</head>
<body>
<header>
   <div class="pre-title" >
      <h1 id="title" style="font-family:Verdana">GOA TAXI SERVICE</h1> 
      <table class="table1">
         <tr id="effect">
            <th><a href="adminhome.html" style="font-family:Verdana">Home</a></th>
            <th><a href="operations.html" target="_blank" style="font-family:Verdana">Operations</a></th>
            <th><a href="services.html" target="_blank" style="font-family:Verdana">Services</a></th>
            <th><a href="aboutus.html" target="_blank" style="font-family:Verdana"> About Us</a></th>
         </tr>
      </table>
   </div>
</header>
<?php include 'displaydata.php'; ?>
	<div>
		<form action="update.php" method="POST" class="forms" onsubmit="return validate()">
			<h1 style="text-align: center;color:rgb(43, 41, 41);font-family:Verdana;"><u>Update Car Data</u></h1><br><br>
			<div>
				<label>Car ID</label>
				<input type="number" id="ucid" name="ucid" class="car" placeholder="Eg. 1" autocomplete="off">
			</div><br>
			<div>
				<label>Car Name </label>
				<input type="text" id="uname" name="uname" class="car" placeholder="Eg. Alto" autocomplete="off">
			</div>
			<br>
			<div>
				<label>Car Brand </label>
				<input type="text" id="ubrand" name="ubrand" class="car" placeholder="Eg. Maruti Suzuki" autocomplete="off">
			</div>
			<br>
			<div>
				<label>Car File</label>
				<input type="file" id="uimage" name="uimage" class="car">
			</div>
			<br>
			<div>
				<label>Car Type </label>
				<input type="radio" id= "utype" name="utype" class="car" value="Hatchback" >Hatchback
				<input type="radio" id= "utype" name="utype" class="car" value="SUV" >SUV
				<input type="radio" id= "utype" name="utype" class="car" value="Sedan" >Sedan
				<input type="radio" id= "utype" name="utype" class="car" value="Van" >Van
			</div>
			<br>
			<div>
				<label>Car Manufacture Year </label>
				<input type="date" id="umyear" name="umyear" class="car" placeholder="Eg. 2000" autocomplete="off">
			</div>
			<br>
			<div>
				<label>Seater </label>
				<input type="number" id="useats" name="useats" class="car" placeholder="Eg. 5" autocomplete="off" >
			</div>
			<br>
			<div>
				<label>Fuel Type </label>
				<select id="ucfuel" name="ufuel" class="car">
					<option value="">Select</option>
					<option value="Petrol" >Petrol</option>
					<option value="Diesel">Diesel</option>
					<option value="CNG">CNG</option>
					<option value="Electric">Electric</option>
				</select>
			</div>
			<br>
			<div>
				<label>Car Features</label>
          		<br><input type="checkbox" id="ac" name="ufeatures[]" value="AC">AC
          		<br><input type="checkbox" id="sunroof" name="ufeatures[]" value="Sunroof">Sunroof
          		<br><input type="checkbox" id="wc" name="ufeatures[]" value="Wireless Charging">Wireless Charging<br>
          		<br>
			</div>
			<br><br>
			<div>
				<input type="submit" id="btn" class="sbtn">
				<input type="reset" id="btn" class="rbtn">
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

