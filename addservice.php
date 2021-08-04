<?php
    session_start();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add service page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/22da52c5ac.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SHELTER SHOWER</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.html">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">services <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="service.php">All Services</a></li>
          <li><a href="shelterservice.php">Shelter</a></li>
          <li><a href="waterservice.php">Water</a></li>
          <li><a href="foodservice.php">Food</a></li>
        </ul>
      <li class="active"><a href="addservice.php">Add Services</a></li>
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

  <form class="form" action="addservice-process.php" method="post">
  <?php
  if(!$_SESSION["user_email"]){
    header("Location:login.php");
  }
  
  
  ?>
  
    <h1 style="color:#CCD4B0;">ADD SERVICE</h1>
    
    <fieldset>
  
     
      <input  placeholder="Name of Owner" type="text" id="name" name="user_name" required> 
						
      <input  placeholder="Mobile" type="tel" id="password" name="mobile_number" minlength="10" maxlength="10" required>
      <input  placeholder="email" type="email" id="mail" name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

      <select name="service" style=" margin-bottom: 30px;" >
                    <option value="">--SELECT YOUR SERVICE--</option>
                    <option value="shelter">Shelter</option>
                    <option value="water">Water</option>
                    <option value="food">Food</option>
                    required
                </select>
                
      <input placeholder="Add price/rent" type="text" name="price" required>
      <input  placeholder="Title" type="text" name="title" required>
      <textarea placeholder="Enter Address" name="address" id="" cols="30" rows="10" style="height:150px; margin-bottom: 30px;"></textarea>
      <textarea placeholder="Describe your service" name="des" id="" cols="30" rows="10" style="height:150px; margin-bottom: 30px;"></textarea>
     
      <!-- <input placeholder=" Add Photos" type="file" name="photos" accept="image/x-png,image/gif,image/jpeg" required> -->
     
     
    </fieldset>
    
    
    <button type="submit" style="background-color:#333333;border: 1px solid #333333;color: white; font-size: 18px;">ADD SERVICE</button>
    
  </form>
  <script src="styles.css"></script>
</body>
</html>