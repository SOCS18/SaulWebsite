<?php
function redirect ( $uri )
{ ?>
	<script type="text/javascript">
	<!--
	document.location.href="<?php echo $uri; ?>";
	-->
	</script>
<?php die;}

function db_iconnect($db)
{
	$un="webuser";
	$pw="V7OyytMyvXiSgs7n";
	//$db=$dbName;
	$hostname="localhost";
	$dblink=new mysqli($hostname,$un,$pw,$db);
	return $dblink;
}

?>