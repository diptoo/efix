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
    public function select_shop_service_software($service_id)
    {
//        $user_id=$this->session->userdata('user_id');
//        print_r($user_id);
        $query=$this->db->query("SELECT service_id,cost,user_id,shop_name from shopservice 
                                 INNER JOIN repairshop   
                                 where service_id=$service_id 
                                 and user_id=repairshop.shop_id
                                 and type_id=1
                                ");
        return $query->result_array();
    }
    public function select_shop_service_hardware($service_id)
    {
        $query=$this->db->query("SELECT service_id,cost,user_id,shop_name from shopservice 
                                 INNER JOIN repairshop   
                                 where service_id=$service_id 
                                 and user_id=repairshop.shop_id
                                 and type_id=2
                                ");
        return $query->result_array();
    }
}
