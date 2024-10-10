<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_page.css">

    <title>Document</title>
</head>
<body>
   
  <center>
   <div class = "container" >
   <h1>login </h1>
<div>
   <form class = "" action="includes/login.inc.php" method="post">
    <input type="text" name ="uid" placeholder = "username" required><br>
    <input type="password" name ="pwd" placeholder = "password"required><br>
    <button type="submit" name ="submit" >log in</button>
   </form><br>
</div>
<div class="sign_up_link">
   <p style= "background-color: aliceblue;"> Not logged in yet?</p>
   <a  href="signup_page.php">Sign up</a>
</div>
</div>
   </center>

</body>
</html>