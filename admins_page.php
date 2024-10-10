<?php
require('header.php');
require('classes/dbh.classes.php');
require('classes/display_model.php');
require('classes/display_contra.php');
?>
<style>
    table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
  border: 1px solid #ccc;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #e9e9e9;
}
a:hover {
  border-bottom: 2px solid;
}
</style>
<center>
<p>Rejistered Students </p>
<table>
    <thead>
        <tr>
            <th>ADM</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>REMOVE</th>
        </tr>
    </thead>
    <tbody>
      <?php
$display_controller = new display_contra();
$users = $display_controller->getUsers();

if (!empty($users) && is_array($users)) {
    foreach ($users as $user) {
        // Check if 'id' and 'name' keys exist in the user array
       if (array_key_exists('users_id', $user) && array_key_exists('users_uid', $user)) {
            ?>  <tr>
            <td><?= $user['users_id']; ?></td>
            <td><?= $user['users_uid'];?></td>
            <td><?= $user['users_email'];?></td>
            <td> 
          
        <a style = "background-color:white;
                    color: black;
        "onclick="return confirm('Are you sure you want to remove student?')"; 
        href="includes/delete.inc.php?id=<?= $user['users_id'];?>" id = "delete_btn">
         Remove student</a>
          
           </td>
        </tr>
            <?php

     } else {
            echo "User data is incomplete.<br>";
        }
    }
} else {
    echo "No student users found.";
}
?>  
    </tbody>
</table>
</center>




<?php
require('footer.php');
?>