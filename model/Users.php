<?php

require_once 'Database.php';

class Users  extends Database{ 
    
    public function verifemail($email){
        $db = new Database();
        //  var_dump($email);
         $email= $this->testinput($email);
        //  var_dump($email);
        $return = $db->select(
            array(
                $this->userpassword, 
                $this->iduser,
                $this->userStatut

            ),
                array(
                    $this->userstable
                    )
                ,array(
                    $this->email=>"'".$email."'"
                    )
            );
        if ($return!=null){
            $return=$return[0];
        }else{
            $return=null;
        }
        return $return;

    }

    public function get_post($id)
    {
        $db = new Database();
        $return = $db->select(
            array(
                $this->postid, 
                $this->postname, 
                $this->postdesc, 
                $this->postpicture, 
                $this->postdate,
                $this->postuser
            ), 
                array(
                    $this->poststable
                ), array(
                    $this->postid=>$id
                ));
        return $return;
    }
    public function testinput($data){
        
        $data=trim ($data);
        $data=addslashes ($data);
        $data=htmlspecialchars ($data);
        return $data;
    }
    public function inscription($email,$pseudo,$password){
        
        
        $db = new Database();
        $return = $db->insert(
            array(
                $this->email=>"'".$email."'", 
                $this->pseudo=>"'".$pseudo."'",
                $this->userpassword=>"'".$password."'", 
                $this->userStatut=>1
            ),
                $this->userstable
            );
        if (
            $return==null
            ){
            $return=false;
        }
        return $return;
    }
    public function get_comment($id)
    {
        $db = new Database();
        $return = $db->select(
            array(
                $this->postid, 
                $this->idComment, 
                $this->comment, 
                $this->commentDate, 
                $this->postuser
                
            ), 
                array(
                    $this->poststable
                ), array(
                    $this->postid=>$id
                ));
        return $return;
    }
   
    
}
