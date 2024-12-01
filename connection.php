<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitnesso";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fullName = $conn->real_escape_string($_POST["fullName"]);
$email = $conn->real_escape_string($_POST["email"]);
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $fullName, $email, $password);

if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
