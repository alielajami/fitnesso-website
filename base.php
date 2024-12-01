<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Fitnesso'; ?></title>
    <link rel="stylesheet" href="CSS/Register.CSS">
    <link rel="stylesheet" href="CSS/Fitnesso.CSS">
    <link rel="stylesheet" href="CSS/About.CSS">
    <link rel="stylesheet" href="CSS/Nutritionists.CSS">
    <link rel="stylesheet" href="CSS/FitnessAdvisers.CSS">
    <link rel="stylesheet" href="CSS/PersonalTrainers.CSS">
    <link rel="stylesheet" href="CSS/Contact.CSS">
</head>

<body>
    <?php include 'header.php'; ?>

    <?php
    if (isset($content)) {
        echo $content;
    }
    ?>

    <?php
    if (!isset($isRegisterPage) || !$isRegisterPage) {
        include 'Footer.php';
    }
    ?>

     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
     </script>
    <script src='JS/Fitnesso.js'></script>
    <script src='JS/Header.js'></script>
    <script src='JS/Register.js'></script>
</body>


</html>