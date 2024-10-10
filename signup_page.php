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
   <h1>rejister </h1>
<div>
   <form action="includes/signup.inc.php" method="post">
    <input type="text" name ="uid" placeholder = "username"required><br>
    <input type="password" name ="pwd" placeholder = "password"required><br>
    <input type="password" name ="pwdRepeat" placeholder = "repeat password"required><br>
    <input type="text" name ="email" placeholder = "email"required><br>
<p>rejister as..</p>
    <input style= "background-color: aliceblue;" type="radio" name="role" value="admin"required>
    <label for="admin">Admin</label><br>
    <input style= "background-color: aliceblue;" type="radio" name="role" value="student"required>
    <label for="student">Student</label><br>
<button type="submit" name ="submit" >sign up</button><br>
   </form> 
   </div>
</div>
</center>
</body>
</html>