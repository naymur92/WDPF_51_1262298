var mywin;

function passdata(){
	let fname = document.myform.fullname.value;
	let addr = document.myform.address.value;
	let allinfo;

	mywin = window.open("", "", "height=300, width= 400, left=400, top=200");
	allinfo = "<h2>All my information</h2>";
	allinfo += "<p>Fullname: " + fname + "</p>";
	allinfo += "<p>Address: " + addr + "</p>";

	// mywin.document.write("<h2>All my information</h2>");
	// mywin.document.write("<p>Fullname: " + fname + "</p>");
	// mywin.document.write("<p>Address: " + addr + "</p>");

	mywin.document.write(allinfo);
}

function moveRel(){
	mywin.moveBy(50,50);
}