<?php
/**
 * @var $this \core\View
 */

$this->title='Workout | Fitter'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        <?php include '../public/css/WorkoutPage.css'?>
        <?php include '../public/css/header-profile.css'?>
        <?php include '../public/css/header.css'?>
    </style>
</head>
<body class="body">
<main class="main">
    <ol class="exercise-list">
        <li class="exercise">
            <section class="exercise-text">
                <span class="exercise-number">1</span>
                <section class="exercise-about">
                    <span class="exercise-title">Jumping Jacks</span>
                    <span class="exercise-duration">60 seconds</span>
                    <strong>How to do it:</strong>
                    <ul>
                        <li>Stand upright with your legs together, arms at your sides.</li>
                        <li>Bend your knees slightly, and jump into the air.</li>
                        <li>As you jump, spread your legs to be about shoulder-width apart. Stretch your arms out and over your head.</li>
                        <li>Jump back to starting position and repeat.</li>
                    </ul>
                </section>

            </section>
            <section class="video-container">
                <iframe class="video" src="https://www.youtube.com/embed/2O-Fdtr4V1g" allowfullscreen="allowfullscreen"></iframe>
            </section>
        </li>
        <li class="exercise">
            <section class="exercise-text">
                <span class="exercise-number">2</span>
                <section class="exercise-about">
                    <span class="exercise-title">Burpees</span>
                    <span class="exercise-duration">60 seconds</span>
                    <strong>How to do it:</strong>
                    <ul>
                        <li>Begin in a standing position.</li>
                        <li>Move into a squat position with your hands on the ground (count 1).</li>
                        <li>Kick your feet back into a hand plank position, while keeping your arms extended (count 2).</li>
                        <li>Immediately return your feet into squat position (count 3).</li>
                        <li>Stand up from the squat position (count 4).</li>
                    </ul>
                </section>

            </section>
            <section class="video-container">
                <iframe class="video" src="https://www.youtube.com/embed/5ACyc6qiC0U" allowfullscreen="allowfullscreen"></iframe>
            </section>
        </li>


    </ol>

    <section class="stopwatch">
        <section class="circle">
            <span class="time" id="display">00:00:00</span>
        </section>

        <section class="controls">
            <button class="buttonPlay">
                <img id="playButton" src="../images/play-button.svg" alt="play-button"/>
                </button>
            <button class="buttonPause">
                <img id="pauseButton" src="../images/pause-button.svg" alt="pause-button"/>
            </button>

            <button class="buttonReset">
                <img id="resetButton" src="../images/stop-button.svg" alt="reset-button"/>
            </button>
        </section>
        <section class="calories-burned" id="calories">Calories burned: 0 kcal</section>
    </section>

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

<script>

    function timeToString(time) {
        let diffInHrs = time / 3600000;
        let hh = Math.floor(diffInHrs);

        let diffInMin = (diffInHrs - hh) * 60;
        let mm = Math.floor(diffInMin);

        let diffInSec = (diffInMin - mm) * 60;
        let ss = Math.floor(diffInSec);

        let diffInMs = (diffInSec - ss) * 100;
        let ms = Math.floor(diffInMs);

        let formattedMM = mm.toString().padStart(2, "0");
        let formattedSS = ss.toString().padStart(2, "0");
        let formattedMS = ms.toString().padStart(2, "0");

        return `${formattedMM}:${formattedSS}:${formattedMS}`;
    }

    // Declare variables to use in our functions below

    let startTime;
    let elapsedTime = 0;
    let timerInterval;

    // Create function to modify innerHTML

    function print(txt) {
        document.getElementById("display").innerHTML = txt;
    }
    function setCalories(number){
        document.getElementById("calories").innerText="Calories burned: "+number+"kcal";
    }

    // Create "start", "pause" and "reset" functions

    function start() {
        startTime = Date.now() - elapsedTime;
        timerInterval = setInterval(function printTime() {
            elapsedTime = Date.now() - startTime;
                print(timeToString(elapsedTime));
            if(elapsedTime/1000%2===0)
            {
                let caloriesText=document.getElementById("calories").innerText;
                let calories=caloriesText[16];
                setCalories(parseInt(calories)+1);

            }
        }, 10);
        showButton("PAUSE");
    }

    function pause() {
        clearInterval(timerInterval);
        showButton("PLAY");
    }

    function reset() {
        clearInterval(timerInterval);
        print("00:00:00");
        setCalories(0);
        elapsedTime = 0;
        showButton("PLAY");
    }

    // Create function to display buttons

    function showButton(buttonKey) {
        const buttonToShow = buttonKey === "PLAY" ? playButton : pauseButton;
        const buttonToHide = buttonKey === "PLAY" ? pauseButton : playButton;
        buttonToShow.style.display = "block";
        buttonToHide.style.display = "none";
    }
    // Create event listeners

    let playButton = document.getElementById("playButton");
    let pauseButton = document.getElementById("pauseButton");
    let resetButton = document.getElementById("resetButton");

    playButton.addEventListener("click", start);
    pauseButton.addEventListener("click", pause);
    resetButton.addEventListener("click", reset);

</script>

</body>

</html>