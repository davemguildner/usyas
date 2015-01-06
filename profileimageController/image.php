<?php
session_start();
if(!$_SESSION['loggedin'] == yes) {

}
$fk = $_SESSION['FK'];
$q = "SELECT * FROM users WHERE FK = '$fk'";
$r = mysql_query($q);
$user = mysql_fetch_array($r);
$imageId = $fk;
if ($conn = mysqli_connect('localhost', 'edgedes2_sport', 'Las!0(drg1', 'edgedes2_sportstats')) {
	$content = mysqli_real_escape_string($conn, $content);
	$sql = "SELECT type, content FROM images where FK = '$imageId'";
	if ($rs = mysqli_query($conn, $sql)) {
		$imageData = mysqli_fetch_array($rs, MYSQLI_ASSOC);
		mysqli_free_result($rs);
	} else {
		echo "Error: Could not get data from mysql database. Please try again.";
	}
	//close mysqli connection
	mysqli_close($conn);
} else {
	echo "Error: Could not connect to mysql database. Please try again.";
}
if (!empty($imageData)) {
	header("Content-type: {$imageData['type']}");
	echo $imageData['content'];
}
