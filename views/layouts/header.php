<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/logo_dark_mode.ico" type="image/x-icon"/>
    <title><?php echo $this->title ?></title>
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
                <a href="/news">News</a>
            </li>
            <li role="menuitem">
                <a href="/about-us">About Us</a>
            </li>
            <li role="menuitem">
                <a href="../support.html">Contact</a>
            </li>
        </ul>
    </nav>
</header>
    {{content}}
<?php else: ?>
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
                <a href="/news">News</a>
            </li>
            <li role="menuitem">
                <a href="/about-us">About Us</a>
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
                    <a href="/statistics">Statistics</a>
                </li>
                <li role="menuitem">
                    <a href="/workout-generator">Workout Generator</a>
                </li>
                <li role="menuitem">
                    <a href="/available-workouts">Available Workouts</a>
                </li>
                <li role="menuitem">
                    <a href="/achievements">Achievements</a>
                </li>
                <li role="menuitem">
                    <a href="/logout">Log out</a>
                </li>
            </ul>
        </nav>
    </section>
    <script>
        <?php require_once("showMenu.js");?>
    </script>
<?php endif?>
<?php if (Application::$app->session->getFlash('success')): ?>
<div class="alert alert-success">
    <?php echo Application::$app->session->getFlash('success')?>
</div>
<?php endif?>


