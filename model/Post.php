<?php

require_once 'Database.php';

class Post extends Database { 

    public function get_posts($type = null)
    {
        $db = new Database();
        $return = array();
        $fields = array(
            $this->postid, 
            $this->postname, 
            $this->postdesc, 
            $this->postpicture, 
            $this->postdate,
            $this->chapo, 
            $this->postupdate, 
            $this->postuser 
        );
        $from = array(
            $this->poststable
        );
        $orderBy = array(
            $this->postdate
        );

        if (isset($type)) {
            $return = $db->select(
                $fields, 
                $from, 
                array(
                    $this->poststatut=>$type
                ),
                $orderBy,
                "DESC"
            );
        } else {
            $return = $db->select($fields, $from);
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
                $this->chapo,
                $this->postpicture,
                $this->postupdate,
                $this->postuser,
                $this->postdate
            ), 
            array(
                $this->poststable
            ), array(
                $this->postid=>$id
            )
        );
        return current($return);
    }

    public function add_post($postpicture, $postname, $postdesc, $chapo)
    {
        $db = new Database();
        $fields = array(
            $this->poststatut => 2,
            $this->postname => $postname,
            $this->postdesc => $postdesc,
            $this->chapo => $chapo,
            $this->postpicture => $postpicture,
            $this->postdate => date("Y-m-d H:i:s"),
            $this->postupdate => date("Y-m-d H:i:s"),
            $this->postuser => 1, 
        );
        $return = $db->insert(
            $fields, $this->poststable
        );
        return $return;
    }

    public function update_post($id, $postpicture, $postname, $postdesc, $chapo)
    {
        $db = new Database();
        $fields = array(
            $this->postname => $postname,
            $this->postdesc => $postdesc,
            $this->chapo => $chapo,
            $this->postpicture => $postpicture,
            $this->postupdate => date("Y-m-d H:i:s"),
        );

        $return = $db->update(
            $fields, 
            $this->poststable, 
            array(
                $this->postid => $id
            )
        );
        return $return;
    }

    public function delete_post($id)
    {
        $db = new Database();
        $return = $db->delete(
            $this->poststable, 
            array(
                $this->postid => $id
            )
        );
        return $return;
    }

}