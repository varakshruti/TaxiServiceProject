function validate()
{
	var name="";
	name=document.getElementById("name").value;
	var gender_selected="";
	var gen=document.getElementsByName("gender");
	for(var i=0;i<gen.length;i++)
	{
		if(gen[i].checked==true)
		{
			gender_selected=gen[i].value;
		}
	}
	var dob="";
	dob=document.getElementById("dob").value;
	var pn="";
	pn=document.getElementById("num").value;
	x=/^[7-9]{1}[0-9]{9}$/;
	var email="";
	email=document.getElementById("email").value;
	y=/^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+)\.([a-z]+)(\.[a-z]+)?$/;
	var st="";
	var states = document.getElementById("states");
	st = states.options[states.selectedIndex].value;
	var add="";
	add=document.getElementById("address").value;
	var password = document.getElementById("password").value;
	var type_selected="";
	var type=document.getElementsByName("service");
	for(var i=0;i<type.length;i++)
	{
		if(type[i].checked==true)
		{
			type_selected=type[i].value;
		}
	}
	var payment="";
	var a=document.getElementsByName("payment[]");
	for(var i=0;i<a.length;i++)
	{
		if(a[i].checked==true)
		{
			payment=payment+" "+a[i].value;
		}
	}

	if(name=="")
	{
		alert("Name Cannot Be Empty!");
		return false;
	}
	else if(gender_selected=="")
	{
		alert("Please Select A Gender!");
		return false;
	}
	else if(dob=="")
	{
		alert("Please Select Your Date Of Birth!");
		return false;
	}
	else if(pn=="")
	{
		alert("Please Enter Phone Number!");
		return false;
	}
	else if(x.test(pn)==false)
	{
		alert("Invalid Phone Number!");
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
	else if(st=="")
	{
		alert("Please Select A State!");
		return false;
	}
	else if(add=="")
	{
		alert("Please Enter Address!");
		return false;
	}
	else if((password.trim().length<6|password.trim().length>10))
	{
		alert("Password Size Must Be 6 To 10 Characters!");
		return false;
	}
	else if(password.search(/[A-Z]/)==-1)
	{
		alert("Password Must Contain Atleast One Uppercase Alphabet!");
		return false;
	}
	else if(password.search(/[a-z]/)==-1)
	{
		alert("Password Must Contain Atleast One Lowercase Alphabet!");
		return false;
	}
	else if(password.search(/[0-9]/)==-1)
	{
		alert("Password Must Contain Atleast One Number!");
		return false;
	}
	else if(password.search(/[\@\#\$\%\&\;\:\.\,]/)==-1)
	{
		alert("Password Must Contain Atleast One Special Character!");
		return false;
	}
	else if(type_selected=="")
	{
		alert("Please Select A Car Type!");
		return false;
	}
	else if(payment=="")
	{
		alert("Please Select Payment Options!");
		return false;
	}
	else
	{
		alert("Account Created Succesfully!!");
		return true;
	}
}
