<?php

class User_model extends CI_Model
{

    //called from users controller register method

    public function register($data,$data1, $data2, $data3)
    {
        // Insert user
        $this->db->insert('users', $data);//users table
        $user_id = $this->db->insert_id();
        // print_r($user_id)
        if (!empty($data2)) {
            $data2['shop_id'] = $user_id;
            $this->db->insert('repairshop', $data2);
        }
        if (!empty($data3)) {
            $data3['technician_id'] = $user_id;
            $this->db->insert('technician', $data3);
        }
        if(!empty($data1))
        {
            $data1['cust_id']=$user_id;
            $this->db->insert('customer',$data1);
        }
        return;
    }

    //Log in
    public function login($email, $password)
    {
        //validate
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $result_temp = $this->db->get('users');

        $result_array = $result_temp->result_array();
      //  print_r($result_array);
        //exit();
       // print_r($result_array[0]['type_id']);
        //exit();
        //repair shop
        if ($result_array[0]['type_id'] == 2) {
            $result = $this->db->query("SELECT id,type_id,shop_name,contact,profilepic,address,zipcode,category,floor,email,shop_id,status from users
        INNER JOIN repairshop as rep on users.id =rep.shop_id
        WHERE users.email='$email' AND
        users.password='$password'
        ");
            return $result->result_array();
            //print_r($result->result_array());
            //exit();
        } //technician
        elseif ($result_array[0]['type_id'] == 3) {
            $result = $this->db->query("SELECT id,type_id,expert_at,dob,username,contact,profilepic,address,zipcode,technician_id,age,gender,nationality,email,status from users
        INNER JOIN technician as tec on users.id =tec.technician_id
        WHERE users.email='$email' AND
        users.password='$password'
        ");
            //print_r($result->result_array());
            //exit();
            return $result->result_array();
//
        }
        elseif ($result_array[0]['type_id'] == 1) {
            //echo "1 a dhukse";
            //exit();
            $result = $this->db->query("SELECT id,type_id,profilepic,address,dob,zipcode,contact,username,age,gender,nationality,cust_id,email,status from users
        INNER JOIN customer as cust on users.id =cust.cust_id
        WHERE users.email='$email' AND
        users.password='$password'
        ");
         //   print_r($result->result_array());
         //   exit();
            return $result->result_array();
//
        }


        // exit();
/*
        if ($result->num_rows() == 1) {
            return $result->row(0)->id;
        } else {
            return false;
        }
*/
        return false;
    }
  // get_proposal
//called from users controller view_proposal
  public function get_proposal($type_id,$id)
  {
    $temp = $this->session->userdata('user_id');
    //print_r($temp);
    //exit();
    if($type_id==2)
    {
      $query=$this->db->query("SELECT pst.id as pst_id,users.type_id,cost,title,shop_name,days,proposed_id,pr.id from proposal as pr
      INNER JOIN posts as pst
      on pr.post_id=pst.id
      INNER JOIN repairshop as rep
      on rep.shop_id = pr.proposed_id
      INNER JOIN users
      on users.id = pr.proposed_id
      WHERE pst.cust_id=$temp
      and pst.id = $id
      and pr.status=1
      ");
    }
    elseif ($type_id==3) {
      $query=$this->db->query("SELECT pst.id as pst_id,users.type_id,tech.username,cost,title,username,expert_at,days,proposed_id,pr.id from proposal as pr
      INNER JOIN posts as pst
      on pr.post_id=pst.id
      INNER JOIN technician as tech
      on tech.technician_id = pr.proposed_id
      INNER JOIN users
      on users.id = pr.proposed_id
      WHERE pst.cust_id=$temp
      and pst.id = $id
      ");
    }

    /*
    $query = $this->db->query(
    "SELECT cost,days
    from proposal as pr
    INNER JOIN posts as pst
    on pr.post_id = pst.id
    INNER JOIN customer as ct
    on pst.cust_id = $temp
    INNER JOIN repairshop as rep
    on rep.shop_id = pr.proposed_id
    "); */
  //  echo "dhukse";
//  print_r($query->result_array());
  //exit();
    return $query->result_array();
    //exit();
  }

//called from users controller  accepted_proposal_technician method
  public function accepted_proposal_technician()
  {
    $temp = $this->session->userdata('user_id');
    $query=$this->db->query("SELECT cost,days,username
      from proposal INNER JOIN posts
      on posts.id=proposal.post_id
      INNER JOIN technician
      on proposal.proposed_id = technician.technician_id
      where posts.cust_id = $temp
      and proposal.status = 2
    ");
    //print_r($query->result_array());
    //exit();
    return $query->result_array();
  }
//called from users controller  accepted_proposal_technician method
  public function accepted_proposal_repairshop()
  {
    $temp = $this->session->userdata('user_id');
    $query=$this->db->query("SELECT cost,days,shop_name
      from proposal INNER JOIN posts
      on posts.id=proposal.post_id
      INNER JOIN repairshop as rep
      on proposal.proposed_id = rep.shop_id
      where posts.cust_id = $temp
      and proposal.status = 2
    ");
    //print_r($query->result_array());
    //exit();
    return $query->result_array();
  }


  //status 2 means accept
  //$st1= set status number
  //$st2=rep/tech id
  //$st3=proposal id
  public function change_proposal_status($st1,$st2,$st3,$pst_id)
  {
  //  echo $st1;
    //echo $st2;
   $query = $this->db->query("UPDATE proposal set status=$st1
    WHERE proposed_id = $st2
    and id=$st3
   ");
   $query = $this->db->query("UPDATE proposal set status=3
    WHERE post_id=$pst_id
    and status=1
   ");

   return;
   //print_r($query);
  }
//called from users controller proposal_status method
public function proposal_status()
{
  $temp = $this->session->userdata('user_id');
  $query=$this->db->query("SELECT title,status,cost
    from proposal as prop
    INNER JOIN posts as pst
    on prop.post_id = pst.id
    where prop.proposed_id = $temp
  ");
  //print_r($query->result_array());
//  exit();
return $query->result_array();
}

  //Pending repair shop registered
  //called from users controller rep_pending method
  public function pending_rep()
  {
    $query = $this->db->query("select type_id,id,email,address,shop_name,floor
    from users INNER JOIN repairshop as rep
    on users.id = rep.shop_id
    WHERE users.status = 2
     ");
    return $query->result_array();
    //exit();
  }
    //Pending technician registered
    //called from users controller tech_pending
  public function pending_tech()
  {
    $query = $this->db->query("select type_id,id,username,email,address,expert_at,age,gender
    from users INNER JOIN technician as tech
    on users.id = tech.technician_id
    WHERE users.status = 2
     ");
    return $query->result_array();
  }
  //status change accept or reject
 public function reg_stts_chng($st,$rep_id)
  {
    return $this->db->query("UPDATE users set status=$st where id=$rep_id");
  }
//called from users controller  change_technician_change method
  public function tech_stts_chng($st,$tech_id)
  {
    return $this->db->query("UPDATE users set status=$st where id=$tech_id");
  }
  //users controller show_all_customer method
  public function all_customer_ret()
  {
    $query = $this->db->query("SELECT id,username,address,email,age,gender from users
    INNER JOIN customer as cust
    on users.id = cust.cust_id
    WHERE users.status!=4
    ");
    return $query->result_array();
  }
  //block customer called from users controller customer_block method
  public function cust_block($st,$cust_id)
  {
    return $this->db->query("UPDATE users set status=$st where id=$cust_id");

  }

// Check username exists
    public function check_email_exists($email)
    {
      //table name is users
        $query = $this->db->get_where('users', array('email' => $email));//first email is column of database
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }


}
