<?php
/**
 * @var $this \core\View
 */

$this->title='Available Workouts | Fitter'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        <?php include '../public/css/Available-Workouts.css'?>
        <?php include '../public/css/header-profile.css'?>
    </style></head>
<body class="body">
<main class="main">
    <?php
    $workouts=\core\Application::$app->workoutList;
    $section= new \core\form\Section();
    foreach ($workouts as $workout){
        echo $section->workoutField($workout->id,$workout->title,$workout->duration,$workout->image);
    }
   ?>
</main>

<footer>
    <div class="footer_container">
        <div class="footer">
            <div class="footer-heading footer-1">
                <h1>Discover Fitter</h1>
                <a href="#">About us</a>
                <a href="#">Newsletter</a>
                <a href="#">Careers</a>
                <a href="../Register/register.html">Sign Up</a>
                <a href="#">FAQ</a>
                <a href="#">Support</a>
            </div>
            <div class="footer-heading footer-2">
                <h1>Legal</h1>
                <a href="#">Terms and Conditions</a>
                <a href="#">Privacy</a>
                <a href="#">Cookies</a>
            </div>
            <div class="footer-heading footer-3">
                <h1>Socials</h1>
                <a href="https://www.instagram.com/vaasxo/">Instagram</a>
                <a href="https://www.facebook.com/vaasxo/">Facebook</a>
            </div>
        </div>
    </div>
    <div class="copyright_container">
        <span class="copyright_text">© 2021 Ondina Lipsa, Radu Deleanu, Alexandra Spanache</span>
    </div>
</footer>
</body>

</html>