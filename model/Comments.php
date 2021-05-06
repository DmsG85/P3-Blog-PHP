<?php

require_once 'Database.php';

class Comment extends Database { 

   public function get_comments($type = null)
    {
        $db = new Database();
        $fields = array(
            $this->commentid, 
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
                $this->commentid, 
                $this->comment, 
                $this->commentDate,
                $this->commentstatut,
                $this->commentpostuserid,
                $this->commentpostid,
                $this->commentuser
            ), 
                array(
                    $this->commentstable
                ), array(
                    $this->commentid=>$id
                ));
        return $return;
    }

    public function get_comments_by_postid($postid)
    {
        $db = new Database();
        $return = $db->select(
            array(
                $this->commentid, 
                $this->comment, 
                $this->commentDate,
                $this->commentstatut,
                $this->commentpostuserid,
                $this->commentpostid,
                $this->commentuser
            ), 
            array(
                $this->commentstable
            ), array(
                $this->commentpostid => $postid,
                $this->commentstatut => 2,

            ));
        return $return;
    }

    public function add_comment($comment, $post, $user)
    {
        $db = new Database();
        $fields = array(
            $this->comment => $comment,
            $this->commentDate => date("Y-m-d H:i:s"),
            $this->commentstatut => 1,
            $this->commentpostuserid => $post[$this->postuser],
            $this->commentpostid => $post[$this->postid],
            $this->commentuser => $user[$this->iduser],
        );

        $return = $db->insert(
            $fields, $this->commentstable
        );
        return $return;
    }

    public function enable_comment($id)
    {
        $db = new Database();

        $return = $db->update(
            array($this->commentstatut => 2), 
            $this->commentstable, 
            array(
                $this->commentid => $id
            )
        );

        return $return;
    }

    public function delete_comment($id)
    {
        $db = new Database();
        $return = $db->delete(
            $this->commentstable, 
            array(
                $this->commentid=> $id
            ));

        return $return;
    }
}
