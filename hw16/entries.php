<script src="assets/js/jquery-3.5.1.js"></script>
<?php
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
					echo '<table border="1">';
					echo '<tr>';
					echo '<th>First Name</th>';
					echo '<th>Last Name</th>';
					echo '<th>Email</th>';
					echo '<th>Comment</th>';
					echo '</tr>';
					echo '<tbody id="content">';
					echo '</tbody>';
					echo '</table>';
					echo '</div>'; // end panel-body
				echo '</div>'; // end panel-primary
			echo '</div>'; // end container
		echo '</div>';
	echo '</div>';
echo '</div>';
?>
<script>
function refresh_div() {
	$.ajax({
		type: 'post',
		url: 'https://ec2-3-89-249-109.compute-1.amazonaws.com/hw15/query_entries.php',
		success: function(data) {
			$('#content').html(data);
		}
	});
};
setInterval(function(){ refresh_div(); }, 500);
//refresh_div();
</script>