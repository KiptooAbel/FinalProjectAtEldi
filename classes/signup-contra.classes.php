<?php

class signupContra extends signup{
private $uid;
private $pwd;
private $pwdRepeat;
private $email;
private $role;
public function __construct ($uid,$pwd,$pwdRepeat,$email,$role) {
    $this->uid =$uid;
    $this->pwd =$pwd;
    $this->pwdRepeat =$pwdRepeat;
    $this->email =$email;
    $this->role =$role;
}

public function signupUser (){
    if ($this->emptyInput() == false) {
       header("location: ../index.php?error=emptyinput");
       exit();
    }

    if ($this->invalidUid() == false) {
        header("location: ../index.php?error=invalidUid");
        exit();
     }

     if ($this->invalidEmail() == false) {
        header("location: ../index.php?error=invalidEmail");
        exit();
     }

     if ($this->pwdMatch() == false) {
        header("location: ../index.php?error=pwdMatch");
        exit();
     }
     if ($this->uidTaken() == false) {
        header("location: ../index.php?error=uidTaken");
        exit();
     }
   

    $this->setUser($this->uid,$this->pwd,$this->email,$this->role);    
 
}


private function emptyInput(){
$result;
if (empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email) || empty($this->role)){
$result = false;
}
else{
    $result = true;
}
return $result;
}

private function invalidUid(){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/",$this->uid)){
    $result = false;
    }
    else{
        $result = true;
    }
    return $result;
    }

    private function invalidEmail(){
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
        $result = false;
        }
        else{
            $result = true;
        }
        return $result;
        }

        private function pwdMatch(){
            $result;
            if ($this->pwd !== $this->pwdRepeat){
            $result = false;
            }
            else{
                $result = true;
            }
            return $result;
            }        

            private function uidTaken(){
                $result;
                if (!$this->checkUser($this->uid,$this->email)){
                $result = false;
                }
                else{
                    $result = true;
                }
                return $result;
                }        
}