<?php
class Users extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('user_model');
        $this->load->model('post_model');
    }
    // Register user
    //called from views/templates/header
    // Status 1 register accepted by admin ,status 2 means register pending
    //customer  always status 1 , status 4 means customer is blocked
    public function register($iidd){
        $data['title'] = 'Sign Up';

       // $iid="2";
        $data['iid']=$iidd;
        //die($iid);
        $this->form_validation->set_rules('username', 'Username');
        $this->form_validation->set_rules('email', 'Email','required');
        $this->form_validation->set_rules('password', 'Password');
        $this->form_validation->set_rules('password2', 'Confirm Password');
        if($this->form_validation->run() === FALSE){
            echo "form error";
            $this->load->view('templates/header');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
        } else {
            // Encrypt passwordecho ""
           // $enc_password = md5($this->input->post('password'));
            //echo "dhukse";
            //die($iid);
            //common for all users
            $data = array(
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'password' => md5($this->input->post('password')),
                'zipcode' => $this->input->post('zipcode')
            );
            $data1=array();
            $data2=array();
            $data3=array();
            // Repair shop
            if($iidd ==2)
            {
               // die("dhuske");
                $data2['shop_name']=$this->input->post('shop_name');
                $data2['floor']=$this->input->post('floor');
                $data2['category']=$this->input->post('category');
                $data['type_id']=2;
                $data['status']=2;
            }
            //technician
            elseif ($iidd==3)
            {
                $data3['expert_at']=$this->input->post('expert_at');
                $data3['nationality']=$this->input->post('nationality');
                $data3['age']=$this->input->post('age');
                $data3['gender']=$this->input->post('gender');
                $data3['username']=$this->input->post('username');
                $data['type_id']=3;
                $data['status']=2;
            }
            elseif ($iidd==1)
            {
                $data['type_id']=1;
                $data['status']=1;
                $data1['username']=$this->input->post('username');
                $data1['dob']=$this->input->post('dob');
                $data1['nationality']=$this->input->post('nationality');
                $data1['age']=$this->input->post('age');
                $data1['gender']=$this->input->post('gender');

            }
            $this->user_model->register($data,$data1,$data2,$data3);
            // Set message
            $this->session->set_flashdata('user_registered', 'You are now registered.Wait for admin approval');
            redirect('users/login');
        }
    }
    //register status change by admin
    public function change_register_change($status,$rep_id)
    {

      $this->user_model->reg_stts_chng($status,$rep_id);
      redirect('users/rep_pending');
    }
    //technician status change by admin

    public function change_technician_change($status,$tech_id)
    {
      $this->user_model->tech_stts_chng($status,$tech_id);
      redirect('users/tech_pending');
    }


    // Log in user
    public function login(){
        $data['title'] = 'Sign In';
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/login', $data);
            $this->load->view('templates/footer');
        } else {

            // Get email
            $email = $this->input->post('email');
            // Get and encrypt the password
            $password = md5($this->input->post('password'));
            $password_admin =$this->input->post('password');
            if($email!="dipto_admin@gmail.com"){
            $result_array = $this->user_model->login($email, $password);
  }
            //echo $email;
            //exit();
            if($email=="dipto_admin@gmail.com" && $password_admin=="ijkl11223344")
            {
            //  echo "admin a dhukse";
            //  exit();
            $user_data = array(

                'email' => $email,
                'logged_in' => true
            );

            $this->session->set_userdata($user_data); // ?????

              $this->load->view('templates/header');
              $this->load->view('users/admin');
              $this->load->view('templates/footer');
            }

            elseif($result_array[0]['status']==2) {
              # code...
              $this->session->set_flashdata('registration_pending', 'Your registration is not still accepted by system admin');
              redirect('users/login');
            }
            elseif ($result_array[0]['status']==3) {
              $this->session->set_flashdata('registration_rejected', 'Your registration is rejected by system admin');
              redirect('users/login');
            }
            elseif ($result_array[0]['status']==4) {
              $this->session->set_flashdata('account_blocked', 'Your account is blocked by system admin');
              redirect('users/login');
            }
            elseif($result_array[0]['id']){

                // Create session
                $user_data = array(
                    'type_id'=>$result_array[0]['type_id'],
                    'user_id' =>$result_array[0]['id'],
                    'email' => $email,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data); // ?????
                // Set message
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');
                //Repair shop
                $data['post']=$result_array;
                if($result_array[0]['type_id']==2)
                {
                    $this->load->view('templates/header');
                    $this->load->view('users/repairshop',$data);
                    $this->load->view('templates/footer');

                }
                //Technician
                elseif ($result_array[0]['type_id']==3)
                {
                    $this->load->view('templates/header');
                    $this->load->view('users/technician',$data);
                    $this->load->view('templates/footer');
                }
                //Customer
                elseif ($result_array[0]['type_id']==1)
                {
                    $this->load->view('templates/header');
                    $this->load->view('users/customer',$data);
                    $this->load->view('templates/footer');
                }
                //redirect('posts');
            }

             else {
                // Set message
                $this->session->set_flashdata('login_failed', 'Login is invalid');
                redirect('users/login');
            }
        }
    }


    // Log user out
    public function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('type_id');
        $this->session->unset_userdata('email');
        // Set message
        $this->session->set_flashdata('user_loggedout', 'You are now logged out');
        redirect('users/login');
    }

//View proposal- called from views/posts/view
    public function view_proposal($type_id,$id) //$id=post_id
    {
      $data['posts'] = $this->user_model->get_proposal($type_id,$id);// returns all post array of proposal
      print_r($data['posts']);
      //exit();
      $this->load->view('templates/header');
      $this->load->view('users/viewproposal',$data);
      $this->load->view('templates/footer');
    }

    // proposal 1 means pending 2 means accept 3 means reject
    public function change_proposal_status($st1,$st2,$st3,$pst_id)
    {
        $this->user_model->change_proposal_status($st1,$st2,$st3,$pst_id);
        echo "dhukse";
        $this->session->set_flashdata('proposal_accept', 'You have accepted a proposal');
        redirect("users/mypost");
    }
// called from views/users/customer
    public function accepted_proposal_technician()
    {
      $data['posts']=$this->user_model->accepted_proposal_technician();
      $this->load->view('templates/header');
      $this->load->view('proposal/accepted_proposal_technician',$data);
      $this->load->view('templates/footer');
    }
// called from views/users/customer
  public function accepted_proposal_repairshop()
  {
    $data['posts']=$this->user_model->accepted_proposal_repairshop();
    $this->load->view('templates/header');
    $this->load->view('proposal/accepted_proposal_repairshop',$data);
    $this->load->view('templates/footer');
  }
  // called from views/users/customer

  public function proposal_status()
  {
    $data['posts']=$this->user_model->proposal_status();
    $this->load->view('templates/header');
    $this->load->view('proposal/proposal_status',$data);
    $this->load->view('templates/footer');
  }

  public function mypost()
  {
    $data['posts'] = $this->post_model->get_posts();
    $this->load->view('templates/header');
    $this->load->view('posts/mypost', $data);
    $this->load->view('templates/footer');
  }

  //called from views/users/admin
  public function rep_pending()
  {
    $data['posts'] = $this->user_model->pending_rep();
    $this->load->view('templates/header');
    $this->load->view('admin/pendingrep', $data);
    $this->load->view('templates/footer');
  }
  //called from views/users/admin

  public function tech_pending()
  {
    $data['posts'] = $this->user_model->pending_tech();
    $this->load->view('templates/header');
    $this->load->view('admin/pendingtech', $data);
    $this->load->view('templates/footer');
  }
  //called from views/users/Admin
  public function show_all_customer()
  {
    $data['posts'] = $this->user_model->all_customer_ret();
    $this->load->view('templates/header');
    $this->load->view('admin/allcustomer', $data);
    $this->load->view('templates/footer');
  }
//called from views/admin/allcustomer
public function customer_block($status,$cust_id)
{
  $this->user_model->cust_block($status,$cust_id);
  redirect('users/show_all_customer');
}
    // Check if username exists
    public function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
        if($this->user_model->check_username_exists($username)){
            return true;
        } else {
            return false;
        }
    }
}
