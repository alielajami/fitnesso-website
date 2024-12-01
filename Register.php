<?php
$title = 'Fitnesso - Register';
$isRegisterPage = true;

$content = '
<div class = "gettingStarted">
<h1>Getting Started</h1>
</div>
<h1 id="formInfo">Enter your register information bellow:</h1>

    <div id="formContainer">
        <form id="welcomeForm">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <span id="emailError" style="color: red; display: none;">Invalid email address!</span><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required><br>
            <span id="passwordError" style="color: red; display: none;">Passwords do not match!</span><br>

            <button type="submit">Register</button>
            <p id="successMessage" style="color: green; display: none;"></p>
        </form>
    </div>

    <footer class="footer register-footer"> 
        <p>Contact us if you have any questions or need help</p>
        <a href="Contact.php" id="contactus">Contact Us</a>
    </footer>


';

include 'base.php';
