<?php
$title = 'Fitnesso - Home';

$content = '
<div class="container">
    <div class="overlay">
        <video autoplay muted loop playsinline id="background-video">
            <source src="Images/hero_video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h1>Your Fitness Journey Starts Here.</h1>
        <h4>"You don\'t have to be great to start, but you have to start to be great."</h4>
        <a href="/about"
           onmousedown="changeSize1(this)"
           onmouseup="changeSize2(this)">
           Learn More
        </a>
    </div>
</div>

<div id = "goals">
<h6>WHAT WE BELIEVE IN</h4>
<h1>Achieve your desired results, get in shape, and stay consistent.</h1>
</div>

<div class="container2">
<div class="text">
    <h5>About</h5>
    <h1>What Fitnesso do?</h1>
    <p>If your searching for a tool that can help you organize your diet plan, workouts
        and future goals Fitnesso can do that for you. It tracks your activity step by step
        and directs you to what need to be done do achieve a certain goal.
    </p>
    <a href="About.php">Learn More</a>
</div>
<div class="img2">
    <img src="Images/Athlete3.jpg" alt="Your Image">
</div>
</div>

<div class="container2 reverse">
<div class="img3">
    <img src="Images/Athlete4.jpg" alt="Your Image">
</div>
<div class="text">
    <h5>About</h5>
    <h1>What do you need to start?</h1>
    <p>
        What you need is a strong mindest, patience, time, and effort. You need
        to stay consistent and disciplined. Goals can be achieved only when there are
        rules and those rules should never be broken to achieve these goals.
        But materistically you need to complete some steps to start with 
        <span style="font-style: italic;">Fitnesso.</span>
    </p>
    <a href="About.php">Learn More</a>
</div>
</div>


<div class = "container3">
<div class="container3-blocks">
    <h1>You can benifit from various professionals</h1>
    <div class = "content" onmouseover="changeSize3(this)" onmouseout="changeSize4(this)">
        <h3>Personal Trainers</h3>
        <p>You can contact and work with experienced personal trainers that our team has
            collaborated with to help you achieve your goals and fitness result. These pro-trainers
            have studied in various fields like gym workouts, calisthenics and more different type of sports.
        </p>
        <a href="PersonalTrainers.php" id = "pro">Personal Trainers</a>
    </div>
    <div class = "content" onmouseover="changeSize3(this)" onmouseout="changeSize4(this)">
        <h3>Nutritionists</h3>
        <p>Our team has also collaborated with mutliple Nutritionists that have studied the field
            and can guide you through your diet plan throughout your fitness journey. This guidence
             include daily meals-intake, weight loss and muscle gain during your fitness journey.
        </p>
        <a href="Nutritionists.php" id = "pro">Nutritionists</a>
    </div>
    <div class = "content" onmouseover="changeSize3(this)" onmouseout="changeSize4(this)">
        <h3>Fitness Advisers</h3>
        <p>You can work and contact multiple fitness advisers that will help you set your mentality
            to stay motivated and enthusiastic about your workouts and ultimate goals and body goals.
        </p>
        <a href="FitnessAdvisers.php" id = "pro">Fitness Advisers</a>
    </div>
</div>
</div>
';

include 'base.php';
