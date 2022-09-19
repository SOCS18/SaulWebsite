<script src="assets/js/jquery-3.5.1.js"></script>
<?php
include("functions.php");
echo '<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web Tech - Home</title>
<link rel="stylesheet" href="assets/css/bootstrap.css">
	<script src="assets/js/hover.js"></script>
</head>
	<body>';
	include("navigation.php");
	echo '<div id="mainContent">';
	echo '</div>';
	echo '</body>';
echo '</html>';
?>
<script>
	function updateContent(page) {
		$.ajax({
			type:'post',
			url:'https://ec2-3-89-249-109.compute-1.amazonaws.com/hw16/'+page+'.php',
			success:function(data) {
				switch (page) {
					case "home":
						document.getElementById("school").classList.remove("active");
						document.getElementById("work").classList.remove("active");
						document.getElementById("contact").classList.remove("active");
						document.getElementById("home").classList.add("active");
						break;
					case "school":
						document.getElementById("home").classList.remove("active");
						document.getElementById("work").classList.remove("active");
						document.getElementById("contact").classList.remove("active");
						document.getElementById("school").classList.add("active");
						break;
					case "work":
						document.getElementById("home").classList.remove("active");
						document.getElementById("school").classList.remove("active");
						document.getElementById("contact").classList.remove("active");
						document.getElementById("work").classList.add("active");
						break;
					case "contact":
						document.getElementById("home").classList.remove("active");
						document.getElementById("work").classList.remove("active");
						document.getElementById("school").classList.remove("active");
						document.getElementById("contact").classList.add("active");
						break;
					default:
						document.getElementById("school").classList.remove("active");
						document.getElementById("work").classList.remove("active");
						document.getElementById("contact").classList.remove("active");
						document.getElementById("home").classList.add("active");
						break;
				};
				$('#mainContent').html(data); // Show fetched data
			}
		});
	};
</script>