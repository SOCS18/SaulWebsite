// JavaScript Document

function panelOn(x)
{
	document.getElementById(x).classList.remove('panel-default');
	document.getElementById(x).classList.add('panel-primary');
	console.log("DIV is: " + x);
}

function panelOff(x)
{
	document.getElementById(x).classList.remove('panel-primary');
	document.getElementById(x).classList.add('panel-default');
}