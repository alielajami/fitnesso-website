<?php
$title = 'Fitnesso - Home';

$content = '
<div class = "gettingStarted">
<h1>Nutritionists</h1>
</div>
<div class="nutritionists">

    <div class="nutritionists-text">
    <h2 class="text-header">Expert Nutrition Guidance</h2>    
    </div>

    <div class="nutritionist-image">
        <img src="Images/nutrisionist.jpg" alt="nutritionists image">
    </div>

    <div class="nutritionists-text">
        <p>Our team of nutritionists is dedicated to helping you optimize your diet, improve your eating habits, and make healthier choices that fuel your body and enhance your performance. Whether you\re looking to lose weight, gain muscle, or simply improve your overall well-being, our nutritionists are here to help you reach your goals.</p>
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
