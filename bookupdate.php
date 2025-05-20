<!DOCTYPE html>
<html>
<head>
	<title> Update Book Data</title>
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
            margin: 100px 370px;
            background-color: rgba(255,215,0,0.7);
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
            margin-left: 110px;
            padding: 6px;
            font-size: 17px;
            border: solid black;
            background-color: grey;
	      }
   </style>
   <script type="text/javascript">
	   function valid()
      {
        var bid=document.getElementById("bookid").value;
        var email=document.getElementById("email").value;
        var pdate=document.getElementById("date").value;
        var ptime=document.getElementById("time").value;
        var plocation=document.getElementById("ploc").value;
		var ddate=document.getElementById("ddate").value;        var dtime=document.getElementById("dtime").value;
        var dlocation=document.getElementById("dloc").value;
        var passenger=document.getElementById("nop").value;
        var x=/^[0-9]$/;
        var y=/^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+)\.([a-z]+)(\.[a-z]+)?$/;

		  if(id=="")
		  {
			   alert("Car ID Cannot Be Empty!");
			   return false;
		   }
		  else if(x.test(id)==false)
		  {
			   alert("Invalid Car ID!");
			   return false;
		  }
        else if(email=="")
	     {
		      alert("Please Enter Email!");
		      return false;
	     }
	     else if(y.test(email)==false)
	     {
		      alert("Invalid Email!");
		      return false;
	     }
		  else if(pdate=="")
		  {
		   	alert("Please Select Pick-Up Date!");
			   return false;
		  }
        else if(ptime=="")
		  {
			   alert("Please Select Pick-Up Time!");
			   return false;
		  }
        else if (plocation=="")
        {
            alert("Please Select Pick-Up Location!");
            return false;
        }
        else if(ddate=="")
		  {
		   	alert("Please Select Drop-Off Date!");
			   return false;
		  }
        else if(dtime=="")
        {
            alert("Please Select Drop-Off Time!");
            return false;
        }
        else if (dlocation=="")
        {
            alert("Please Select Drop-Off Location!");
            return false;
        }
        else if (passenger=="")
        {
            alert("Please Select Number Of Passengers!");
            return false;
        }
		 else
		 {
			alert("Booking Details Updated Successfully!!");
			return true;
		 }
      }
</script>
</head>
<body>
 <header>
   <div class="pre-title" >
      <h1 id="title" style="font-family:Verdana">GOA TAXI SERVICE</h1> 
      <table class="table1">
         <tr id="effect">
            <th><a href="userhome.html" style="font-family:Verdana">Home</a></th>
            <th><a href="booking.html" target="_blank" style="font-family:Verdana">Booking</a></th>
            <th><a href="userservices.html" target="_blank" style="font-family:Verdana">Services</a></th>
            <th><a href="useraboutus.html" target="_blank" style="font-family:Verdana"> About Us</a></th>
         </tr>
      </table>
   </div>
</header>
<?php include 'displaydata.php';?>
	<div>
		<form action="book_update.php" method="POST" class="forms" onsubmit="return valid()">
			<h1 style="text-align: center;color:rgb(43, 41, 41);font-family:Verdana;"><u>Update Booking Data</u></h1><br><br>
            <div>
				<label>Car ID</label>
				<input type="number" id= "carid" name="carid" class="car" placeholder="Eg. 1" autocomplete="off">
			</div>
			<br>
			<div>
				<label>User Email ID </label>
				<input type="email" id="email" name="email" class="car" placeholder="Eg. amitnaik@gmail.com" autocomplete="off">
			</div>
			<br>
			<div>
				<label>Pick-Up Date </label>
				<input type="date" id= "date" name="date" class="car" autocomplete="off">
			</div>
			<br>
			<div>
				<label>Pickup Time</label>
				<input type="time" id= "time" name="time" class="car" autocomplete="off">
			</div>
			<br>
            <div>
				<label>Pick-Up Location</label>
				<input type="text" id= "ploc" name="ploc" class="car" placeholder="Eg. Bicholim" autocomplete="off">
			</div>
            <br>
            <div>
			<div>
				<label>Drop-Off Date </label>
				<input type="date" id= "ddate" name="ddate" class="car" autocomplete="off">
			</div>
			<br>
			<div>
                <label>Drop-Off Time</label>
                <input type="time" id= "dtime" name="dtime" class="car" autocomplete="off">
            </div>
            <br>
            <div>
				<label>Drop-Off Location</label>
				<input type="text" id= "dloc" name="dloc" class="car" placeholder="Eg. Mapusa" autocomplete="off">
			</div>
			<br>
            <div>
				<label>Number Of Passengers</label>
				<input type="number" id= "nop" name="nop" class="car" placeholder="Eg. 4" autocomplete="off">
			</div>
			<br>
				<input type="submit" id="btn" name="submit" value="Submit">
				<input type="reset" id="btn" name="reset" value="Reset">
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