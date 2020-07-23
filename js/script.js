function regValidate(){
	var name = document.forms["reg"]["name"].value;
	var email = document.forms["reg"]["email"].value;
	var pass = document.forms["reg"]["pass"].value;
	var cpass = document.forms["reg"]["cpass"].value;
	var shopname = document.forms["reg"]["s_name"].value;
	var address = document.forms["reg"]["address"].value;
	var phone = document.reg.ph_no.value;
	var city = document.forms["reg"]["city"].value;
	var pincode = document.forms["reg"]["pincode"].value;
	
	if(name=="" && pass=="" && cpass =="" && email=="" && shopname="" && address=="" && phone=="" && city=="" && pincode=="" ){
		alert("all field must be filled out");
		return false;
	}
	  
	


}
