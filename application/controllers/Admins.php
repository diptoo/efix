<?php

class Admins extends CI_Controller
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

    public function new_service_charge()
    {
        $this->payment_model->update_servicecharge(1);
        $this->load->view('templates/accepted_proposal_customer_navbar_header');
        $this->load->view('users/admin');
        $this->load->view('templates/navbar_footer');
    }
    //payment
    public function service_charge()
    {
        $data['cost'] = $this->payment_model->service_charge();
        $this->load->view('templates/accepted_proposal_customer_navbar_header');
        $this->load->view('admin/servicecharge',$data);
        $this->load->view('templates/navbar_footer');
    }
}
