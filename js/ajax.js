function AJAX(itemId,doel) {

	var xhttp = new XMLHttpRequest(); //het handelobject

	xhttp.onreadystatechange = function() { //de functie die elke keer afvuurt vannier onreadystate

		if (xhttp.readyState == 4 && xhttp.status == 200) { //als aanvraag is gedaan en is OK

	    	document.getElementById(itemId).innerHTML = xhttp.responseText;	//verander de html dan maar
	   	}
	}
	xhttp.open("GET", doel, true);	//aanvraag doen met GET, het doel waar we het halen en specificeert
	
	xhttp.send();	//de aanvraag doen
}