<?php

require_once 'Database.php';

class Users extends Database{ 
    
    public function verifemail($email){
        $db = new Database();
        
         $email= $this->testinput($email);
        
        $return = $db->select(
            array(
                $this->userpassword, 
                $this->iduser,
                $this->pseudo, 
                $this->email,
                $this->userStatut,
            ),
            array($this->userstable),
            array($this->email=>$email)
        );

        if ($return == null || empty($return)){
            return null;
        } else {
            return current($return);
        }
    }

    public function get_user($id)
    {
        $db = new Database();
        $return = $db->select(
            array(
                $this->iduser, 
                $this->pseudo, 
                $this->email, 
                $this->userStatut,
                $this->userDate,
            ), 
            array($this->userstable),
            array($this->iduser=>$id)
        );
        
        if ($return == null || empty($return)){
            return null;
        } else {
            return current($return);
        }
    }

    public function testinput($data){
        
        $data=trim ($data);
        $data=addslashes ($data);
        $data=htmlspecialchars ($data);
        return $data;
    }

    public function inscription($email,$pseudo,$password)
    {
        $db = new Database();
        $return = $db->insert(
            array(
                $this->email=>$email, 
                $this->pseudo=>$pseudo,
                $this->userpassword=>$password,
                $this->userDate=>date("Y-m-d H:i:s"), 
                $this->userStatut=>1
            ),
                $this->userstable
            );

            
        if ($return == null){
            return false;
        }
        return $return;
    }
}
