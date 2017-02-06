function isEmpty(obj) {
	if(obj.value=="") {
		return true ;
	} else {
		return false ;
	}
}

function emailValidation(obj) {
	e_val = obj.value;
	var atpos = e_val.indexOf("@");
	if(atpos > 0) {
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


function aiubIdValidate(aiub_id) {

        var y = aiub_id.split("-");
        //document.write(y);
        if (y.length == 3) {
            if (y[0].length == 2 && y[1].length == 5 && y[2].length == 1) {
                var p1 = y[0]; //16
                var p2 = y[1]; //12345
                var p3 = y[2]; //1

                if ( !(isNaN(p1[0]) && isNaN(p1[1]) && isNaN(p2[0]) && isNaN(p2[1]) && isNaN(p2[2]) && isNaN(p2[3]) && isNaN(p2[4]) && isNaN(p3[0]))) {
                    return true;
                }
                else {
                    return false ;
                }
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }
}

function termsAgree(obj) {
	if(obj.checked) {
		return true ;
	} else {
		return false ;
	}
}