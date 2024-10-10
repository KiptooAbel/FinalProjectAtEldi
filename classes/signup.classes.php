<?php

class signup extends Dbh{

    public function setUser($uid,$pwd,$email,$role){
        $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd,users_email,users_role) VALUES (?,?,?,?);');
 
  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);      
    
    if (!$stmt->execute(array($uid, $hashedPwd ,$email,$role))) {
       $stmt = null;
       header("location: ../index.php?error=stmtfailed");
       exit();
    }
    $this->startSession($uid);
    $stmt = null;

}

    protected function checkUser($uid,$email){
        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');
    
    if (!$stmt->execute (array($uid,$email))) {
       $stmt = null;
       header("location: ../index.php?error=stmtfailed");
       exit();
    }

    $resultCheck;
    if ($stmt->rowCount() > 0) {
        $resultCheck = false;
    }
else{
    $resultCheck = true ;
}

return $resultCheck;
}

protected function startSession($uid) {
    session_start();
    $_SESSION["useruid"] = $uid;
}
}