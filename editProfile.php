<?php
session_start();
if(!$_SESSION['loggedin'] == yes) {
	header("Location:./index.php");
	exit;
}else {
	include './includes/header_2.php';
}
$fk = $_SESSION['FK'];
$q = "SELECT * FROM users WHERE FK = '$fk'";
$r = mysql_query($q);
$user = mysql_fetch_array($r);
if ($user['status'] == active) {

}else{
    echo "Your account is not active.";
}
?>
    <div id='background_index'>
        <div id="PageWrapper">
            <div id="pageLeft">
                <div id="profileContainer">
                    <?php
                    echo "<h2 class='welcomeName'>Welcome ".$user['name']."</h2>";
                    echo "</br>";
                    $imageId = $user['id'];
                    if ($conn = mysqli_connect('localhost', 'edgedes2_sport', 'Las!0(drg1', 'edgedes2_sportstats')) {
                        $content = mysqli_real_escape_string($conn, $content);
                        $sql = "SELECT type, content FROM images where id = '$imageId'";
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
                        echo "<img src='./profileimageController/image.php?id=".$imageId."' width='300px'>";
                        echo "<form action='uploadProfilePic.php' method='POST' enctype='multipart/form-data'>";
                        echo "<input type='hidden' name='MAX_FILE_SIZE' value='500000'/>";
                        echo "<input type='file' name='image'/>";
                        echo "<input name='submit' type='image'/>";
                        echo "</form>";
                    }
                    ?>
                </div>
                <div id="sportStatsBox1">
                    <?php
                    if(!isset($_POST['submit'])) {
                    $q      = "SELECT * FROM sport WHERE FK = '$fk'";
                    $result = mysql_query( $q );
                    $user   = mysql_fetch_array( $result );
                    {
                    echo "<form action='updateSports.php' method='POST'>";
                        echo "<input type='hidden' name='id' value='" . $user['id'] . "'/>";
                        echo "<input type='text' name='sport1' value='" . $user['sport1'] . "'/>";
                        echo "<input type='submit' name='submit' value='Update'/>";
                        echo "</form>";
                    }
                    }
                    ?>
                </div>
            </div>
            <div id="pageRight">
                <div id="mainContentWrapper">

                </div>
            </div>
        </div>
    </div>