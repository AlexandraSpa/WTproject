<?php
/**
 * @var $this \core\View
 */

$this->title='Statistics | Fitter'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        <?php include '../public/css/statistics.css'?>
        <?php include '../public/css/header-profile.css'?>
        <?php include '../public/css/header.css'?>
    </style>
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/AlexandraSpa/WTproject/main/logo_dark_mode.ico" type="image/x-icon" />
</head>
<body>
    <main>
    <div class="today_tracker">
    <h3>Today stats</h3>    
            <table>
                <tbody>
                    <tr>
                        <td>Workouts</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Minutes completed</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Lifted weight</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Calories</td>
                        <td>0</td>
                    </tr>
                   
                </tbody>
            </table>
            
    </div>
    <div class="activity_tracker">
        <h3>Activity tracker</h3>
        <h4>Your today activity</h4>
        <p>sedentary</p>
        <p>lightly active</p>
        <p>fairly active</p>
        <p>very active</p>
        <table>
            <tbody>
                <thead>
                    <th></th>
                    <th>this week</th>
                    <th>this month</th>
                </thead>
                <tr>
                    <td>Active days</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
        </table>
        <div class="graphs">
            <p>Here will appear a graphic for the whole year activity</p>
        </div>
    </div>
    <div class="weight_tracker">
        <h3>Weight tracker</h3>
        <form>
            <label for="setweight">Set a weight goal to help you stay on track!</label>
            <br>
            <input class="Seticon" type="image" id="setbutton" alt="Set" src="../images/setIcon.png">
            <input type="text" id="setweight">
            
        </form>
    </div>
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
</body>
</html>
