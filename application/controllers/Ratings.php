<?php
class Ratings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rating_model');
    }

    public function give_review($type_id,$user_id)
    {
        $data['type_id'] = $type_id;
        $data['user_id'] = $user_id;
       // print_r($data);

        $this->form_validation->set_rules('rating', 'Rating', 'required');
        $this->form_validation->set_rules('comment', 'Comment', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/navbar_customer_header');
            $this->load->view('rating/give_review',$data);
            $this->load->view('templates/navbar_customer_footer');
        } else {

            $this->rating_model->give_review($type_id,$user_id);
            redirect('posts/index/1');
        }
    }

    public function show_review($type_id,$user_id)
    {
        $data['posts'] = $this->rating_model->show_review($type_id,$user_id);
        $this->load->view('templates/accepted_proposal_customer_navbar_header');
        $this->load->view('rating/show_review',$data);
        $this->load->view('templates/navbar_footer');
    }


}
