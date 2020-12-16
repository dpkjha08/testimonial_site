<?php

class Form_model extends CI_Model {
	
    public function __construct(){

       // Call the Model constructor
        parent::__construct();
        $this->load->database(); 
    }

    public function insertData($name,$email,$feedback){

        $sql="INSERT INTO users_testimonial(name,email,feedback) values(?,?,?)";
        $query=$this->db->query($sql,array($name,$email,$feedback));
        return $query;

    }



}