<?php
echo "<p>Hello, here are the inputs:</p>";
$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$email=$_POST['email'];
$comment=$_POST['comment'];
echo "<div>First Name: $firstName</div>";
echo "<div>Last Name: $lastName</div>";
echo "<div>Email: $email</div>";
echo "<div>Comment: $comment</div>";
?>