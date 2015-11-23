//to be completed************************
//window.onload = function(){
	function showUser() 
	{
        var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		var confirmPassword = document.getElementById("confirmPassword").value;
		var FirstName = document.getElementById("FirstName").value;
		var LastName = document.getElementById("LastName").value;
		var emailId = document.getElementById("emailId").value;
		var Address = document.getElementById("Address").value;
		var state = document.getElementById("state").value;
		var city = document.getElementById("city").value;
		var zipcode = document.getElementById("zipcode").value;
		var phone = document.getElementById("phone").value;
		var userErr = 0;
		var passwordErr=0,confirmPasswordErr=0,FirstNameErr=0,LastNameErr=0,EmailIdErr=0,AddressErr=0,stateErr=0,cityErr=0,ZipcodeErr=0,PhoneErr=0;
		var re1= /[a-z]/;
		var re2 = /[A-Z]/;
		var re3= /[0-9]/;
		var re4 = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

var re1= /[a-z]/;
		var re2 = /[A-Z]/;
		var re3= /[0-9]/;
		var re4 = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		

//		alert("inside javascirpt");
		
	  if (username=="")
	  {
	    document.getElementById("usernameError").innerHTML="Please enter username and password";
	    
	    userErr=0;
	  }
	  else
	  {
	  	document.getElementById("usernameError").innerHTML="";
	  	userErr=1;
	  }
	  
	  if(password=="")
	  {
	  	document.getElementById("passwordError").innerHTML="Please enter password";
	    passwordErr=0;
	  }
	  //if(password!="")
	  //{
	  else if(password.length < 6) {
        document.getElementById("passwordError").innerHTML="Password too weak: Password must contain at least six characters!";
        passwordErr=0;
        document.getElementById("password").innerHTML="";
        //form.pwd1.focus();
        //return false;
      }
      else if(password == username) {
        document.getElementById("passwordError").innerHTML="Password too weak: Password must be different from Username!";
        passwordErr=0;
        document.getElementById("password").innerHTML="";
       // form.pwd1.focus();
        //return false;
      }
     // re = /[0-9]/;
     else if(!re3.test(password)) {
        document.getElementById("passwordError").innerHTML="Password too weak: password must contain at least one number (0-9)!";
        passwordErr=0;
        document.getElementById("password").innerHTML="";
        //form.pwd1.focus();
       // return false;
      }
     // re = /[a-z]/;
     else if(!re1.test(password)) {
        document.getElementById("passwordError").innerHTML="Password too weak: password must contain at least one lowercase letter (a-z)!";
        passwordErr=0;
        document.getElementById("password").innerHTML="";
        //form.pwd1.focus();
        //return false;
      }
      //re = /[A-Z]/;
     else if(!re2.test(password)) {
        document.getElementById("passwordError").innerHTML="Password too weak: password must contain at least one uppercase letter (A-Z)!";
        passwordErr=0;
        document.getElementById("password").innerHTML="";
        //form.pwd1.focus();
        //return false;
      }
     //}    
     else
     {
     	passwordErr=1;
     	document.getElementById("passwordError").innerHTML="";
     }
	 if(password!=confirmPassword)
	  {
	  	document.getElementById("confirmPasswordError").innerHTML="Password and confirm password didnt match";
	    document.getElementById("confirmPassword").innerHTML="";
	  }
	  else
	  {
	  	confirmPasswordErr=1;
	   document.getElementById("confirmPasswordError").innerHTML="";
	  }
	   
	  if(re3.test(FirstName) || FirstName=="")
	  {
	  	document.getElementById("FirstNameError").innerHTML="Invalid name";
	    FirstNameErr=0;
	    document.getElementById("FirstName").innerHTML="";
	  }
	  else
	  {
	  	//alert(FirstName);
	  	FirstNameErr=1;
	   document.getElementById("FirstNameError").innerHTML="";
	  }
	   
	  if(re3.test(LastName) || LastName=="")
	  {
	  	document.getElementById("LastNameError").innerHTML="Last Name should not contain any numeric values";
	    LastNameErr=0;
	    document.getElementById("LastName").innerHTML="";
	  }
	  else
	  {
	   document.getElementById("LastNameError").innerHTML="";
	   LastNameErr=1;
	  }
	   
	  if(!re4.test(emailId) || emailId=="")
	  {
	  	document.getElementById("emailIdError").innerHTML="invalid email id";
	    EmailIdErr=0;
	    document.getElementById("LastName").innerHTML="";
	  }
	  else
	  {
	  	document.getElementById("emailIdError").innerHTML="";
	  	EmailIdErr=1;
	  }
	  
	  
	  if(Address=="")
	  {
	  	document.getElementById("AddressError").innerHTML="invalid address";
	    AddressErr=0;
	    document.getElementById("Address").innerHTML="";
	  }
	  else
	  {
	    document.getElementById("AddressError").innerHTML="";
	    AddressErr=1;
	   }
	    
	  if(state=="" || re3.test(state))
	  {
	  	document.getElementById("stateError").innerHTML="Invalid State information";
	  	stateErr=0;
	  	document.getElementById("state").innerHTML="";
	  }  
	  else
	  {
	  	document.getElementById("stateError").innerHTML="";
	  	stateErr=1;
	  }
	  
	  if(city=="" || re3.test(city))
	  {
	  	document.getElementById("cityError").innerHTML="Invalid State information";
	  	cityErr=0;
	  	document.getElementById("city").innerHTML="";
	  }  
	  else
	  {
	  	document.getElementById("cityError").innerHTML="";
	  	cityErr=1;
	  }
	  
	  if(zipcode=="" || !re3.test(zipcode))
	  {
	  	document.getElementById("ZipcodeError").innerHTML="Invalid zipcode";
	  	ZipcodeErr=0;
	  	document.getElementById("zipcode").innerHTML="";
	  }  
	  else
	  {
	  	document.getElementById("ZipcodeError").innerHTML="";
	  	ZipcodeErr=1;
	  }
	  
	  if(phone=="" || !re3.test(phone) || phone.length!=10)
	  {
	  	document.getElementById("phoneError").innerHTML="Invalid phone number (dont include dashes)";
	  	PhoneErr=0;
	  	document.getElementById("phone").innerHTML="";
	  }  
	  else
	  {
	  document.getElementById("phoneError").innerHTML="";
	  PhoneErr=1;
	  }
	  
	  
	   if(!(userErr && passwordErr && confirmPasswordErr && FirstNameErr && LastNameErr && EmailIdErr && AddressErr && stateErr&& cityErr&&ZipcodeErr&&PhoneErr))
	   {
	   	//document.getElementById("button").disabled=true;
	  // 	alert("false");
	   	return false;
	   }
	   else
	   {
	//   	alert("fine");
	   	//document.getElementById("button").disabled=false;
	   	return true;
	   }
	  
	}
	