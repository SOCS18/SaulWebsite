// JavaScript Document
function showInputs()
{	
	var firstName = checkFName(document.getElementById("fname").value);
	var lastName = checkLName(document.getElementById("lname").value);
	var email = checkEmail(document.getElementById("email").value);
	var phoneNumber = checkNumber(document.getElementById("number").value);
	var dob = checkDob(document.getElementById("dob").value);
	var comment = checkComment(document.getElementById("comment").value);
	
	var output = document.getElementById('result');
	
	if (firstName == null || lastName == null || email == null || phoneNumber == null || dob == null || comment == null)
	{
		alert("Enter correct inputs");
	}
	else
	{
		alert("You entered correct inputs");
	}
	
	output.innerHTML = 'Success';
}

function checkFName(fName)
{	
	var output = document.getElementById('fnameHelp');
	var fNameRegex = /^[a-z ,.'-]+$/i;
	if (fName.match(fNameRegex))
	{
		document.getElementById('submit').classList.remove('disabled');
		document.getElementById('submit').classList.remove('btn-danger');
		document.getElementById('submit').classList.add('btn-success');
		output.innerHTML = 'Success';
	}
	else
	{
		document.getElementById('submit').classList.remove('btn-success');
		document.getElementById('submit').classList.add('btn-danger');
		document.getElementById('submit').classList.add('disabled');
		output.innerHTML = 'Please input correct first name';
	}
	
	return fName;
}

function checkLName(lName)
{	
	var output = document.getElementById('lnameHelp');
	var lNameRegex = /^[a-z ,.'-]+$/i;
	if (lName.match(lNameRegex))
	{
		output.innerHTML = 'Success';
	}
	else
	{
		output.innerHTML = 'Please input correct last name';
	}
	
	return lName;
}

function checkEmail(email)
{
	var output = document.getElementById('emailHelp');
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	if (email.match(emailRegex))
	{
		output.innerHTML = 'Success';
	}
	else
	{
		output.innerHTML = 'Please input correct email';
	}
	
	return email;
}

function checkNumber(number)
{
	var output = document.getElementById('numberHelp');
	var phoneRegex = /^\(?([0-9]{3})\)?[-]?([0-9]{3})[-]?([0-9]{4})$/;
	if (number.match(phoneRegex))
	{
		output.innerHTML = 'Success';
	}
	else
	{
		output.innerHTML = 'Please input correct phone number';
	}
	
	return number;
}

function checkDob(dob)
{
	var output = document.getElementById('dobHelp');
	var dobRegex = /(0[1-9]|1[0-2])[/](0[1-9]|[12][0-9]|3[01])[/]\d{4}/;
	if (dob.match(dobRegex))
	{
		output.innerHTML = 'Success';
	}
	else
	{
		output.innerHTML = 'Please input correct DOB';
	}
	
	return dob;
}

function checkComment(comment)
{
	var output = document.getElementById('commentHelp');
	var commentRegex = /^[^~`^<>]+$/;
	if (comment.match(commentRegex))
	{
		output.innerHTML = 'Success';
	}
	else
	{
		output.innerHTML = 'Please input correct comment';
	}
	
	return comment;
}