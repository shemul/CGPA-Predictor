
var full_name = document.getElementById('full_name');
var student_id  = document.getElementById('student_id');
var email = document.getElementById('email');
var password  = document.getElementById('password');
var userID = document.getElementById('userId');
var updateBtn= document.getElementById('updateUser');
var message = document.getElementById('message');
var greetings = document.getElementById('gretting');
var btnremove = document.getElementById('btnremove');


updateBtn.onclick = function () {
	var userData = {
		'id' : userID.value,
		'full_name' : full_name.value ,
		'student_id' : student_id.value ,
		'email' : email.value ,
		'password' : password.value ,

	}

	updateUser(userData);
}

function updateUser(obj) {


		
        var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	            
	        	console.log(xmlhttp.responseText);
	        	message.className = "isa_success";
	        	message.innerHTML = "<i class='fa fa-info-circle'></i>PROFILE UPDATE SUCCESSFULLY";
	        	greetings.innerHTML = "Hello , " + full_name.value;
	        }
	    };

	    xmlhttp.open("POST", "/database/service/profile_service.php", true);
	    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    xmlhttp.send("id=" + obj.id + "&full_name=" + obj.full_name +"&student_id=" + obj.student_id +"&email=" + obj.email + "&password=" + obj.password);

}


btnremove.onclick = function () {

	    var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	            
	        	console.log(xmlhttp.responseText);
	        	message.className = "isa_error";

	        	message.innerHTML = "<i class='fa fa-info-circle'></i>YOUR ACCOUNT DEACTIVATED ! GOOD BYE";
	        }
	    };

	    xmlhttp.open("POST", "/database/service/profile_service.php", true);
	    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    xmlhttp.send("id=" + userID.value + "&deactive=1");
}