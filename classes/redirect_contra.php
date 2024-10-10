<?php

class User extends Model {
    
    public function redirect_user() {
        $role = $this->get_user_Role();
        
        if ($role == 'admin') {
            header("Location: ../admins_page.php");
            exit();
        } elseif ($role == 'student') {
            header("Location: ../students_page.php");
            exit();
        }
    }
}

?>