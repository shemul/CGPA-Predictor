table = document.getElementById("table_content");
search = document.getElementById('search');


document.addEventListener( 'DOMContentLoaded', function () {
	loadData("","");
}, false );

search.addEventListener("keypress", function (event) {
	//console.log(event.key);
	if(event.key =="Enter") {
		if(search.value!="") {
			var type = document.getElementById('filter_bar').value;
			//console.log(search.value);
			loadData(encodeURIComponent(search.value) , type);
		} else {
			loadData("" , "");
		}
		
	}
});


function loadData(qry , type) {
	

	        var xmlhttp = new XMLHttpRequest();
		    xmlhttp.onreadystatechange = function() {
		        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		            
		            
		            var obj = JSON.parse(xmlhttp.responseText);
		            
		            var data = "";
		            for(var i=0 ; i < obj.length ; i++) {
		            	
		            	data += 
		            		"<tr><td>"+obj[i].id+"</td><td>"+obj[i].eng+"</td><td>"+obj[i].mat+"</td><td>"+obj[i].phy+"</td><td>"+obj[i].che+"</td><td>"+obj[i].bio+"</td><td>"+obj[i].pl1+
		            		"</td><td>"+obj[i].pl2+"</td><td>"+obj[i].dat+"</td><td>"+obj[i].alg+"</td><td>"+obj[i].toc+
		            		"</td><td><a href=update.php?train="+obj[i].id+"><button id='update' class='btn update'>UPDATE</button></a>&nbsp;&nbsp;<a href=/database/service/update_service.php?delete_table="+obj[i].id+"><button id='btnDelete' class='btn remove'>REMOVE</button></a></td></tr>";
		            }

		            table.innerHTML = data;
		            
		            
		        }


		    };
		    table.innerHTML = "<tr><td colspan='11'>loading<td></tr>";
		    if(qry=="") {
		    	
		    	xmlhttp.open("GET", "handler/trained_handler.php?load=yes", true);
		    } else {
		    	
		    	xmlhttp.open("GET", "handler/trained_handler.php?search=" + qry +"&type=" + type, true);	
		    }
		    
		    xmlhttp.send(); 

	
}
