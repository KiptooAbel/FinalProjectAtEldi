<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Briem+Hand:wght@100..900&display=swap" rel="stylesheet">

    <title>header</title>
</head>
<body>
  <script src="javascript/header.js"></script>
  <div class="flex-container">
  <div id ="head">
      <ul id="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li  ><a href="#">News and Announcement</a></li>

<?php
if (isset($_SESSION["useruid"])) {
    ?>
    <li class ="log_in_option" ><a style="text-transform: capitalize;"href="includes/logout.inc.php" ><?php echo $_SESSION["useruid"]; ?></a></li>

   <?php  
}
else{
    ?>
    <li class ="log_in_option"><a href="login_page.php">Log In</a></li>

    <?php
 }
?>
 
      </ul>

<span class="material-symbols-outlined" onclick="showMenu()" id ="drop_menuIcon">menu</span>
<span style="display: none;" class="material-symbols-outlined" onclick="closeMenu()" id ="close_menuIcon">close</span>

 </div>
<center>
    
   <div style="display: none;" id="drop_menu">
  <ul class="list">

<?php
 
if (isset($_SESSION["useruid"])) {
    ?>
    <li><a style="text-transform: capitalize;"href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">News and Announcement</a></li>
    <li><a href="includes/logout.inc.php">Log out</a></li>
   <?php   
}
else{
    ?>
    <li><a href="login_page.php">Log in</a></li>
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">News and Announcements</a></li>
    <?php
 }
?>
     

        
        
 </ul>
 <br>
</div>
</center>  
<div style = "margin-top: 15vh" >
<p>Hi there!</p>
</div>
</div>