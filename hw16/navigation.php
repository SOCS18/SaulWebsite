<?php
echo '<div class="page-header">
	<h1>Saul Carreon <small>Web Technologies 2022</small></h1>
</div>';
echo '<ul class="nav nav-pills nav-justified">';
echo '<li role="presentation" id="home" class="active"><a onclick="updateContent(\'home\')">Home</a></li>';
echo '<li role="presentation" id="school"><a onclick="updateContent(\'school\')">School</a></li>';
echo '<li role="presentation" id="work"><a onclick="updateContent(\'work\')">Work</a></li>';
echo '<li role="presentation" id="projects"><a onclick="updateContent(\'projects\')">Projects</a></li>';
echo '<li role="presentation" id="contact"><a onclick="updateContent(\'contact\')">Contact</a></li>';
echo '</ul>';
?>