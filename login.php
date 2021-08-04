<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

  <form style="margin-top:7rem;"class="form" action="login-process.php" method="post">
  <?php
  if(isset($_GET["msg"])){
    echo $_GET["msg"];
  }
  ?>
    <h1>Login</h1>
    
    <fieldset>
      
      <input  placeholder="email" type="email" id="mail" name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
      
      <input  placeholder="password" type="password" id="password" name="user_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
      
    </fieldset>
    
    
    <button type="submit" style="background-color:#333333;border: 1px solid #333333;">Login</button>
    <a href="sign-up.php">CREATE A NEW ACCOUNT</a>
  </form>
  
</body>
</html>