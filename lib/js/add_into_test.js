var eng = document.getElementById('eng');
var mat  = document.getElementById('mat');
var phy = document.getElementById('phy');
var che  = document.getElementById('che');
var bio = document.getElementById('bio');
var pl1= document.getElementById('pl1');
var pl2 = document.getElementById('pl2');
var dat = document.getElementById('dat');
var alg = document.getElementById('alg');
var toc = document.getElementById('toc');

var data_id = document.getElementById('data_id');
btnsave = document.getElementById('btnsave');
btnsave.onclick = function () {

	if( isEmpty(eng) || isEmpty(mat) || isEmpty(phy) || isEmpty(che) || isEmpty(bio) || isEmpty(pl1)) {
		message.className = "isa_error";
	    message.innerHTML = "<i class='fa fa-info-circle'></i>ALL FIELD MUST BE FILLED !";

	} else {
		var course_data = {

			'eng' : eng.value ,
			'mat' : mat.value ,
			'phy' : phy.value ,
			'che' : che.value ,
			'bio' : bio.value ,
			'pl1' : pl1.value 
		}
		
		request_for_save_into_database(course_data);
	}

}



function request_for_save_into_database(obj) {

		
        var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	            
	        	console.log(xmlhttp.responseText);
	        	message.className = "isa_success";
	        	message.innerHTML = "<i class='fa fa-info-circle'></i>NEW ROW HAS BEEN ADDED";
	        	
	        	var delay1=3000; //2 second
				setTimeout(function() {
					window.location.replace("/test.php");
				}, delay1);

	        }
	    };

	    
	    xmlhttp.open("POST", "/database/service/add_into_test_service.php", true);
	    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    xmlhttp.send("eng=" + encodeURIComponent(obj.eng) +"&mat=" + encodeURIComponent(obj.mat) +"&phy=" + encodeURIComponent(obj.phy) + "&che=" + encodeURIComponent(obj.che) + "&bio=" + encodeURIComponent(obj.bio) +
	     "&pl1=" + encodeURIComponent(obj.pl1) + "&pl2=" + encodeURIComponent(obj.pl2) + "&dat=" + encodeURIComponent(obj.dat) + "&alg=" + encodeURIComponent(obj.alg) + "&toc=" + encodeURIComponent(obj.toc));

}


btnremove.onclick = function () {

	    eng.value="";
		mat.value="";
		phy.value="";
		che.value="";
		bio.value="";
		pl1.value="";

		message.className = "isa_error";
	    message.innerHTML = "<i class='fa fa-info-circle'></i>FORM RESET DONE !";
}