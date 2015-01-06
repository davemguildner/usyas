<?php
include './includes/db_connect.php';
if(isset($_POST['submit'])) {
	$sql = "UPDATE `edgedes2_sportstats`.`sport` SET `sport1` = '$_POST[sport1]' WHERE `sport`.`id` = $_POST[id];";
	mysql_query($sql);
	header( "Location:./myusyas.php" );
}else{
	echo "Sorry, query failed!";
}