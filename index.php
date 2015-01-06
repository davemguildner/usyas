<?php include './includes/analyticstracking.php' ?>
<?php
session_start();
if(!$_SESSION['loggedin'] == yes) {
	include './includes/header.php';
}else {
	include './includes/header_2.php';
}
?>

<div id="background_index">
<div id="page">
    <div id="indexPageBanner">
        <div id="bannertextandbuttonContainer">
            <h2 class="h2inBanner">Student Athletes, Parents & Coaches!</h2>
            <h3 class="h3inBanner">Share your stats and performance like never before!</h3>
            <a href="register.php"><div class="signupbannerlink"><p>SIGN UP TODAY!</p></div></a>
        </div>
    </div>

    <div id='theStepsContainer'>
        <table id='stepsTable'>
            <tr>
                <td>Step 1</br>
                    Sign-Up & Create your student-athlete profile.
                </td>
                <td>Step 2</br>
                   Input your personal statistics, photos and videos.
                </td>
                <td>Step 3</br>
                    Network nationwide with universities, coaches, scouts and recruiters.
                </td>
                <td>Step 4</br>
                    Obtain scholarships and grants for college.
                </td>
            </tr>
        </table>
    </div>






</div>
</div>
<?php include './includes/footer.php'; ?>
