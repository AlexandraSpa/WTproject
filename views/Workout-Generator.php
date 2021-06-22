<?php
use models\WorkoutForm;
/** @var $model WorkoutForm */

/**
 * @var $this \core\View
 */
$this->title='Workout Generator | Fitter'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        <?php include '../public/css/header.css'?>
        <?php include '../public/css/Workout-Generator.css'?>
        <?php include '../public/css/header-profile.css'?>
    </style>
</head>
<body class="body" >
<main class="main">
    <section class="form-generator">
        <span class="form-question"><br>In order to see recommended workouts, please let us know:</span>
        <?php  $form = \core\form\Section::begin("form-background","post")?>
        <?php echo $form->fieldset($model,"activity","What is your activity level? ","radio",
        ["Very Sedentary","Sedentary","Somewhat Active","Active","Very Active"])?>

        <?php echo $form->fieldset($model,"type","What type of workouts do you prefer? ","checkbox",
            ["Arm Workout","Leg Workout","Abdominal Workout","Chest Workout","Cardio Workout","Back Workout","Core Workout"])?>

        <?php echo $form->fieldset($model,"duration","How long do you want your workouts to be? ","radio",
            ["Approximately 10 minutes","Approximately 20 minutes","Approximately 30 minutes","Approximately 60 minutes"])?>

        <?php echo $form->fieldset($model,"goal","What is your workout goal? ","radio",
            ["Loose Weight","Get Toned","Gain Muscle"])?>

            <section class="submit-button">
                <button type="submit" class="button"  ">Generate personalised workout</button>
            </section>
        <?php \core\form\Section::end()?>
    </section>
    <button type="button" class="dark-mode-btn" id="dark-mode-btn" onclick="switchTheme()">Switch to<br> dark mode</button>
</main>
<footer>
    <div class="footer_container">
        <div class="footer">
            <div class="footer-heading footer-1">
                <h1>Discover Fitter</h1>
                <a href="#">About us</a>
                <a href="#">Newsletter</a>
                <a href="#">Careers</a>
                <a href="../../Frontend/Register/register.html">Sign Up</a>
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

<script>
    function switchTheme() {

        const body = document.body;
        const main=body.querySelector('.main');
        const form=body.querySelector('.main .form-generator');
        const question=body.querySelector('.form-question');
        const btn3=body.querySelector('.main .dark-mode-btn');
        main.classList.toggle("dark-mode");
        form.classList.toggle("dark-mode-form-container");
        question.classList.toggle("dark-mode-text");
        btn3.classList.toggle("dark-mode-button");
        document.cookie="theme=black";

        if(btn3.innerHTML==="Switch to<br> dark mode"){
            btn3.innerHTML="Switch to<br> light mode";
        }
        else if(btn3.innerHTML==="Switch to<br> light mode"){
            btn3.innerHTML="Switch to<br> dark mode";
            document.cookie="theme=light";
        }

    }
    function removeElements(){

        let thingToRemove = document.querySelectorAll(".header")[0];
        thingToRemove.parentNode.removeChild(thingToRemove);

        thingToRemove = document.querySelectorAll(".main")[0];
        thingToRemove.parentNode.removeChild(thingToRemove);

        thingToRemove = document.querySelectorAll(".footer")[0];
        thingToRemove.parentNode.removeChild(thingToRemove);

        thingToRemove = document.querySelectorAll(".copyright_container")[0];
        thingToRemove.remove();

        thingToRemove= document.querySelectorAll(".profile-menu")[0];
        thingToRemove.remove();

    }
    function loading() {
        document.getElementById("loader").style.display="block";
        var timerStart = Date.now();
        setTimeout(showWorkout, 1000);
    }
    function showWorkout() {
        document.getElementById("loader").style.display="none";

        //window.location='/available-workouts';
    }


</script>

</body>

</html>