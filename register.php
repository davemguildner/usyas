<?php
$pageTitle = "Admin Dashboard";
include './includes/header.php';
?>
<div id="background_index">
<?php
if(isset($_POST['submit'])) {
	//Verify information
	$email = $_POST['email'];
	$email2 = $_POST['email2'];
	$password = $_POST['password'];
	$pass2 = $_POST['pass2'];
	if($email == $email2) {
		if($password == $pass2) {
			$uname = mysql_real_escape_string($_POST['uname']);
			$name = mysql_real_escape_string($_POST['name']);
			$sport1 = mysql_real_escape_string($_POST['sport1']);
			$email = mysql_real_escape_string($email);
			$email2 = mysql_real_escape_string($email2);
			$password = mysql_real_escape_string($password);
			$pass2 = mysql_real_escape_string($pass2);
			$sql = mysql_query("SELECT * FROM `users` WHERE `uname` = '$uname'");
			if(mysql_num_rows($sql) > 0) {
				echo "Sorry, that user already exists.";
				echo $regForm;
				exit;
			}
				mysql_query( "INSERT INTO `users` (`id`, `uname`, `name`, `email`, `password`, `status`, `FK`) VALUES (NULL, '$uname', '$name', '$email', '$password', 'active', '$uname')" );
				mysql_query( "INSERT INTO `sport` (`id`, `uname`, `sport1`, `FK`) VALUES (NULL, '$uname', '$sport1', '$uname')" );
				mysql_query( "INSERT INTO `images` (`id`, `name`, `size`, `type`, `content`, `FK`) VALUES (NULL, '', '', '', '', '$uname')" );
				$to = $email;
				$subject ="Welcome to USYAS";
				$content = "Thank you for joining the USYAS family. You have taken a great step in sharing and promoting your athletic abilities.";
				mail($to,$subject,$content);
				echo "Great! Let's get you logged in.";
				echo "<form action='./checkLogin.php' method='POST' id='loginForm'>";
				echo "<h1 class='loginFormTitle'>Admin Login</h1>";
				echo "<input type='text' name='uname' class='loginInput' placeholder='Username...'/>";
				echo "<input type='password' name='password' class='loginInput' placeholder='Password...'/>";
				echo "<input type='submit' class='submit' value='Login'/>";
				echo "</form>";
				exit();
		}else{
			echo "Sorry, your passowrds do not match </br>";
		}
	}else{
		echo "Sorry, your email's do not match. <br/>";
	}
}
?>
<h1 class="regFormTitle">Register New User</h1>
	<?php
	echo $regForm;
	?>
</div>