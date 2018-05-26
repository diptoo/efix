<?php
class Proposal_model extends CI_Model
{
    public function fetch_proposal($user_id)
    {
    /*    $data = array();
        $data = db::table('proposal')
            ->select(
                DB::raw("DATE_FORMAT(proposal.created_at,'%Y-%m') AS month2"),
                DB::raw("DATE_FORMAT(proposal.created_at,'%Y-%M') AS month"),
                DB::raw('count(*) AS value')
            )
            ->groupBy('month','month2')
            ->orderBy('month2','ASC')
            ->where('status', '=', 2)
            ->get(); */
        $query = $this->db->query("select DATE_FORMAT(proposal.created_at,'%Y-%m') AS month2,
        DATE_FORMAT(proposal.created_at,'%Y-%M') AS month,
        count(*) AS rejected
        from proposal
        where status = 3 and proposed_id = $user_id
        group by month,month2
        ORDER BY month2 ASC 
        ");
        //print_r($query->result_array());
        return $query->result_array();



    }
    public function fetch_proposal_pending($user_id)
    {
        $query = $this->db->query("select DATE_FORMAT(proposal.created_at,'%Y-%m') AS month2,
        DATE_FORMAT(proposal.created_at,'%Y-%M') AS month,
        count(*) AS pending
        from proposal
        where status = 1 and proposed_id = $user_id
        group by month,month2
        ");
        return $query->result_array();
    }

    public function fetch_proposal_accepted($user_id)
    {
        $query = $this->db->query("select DATE_FORMAT(proposal.created_at,'%Y-%m') AS month2,
      DATE_FORMAT(proposal.created_at,'%Y-%M') AS month,
      count(*) AS accepted
      from proposal
      where status = 2 and proposed_id = $user_id
      group by month,month2
      ");
        return $query->result_array();
    }

}
