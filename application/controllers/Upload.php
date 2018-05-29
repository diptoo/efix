<?php

class Upload extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('user_model');
        $this->load->model('post_model');
        $this->load->model('rating_model');

        $this->load->helper('form');
        $this->load->helper('directory');
        $this->load->library('upload');
    }
    public function index()
    {
        //$this->post_model->create_post();
        $data['title']="";

        $data['uploaded_files']=directory_map('./assets/images/profilepic/');
        if($this->input->post('submit') && count($_FILES['multipleFiles']['name'])>0)
        {
//            echo "<pre>";
//            print_r($_FILES);
//            echo "</pre>";
            $number_of_files = count($_FILES['multipleFiles']['name']);



            $this->load->library('upload');

            $files = $_FILES;


            for ($i=0;$i<$number_of_files;$i++)
            {

                $config['upload_path'] = './assets/images/profilepic/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '0';
                $config['max_width'] = '0';
                $config['max_height'] = '0';

                $_FILES['multipleFiles']['name']=$files['multipleFiles']['name'][$i];
                $_FILES['multipleFiles']['type'] = $_FILES['multipleFiles']['type'][$i];
                $_FILES['multipleFiles']['tmp_name'] = $_FILES['multipleFiles']['tmp_name'][$i];
                $_FILES['multipleFiles']['error'] = $_FILES['multipleFiles']['error'][$i];
                $_FILES['multipleFiles']['size'] = $_FILES['multipleFiles']['size'][$i];
 print_r($_FILES['multipleFiles']['name']); //exit();

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $img = "multipleFiles";

                if (!$this->upload->do_upload($img)) {
                    print_r("error hoisee");
                  //  exit();
                    $errors = array('error' => $this->upload->display_errors());
                    print_r($errors);
                    exit();
                 //   $post_image1 = 'noimage.jpg';
                } else {
                    $data = array('upload_data' => $this->upload->data());
                   $post_image1 = $_FILES['multipleFiles']['name'];
                   print_r($post_image1);
                  //  exit();
                }

            }
        }
        else{
            $this->load->view('upload',$data);
        }
    }
}