<?php

class Post_model extends CI_Model
{
    public function get_posts($slug = FALSE)
    {
        if ($slug === FALSE) {

            $this->db->order_by('id', 'DESC');

            $query = $this->db->get('posts');

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

        $slug = url_title($this->input->post('title'));
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body'),
            'cust_id' => $this->session->userdata('user_id')
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
        'type_id'=>$this->session->userdata('type_id'),
        'proposed_id'=>$this->session->userdata('user_id'),
        'post_id'=>$id
      );
      //print_r($data);
      //exit();
      return $this->db->insert('proposal', $data);
    }

}
