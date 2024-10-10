<?php

require_once 'dbh.classes.php';

class Model extends Dbh {
    private $uid;
    private $role;
    
    public function __construct($uid, $role) {
        $this->uid = $uid;
        $this->role = $role;
    }
    
    protected function get_user_Role() {
        $stmt = $this->connect()->prepare('SELECT users_role FROM users WHERE users_uid = :uid');
        
        $stmt->bindParam(':uid', $this->uid);
        $stmt->execute();
        
        $role = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $role['users_role'];
    }
}



?>