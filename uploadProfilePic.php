<?php
session_start();
$id = $_SESSION['FK'];
if ($_POST && !empty($_FILES)) {
    $formOk = true;
    $path = $_FILES['image']['tmp_name'];
    $name = $_FILES['image']['name'];
    $size = $_FILES['image']['size'];
    $type = $_FILES['image']['type'];
    if ($_FILES['image']['error'] || !is_uploaded_file($path)) {
        $formOk = false;
    }
    if ($formOk && !in_array($type, array('image/png', 'image/x-png', 'image/jpeg', 'image/pjpeg', 'image/gif'))) {
        $formOk = false;
    }
    if ($formOk && filesize($path) > 500000) {
        $formOk = false;
    }
    if ($formOk) {
        $content = file_get_contents($path);
        if ($conn = mysqli_connect('localhost', 'edgedes2_sport', 'Las!0(drg1', 'edgedes2_sportstats')) {
            $content = mysqli_real_escape_string($conn, $content);
            $sql = "UPDATE `edgedes2_sportstats`.`images` SET `name` = '$name', `size` = '$size', `type` = '$type', `content` = '$content' WHERE `images`.`FK` = '$id'";
            if (mysqli_query($conn, $sql)) {
                $uploadOk = true;
                $imageId = mysqli_insert_id($conn);
                header("Location:./myusyas.php");
            } else {
                echo "Error: Could not save the data to mysql database. Please try again.";
            }
            mysqli_close($conn);
        } else {
            echo "Error: Could not connect to mysql database. Please try again.";
        }
    }
}
if(!empty($uploadOk)):
endif; ?>