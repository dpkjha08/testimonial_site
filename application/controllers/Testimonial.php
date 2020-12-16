<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {


    public function __construct() {

		parent::__construct();
        $this->load->model('testimonial_model');
    }

	public function index(){
        $this->load->helper('url');

        $data['feedbacks'] = $this->testimonial_model->getDataFromDB();
        $this->load->view('testomonial_view',$data);
    }



}