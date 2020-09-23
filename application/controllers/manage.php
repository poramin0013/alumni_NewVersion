<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Manage_model');
    }

    public function index(){

        $this->load->view('reg_alumni');
        //$this->load->view('footer');
    }

    public function reg_alumni(){
       

        //$cardid = $this->input->post("card_id");
 
    //    echo $cardid;
        //$studentCode = $this->input->post("studentCode");
        //echo $studentCode;
        //$name = $this->input->post("prefix"." "."fname"." "."lname");
        //echo $name;
       // $gender = $this->input->post("gender");
        // echo $gender;

        $name ['name'] = " ";
        $address ['address']=" ";
        $datapersonal = array(
            'card_id' => $this->input->post("card_id"),
            'student_id' => $this->input->post("student_id"),
            'name' => $this->input->post("prefix"." "."fname"." "."lname"),
            
            
            'gender' => $this->input->post("gender"),
            'birthday' => $this->input->post("birthday"),
            
            'address' => $this->input->post("p_number"." "."p_road"." "."p_district"." "."p_amphoe"." "."p_province"." "."p_zipcode" ), 
            
            'tel' => $this->input->post("p_tel"),
            'email' => $this->input->post("email"),
            'facebook' => $this->input->post("facebook"),

            
        );

        $dataalumni = array(
            'studentCode' => $this->input->post("studentCode"),
            'group' => $this->input->post("group"),
            'branch' => $this->input->post("branch"),
            'faculty' => $this->input->post("faculty"),
            'semester' => $this->input->post("semester"),
            'education_level' => $this->input->post("education_level"),
            'year_int' => $this->input->post("year_int"),
            'year_out' => $this->input->post("year_out"),
            'outstanding_work' => $this->input->post("outstanding_work")
        );
        
        $dataworkinformation = array(
            'work_id' => $this->input->post(),
            'company' => $this->input->post("company"),
            'position' => $this->input->post("position"),
            'address' => $this->input->post("c_number"." ". "c_road"." ". "c_district"." "."c_amphoe" ." "."c_province"." "."c_zipcode"),
            'c_tel' => $this->input->post("c_tel")

        );

        // print_r($datapersonal);

        $this->Manage_model->personal_insert($datapersonal);
        $this->Manage_model->alumni_insert($dataalumni);
        $this->Manage_model->workinformation_insert($dataworkinformation);
        $this->load->view();



    }

    public function showall()
    {
        
    }
}