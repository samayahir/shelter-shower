<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO users VALUES (?, ?, ?,?)");
$stmt->bind_param("ssss", $_POST["user_name"], $_POST["user_email"], $_POST["user_password"], $_POST["mobile_number"]);


$stmt->execute();
header("Location:login.php?msg='you have sign-up sucessfully'");


$stmt->close();
$conn->close();
?>