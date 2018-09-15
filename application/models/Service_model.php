<?php

class Service_model extends CI_Model
{
    public function software()
    {
        $query=$this->db->query("SELECT id,service_type from software");
        return $query->result_array();
    }

    public function hardware()
    {
        $query=$this->db->query("SELECT id,service_type from hardware");
        return $query->result_array();
    }
}
