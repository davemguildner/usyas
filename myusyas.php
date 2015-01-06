<?php
session_start();
if(!$_SESSION['loggedin'] == yes) {
	header("Location:./index.php");
	exit;
}else{
	include './includes/header_2.php';
}
$fk = $_SESSION['FK'];
$q = "SELECT * FROM users WHERE FK = '$fk'";
$r = mysql_query($q);
$user = mysql_fetch_array($r);
if ($user['status'] == active) {

}else{
	echo "Your account is not active.";
    exit();
}
?>
<div id='background_index'>
    <div id="PageWrapper">
        <div id="pageLeft">
            <div id="profileContainer">
                <?php
                echo "<h2 class='welcomeName'>Welcome ".$user['name']."</h2>";
                echo "</br>";
                $imageId = $user['FK'];
                if ($conn = mysqli_connect('localhost', 'edgedes2_sport', 'Las!0(drg1', 'edgedes2_sportstats')) {
                    $content = mysqli_real_escape_string($conn, $content);
                    $sql = "SELECT type, content FROM images where FK = '$imageId'";
                    if ($rs = mysqli_query($conn, $sql)) {
                        $imageData = mysqli_fetch_array($rs, MYSQLI_ASSOC);
                        mysqli_free_result($rs);
                    } else {
                        echo "Error: Could not get data from mysql database. Please try again. 1";
                    }
                    mysqli_close($conn);
                }else{
                    echo "Error: Could not connect to mysql database. Please try again. 2";
                }
                if (!empty($imageData)) {
                    header("Content-type: {$imageData['type']}");
                    echo "<img class='profileImage' src='./profileimageController/image.php?id=".$imageId."' onerror='./images/default_profile_pic.jpg'/>";
                }
                ?>
            </div>
        </div>
        <div id="pageRight">
            <div id="mainContentWrapper">
                <?php
                $s = "SELECT * FROM sport WHERE FK = '$fk'";
                $result = mysql_query($s);
                $sport1 = mysql_fetch_array($result);
                if ($sport1['id'] > 0) {
                    echo "</br>";
                    echo "</br>";
                    echo "</br>";
                    echo "Your Sports";
                    echo "</br>";
                    echo "<h5 class='sportName'>".$sport1['sport1']."</h5>";
                    echo "<div id='cssmenu'>";
                    echo "<ul>";
                    echo "<li class='has-sub'><a href='#'><span>My Account</span></a>";
                    echo "<ul>";
                    echo "<li><a href='./editProfile.php?id=".$id."'><span>Edit Profile</span></a></li>";
                    echo "<li class='last'><a href='#'><span></span></a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "</ul>";
                    echo "</div>";
                    echo "</br>";
                    echo "<h5 class='sportName'>".$sport1['sport2']."</h5>";
                    echo "</br>";
                    echo "<h5 class='sportName'>".$sport1['sport3']."</h5>";
                    echo "</br>";
                    echo "<h5 class='sportName'>".$sport1['sport4']."</h5>";
                }else{
                    echo "No Stats Entered Yet";
                    echo "<br/><br/><br/>";
                    echo "<div id='cssmenu'>";
                    echo "<ul>";
                    echo "<li class='has-sub'><a href='#'><span>My Account</span></a>";
                    echo "<ul>";
                    echo "<li><a href='./editProfile.php?id=".$id."'><span>Edit Profile</span></a></li>";
                    echo "<li class='last'><a href='#'><span></span></a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "</ul>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script>
( function( $ ) {
$( document ).ready(function() {
$('#cssmenu > ul > li > a').click(function() {
$('#cssmenu li').removeClass('active');
$(this).closest('li').addClass('active');
var checkElement = $(this).next();
if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
$(this).closest('li').removeClass('active');
checkElement.slideUp('normal');
}
if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
$('#cssmenu ul ul:visible').slideUp('normal');
checkElement.slideDown('normal');
}
if($(this).closest('li').find('ul').children().length == 0) {
return true;
} else {
return false;
}
});
});
} )( jQuery );
</script>