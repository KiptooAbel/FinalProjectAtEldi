<?php

if (isset($_POST["submit"])) {
    // Grabbing the data
   $uid = $_POST["uid"];
   $pwd = $_POST["pwd"];
   
   include "../classes/dbh.classes.php";
   include "../classes/login.classes.php";
   include "../classes/login-contra.classes.php";
   include "../classes/redirect_model.php";
   include "../classes/redirect_contra.php";
   
   // Instantiate loginContr class 
   $login = new loginContra($uid,$pwd);
   $redirect = new user($uid,$role);

   // Running error handlers and login
   $login->loginUser();
   $redirect->redirect_user();
}
  