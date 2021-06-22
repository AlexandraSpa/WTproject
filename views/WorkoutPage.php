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
    <?php  $url= $_SERVER['REQUEST_URI'];
            $id=substr($url,strpos($url,'id=')+3);
            $workouts=\core\Application::$app->workoutList;
            $section= new \core\form\Section();
            $currentWorkout=new \models\Workout();
            foreach ($workouts as $workout)
                if ($workout->id === $id){
                    $currentWorkout=$workout;
                    break;
                }
            echo $section->workoutPage($currentWorkout->id,$currentWorkout->title,$currentWorkout->type,$currentWorkout->duration,$currentWorkout->difficulty,$currentWorkout->calorie_min,$currentWorkout->calorie_max,$currentWorkout->calorie_avg,$currentWorkout->video);
    ?>


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
        document.getElementById("calories").innerText="Calories burned: "+number+" kcal";
    }

    // Create "start", "pause" and "reset" functions

    function start() {
        const totalCalories =parseInt(<?php echo $currentWorkout->calorie_avg?>);
        const totalDuration =parseInt(<?php echo $currentWorkout->duration?>);
        const caloriesPerMin = totalCalories / totalDuration;
        startTime = Date.now() - elapsedTime;
        timerInterval = setInterval(function printTime() {
            elapsedTime = Date.now() - startTime;
            let elapsedMin=elapsedTime/60000;
            print(timeToString(elapsedTime));
            setCalories(Math.round(elapsedMin*caloriesPerMin));
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