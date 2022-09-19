<?php
session_start();
echo '<div class="row">';
	echo '<div class="panel panel-primary">';
		echo '<div class="panel-heading">Contact Information</div>';
		echo '<div class="panel-body">';
		if (isset($_GET['msg']) && $_GET['msg']=="success")
			echo '<div class="alert alert-success" role="alert">Your entry has been received!</div>';
			echo '<div class="media">';
				echo '<div class="media-left media-top">';
					echo '<img src="../images/Saul-C-Picture.jpg" alt="Saul Picture :)" width="360" height="360">';
				echo '</div>';
				echo '<div class="media-body">';
					echo '<table class="table">';
						echo '<tr>';
							echo '<td>Address</td><td>123 Fake Address Ln, San Antonio, TX, 78249</td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td>Email</td><td>fakeEmail123@email.com</td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td>Phone Number</td><td>(210) 123-4567</td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td><a href="https://github.com/SOCS18" target="_blank">GitHub</a></td>';
						echo '</tr>';
					echo '</table>';
				echo '</div>';
			echo '</div>';
			echo '<div id="container">';
				echo '<div class="panel panel-primary">';
					echo '<div class="panel-heading">Contact Form</div>';
					echo '<div class="panel-body">';
				echo '<form method="post" action="">';
						if (isset($_GET['err']) && strstr($_GET['err'],"FnameNull"))
						{
							echo '<div class="form-group has-error">';
							echo '<label class="control-label" for="inputError1">First Name:</label>';
							echo '<input class="form-control" id="inputError1" name="fname" type="text" placeholder="Joseph" id="fname" onblur="checkFName(this.value);">';
							echo '<p class="help-block" id="fnameHelp">Cannot be blank!</p>';
							echo '</div>';
						}
						else
						{
							echo '<div class="form-group">';
							echo '<label>First Name:</label>';
							echo '<input class="form-control" name="fname" type="text" placeholder="Joseph" id="fname" onblur="checkFName(this.value);">';
							echo '<p class="help-block" id="fnameHelp"></p>';
							echo '</div>';
						}
						if (isset($_GET['err']) && strstr($_GET['err'],"LnameNull"))
						{
							echo '<div class="form-group has-error">';
							echo '<label class="control-label" for="inputError1">Last Name:</label>';
							echo '<input class="form-control" id="inputError1" name="lname" type="text" placeholder="Marquez" id="lname" onblur="checkLName(this.value);">';
							echo '<p class="help-block" id="lnameHelp">Cannot be blank!</p>';
							echo '</div>';
						}
						else
						{
							echo '<div class="form-group">';
							echo '<label>Last Name:</label>';
							echo '<input class="form-control" name="lname" type="text" placeholder="Marquez" id="lname" onblur="checkLName(this.value);">';
							echo '<p class="help-block" id="lnameHelp"></p>';
							echo '</div>';
						}
						if (isset($_GET['err']) && strstr($_GET['err'],"emailNull"))
						{
							echo '<div class="form-group has-error">';
							echo '<label class="control-label" for="inputError1">Email:</label>';
							echo '<input class="form-control" id="inputError1" name="email" type="text" placeholder="example123@email.com" id="email" onblur="checkEmail(this.value);">';
							echo '<p class="help-block" id="emailHelp">Cannot be blank!</p>';
							echo '</div>';
						}
						else
						{
							echo '<div class="form-group">';
							echo '<label>Email:</label>';
							echo '<input class="form-control" name="email" type="text" placeholder="example123@email.com" id="email" onblur="checkEmail(this.value);">';
							echo '<p class="help-block" id="emailHelp"></p>';
							echo '</div>';
						}
						if (isset($_GET['err']) && strstr($_GET['err'],"numberNull"))
						{
							echo '<div class="form-group has-error">';
							echo '<label class="control-label" for="inputError1">Phone Number:</label>';
							echo '<input class="form-control" id="inputError1" name="number" type="text" placeholder="xxx-xxx-xxxx" id="number" onblur="checkNumber(this.value);">';
							echo '<p class="help-block" id="numberHelp">Cannot be blank!</p>';
							echo '</div>';
						}
						else
						{
							echo '<div class="form-group">';
							echo '<label>Phone Number:</label>';
							echo '<input class="form-control" name="number" type="text" placeholder="xxx-xxx-xxxx" id="number" onblur="checkNumber(this.value);">';
							echo '<p class="help-block" id="numberHelp"></p>';
							echo '</div>';
						}
						if (isset($_GET['err']) && strstr($_GET['err'],"dobNull"))
						{
							echo '<div class="form-group has-error">';
							echo '<label class="control-label" for="inputError1">Date of Birth:</label>';
							echo '<input class="form-control" id="inputError1" name="dob" type="text" placeholder="mm/dd/yyyy" id="dob" onblur="checkDob(this.value);">';
							echo '<p class="help-block" id="dobHelp">Cannot be blank!</p>';
							echo '</div>';
						}
						else
						{
							echo '<div class="form-group">';
							echo '<label>Date of Birth:</label>';
							echo '<input class="form-control" name="dob" type="text" placeholder="mm/dd/yyyy" id="dob" onblur="checkDob(this.value);">';
							echo '<p class="help-block" id="dobHelp"></p>';
							echo '</div>';
						}
						if (isset($_GET['err']) && strstr($_GET['err'],"commentNull"))
						{
							echo '<div class="form-group has-error">';
							echo '<label class="control-label" for="inputError1">Comment:</label>';
							echo '<input class="form-control" id="inputError1" name="comment" type="text" id="comment" onblur="checkComment(this.value);">';
							echo '<p class="help-block" id="commentHelp">Cannot be blank!</p>';
							echo '</div>';
						}
						else
						{
							echo '<div class="form-group">';
							echo '<label>Comment</label>';
							echo '<input class="form-control" name="comment" type="text" id="comment" onblur="checkComment(this.value);">';
							echo '<p class="help-block" id="commentHelp"></p>';
							echo '</div>';
						}
					echo '<hr>';
					echo '<button id="submit" name="submit" class="btn btn-block btn-success" type="submit" onclick="showInputs();">Submit</button>';
					echo '<div id="result"></div>';
				echo '</form>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
echo '</div>';

if (isset($_POST['submit']))
{
	$err="";
	if (isset($_POST['fname']) && $_POST['fname']!="")
	{
		$firstName=addslashes($_POST['fname']);
		$_SESSION['first']=$firstName;
	}
	else
		$err.="FnameNull";
	if (isset($_POST['lname']) && $_POST['lname']!="")
	{
		$lastName=addslashes($_POST['lname']);
		$_SESSION['last']=$lastName;
	}
	else
		$err.="LnameNull";
	if (isset($_POST['email']) && $_POST['email']!="")
	{
		$email=$_POST['email'];
		$_SESSION['email']=$email;
	}
	else
		$err.="emailNull";
	if (isset($_POST['number']) && $_POST['number']!="")
	{
		$number=$_POST['number'];
		$_SESSION['number']=$number;
	}
	else
		$err.="numberNull";
	if (isset($_POST['dob']) && $_POST['dob']!="")
	{
		$dob=$_POST['dob'];
		$_SESSION['dob']=$dob;
	}
	else
		$err.="dobNull";
	if (isset($_POST['comment']) && $_POST['comment']!="")
	{
		$comment=addslashes($_POST['comment']);
		$_SESSION['comment']=$comment;
	}
	else
		$err.="commentNull";
	if (isset($err) && $err!="")
		redirect("index.php?page=contact&err=$err");
	$dblink=db_iconnect("contact_form");
	$sql="Insert into `entries` (`first_name`,`last_name`,`email`,`comment`) Values ('$firstName', '$lastName', '$email', '$comment')";
	$dblink->query($sql) or
		die("Something went wrong with $sql<br>".$dblink->error);
	redirect("index.php?page=contact&msg=success");
}
?>