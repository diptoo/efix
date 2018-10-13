<?php

class Webname_model extends CI_Model
{
    public function webname()
    {
        $query=$this->db->query("SELECT name from webname");
        return $query->result_array();
    }
}
