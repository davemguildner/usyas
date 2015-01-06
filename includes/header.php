<?php
include './includes/db_connect.php';
include './includes/config.php';
?>
<head>
<meta name="author" content="<?php echo $author; ?>">
<meta name="description" content="">
<meta name="keywords" content="">
<title>USYAS | United States Youth Athletic Services</title>
<link rel="stylesheet" type="text/css" href="../css/sitestyle.css">
<link rel="icon" type="image/ico" href="../images/favicon.ico">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
		function showPopup(url) {
		newwindow=window.open(url,'name','height=650,width=1100px,top=215,left=400,resizable');
		if (window.focus) {newwindow.focus()}
		}
</script>
<script >
if (screen.width <= 480) {
window.location = "../phone/index.php";
}
</script>
<script >
if (screen.width <= 768) {
window.location = "../tablet/index.php";
}
</script>
</head>
<div id="top_header_container">
	<a href="../index.php">
	<img src="../images/favicon.ico" class="logo"/>
	<h1 class="h1"><span class="usyas">USYAS</span> | United States Athletic Service</h1>
	</a>
    <div id="headerFloatRightContainer">
        <a class="regiterLinkinHeader" href="register.php">Need an account? Sign up here!</a>
        <form action="checkLogin.php" method="post" id="headerLoginForm">
            <input  class="header_input" type="text" name="uname" placeholder="Username"/>
            <input  class="header_input" type="text" name="password" placeholder="Password"/>
            <input  class="header_submit" type="submit" name="submit" value="Login"/>
        </form>
    </div>
</div>
<div id="menu_container">
	<table id="nav_table">
		<tr>
			<nav id="main_nav">
				<td><a href="football.php">Football</a></td>
				<td><a href="baseball.php">Baseball</a></td>
				<td><a href="basketball.php">Basketball</a></td>
				<td><a href="hockey.php">Hockey</a></td>
				<td><a href="soccer.php">Soccer</a></td>
				<td><a href="tennis.php">Tennis</a></td>
				<td><a href="swimming.php">Swimming</a></td>
				<td><a href="track.php">Track</a></td>
				<td><a href="wrestling.php">Wrestling</a></td>
				<td><a href="volleyball.php">Volleyball</a></td>
			</nav>
		</tr>
	</table>
</div>