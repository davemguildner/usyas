<?php include './includes/analyticstracking.php' ?>
<?php
session_start();
if(!$_SESSION['loggedin'] == yes) {
	include './includes/header.php';
}else {
	include './includes/header_2.php';
}
?>
<head>

<style>
.stattable{width:100%;border:1px solid grey;}
.stattable td{text-align:center;border:2px solid lightgrey;}
</style>

</head>

<div id="background_football">
	<div id="page">
	</br>
	<h1 class="page_title">Football</h1>
		<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1"> Leader Board</a></li>
        <li><a href="#tab2">Teams</a></li>
        <li><a href="#tab3">Players</a></li>
    </ul>
 
    <div class="tab-content">
    <div id="tab1" class="tab active">

    </div>

    <div id="tab2" class="tab">
        <p>Teams</p>
        <p></p>
    </div>

    <div id="tab3" class="tab">
        <p>Players</p>
        <p></p>
    </div>
    </div>
</div>
	</div>
</div>
<script>
jQuery(document).ready(function() {
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
});

</script>
<?php include './includes/footer.php'; ?>
