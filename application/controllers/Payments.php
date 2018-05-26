<?php

class Payments extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        }
        $this->load->model('payment_model');
    }
    //payment
    public function payment_shop()
    {
        $data['posts'] = $this->payment_model->payment_shop();
        $this->load->view('templates/accepted_proposal_customer_navbar_header');
        $this->load->view('admin/paymentrep',$data);
        $this->load->view('templates/navbar_footer');
    }
    public function payment_tech()
    {
        $data['posts'] = $this->payment_model->payment_tech();
        $this->load->view('templates/accepted_proposal_customer_navbar_header');
        $this->load->view('admin/paymenttech',$data);
        $this->load->view('templates/navbar_footer');
    }

}
