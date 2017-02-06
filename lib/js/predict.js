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
btnPredict = document.getElementById('btnPredict');
btnPredict.onclick = function () {

	var current_semester_data = {
		'id' : data_id.value,
		'eng' : get_absulate_grade(eng.value) ,
		'mat' : get_absulate_grade(mat.value) ,
		'phy' : get_absulate_grade(phy.value) ,
		'che' : get_absulate_grade(che.value) ,
		'bio' : get_absulate_grade(bio.value) ,
		'pl1' : get_absulate_grade(pl1.value) 
	}
	
	//console.log(current_semester_data);
	request_for_prediction(current_semester_data);

}


document.addEventListener( 'DOMContentLoaded', function () {
	
	loadData();

}, false );

function loadData() {
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
	        }
	    };

	   	xmlhttp.open("POST", "/database/service/prediction_service.php", true);
	    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    xmlhttp.send("get_data=" + data_id.value );


}

function get_absulate_grade(grade) {
	
	switch(grade) {
	    case "A+":
	        return 4;
	        break;
	    case "A":
	        return 3.75;
	        break;
	    case "A-":
	        return 3.5;
	        break;
	    case "B+":
	        return 3.25;
	        break;
	    case "B":
	        return 3;
	        break;
	    case "B-":
	        return 2.75;
	        break;
	    case "C+":
	        return 2.5;
	        break;
	    case "C":
	        return 2.25;
	        break; 
	    case "C-":
	        return 2;
	        break;  
	    case "D+":
	        return 1.75;
	        break;   
	    case "D":
	        return 1.5;
	        break;   
	    case "D-":
	        return 1;
	        break;   
	    default:
	        console.log("err");
	}

}

function get_real_grade(key) {
	switch(key) {
		case 0:
	        return "A+";
	        break;
	    case 1:
	        return "A";
	        break;
		case 2:
	        return "B";
	        break;
	    case 3:
	        return "B-";
	        break;
	 	case 4:
	        return "C";
	        break;
	    case 5:
	        return "C+";
	        break;
	    default:
	    	console.log("err");  
	}     
}

function request_for_prediction(obj) {

	var datas = {title : obj.eng + "," +obj.mat + "," + obj.phy + "," + obj.che + "," + obj.bio + "," + obj.pl1}
	

		
		$.ajax({
			url: 'http://128.199.201.52:5000',
			data: datas,
			type: 'POST',
			success: function(response){
				console.log(response.result[0]);
				pl2.value = get_real_grade(response.result[0].six)
				dat.value = get_real_grade(response.result[0].seven)
				alg.value = get_real_grade(response.result[0].eight)
				toc.value = get_real_grade(response.result[0].nine)

				message.className = "isa_success";
				message.innerHTML = "Status : " + response.result[0].done + "<br>Accuracy : " +
				response.result[0].accuracy + "<br>" + "Test data : " + response.result[0].test_data

	


			},
			error: function(error){
				console.log(error);
			}
		});
}



btnremove.onclick = function () {

	pl2.value = ""
	dat.value = ""
	alg.value = ""
	toc.value = ""
	
	message.className = "isa_success";
	message.innerHTML = "<i class='fa fa-info-circle'></i>FORM RESET DONE !"
}