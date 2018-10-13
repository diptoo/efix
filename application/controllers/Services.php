<?php

class Services extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        }
        $this->load->model('service_model');
    }
    public function software()
    {
        $data['posts'] = $this->service_model->software();
        $this->load->view('templates/navbar_customer_header');
        $this->load->view('services/software', $data);
        $this->load->view('templates/navbar_footer');
    }
    public function hardware()
    {
        $data['posts'] = $this->service_model->hardware();
        $this->load->view('templates/navbar_customer_header');
        $this->load->view('services/hardware', $data);
        $this->load->view('templates/navbar_footer');
    }
    public function shop_service_software($service_id)  //service id
    {
        $data['posts'] = $this->service_model->select_shop_service_software($service_id);
        $this->load->view('templates/navbar_customer_header');
        $this->load->view('services/shopservice', $data);
        $this->load->view('templates/navbar_footer');
    }
    public function shop_service_hardware($service_id)  //service id
    {
        $data['posts'] = $this->service_model->select_shop_service_hardware($service_id);
        $this->load->view('templates/navbar_customer_header');
        $this->load->view('services/shopservice', $data);
        $this->load->view('templates/navbar_footer');
    }
}
