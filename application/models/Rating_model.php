<?php

class Rating_model extends CI_Model
{
    //called from rating controller give_review method
    public function give_review($type_id,$user_id)
    {
        $data = array(
            'rating' => $this->input->post('rating'),
            'comment' => $this->input->post('comment'),
            'type_id'=>$type_id,
            'user_id'=>$user_id
        );
        $this->db->insert('review', $data);
    }

    public function show_review($type_id,$user_id)
    {
        $query = $this->db->query("
        SELECT rev.rating,rev.comment from review as rev WHERE rev.user_id = $user_id
        ");
        return $query->result_array();
    }

}