<style>
    /* styles.css */
#footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 10vh;
  background-color: #333;
  text-align: center;
  box-shadow: 0px -4px 4px -2px rgba(0, 0, 0, 0.5);

  }
  a{
    text-decoration: none;
    background-color: #333;
    color: white;

  }
</style>
<div id="footer">
<?php
 
if (isset($_SESSION["useruid"])) {
    ?>
    <a href="includes/logout.inc.php">Log out</a>
    <?php
  
}
?>
 </div>
</body>
</html>