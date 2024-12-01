<?php
$title = 'Fitnesso - Contact Us';

$content = '
<div class = "gettingStarted">
<h1>Contact Us</h1>
</div>

<div class="contact">

<h2>We\'d Love to Hear from You!</h2>


<div id="formContainer">
    <form id="contactForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <span id="emailError" style="color: red; display: none;">Invalid email address!</span><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>

        <button type="submit">Send Message</button>
        <p id="successMessage" style="color: green; display: none;"></p>
    </form>
</div>
</div>

';

include 'base.php';
