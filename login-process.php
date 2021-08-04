<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("select * from users where email=? and pwd=?");
$stmt->bind_param("ss", $_POST["user_email"], $_POST["user_password"]);


if($stmt->execute())
    $stmt->store_result();
    $stmt->fetch();          
    if($stmt->num_rows > 0)
    {
        session_start();
        $_SESSION["user_email"]=$_POST["user_email"];
        header("Location:home.html");
    }
    else{
        header("Location:login.php?msg='<script>alert('check username or password!!')</script>'");
    }




$stmt->close();
$conn->close();
?>