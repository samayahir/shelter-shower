<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = 'INSERT INTO services
VALUES ("'.$_POST["user_name"].'","'.$_POST["mobile_number"].'","'.$_POST["user_email"].'","'.$_POST["service"].'","'.$_POST["price"].'","'.$_POST["title"].'","'.$_POST["address"].'","'.$_POST["des"].'")';

if ($conn->query($sql) === TRUE) {
    header("Location:service.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();
?>