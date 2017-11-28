<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

			$this->load->model('User_model');

    }

	public function index(){
		// $this->load->view('includes/header');
		$this->load->view('pages/landing_page');
		// $this->load->view('includes/footer');
	}

	public function register(){
		$this->load->view('pages/register_page');
	}

	public function login(){
		$this->load->view('pages/login_page');
	}

	public function about(){
		$this->load->view('pages/about_page');
	}

	public function contact(){
		$this->load->view('pages/contact_page');
	}

	public function registerUser(){
        //validate  the data taken through the register form
        $this->form_validation->set_rules('username','Username','required|is_unique[users.username]',array('is_unique' => 'Username already exists!'));
        $this->form_validation->set_rules('fname','Full Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email',array('valid_email' => 'Provide a valid email'));
        $this->form_validation->set_rules('contact','Contact Number','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]',array('matches' => 'Confirm Password does not match with Password'));

        if ($this->form_validation->run() == TRUE) {

          $this->User_model->insertUser();

          //set message to be shown when registration is completed
          $this->session->set_flashdata('success','You are registered! You can login now.');
          redirect('Home/register');

        } 
        else {
            $this->load->view('pages/register_page');
        }
    }

    // public function Signup(){
    //     $this->load->view('pages/register_page');
    // }    

    public function loginUser() {

            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');

            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('login_failed', 'Username or Password is missing ');
                redirect('Home');

            } else {
                // Get username
                $username = $this->input->post('username');
                // Get and encrypt the password
                $password = sha1($this->input->post('password'));

                $reslt = $this->User_model->checkLogin();

                if ($reslt) {
                    $session_data = array(
                        'user_id' => $reslt->user_id,
                        'username' => $reslt->username ,
                        'fname' => $reslt->fname ,
                        'email' => $reslt->email ,
                        'contact' => $reslt->contact ,                       
                    );

                    if ($username == 'username') {

	                    $this->session->set_userdata($session_data);
	                    $this->load->view('pages/users/home_page');                  
                	}
            	}
                else {
                    //wrong credentials
                    $this->session->set_flashdata('login_failed','Username or Password invalid!');
                    redirect('Home/login');
                }
            }
        }

        public function sendMessage() {
        	$this->form_validation->set_rules('username','Username','required');
	        $this->form_validation->set_rules('email','Email','required|valid_email',array('valid_email' => 'Provide a valid email'));
	        $this->form_validation->set_rules('message','Message','required');
	        if ($this->form_validation->run() == TRUE) {

	          $this->User_model->insertMsg();

	          //set message to be shown when registration is completed
	          $this->session->set_flashdata('success','Your response is recorded.');
	          redirect('Home/contact');

	        } 
	        else {
	            $this->load->view('pages/contact_page');
	        }
        }
}