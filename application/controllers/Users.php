<?php
class Users extends CI_Controller{
    public function __construct()
    {
        parent::__construct();



        $this->load->model('user_model');
        $this->load->model('post_model');
        header('Cache-Control: no cache'); //no cache

        session_cache_limiter('must-revalidate');
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
        $this->form_validation->set_rules('email', 'Email','required|callback_check_email_exists');
        $this->form_validation->set_rules('password', 'Password','required|min_length[4]|callback_is_password_strong');
        $this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('contact','Contact No','required|min_length[6]');
        $this->form_validation->set_message('is_password_strong', 'Password is not strong');
        if($this->form_validation->run() === FALSE){
            //echo "form error";
            $this->load->view('templates/header');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
        } else {


            $temp = $this->input->post('dob');
             $temp2=@date('Y-m-d');

            $age = $temp2-$temp;
        $config['upload_path'] = './assets/images/profilepic/';

        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('userfile1')){

          $errors = array('error' => $this->upload->display_errors());
          $post_image = 'noimage.jpg';
        } else {
          $data = array('upload_data' => $this->upload->data());
          $post_image = $_FILES['userfile1']['name'];
        }
            //common for all users
            $data = array(
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'password' => md5($this->input->post('password')),
                'zipcode' => $this->input->post('zipcode'),
                'contact'=>$this->input->post('contact'),
                'profilepic'=>$post_image
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
                $this->session->set_flashdata('user_registered', 'You are now registered.Wait for admin approval');

            }
            //technician
            elseif ($iidd==3)
            {
                $data3['expert_at']=$this->input->post('expert_at');
              //  print_r($data3['expert_at']);
                //echo "dhukse";
                //exit();
                $data3['nationality']=$this->input->post('nationality');
                $temp_dob = $this->input->post('dob');
                $data3['dob']=date('Y-m-d', strtotime($temp_dob));
                $data3['age']=$age;
                //echo $data3['dob'];

                $data3['gender']=$this->input->post('gender');
                $data3['username']=$this->input->post('username');
                $data['type_id']=3;
                $data['status']=2;
                $this->session->set_flashdata('user_registered', 'You are now registered.Wait for admin approval');
            }
            elseif ($iidd==1)
            {
                $data['type_id']=1;
                $data['status']=1;
                $data1['username']=$this->input->post('username');
                $temp_dob = $this->input->post('dob');
                $data1['dob']=date('Y-m-d', strtotime($temp_dob));
            //    echo $data1['dob'];
              //  echo "dhukse";
                //exit();
                $data1['nationality']=$this->input->post('nationality');
                $data1['age']=$age;
                $data1['gender']=$this->input->post('gender');
            }
            $this->user_model->register($data,$data1,$data2,$data3);
            // Set message
            redirect('users/login');
        }
    }
    public function send($email)
    {
      echo "dhukse";
      print_r($email);
    //  exit();
      $config = Array(
        'protocol'=>'smtp',
        'smtp_host'=>'ssl://smtp.googlemail.com',
        'smtp_port'=>465,
        'smtp_user'=>'lm33120@gmail.com',
        'smtp_pass'=>'BFfDNM44332211',
        'mailtype'=>'html',
        'charset'=>'iso-8859-1',
        'wordwrap'=>TRUE
      );
      $this->load->library('email',$config);

$this->email->from('lm33120@gmail.com', 'Dipto');
$this->email->to($email);


$this->email->subject('e-Fix registration');
$this->email->message('Your registration has been accepted by system admin of efix. You can login now.
http://localhost/efix/index.php/
');

$this->email->set_newline("\r\n");
if($this->email->send())
{
  echo "email has been sent";
}
else
{
  echo "not send";
}
return;
    }
    //register status change by admin
    public function change_register_change($status,$rep_id)
    {

      $data = $this->user_model->reg_stts_chng($status,$rep_id);
      $this->send($data[0]['email']);

      redirect('users/rep_pending');
    }
    //technician status change by admin

    public function change_technician_change($status,$tech_id)
    {
    //  echo "lol";
      $data = $this->user_model->tech_stts_chng($status,$tech_id);
      //print_r($data[0]['email']);
      $this->send($data[0]['email']);
    //  exit();
      redirect('users/tech_pending');
    }


    // Log in user
    public function login(){
        $data['title'] = 'Sign In';
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
          //  $this->load->view('users/lo');
            $this->load->view('users/login', $data);
            $this->load->view('templates/footer');
        }

        else {

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

              $this->load->view('templates/accepted_proposal_customer_navbar_header');
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
                    'password'=>$password,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data); // ?????
                // Set message
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');
                //Repair shop
                $data['post']=$result_array;


                if($result_array[0]['type_id']==2)
                {
                   $this->load->view('templates/navbar');
                    $this->load->view('users/repairshop',$data);
                    $this->load->view('templates/navbar_footer');

                }
                //Technician
                elseif ($result_array[0]['type_id']==3)
                {
                  //  $this->load->view('templates/header');
                  $this->load->view('templates/navbar');
                    $this->load->view('users/technician',$data);
                    $this->load->view('templates/navbar_footer');
                }
                //Customer
                elseif ($result_array[0]['type_id']==1)
                {
                    $this->load->view('templates/navbar_customer_header');
                    $this->load->view('users/customer',$data);
                    $this->load->view('templates/navbar_customer_footer');
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

public function myprofile()
{
    if(!$this->session->userdata('logged_in'))
    {
        redirect('users/login');
    }
  $email = $this->session->userdata('email');
  $password = $this->session->userdata('password');
  $result_array = $this->user_model->login($email, $password);

  $data['post']=$result_array;

  if($result_array[0]['type_id']==2)
  {
     $this->load->view('templates/navbar');
      $this->load->view('users/repairshop',$data);
      $this->load->view('templates/navbar_footer');

  }
  //Technician
  elseif ($result_array[0]['type_id']==3)
  {
    //  $this->load->view('templates/header');
    $this->load->view('templates/navbar');
      $this->load->view('users/technician',$data);
      $this->load->view('templates/navbar_footer');
  }
  //Customer
  elseif ($result_array[0]['type_id']==1)
  {
      $this->load->view('templates/navbar_customer_header');
      $this->load->view('users/customer',$data);
      $this->load->view('templates/navbar_customer_footer');
  }
}
  public function check_profile($userid)
  {
      if(!$this->session->userdata('logged_in'))
      {
          redirect('users/login');
      }
      $result_array = $this->user_model->check_profile($userid);
      $data['post']=$result_array;

      if($result_array[0]['type_id']==2)
      {
          $this->load->view('templates/navbar');
          $this->load->view('users/repairshop',$data);
          $this->load->view('templates/navbar_footer');

      }
      //Technician
      elseif ($result_array[0]['type_id']==3)
      {
          //  $this->load->view('templates/header');
          $this->load->view('templates/navbar');
          $this->load->view('users/technician',$data);
          $this->load->view('templates/navbar_footer');
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
        redirect('');
    }

//View proposal- called from views/posts/view
    public function view_proposal($type_id,$id) //$id=post_id
    {
      $data['posts'] = $this->user_model->get_proposal($type_id,$id);// returns all post array of proposal
    //  print_r($data['posts']);
      //exit();
      $this->load->view('templates/accepted_proposal_customer_navbar_header');
      $this->load->view('users/viewproposal',$data);
      $this->load->view('templates/footer');
    }

    // proposal 1 means pending 2 means accept 3 means reject
    public function change_proposal_status($st1,$st2,$st3,$pst_id)
    {
        $this->user_model->change_proposal_status($st1,$st2,$st3,$pst_id);
        //echo "dhukse";
        $this->session->set_flashdata('proposal_accept', 'You have accepted a proposal');
        redirect("users/mypost");
    }
// called from views/users/customer
    public function accepted_proposal_technician()
    {
      $data['posts']=$this->user_model->accepted_proposal_technician();
      $this->load->view('templates/accepted_proposal_customer_navbar_header');
      $this->load->view('proposal/accepted_proposal_technician',$data);
      $this->load->view('templates/navbar_customer_footer');
    }
// called from views/users/customer
  public function accepted_proposal_repairshop()
  {
    $data['posts']=$this->user_model->accepted_proposal_repairshop();
    $this->load->view('templates/accepted_proposal_customer_navbar_header');
    $this->load->view('proposal/accepted_proposal_repairshop',$data);
    $this->load->view('templates/navbar_customer_footer');
  }
  // called from views/users/customer

  public function proposal_status()
  {
    $data['posts']=$this->user_model->proposal_status();
    $this->load->view('templates/accepted_proposal_customer_navbar_header');
    $this->load->view('proposal/proposal_status',$data);
    $this->load->view('templates/footer');
  }

  public function mypost()
  {
    $data['posts'] = $this->post_model->get_posts();
    $this->load->view('templates/navbar_customer_header');
    $this->load->view('posts/mypost', $data);
    $this->load->view('templates/navbar_customer_footer');
  }

  //called from views/users/admin
  public function rep_pending()
  {
    $data['posts'] = $this->user_model->pending_rep();
    $this->load->view('templates/accepted_proposal_customer_navbar_header');
    $this->load->view('admin/pendingrep', $data);
    $this->load->view('templates/footer');
  }
  //called from views/users/admin

  public function tech_pending()
  {
    $data['posts'] = $this->user_model->pending_tech();
    $this->load->view('templates/accepted_proposal_customer_navbar_header');
    $this->load->view('admin/pendingtech', $data);
    $this->load->view('templates/footer');
  }
  //called from views/users/Admin
  public function show_all_customer()
  {
    $data['posts'] = $this->user_model->all_customer_ret();
    $this->load->view('templates/accepted_proposal_customer_navbar_header');
    $this->load->view('admin/allcustomer', $data);
    $this->load->view('templates/footer');
  }
//called from views/admin/allcustomer
public function customer_block($status,$cust_id)
{
  $this->user_model->cust_block($status,$cust_id);
  redirect('users/show_all_customer');
}
    // Check if email exists
    public function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
        if($this->user_model->check_email_exists($email)){
            return true;
        } else {
            return false;
        }
    }

    public function is_password_strong($password)
    {
       // echo $password;
//regular expression
        if (preg_match('#[0-9]#', $password) && preg_match('#[a-zA-Z]#', $password)) {
            return TRUE;
        }
        return FALSE;
    }
}
