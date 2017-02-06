var btnlogin = document.getElementById('btnlogin');
var error  = document.getElementById('error');

document.getElementById('pass').addEventListener("keypress", function (event) {
	//console.log(event.key);
	if(event.key =="Enter") {
		btnlogin.click();
	}
});

btnlogin.onclick = function() {
	
	var email = document.getElementById('email');
	var pass = document.getElementById('pass');
	

	if(isEmpty(email) || isEmpty(pass)) {
		pushMessage("Fields Must Be Filled and Valid","red");
	} else if (!emailValidation(email)){
		pushMessage("Invalid Email","red");
	} else {
		login_obj = {
			'email' : email.value,
			'password' : pass.value
		};

		RequestServer(login_obj) ;
		
	}
};




function RequestServer(login_obj) {

	email = login_obj.email ;
	password = login_obj.password;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        	// removing whitespaces
        	var response = xmlhttp.responseText.replace(/\s/g, "");

            if(response == "OK") {
				
				pushMessage("Login Successfull" , "green");
				var delay1=1000; //2 second
				setTimeout(function() {
				  pushMessage("Redirecting to dashboard" , "red");
				}, delay1);

            	var delay2=2000; //4 second
				setTimeout(function() {
				  window.location.href = "dashboard.php";
				}, delay2);

            }else {
            	pushMessage(xmlhttp.responseText , "red");
            }
        }
    };
    xmlhttp.open("POST", "handler/login_handler.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("email=" + email +"&password=" + password);

      
  

}

/*
dcument.getElementById('test').onclick =function() {
	
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            alert(xmlhttp.responseText) ;
        }
    };
    xmlhttp.open("GET", "login_handler.php?new_email='ok' ", true);
    xmlhttp.send(); 

};

*/