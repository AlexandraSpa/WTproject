<?php
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
        <form method="post" class="form-background">
            <fieldset class="activity">
                <legend><br>What is your activity level?</legend>
                <label class="radio-container">Sedentary<input type="radio" name="activity" value="sedentary"><span class="radio-checkmark"></span> </label>
                <label class="radio-container">Somewhat active<input type="radio" name="activity" value="somewhat active"><span class="radio-checkmark"></span>  </label>
                <label class="radio-container">Active<input type="radio" name="activity" value="active"><span class="radio-checkmark"></span>  </label>
                <label class="radio-container">Very active<input type="radio" name="activity" value="very active"><span class="radio-checkmark"></span>  </label>
            </fieldset>
            <fieldset class="type">
                <legend><br>What type of workouts do you prefer? </legend>
                <label class="checkbox-container">Arm Workout<input type="checkbox" name="type" value="arm"><span class="checkbox-checkmark"></span></label>
                <label class="checkbox-container">Leg Workout<input type="checkbox" name="type" value="leg"><span class="checkbox-checkmark"></span></label>
                <label class="checkbox-container">Abdominal Workout<input type="checkbox" name="type" value="abs"><span class="checkbox-checkmark"></span></label>
                <label class="checkbox-container">Chest Workout<input type="checkbox" name="type" value="chest"><span class="checkbox-checkmark"></span></label>
                <label class="checkbox-container">Cardio Workout<input type="checkbox" name="type" value="cardio"><span class="checkbox-checkmark"></span></label>
                <label class="checkbox-container">Back Workout<input type="checkbox" name="type" value="back"><span class="checkbox-checkmark"></span></label>
                <label class="checkbox-container">Shoulders Workout<input type="checkbox" name="type" value="shoulders"><span class="checkbox-checkmark"></span></label>
            </fieldset>
            <fieldset class="duration">
                <legend><br>How long do you want your workouts to be? </legend>
                <label class="radio-container">Approximately 10 minutes<input type="radio" name="duration" value="10"><span class="radio-checkmark"></span> </label>
                <label class="radio-container">Approximately 20 minutes<input type="radio" name="duration" value="20"><span class="radio-checkmark"></span>  </label>
                <label class="radio-container">Approximately 30 minutes<input type="radio" name="duration" value="30"><span class="radio-checkmark"></span>  </label>
                <label class="radio-container">Approximately 60 minutes<input type="radio" name="duration" value="60"><span class="radio-checkmark"></span>  </label>
            </fieldset>
            <fieldset class="goal">
                <legend><br>What is your workout goal? </legend>
                <label class="radio-container">Loose weight<input type="radio" name="goal" value="loose-weight"><span class="radio-checkmark"></span> </label>
                <label class="radio-container">Get toned<input type="radio" name="goal" value="get-toned"><span class="radio-checkmark"></span>  </label>
                <label class="radio-container">Gain muscle<input type="radio" name="goal" value="gain-muscle"><span class="radio-checkmark"></span>  </label>
            </fieldset>

            <section class="submit-button">
                <button type="submit" class="button" onclick="removeElements();loading()">Generate personalised workout</button>
            </section>
        </form>
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
<section id="loader" class="loader" onload="loading() "></section>

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
        setTimeout(showWorkout, 1000);
    }
    function showWorkout() {
        let loader=document.querySelector(".loader");
        loader.parentNode.removeChild(loader);
        window.location='/available-workouts';
    }


</script>

</body>

</html>