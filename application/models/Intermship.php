<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Intermship extends CI_Model {

    public function __construct() {
        parent::__construct();
        
        //load database library
        $this->load->database();
    }
  
/*
*Postinstermship
*/
public function Postinstermship($data){
		
		$insert = $this->db->insert('intermship', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
	}
/*
*getinternships
*/
public function getinternships(){
        $this->db->select('intermship.id,users.id as usersid ,intermship.userid,intermship.company_name,intermship.duration,intermship.start_date,intermship.phone,intermship.status,intermship.createdAt,users.first_name,users.last_name,users.email,users.state,users.created,users.modified');
		$this->db->from('intermship');
		$this->db->join('users', 'users.id = intermship.userid','inner');
		$this->db->order_by('intermship.id',"asc");
		$query = $this->db->get();
		return $result = $query->result();
		$this->db->last_query(); 
		$num_rows = $query->num_rows();
        if($result){
            return $result;
        }else{
            return false;
        }
	}	
/*
*studentinternships
*/
/* SELECT `intermship`.`id` as postid, `users`.`id` as `usersid`, `intermship`.`userid`, `intermship`.`company_name`, `intermship`.`duration`, `intermship`.`start_date`, `intermship`.`phone`, `intermship`.`status`, `intermship`.`createdAt`, `users`.`first_name`, `users`.`last_name`, `users`.`email`, `users`.`state`, `users`.`created`, `users`.`modified` 
FROM `intermship` 
INNER JOIN `users` ON `users`.`id` = `intermship`.`userid` 
where intermship.id not in(select postid from applications where userid=1) */
public function studentinternship($id){ 
        $this->db->select("postid");
        $this->db->from("applications");
        $this->db->where("userid=",$id);
		$query = $this->db->get();
		$postids = $query->result();
		$postids = array_values((array)$postids[0]);
        $this->db->select('`intermship`.`id` as postid, `users`.`id` as `usersid`, `intermship`.`userid`, `intermship`.`company_name`, `intermship`.`duration`, `intermship`.`start_date`, `intermship`.`phone`, `intermship`.`status`, `intermship`.`createdAt`, `users`.`first_name`, `users`.`last_name`, `users`.`email`, `users`.`state`, `users`.`created`, `users`.`modified` ');
		$this->db->from('intermship');
		$this->db->join('users', 'users.id = intermship.userid','inner');
		$this->db->where_not_in('intermship.id',$postids);
		$query = $this->db->get();
		return $result = $query->result();
	    $this->db->last_query(); 
		$num_rows = $query->num_rows();
        if($result){
            return $result;
        }else{
            return false;
        }
	}
/*
*activate
*/
public function activate($id){
	$this->db->set("status",1);
	$this->db->where('id',$id);
	$this->db->update('intermship');
	$affected_rows = $this->db->affected_rows();
	if($affected_rows>0)
		return TRUE;
	else
		return false;
}
/*
*deactivate
*/
public function deactivate($id){
	$this->db->set("status",0);
	$this->db->where('id',$id);
	$this->db->update('intermship');
	$affected_rows = $this->db->affected_rows();
	if($affected_rows>0)
		return TRUE;
	else
		return false;
}
/*
*apply
*/
public function apply($data){ 
	$result = $this->db->insert('applications',$data);
	if($result)
		return TRUE;
	else
		return false;
}
}
?>