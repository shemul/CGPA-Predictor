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
updateBtn = document.getElementById('updateUser');
updateBtn.onclick = function () {

	var course_data = {
		'id' : data_id.value,
		'eng' : eng.value ,
		'mat' : mat.value ,
		'phy' : phy.value ,
		'che' : che.value ,
		'bio' : bio.value ,
		'pl1' : pl1.value ,
		'pl2' : pl2.value ,
		'dat' : dat.value ,
		'alg' : alg.value ,
		'toc' : toc.value ,
	}
	
	updateData(course_data);

}


document.addEventListener( 'DOMContentLoaded', function () {
	
	loadData(1);

}, false );

function loadData(temp) {
        var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	        	var obj = JSON.parse(xmlhttp.responseText);
	        	
	        	eng.value =obj.eng
				mat.value=obj.mat
				phy.value=obj.phy
				che.value=obj.che
				bio.value=obj.bio
				pl1.value=obj.pl1
				pl2.value=obj.pl2
				dat.value=obj.dat
				alg.value=obj.alg
				toc.value=obj.toc
	        }
	    };

	    xmlhttp.open("GET", "/database/service/update_service.php?get_all_data=" + data_id.value , true);

	    xmlhttp.send();

}


function updateData(obj) {

		
        var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	            
	        	console.log(xmlhttp.responseText);
	        	message.className = "isa_success";
	        	message.innerHTML = "<i class='fa fa-info-circle'></i>COURSE UPDATE SUCCESSFULLY";
	        	
	        }
	    };

	    
	    xmlhttp.open("POST", "/database/service/update_service.php", true);
	    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    xmlhttp.send("id=" + obj.id + "&eng=" + encodeURIComponent(obj.eng) +"&mat=" + encodeURIComponent(obj.mat) +"&phy=" + encodeURIComponent(obj.phy) + "&che=" + encodeURIComponent(obj.che) + "&bio=" + encodeURIComponent(obj.bio) +
	     "&pl1=" + encodeURIComponent(obj.pl1) + "&pl2=" + encodeURIComponent(obj.pl2) + "&dat=" + encodeURIComponent(obj.dat) + "&alg=" + encodeURIComponent(obj.alg) + "&toc=" + encodeURIComponent(obj.toc));

}


btnremove.onclick = function () {

	    var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	            
	        	console.log(xmlhttp.responseText);
				message.className = "isa_error";
				message.innerHTML = "<i class='fa fa-info-circle'></i>SELECTED ROW HAS BEEN REMOVED ! WILL REDIRECT IN 2 SEC";
	

	        	
	        	var delay1=3000; //2 second
				setTimeout(function() {
					window.location.replace("/trained.php");
				}, delay1);
	        }
	    };

	    xmlhttp.open("POST", "/database/service/update_service.php", true);
	    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    xmlhttp.send("id=" + data_id.value + "&delete=1");
}