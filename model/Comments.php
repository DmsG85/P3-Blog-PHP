<?php

require_once 'Database.php';

class Comment extends Database { 

   public function get_comments($type)
    {
        $db = new Database();
        $return = $db->select(
            array(
                $this->idComment, 
                $this->comment, 
                $this->commentDate,   
                $this->postuser,
                $this->postid,
                $this->iduser 
            ), 
            array(
                $this->poststable
            ), 
            array(
                $this->poststatut=>$type
            ));
        
        return $return;
    }

    public function get_comment($id)
    {
        $db = new Database();
        $return = $db->select(
            array(
                $this->idComment, 
                $this->comment, 
                $this->commentDate,  
                $this->postdate,
                $this->postid,
                $this->iduser
                
            ), 
                array(
                    $this->poststable
                ), array(
                    $this->postid=>$id
                ));
        return $return;
    }

    public function add_comment($type, $comment, $commentDate, $postdate)
    {
        $db = new Database();
        $array = array(
            
            $this->postdate => $postdate, 
            $this->posttype => $type
        );
        if ($comment != "") {
            $array[$this->comment]=$comment;
        }
        if ($commentDate != "") {
            $array[$this->commentDate]=$commentDate;
        }
        $return = $db->insert(
            $array, $this->poststable
        );
        return $return;
    }

    public function update_comment($id, $comment, $commentDate)
    {
        $db = new Database();
        $array = array();
        $array[$this->comment]=$comment;
        $array[$this->commentDate]=$commentDate;
        if ($postpicture != null) {
            $array[$this->postpicture]=$postpicture;
        }
        $return = $db->update(
            $array, 
            $this->poststable, 
            array(
                $this->postid=> $id
            ));
        return $return;
    }

    public function delete_comment($id)
    {
        $db = new Database();
        $return = $db->delete(
            $this->poststable, 
            array(
                $this->postid=> $id
            ));
        return $return;
    }

}
