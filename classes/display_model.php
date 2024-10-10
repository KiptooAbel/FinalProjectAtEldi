<?php

class display_model extends Dbh {
    public function getAllUsers() {
        $stmt = $this->connect()->query("SELECT * FROM users WHERE users_role = 'student'");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}

    


