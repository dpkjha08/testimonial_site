<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {


    public function __construct() {

		parent::__construct();
        $this->load->model('form_model');
    }

	public function index(){
        $this->load->helper('url');
		$this->load->view('form_view');
    }
    
    public function getData(){

        $name = $this->input->post('fname');
        $email = $this->input->post('email');
        $feedback = $this->input->post('feedback');

        $isInserted = $this->form_model->insertData($name,$email,$feedback);

        if($isInserted){
            echo "HOgaya";
        }
        else{
            echo "Nhi hua";
        }

    }
}
?>