table = document.getElementById("table_content");
search = document.getElementById('search');

 
document.addEventListener( 'DOMContentLoaded', function () {
	loadData(1);
}, false );

search.addEventListener("keypress", function (event) {
	//console.log(event.key);
	if(event.key =="Enter") {
		if(search.value!="") {
			loadData(search.value);
		} else {
			loadData(1);
		}
		
	}
});



function loadData(type) {

        var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	            
	            var obj = JSON.parse(xmlhttp.responseText);
	            console.log(obj);
	            var data = "";
	            for(var i=0 ; i < obj.length ; i++) {
	            	
	            	data += 
	            		"<tr><td>"+obj[i].id+"</td><td>"+obj[i].eng+"</td><td>"+obj[i].mat+"</td><td>"+obj[i].phy+"</td><td>"+obj[i].che+"</td><td>"
	            		+obj[i].bio+"</td><td>"+ obj[i].pl1 +"</td><td><a href=/predict.php?predict="+obj[i].id+"><button id='update' class='btn predict'>PREDICT</button></a>&nbsp;&nbsp;<a href=/database/service/update_service.php?delete_table_test="+obj[i].id+"><button class='btn remove'>REMOVE</button></a></td></tr>";
	            }
	            table.innerHTML = data;
	        
	            
	        }
	    };
	    table.innerHTML = "<tr><td colspan='11'>loading<td></tr>";
	    if(type==1) {
	    	xmlhttp.open("GET", "handler/test_handler.php?load=yes", true);
	    } else {
	    	xmlhttp.open("GET", "handler/test_handler.php?search=" + type, true);
		}
	    xmlhttp.send(); 

}

