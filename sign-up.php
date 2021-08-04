<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="styles.css">

    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/22da52c5ac.js" crossorigin="anonymous"></script>
</head>
<body >
  
<div  style='margin-top:3rem;'>
  <form class="form" action="signup-process.php" method="post">
  
    <h1>Sign Up</h1>
    
    <fieldset>
  
     
      <input  placeholder="Name" type="text" id="name" name="user_name" required> 
						
      	
      <input  placeholder="email" type="email" id="mail" name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
      
      
     
      <input  placeholder="password" type="password" id="password" name="user_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

     
      <input  placeholder="mobile" type="tel" id="password" name="mobile_number" minlength="10" maxlength="10" required>
      
     
    </fieldset>
    
    
    <button type="submit" style="background-color:#333333;border: 1px solid #333333;">Sign Up</button>
    <a href="login.php">LOGIN</a>
  </form>
  </div>
</body>
</html>