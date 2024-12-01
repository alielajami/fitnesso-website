<?php

$title = 'Fitnesso - About Us';
$content = '
<div class = "gettingStarted">
<h1>About</h1>
</div>
<div class="about">

    <div class="container-top">
        <div class="about-text">

            <h3>Our Mission</h3>
            <p>At Fitnesso, our mission is to empower individuals to lead healthier, happier lives by providing them with the tools, resources, and support they need to achieve their fitness goals. We believe that everyone deserves to feel confident, strong, and capable of living life to the fullest.</p>

        </div>

        <div class="image">
            <img src="Images/mission-image.jpg" alt="">
        </div>

    </div>

    <div class="container-bottom">
        <div class="about-text">
            <h3>Our Vision</h3>
            <p>Our vision is to create a world where fitness is accessible, inclusive, and enjoyable for people of all ages, backgrounds, and fitness levels. We envision a community where individuals are inspired to prioritize their health and well-being, and where they can find the guidance and encouragement they need to succeed.</p>
        </div>

        <div class="image">
            <img src="Images/vision-image.jpg" alt="">
        </div>
    </div>

    <div class="join-us">
        <h1>
            Join us at Fitnesso
        </h1>
        <p>Let us work together to transform your health, boost your confidence, and unleash your full potential!</p>

        <a href="Register.php" id="start" onmousedown="changeSize1(this)" onmouseup="changeSize2(this)">
            Start Now
        </a>

    </div>
</div>
';

include 'base.php';
