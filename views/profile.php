<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Fitter</title>
    <style type="text/css">
        <?php include '../public/css/profile.css'; ?>
        <?php include '../public/css/header-profile.css'; ?>
    </style>
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/AlexandraSpa/WTproject/main/logo_dark_mode.ico" type="image/x-icon" />
</head>
<body>
<main>

    <div class="profile-image-container">
        <label for="file">
            <img class="profile-image" src="../images/add-user.png" alt="Photo">
            <p>Choose photo</p>
        </label>
        <input type="file" id="file">
    </div>
    <br>
    <form>
        <label for="username"> Username</label>
        <input type="text" id="username">
        <br>
        <label for="email"> Email</label>
        <input type="email" id="email">
        <br>
        <label for="birth_year"> Birth year</label>
        <input type="number" id="birth_year">
        <br>
        <label for="gender">Gender</label>
        <select id="gender">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
        </select>
        <br>
        <label for="height"> Height</label>
        <input type="text" id="height">
        <br>
        <label for="current_weight"> Current weight</label>
        <input type="text" id="current_weight">
        <br>
        <label for="show_confetti"> Show confetti on Workout Complete?</label>
        <select id="show_confetti">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <br>
        <button type="submit">Save changes</button>
    </form>
</main>
<footer>
    <div class="footer_container">
        <div class="footer">
            <div class="footer-heading footer-1">
                <h1>Discover Fitter</h1>
                <a href="#">About us</a>
                <a href="#">Newsletter</a>
                <a href="#">Careers</a>
                <a href="#">Sign Up</a>
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
        <div class="copyright_container">
            <span class="copyright_text">© 2021 Ondina Lipsa, Radu Deleanu, Alexandra Spanache</span>
        </div>
    </div>

</footer>
<section class="profile-menu" id="profile-menu">
    <nav class="menu">
        <ul role="menu" class="menu">
            <li role="menuitem">
                <a href="../Profile/Profile.html">Signed in as Kate</a>
            </li>
            <li role="menuitem">
                <a href="../Dashboard/Dashboard.html">Statistics</a>
            </li>
            <li role="menuitem">
                <a href="../WorkoutGen/Workout-Generator.html">Workout generator</a>
            </li>
            <li role="menuitem">
                <a href="../AvailWorkouts/Available-Workouts.html">Available Workouts</a>
            </li>
            <li role="menuitem">
                <a href="../Achievements/Achievements.html">Achievements</a>
            </li>
            <li role="menuitem">
                <a href="../Homepage/homepage.html">Log out</a>
            </li>
        </ul>
    </nav>
</section>
<script>
    function showMenu(){
        let menuStyle=document.getElementById("profile-menu").style.display;
        if(menuStyle==="flex")
            document.getElementById("profile-menu").style.display="none";
        else
            document.getElementById("profile-menu").style.display="flex";

    }

</script>
</body>
</html>