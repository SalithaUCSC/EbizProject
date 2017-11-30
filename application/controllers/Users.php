<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

			$this->load->model('User_model');

    }

    public function index() {
    	$this->load->view('pages/users/home_page');
    }

    public function findLawyers() {
    	$this->load->view('pages/users/find_lawyers');
    }

    public function lawyerProfile() {
        $this->load->view('pages/users/get_lawyer');
    }

    public function workDone() {
        $this->load->view('pages/users/work_done');
    }

    public function Reservation() {
        $this->load->view('pages/users/reservation');
    }

    public function reserveCase() {
        $this->load->view('pages/users/reserve_page');
    }
}