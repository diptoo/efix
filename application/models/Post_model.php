<?php

class Post_model extends CI_Model
{
    public function get_posts($slug = FALSE)
    {
        if ($slug === FALSE) {

          //  $this->db->order_by('id', 'DESC');

        //    $query = $this->db->get('posts');
            $query = $this->db->query("SELECT title,body,username,created_at,slug,posts.cust_id from posts INNER JOIN customer
            where posts.cust_id = customer.cust_id order by posts.id DESC
            ");
            //$temp = $query->result_array();
          //  print_r($temp);
            //exit();
            return $query->result_array();
        }

        $query = $this->db->get_where('posts', array('slug' => $slug));
        return $query->row_array();
    }
/*    //get_my_post
    public function get_my_post()
    {
      $query = $this->db->query("SELECT * from posts as pt
      INNER JOIN
      ");
    } */
//called from Posts controller create method
    public function create_post()
    {

// title "sixth post" hole sixth-post kore fele, type is varchar ,no gap is allowed
//post image
$config['upload_path'] = './assets/images/profilepic/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size'] = '2048';
$config['max_width'] = '2000';
$config['max_height'] = '2000';
$this->load->library('upload', $config);


if(!$this->upload->do_upload('userfile4')){
  //echo "dhukse";
  //exit();
  $errors = array('error' => $this->upload->display_errors());
  $post_image1 = 'noimage.jpg';
} else {
  $data = array('upload_data' => $this->upload->data());
  $post_image1 = $_FILES['userfile4']['name'];
}

if(!$this->upload->do_upload('userfile2')){
  //echo "dhukse";
  //exit();
  $errors = array('error' => $this->upload->display_errors());
  $post_image2 = 'noimage.jpg';
} else {
  $data = array('upload_data' => $this->upload->data());
  $post_image2 = $_FILES['userfile2']['name'];
}

if(!$this->upload->do_upload('userfile3')){
  //echo "dhukse";
  //exit();
  $errors = array('error' => $this->upload->display_errors());
  $post_image3 = 'noimage.jpg';
} else {
  $data = array('upload_data' => $this->upload->data());
  $post_image3 = $_FILES['userfile3']['name'];
}

        $slug = url_title($this->input->post('title'));
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body'),
            'cust_id' => $this->session->userdata('user_id'),
            'img1'=>$post_image1,
            'img2'=>$post_image2,
            'img3'=>$post_image3
        );
        $this->db->insert('posts', $data);
        $post_id = $this->db->insert_id();
        $data_product = array(
          'product_name'=>$this->input->post('product_name'),
          'product_model'=>$this->input->post('product_model'),
          'post_id'=>$post_id,
          'product_key'=>$this->input->post('product_key')
        );
        //print_r($data_product);
      //  exit();
      $this->db->insert('product', $data_product);

      return;
    }

//called from posts controller delete method
    public function delete_post($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('posts');
        return true;
    }

    public function update_post($id)
    {
        $slug = url_title($this->input->post('title'));

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body')
        );
        $this->db->where('id', $id);
        return $this->db->update('posts', $data);
    }

    public function insert_proposal($id)
    {
   // print_r($this->input->post('pay'));
    //  exit();
      $data =array(
        'cost'=>$this->input->post('pay'),

        'days'=>$this->input->post('days'),
        'definition'=>$this->input->post('definition'),
        'type_id'=>$this->session->userdata('type_id'),
        'proposed_id'=>$this->session->userdata('user_id'),
        'post_id'=>$id
      );
      //print_r($data);
      //exit();
      return $this->db->insert('proposal', $data);
    }

}
