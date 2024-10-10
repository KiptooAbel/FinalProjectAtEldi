<?php

if (isset($_POST["submit"])) {
    // Grabbing the data
   $uid = $_POST["uid"];
   $pwd = $_POST["pwd"];
   $pwdRepeat = $_POST["pwdRepeat"];
   $email= $_POST["email"];
   $role= $_POST["role"];
   // Instantiate SignUpContr class
   include "../classes/dbh.classes.php";
   include "../classes/signup.classes.php";
   include "../classes/signup-contra.classes.php";
   include "../classes/redirect_model.php";
   include "../classes/redirect_contra.php";
   
   $signUp = new signupContra($uid,$pwd,$pwdRepeat,$email,$role);
   $redirect = new user($uid,$role);
   // Running error handlers and signup
   $signUp->signupUser();
   $redirect->redirect_user();
//going back to the front page








}
  