<?php 

    require('../classes/dbh.classes.php');
    require('../classes/delete_model.php');

if (!$_GET['id']) {
      echo 'error';
}

else{
  //get id values
    $id = $_GET['id'];

    $result= new delete_model();
    $result->deleteUser($id);

    if ($result) {
      header("Location: ../admins_page.php");
    } else {
      echo 'wooi';
    }
    

}

