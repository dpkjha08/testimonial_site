<?php

class Testimonial_model extends CI_Model {
	
    public function __construct(){

       // Call the Model constructor
        parent::__construct();
        $this->load->database(); 
    }

    public function getDataFromDB(){
        $sql = "SELECT * FROM users_testimonial order by id desc"; 
        $query = $this->db->query($sql);
        return $query->result_array();
        

    }

    

}