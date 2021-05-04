<?php

require_once 'Database.php';

class Comment extends Database { 

   public function get_comments($type=null)
    {
        $db = new Database();
        $fields = array(
            $this->idComment, 
            $this->comment, 
            $this->commentDate,
            $this->commentstatut,
            $this->commentpostuserid,
            $this->commentpostid,
            $this->commentuser 
        );
        $from = array(
            $this->commentstable
        );

        if (isset($type)) {
            $return = $db->select(
                $fields, 
                $from, 
                array(
                    $this->commentstatut=>$type
                ));
        } else {
            $return = $db->select($fields, $from);
        }
        
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
                    $this->commentstable
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
            $array, $this->commentstable
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
            $this->commentstable, 
            array(
                $this->postid=> $id
            ));
        return $return;
    }

    public function delete_comment($id)
    {
        $db = new Database();
        $return = $db->delete(
            $this->commentstable, 
            array(
                $this->postid=> $id
            ));
        return $return;
    }

}
