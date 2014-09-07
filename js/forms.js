function formhash(form, password) {
   // Create a new element input, this will be out hashed password field.
   var p = document.createElement("input");
   // Add the new element to our form.
   form.appendChild(p);
   p.name = "p";
   p.type = "hidden";
   p.value = hex_sha512(password.value);
   // Make sure the plaintext password doesn't get sent.
   password.value = "";
   // Finally submit the form.
   form.submit();
}

function checkfields(form) {
	var length = form.elements.length;
	var t = true;
	for (var i=0; i< length; i++){ 
		if(form.elements[i].value.length == 0){
			t = false;
		}
	}
   	if(t){
   		formhash(form, form.password);
   	}
   	else{
   		window.location = "index.php?p=register&short=1";
   	}
   	
}