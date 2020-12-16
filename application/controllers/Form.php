<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {


    public function __construct() {

		parent::__construct();
        $this->load->model('form_model');
        $this->load->library('session');
    }

	public function index(){

        if(isset($_SESSION['success'])){
            $data['success'] = true;
        }
        else{
            $data['success'] = false;
        }

        unset($_SESSION['success']);
        $this->load->helper('url');
		$this->load->view('form_view',$data);
    }
    
    public function getData(){

        $name = $this->input->post('fname');
        $email = $this->input->post('email');
        $feedback = $this->input->post('feedback');

        $isInserted = $this->form_model->insertData($name,$email,$feedback);

        if($isInserted){
            $_SESSION["success"] = true;
            $this->load->helper('url'); 
   
            /*Redirect the user to some internal controller’s method*/ 
            redirect('form');  
        }
        else{
            echo "Oops, problem occured!!!";
        }

    }
}
?>