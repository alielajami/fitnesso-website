<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitnesso";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$missingParameters = array();

$expectedParameters = array("full_name", "gender", "age", "height", "weight", "goal", "workout_type", "workout_intensity", "daily_calorie_intake");
foreach ($expectedParameters as $param) {
    if (!isset($_POST[$param])) {
        $missingParameters[] = $param;
    }
}

if (!empty($missingParameters)) {
    echo "One or more expected parameters are missing: " . implode(", ", $missingParameters);
} else {
    $stmt = $conn->prepare("INSERT INTO users_data (full_name, gender, age, height, weight, goal, workout_type, workout_intensity, daily_calorie_intake) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die("Error in prepare statement: " . $conn->error);
    }

    $stmt->bind_param("ssiiissid", $_POST["full_name"], $_POST["gender"], $_POST["age"], $_POST["height"], $_POST["weight"], $_POST["goal"], $_POST["workout_type"], $_POST["workout_intensity"], $_POST["daily_calorie_intake"]);
    var_dump($stmt);
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error executing SQL statement: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
