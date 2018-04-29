<?php

class Posts extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('user_model');

        $this->load->model('post_model');
    }

// For all post retrieve
    public function index($iid)
    {
        // $data['title'] = ucfirst($page);
        $data['title'] = 'Latest posts';
        $data['posts'] = $this->post_model->get_posts();// returns all post array
        if($iid == 1)
        {
          $this->load->view('templates/navbar_customer_header');
          $this->load->view('posts/index', $data);
          $this->load->view('templates/navbar_footer');
        }
        else
        {

          $this->load->view('templates/navbar');
          $this->load->view('posts/index', $data);
          $this->load->view('templates/navbar_footer');
        }

    }

    public function view($slug = NULL)
    {
        $data['post'] = $this->post_model->get_posts($slug);
        if (empty($data['post'])) {
            show_404();
        }
        //$data['title'] = $data['post']['title'];
    $type = $this->session->userdata('type_id');
    if($type == 1)
    {
      $this->load->view('templates/navbar_customer_header');
      $this->load->view('posts/view', $data);
      $this->load->view('templates/navbar_footer');
    }
    else
    {
      $this->load->view('templates/navbar');
      $this->load->view('posts/view', $data);
      $this->load->view('templates/navbar_footer');
    }

    }

      public function mypost()
      {
        $data['posts'] = $this->post_model->get_posts();
        $this->load->view('templates/navbar_customer_header');
        $this->load->view('posts/mypost', $data);
        $this->load->view('templates/footer');

      }
    // create post

    public function create()
    {
        if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        }

        $data['title'] = 'Create post';
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');
        $this->form_validation->set_rules('product_name', 'Product Name', 'required');
        $this->form_validation->set_rules('product_model', 'Product Model', 'required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/navbar_customer_header');
            $this->load->view('posts/create', $data);
            $this->load->view('templates/navbar_customer_footer');
        } else {
          

            $this->post_model->create_post();
            redirect('posts/index/1');
        }
    }

    // called from views/posts/view
    public function edit($slug)
    {
        $data['post'] = $this->post_model->get_posts($slug);
        if (empty($data['post'])) {
            show_404();
        }
        $data['title'] = 'Edit post';
        $this->load->view('templates/accepted_proposal_customer_navbar_header');
        $this->load->view('posts/edit', $data);
        $this->load->view('templates/footer');
    }

    //called from views/posts/edit
    public function update($id)
    {
        $this->post_model->update_post($id);
        redirect('posts/index/1');
    }

    // called from views/posts/view
    public function delete($id)
    {
        $this->post_model->delete_post($id);
        redirect('posts/index/1');
    }

    public function proposal($slug)
    {
        $data['post'] = $this->post_model->get_posts($slug);
        if (empty($data['post'])) {
            show_404();
        }
        $this->load->view('templates/accepted_proposal_customer_navbar_header');
        $this->load->view('posts/proposal',$data);
        $this->load->view('templates/footer');
    }

    public function push_proposal($id)
    {
      $this->post_model->insert_proposal($id);
      redirect('posts/index/2');
    }
}
