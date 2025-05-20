function valid()
{
	var name="";
	name=document.getElementById("cname").value;
	var brand="";
	brand=document.getElementById("cbrand").value;
	var photo="";
	photo=document.getElementById("cimage").value;
	var type="";
	var a=document.getElementsByName("ctype");
	for(var i=0;i<a.length;i++)
	{
		if(a[i].checked==true)
		{
			type=a[i].value;
		}
	}
	var date=""
	date=document.getElementById("myear").value;
	var seat="";
	seat=document.getElementById("cseats").value;
	var x=document.getElementById("cfuel");
	var fuel=x.options[x.selectedIndex].value;
	var carfeatures=document.getElementsByName("features[]");
	var features="";
	for(var i=0;i<carfeatures.length;i++)
	{
		if(carfeatures[i].checked==true)
		{
			features=features + " " + carfeatures[i].value;
		}
	}
	
	if(name=="")
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
		alert("Please Choose Car Photo!");
		return false;
	}
	else if(type=="")
	{
		alert("Please Select A Type!");
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
		alert("Car Details Added Successfully!!");
		return true;
	}
}
