<?php include './includes/analyticstracking.php' ?>
<?php include './includes/formHeader.php'; ?>
<?php
if(isset($_POST['submit'])) {
			
		$cname = mysql_escape_string($_POST['cname']);
		$city = mysql_escape_string($_POST['city']);
		$state = mysql_escape_string($_POST['state']);
		$gross_sale = mysql_escape_string($_POST['gross_sale']);
		$date_sold = mysql_escape_string($_POST['date_sold']);
		$deposit_received = mysql_escape_string($_POST['deposit_received']);
		$deposit_amount = mysql_escape_string($_POST['deposit_amount']);
		$waiting_for_rep = mysql_escape_string($_POST['waiting_for_rep']);
		$split_sale_with = mysql_escape_string($_POST['split_sale_with']);
		
			
		mysql_query("INSERT INTO `mark_herbst` (`cname`, `city`, `state`, `gross_sale`) VALUES ('$cname', '$city', '$state', '$gross_sale')");
		echo "Success! You have entered a new Sale.";
		
		
}
?>
<div id="page">
<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">Football</a></li>
        <li><a href="#tab2">Baseball</a></li>
        <li><a href="#tab3">Basketball</a></li>
		<li><a href="#tab3">Hockey</a></li>
		<li><a href="#tab3">Soccer</a></li>
		<li><a href="#tab3">Tennis</a></li>
		<li><a href="#tab3">Swimming</a></li>
		<li><a href="#tab3">Track</a></li>
		<li><a href="#tab3">Wrestling</a></li>
		<li><a href="#tab3">Volleyball</a></li>
    </ul>
 
    <div class="tab-content">
        <div id="tab1" class="tab active">

        </div>
 
        <div id="tab2" class="tab">
            <p></p>
            <p></p>
        </div>
 
        <div id="tab3" class="tab">
            <p></p>
            <p></p>
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
		
</div>
<?php include './includes/footer.php'; ?>
