<?php include 'db_connect.php'; ?>

<head>
<meta name="author" content="DMG Design & Development">
<meta name="description" content="">
<meta name="keywords" content="">

<title>USYAS | United States Youth Athletic Services</title>

<link rel="stylesheet" type="text/css" href="./css/phonestyle.css">



<link rel="icon" type="image/ico" href="../images/favicon.ico">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script>
( function( $ ) {
$( document ).ready(function() {
// Cache the elements we'll need
var menu = $('#cssmenu');
var menuList = menu.find('ul:first');
var listItems = menu.find('li').not('#responsive-tab');

// Create responsive trigger
menuList.prepend('<li id="responsive-tab"><a href="#">Menu</a></li>');

// Toggle menu visibility
menu.on('click', '#responsive-tab', function(){
	listItems.slideToggle('fast');
	listItems.addClass('collapsed');
});
});
} )( jQuery );

</script>

<script>
document.getElementById("demo").innerHTML = "Hello JavaScript!";
</script> 
</head>

<!-- Logo and Name Container -->

<div id="header_container">
	<img class="logo" src="./images/logo.png"/>
	<h1 class="site_company_title">USYAS | United States Athletic Services</h1>
</div>

<!-- Dropdown Menu -->
<div id='cssmenu'>
<ul>
   <li class='has-sub'><a href='#'><span>MENU |||</span></a>
      <ul>
         <li>
		 <a href="">Hello</a>
		 <a href="">Hello</a>
		 <a href="">Hello</a>
		 </li>
      </ul>
</ul>
</div>