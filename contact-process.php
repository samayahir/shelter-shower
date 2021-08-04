<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = 'INSERT INTO contact
VALUES ("'.$_POST["user_name"].'","'.$_POST["user_email"].'","'.$_POST["mobile_number"].'","'.$_POST["comment"].'")';

if ($conn->query($sql) === TRUE) {
    header("Location:contact us.php?msg='we will reach you shortly'");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();
?>