<?php

require_once 'Database.php';

class Post extends Database { 

    function get_posts($type)
    {
        $db = new Database();
        $return = $db->select(array($this->postid, $this->postname, $this->postdesc, $this->postpicture, $this->postdate,$this->chapo, $this->postupdate, $this->postuser ), array($this->poststable), array($this->poststatut=>$type));
        
        return $return;
    }

    function get_post($id)
    {
        $db = new Database();
        $return = $db->select(array($this->postid, $this->postname, $this->postdesc, $this->postpicture, $this->postdate), array($this->poststable), array($this->postid=>$id));
        return $return;
    }

    function add_post($type, $postpicture, $postname, $postdesc, $postdate)
    {
        $db = new Database();
        $array = array($this->postpicture => $postpicture, $this->postdate => $postdate, $this->posttype => $type);
        if ($postname != "") {
            $array[$this->postname]=$postname;
        }
        if ($postdesc != "") {
            $array[$this->postdesc]=$postdesc;
        }
        $return = $db->insert($array, $this->poststable);
        return $return;
    }

    function update_post($id, $postpicture, $postname, $postdesc)
    {
        $db = new Database();
        $array = array();
        $array[$this->postname]=$postname;
        $array[$this->postdesc]=$postdesc;
        if ($postpicture != null) {
            $array[$this->postpicture]=$postpicture;
        }
        $return = $db->update($array, $this->poststable, array($this->postid => $id));
        return $return;
    }

    function delete_post($id)
    {
        $db = new Database();
        $return = $db->delete($this->poststable, array($this->postid => $id));
        return $return;
    }

}