<?php

class Payment_model extends CI_Model
{
    public function payment_shop()
    {
        $query = $this->db->query("SELECT shop_name,service_charge,cost,email,contact from proposal
        INNER JOIN repairshop as rep on
        rep.shop_id =  proposal.proposed_id
        INNER JOIN users ON
        users.id =  proposal.proposed_id
        WHERE proposal.status = 2 and proposal.type_id = 2 and service_charge>0");
        return $query->result_array();
    }
    public function payment_tech()
    {
        $query = $this->db->query("SELECT username,service_charge,cost,email,contact from proposal
        INNER JOIN technician as tech on
        tech.technician_id =  proposal.proposed_id
        INNER JOIN users ON
        users.id =  proposal.proposed_id
        WHERE proposal.status = 2 and proposal.type_id = 3 and service_charge>0");
        return $query->result_array();
    }
    public function service_charge()
    {
      $query= $this->db->query("SELECT id,Amount from servicecharge");
      //print_r($query->result_array());
      return $query->result_array();
    }
    public function update_servicecharge($id)
    {
        $data = array(
            'Amount' => $this->input->post('servicecharge'),
        );
        $this->db->where('id', $id);
        return $this->db->update('servicecharge', $data);
    }
}
