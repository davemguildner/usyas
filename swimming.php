<?php include './includes/analyticstracking.php' ?>
<?php
session_start();
if(!$_SESSION['loggedin'] == yes) {
	include './includes/header.php';
}else {
	include './includes/header_2.php';
}
?>
<div id="background_swimming">
	<div id="page">
		<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1"> Leader Board</a></li>
        <li><a href="#tab2">Teams</a></li>
        <li><a href="#tab3">Players</a></li>
    </ul>
 
    <div class="tab-content">
        <div id="tab1" class="tab active">
            <p>Leader Board</p>
            <iframe width="500px" height="500px" src="http://www.google.com"></iframe>
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
