<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Model {

public function __construct() {
	parent::__construct();
	
	//load database library
	$this->load->database();
}
/*
* Insert user data
*/
public function register($data = array()) {
   $insert = $this->db->insert('employee', $data);
	if($insert){
		return $this->db->insert_id();
	}else{
		return false;
	}
}
    
   	/*
	*get userDetails
	*/
public function employeeDetails($id){
	
	$this->db->where('id',$id);
	$query=$this->db->get('employee');
	$result=$query->result();
	$num_rows=$query->num_rows();
	return $result;
	
}

}
?>