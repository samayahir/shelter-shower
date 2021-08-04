<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="about.css">
    <title>details</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SHELTER SHOWER</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.html">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">services <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="service.php">All Services</a></li>
          <li><a href="shelterservice.php">Shelter</a></li>
          <li><a href="waterservice.php">Water</a></li>
          <li><a href="foodservice.php">Food</a></li>
        </ul>
      <li><a href="addservice.php">Add Services</a></li>
      <li><a href="about.html">About us</a></li>
      <li><a href="contact us.php">Contact us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign-up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<?php
if(!$_SESSION["user_email"]){
  header("Location:login.php");
}

if(isset($_GET["user_name"])){
  
$user_name=$_GET["user_name"];

       

            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'project';
        
            $conn = new mysqli($servername, $username, $password,$database);
        
            if ($conn->connect_error) {
                die("NO WORK AVAILABLE");
            }
            $sql = "SELECT * FROM services where user_name='$user_name'";

            $result = $conn->query($sql);
            echo "<section class='class'>";
            if ($result->num_rows > 0) {
            
                while($row = $result->fetch_assoc()) {
                    $title = $row['title'];
                    $service = $row['service'];
                    $price = $row['price'];
                    $des = $row['des'];
                    $address = $row['address'];
                    $mobile_number = $row['mobile_number'];
                    $user_email=$row['user_email'];
                   

                   echo  '<div class="row" >
                   <div class="column" style="width:100%;">
                     <div class="card form" style="padding: 10px;">
                      
                       <div class="container">
                         <h2>'.$title.'</h2>
                         <p class="title">'.$service.'</p>
                         <p>'.$des.'</p>
                        <p>service owner: '.$user_name.' </p>
                        <p>contact no : '.$mobile_number.'</p>
                        <p>address: '.$address.'</p>
                        <p>price/rent : '.$price.'</p>
                        <a href="mailto:'.$user_email.'">Get Service</a>
                         
                       </div>
                     </div>
                   </div>';
                   
                   
                   
                   
                  //  "<div class='class'>
                  //   <h2>$title</h2>
                  //   <p>type of service: $service </p>
                  //   <p>$des</p>
                  //   <p>service owner: $user_name </p>
                  //   <p>contact no : $mobile_number</p>
                  //   <p>address: $address</p>
                  //   <p>price/rent : $price</p>
                    
                    
                  //   </div>";
                }
            } 

            echo "</section>";
            
        }
    ?>
</body>
</html>