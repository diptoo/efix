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
            print_r("dhukse");
            //$temp = $query->result_array();
            //  print_r($temp);
           // exit();
            return $query->result_array();
        }

      //  $query = $this->db->get_where('posts', array('slug' => $slug));
        $query = $this->db->query("SELECT *from posts INNER JOIN 
images ON posts.id = images.post_id
where slug = '$slug'");
        return $query->result_array();
//        print_r($query->result_array());exit();
//        return $query->row_array();
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
        $this->load->helper('form');
        $this->load->helper('directory');
        $this->load->library('upload');



        $slug = url_title($this->input->post('title'));
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body'),
            'cust_id' => $this->session->userdata('user_id'),

        );
        $this->db->insert('posts', $data);
        $post_id = $this->db->insert_id();

        /* Multiple Image Upload */

        $data['uploaded_files']=directory_map('./assets/images/profilepic/');
        if($this->input->post('submit') && count($_FILES['multipleFiles']['name'])>0)
        {

            $number_of_files = count($_FILES['multipleFiles']['name']);

            $this->load->library('upload');

            $files = $_FILES;


        //    $this->load->library('upload', $config);
            for ($i=0;$i<$number_of_files;$i++)
            {




                $_FILES['multipleFiles']['name']=$files['multipleFiles']['name'][$i];
                $_FILES['multipleFiles']['type'] = $_FILES['multipleFiles']['type'][$i];
                $_FILES['multipleFiles']['tmp_name'] = $_FILES['multipleFiles']['tmp_name'][$i];
                $_FILES['multipleFiles']['error'] = $_FILES['multipleFiles']['error'][$i];
                $_FILES['multipleFiles']['size'] = $_FILES['multipleFiles']['size'][$i];

                $config['upload_path'] = './assets/images/profilepic/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '0';
                $config['max_width'] = '0';
                $config['max_height'] = '0';

                $this->upload->initialize($config);

                print_r($_FILES['multipleFiles']['name']);



//                if (!$this->upload->do_upload('multipleFiles')) {
//                    print_r("error bal");
//                  //   exit();
//                    $errors = array('error' => $this->upload->display_errors());
//                    print_r($errors);
//                    exit();
//                    //   $post_image1 = 'noimage.jpg';
//                } else {
              //     $data = array('upload_data' => $this->upload->data());
                 //  echo "success";
//                  //  print_r($data);
//                 //   exit();
                    $post_image1 = $_FILES['multipleFiles']['name'];
                   print_r($post_image1);
                     //exit();
                    $data_image = array(
                        'images' =>$post_image1,
                        'post_id' => $post_id,
                    );
                    $this->db->insert('images', $data_image);

               //  }
//                if(!$errors)
//                {
//                    redirect('upload/index');
//                }
            }
        }
//        else{
//            $this->load->view('upload',$data);
//        }



        /*---------------- */
        $data_product = array(
            'product_name' => $this->input->post('product_name'),
            'product_model' => $this->input->post('product_model'),
            'post_id' => $post_id,
            'product_key' => $this->input->post('product_key')
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

    public function get_posts_slug($slug = FALSE)
    {
        $query = $this->db->get_where('posts', array('slug' => $slug));

        return $query->row_array();
    }

    public function insert_proposal($id)
    {
        // print_r($this->input->post('pay'));
        //  exit();
        $data = array(
            'cost' => $this->input->post('pay'),
            'service_charge' => $this->input->post('inter'),
            'days' => $this->input->post('days'),
            'definition' => $this->input->post('definition'),
            'type_id' => $this->session->userdata('type_id'),
            'proposed_id' => $this->session->userdata('user_id'),
            'post_id' => $id
        );
        //print_r($data);
        //exit();
        return $this->db->insert('proposal', $data);
    }

}
