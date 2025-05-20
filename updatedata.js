function validate()
{
	var id="";
	id=document.getElementById("ucid").value;
	var name="";
	name=document.getElementById("uname").value;
	var brand="";
	brand=document.getElementById("ubrand").value;
	var photo="";
	photo=document.getElementById("uimage").value;
	var type="";
	var a=document.getElementsByName("utype");
	for(var i=0;i<a.length;i++)
	{ 
		if(a[i].checked==true)
		{
			type=a[i].value;
			
		}
	}
	var date="";
	date=document.getElementById("umyear").value;
	var seat="";
	seat=document.getElementById("useats").value;
	var fuel="";
	var x=document.getElementById("ucfuel");
	var fuel=x.options[x.selectedIndex].value;
	var carfeatures=document.getElementsByName("ufeatures[]");
	var features="";
	for(var i=0;i<carfeatures.length;i++)
	{
		if(carfeatures[i].checked==true)
		{
			features = features + " " + carfeatures[i].value;
		}
	}

	if(id=="")
	{
		alert("Car Id Cannot Be Empty!");
		return false;
	}
	else if(name=="")
	{
		alert("Car Name Cannot Be Empty!");
		return false;
	}
	else if(brand=="")
	{
		alert("Car Brand Cannot Be Empty!");
		return false;
	}
	else if(photo=="")
	{
		alert("Please Choose A Car Photo!");
		return false;
	}
	else if(type=="")
	{
		alert("Please Select A Car Type!");
		return false;
	}
	else if(date=="")
	{
		alert("Please Select Manufacturing Date!");
		return false;
	}
	else if(seat=="")
	{
		alert("Please Select Number Of Seats!");
		return false;
	}
	else if(fuel=="")
	{
		alert("Please Select Fuel Type!");
		return false;
	}
	else if(features=="")
	{
		alert("Please Select Car Features!");
		return false;
	}
	else
	{
		alert("Car Data Updated Successfully!!");
		return true;
	}
}

