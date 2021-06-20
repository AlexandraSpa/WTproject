<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../public/images/logo_dark_mode.ico" type="image/x-icon"/>
    <title>Fitter</title>
</head>

<body>
<?php use core\Application;

if(Application::isGuest()):?>
<header class="menu_bar">
    <div class="button_and_logo">
        <a href="/" class="site-logo">
            <img src="/images/logo_dark_mode.png" alt="logo">
        </a>
        <a href="/../login" class="menu_button">Login</a>
    </div>
    <nav class="menu">
        <ul role="menu">
            <li role="menuitem">
                <a href="../leaderboard.html">Leaderboard</a>
            </li>
            <li role="menuitem">
                <a href="../News.html">News</a>
            </li>
            <li role="menuitem">
                <a href="../about_us.html">About Us</a>
            </li>
            <li role="menuitem">
                <a href="../support.html">Contact</a>
            </li>
        </ul>
    </nav>
</header>
    {{content}}
<?php else: ?>
<script>
    <?php require_once("showMenu.js");?>
</script>
<body class="body" onload="chooseTheme()">
<header class="header">
    <section class="top-menu">
        <a href="/homepage" class="site-logo">
            <img src="/images/logo_dark_mode.png" alt="logo" >
        </a>
        <section class="profile-picture-container">
            <button class="profile-picture" onclick="showMenu()"></button>
        </section>
    </section>
    <nav class="menu">
        <ul role="menu">
            <li role="menuitem">
                <a href="../../Frontend/Leaderboard/leaderboard.html">Leaderboard</a>
            </li>
            <li role="menuitem">
                <a href="../../Frontend/News/News.html">News</a>
            </li>
            <li role="menuitem">
                <a href="../../Frontend/Homepage/homepage.html">About Us</a>
            </li>
            <li role="menuitem">
                <a href="../../Frontend/Support/support.html">Contact</a>
            </li>
        </ul>
    </nav>
</header>
{{content}}
    <section class="profile-menu" id="profile-menu">
        <nav class="profile-picture-menu">
            <ul role="profile" class="profile">
                <li role="menuitem">
                    <a href="/profile">Signed in as <?php echo Application::$app->user->getEmail()?></a>
                </li>
                <li role="menuitem">
                    <a href="../../Frontend/Dashboard/Dashboard.html">Statistics</a>
                </li>
                <li role="menuitem">
                    <a href="Workout-Generator.php">Workout generator</a>
                </li>
                <li role="menuitem">
                    <a href="../../Frontend/AvailWorkouts/Available-Workouts.html">Available Workouts</a>
                </li>
                <li role="menuitem">
                    <a href="../../Frontend/Achievements/Achievements.html">Achievements</a>
                </li>
                <li role="menuitem">
                    <a href="/logout">Log out</a>
                </li>
            </ul>
        </nav>
    </section>
<?php endif?>
<?php if (Application::$app->session->getFlash('success')): ?>
<div class="alert alert-success">
    <?php echo Application::$app->session->getFlash('success')?>
</div>
<?php endif?>


