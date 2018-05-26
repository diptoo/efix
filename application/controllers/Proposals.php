<?php

class Proposals extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        }
        $this->load->model('user_model');
        $this->load->model('post_model');
        $this->load->model('rating_model');
        $this->load->model('proposal_model');
    }
    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        $data['posts']=$this->proposal_model->fetch_proposal($user_id);
        $data2['pending']=$this->proposal_model->fetch_proposal_pending($user_id);
        $data3['accepted']=$this->proposal_model->fetch_proposal_accepted($user_id);
//print_r($data3);
       // print_r($data2);
       // exit();
        $data['posts'][0]['pending']= $data2['pending'][0]['pending'];
        $data['posts'][1]['pending']=$data2['pending'][1]['pending'];
        $data['posts'][2]['pending']=$data2['pending'][2]['pending'];
        $data['posts'][3]['pending']=$data2['pending'][3]['pending'];
        $data['posts'][4]['pending']=$data2['pending'][4]['pending'];

        //print_r($data3);


        $data['posts'][0]['accepted']= $data3['accepted'][0]['accepted'];
        $data['posts'][1]['accepted']=$data3['accepted'][1]['accepted'];
        $data['posts'][2]['accepted']=$data3['accepted'][2]['accepted'];
        $data['posts'][3]['accepted']=$data3['accepted'][3]['accepted'];
        $data['posts'][4]['accepted']=$data3['accepted'][4]['accepted'];
       // print_r($data);
        //exit();
       $this->load->view('proposal/chart',$data);
    }

}