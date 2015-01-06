<?php
/**
 * Created by DMG DevelopmentM
 */
session_start();
include './includes/db_connect.php';
if(isset($_POST['uname']) && ($_POST['password'])) {
	$uname = $_POST['uname'];
	$password = $_POST['password'];
	$problem = "Username or Password is not vaild! Please try again.";
	$query = mysql_query( "SELECT * FROM users WHERE uname = '$uname' AND password = '$password'") or die ( "Query Failed" );
	$count = mysql_num_rows( $query );
	if ( $count == 0 ) {
		header("Location:./index.php?=$problem");
		exit;
	}elseif($count != 0) {
		$row = mysql_fetch_array($query);
		$id = $row['name'];
		$_SESSION['loggedin'] = "yes";
		$_SESSION['FK'] = $row['FK'];
		header("Location:./myusyas.php?=$id");
	}
}