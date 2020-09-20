<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

    function __construct(){
        perent::__construct();
        $this->load->model('Manage_model');
    }

    public function index(){
        $this->load->view('index');
    }

    public function reg_alumni(){
        $data = array(
            'card_id' => $this->input->post("card_id"),
            'studentCode' => $this->input->post("studentCode"),
            'prefix' => $this->input->post("prefix"),
            'fname' => $this->input->post("fname"),
            'lname' => $this->input->post("lname"),
            
            'gender' => $this->input->post("gender"),
            'birthday' => $this->input->post("birthday"),
            ''

        )
    }
}