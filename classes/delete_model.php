<?php


class delete_model extends Dbh {

    public function deleteUser($id) {
        try {
        $sql ="DELETE FROM users WHERE users_id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->execute();
        return true;
        $stmt = null;
  
        } catch (PDOException $e ) {
          echo $e->getMessage();
          return false;
        }
      
    }
  
}

