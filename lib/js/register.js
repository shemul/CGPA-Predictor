var btnRegister = document.getElementById('btnRegister');
var error  = document.getElementById('error');
var terms = document.getElementById('terms');
var photo_file = document.getElementById('photo_file');
document.getElementById('pass').addEventListener("keypress", function (event) {
	//console.log(event.key);
	if(event.key =="Enter") {
		btnlogin.click();
	}
});



btnRegister.onclick = function() {
	
	var full_name = document.getElementById('full_name');
	var student_id = document.getElementById('student_id');
	var email = document.getElementById('email');
	var pass = document.getElementById('pass');


	if(isEmpty(full_name) || isEmpty(student_id) || isEmpty(email) || isEmpty(pass)) {
		pushMessage("Fields Must Be Filled and Valid","red");
		return false;
	} else if (!emailValidation(email)){
		pushMessage("Invalid Email","red");
		return false;
	} else if (!aiubIdValidate(student_id.value)) {
		pushMessage("ID must be formatted !");
		return false;
	} else if (!termsAgree(terms)) {
		pushMessage("Did you forget to agree the term ?");
		return false;
	} else {
		reg_obj = {
			'full_name' : full_name.value,
			'student_id' : student_id.value,
			'email' : email.value,
			'password' : pass.value
		};

		RequestServer(reg_obj) ;
		
	}
};



function isEmpty(obj) {
	if(obj.value=="") {
		return true ;
	} else {
		return false ;
	}
}



function pushMessage(msg,color) {
	error.style.display = "inline";
	error.style.color = color ;
	error.innerHTML = msg;
}


function RequestServer(reg_obj) {

	full_name = reg_obj.full_name;
	student_id = reg_obj.student_id;
	email = reg_obj.email ;
	password = reg_obj.password;
 

	

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var response = xmlhttp.responseText.replace(/\s/g, "");
            if(response == "OK") {

        
            	pushMessage("Registration Successfull" , "green");

				var delay1=2000; //2 second
				setTimeout(function() {
				  pushMessage("Redirecting to login" , "red");
				}, delay1);

            	var delay2=3000; //4 second
				setTimeout(function() {
				  window.location.href = "login.php";
				}, delay2);
            	
            }else {
            	pushMessage(xmlhttp.responseText , "red");
            }
        }
    };
  

    xmlhttp.open("POST", "handler/register_handler.php", true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("full_name="+full_name+"&student_id="+student_id +"&email="+email +"&password=" +password);


}


