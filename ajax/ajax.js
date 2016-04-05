function AJAX(doel) {

	var xhttp = new XMLHttpRequest(); //the AJAX object

	xhttp.onreadystatechange = function() { // Track the state changes of the request.

		if (xhttp.readyState == 4 && xhttp.status == 200) { // readyState 4 means the request is done and status 200 is a successful return
			console.log("hier ben ik");
	    	document.getElementById("msg").innerHTML = xhttp.responseText;
	   	}
	}
	xhttp.open("GET", doel, true);	//Initialize the Http request
	
	xhttp.send();	// Send the request to the target you`ve given
}
