<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library
require APPPATH . 'libraries\REST_Controller.php';
require APPPATH . 'libraries\Format.php';
use Restserver\Libraries\REST_Controller;

class Example extends REST_Controller {

    public function __construct() { 
        parent::__construct();
        $this->load->model('user');
		$this->load->model('employee');
		$this->load->model('intermship');
    }
    
public function user_get($id = 0) {
$users = $this->user->getRows($id);

if(!empty($users)){
$this->response($users, REST_Controller::HTTP_OK);
}else{
$this->response([
'status' => FALSE,
'message' => 'No user were found.'
], REST_Controller::HTTP_NOT_FOUND);
}
} 
public function users_post(){ 
        $data = json_decode($this->post()[0],TRUE);		
        if(!empty($data['first_name']) && !empty($data['last_name']) && !empty($data['email']) && !empty($data['phone'])&& !empty($data['password'])){
			$data['password'] = md5($data['password']);
			$insert = $this->user->insert($data);
			if($insert){
				$this->response([
					'status' => TRUE,
					'message' =>'success',
					'id'=>$insert
				], REST_Controller::HTTP_OK);
			}else{
				//set the response and exit
				$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
			}
        }else{
            //set the response and exit
            $this->response(["message"=>"Provide complete user information to create."], REST_Controller::HTTP_BAD_REQUEST);
        }
}
public function user_put() {
        $userData = array();
        $id = $this->put('id');
        $userData['first_name'] = $this->put('first_name');
        $userData['last_name'] = $this->put('last_name');
        $userData['email'] = $this->put('email');
        $userData['phone'] = $this->put('phone');
        if(!empty($id) && !empty($userData['first_name']) && !empty($userData['last_name']) && !empty($userData['email']) && !empty($userData['phone'])){
            //update user data
            $update = $this->user->update($userData, $id);
            
            //check if the user data updated
            if($update){
                //set the response and exit
                $this->response([
                    'status' => TRUE,
                    'message' => 'User has been updated successfully.'
                ], REST_Controller::HTTP_OK);
            }else{
                //set the response and exit
                $this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
            }
        }else{
            //set the response and exit
            $this->response("Provide complete user information to update.", REST_Controller::HTTP_BAD_REQUEST);
        }
    }
public function user_delete($id){
        //check whether post id is not empty
        if($id){
            //delete post
            $delete = $this->user->delete($id);
            
            if($delete){
                //set the response and exit
                $this->response([
                    'status' => TRUE,
                    'message' => 'User has been removed successfully.'
                ], REST_Controller::HTTP_OK);
            }else{
                //set the response and exit
                $this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
            }
        }else{
            //set the response and exit
            $this->response([
                'status' => FALSE,
                'message' => 'No user were found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
public function details_post(){
		$data = $this->post();
	    $data = json_decode($data[0],TRUE);;
		$userData = array();
		$id = $this->post('id');
		$result = $this->user->User_Details($id);
		if(!empty($result)){
            $this->response(['data'=>$result,'message'=>'success'],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'No user were found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
	}
public function employee_post(){
	$data = $this->post();
	$data = json_decode($data[0],TRUE);
	$result = $this->employee->register($data); 
	if($result=== false){
					//set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}else{
					$this->response([
						'status' => TRUE,
						'message' => 'success',
						'id'=>$result
					], REST_Controller::HTTP_OK);
				}
}	
/*
*employee Details
*/
public function employeeDetails_post(){
	$data = $this->post();
	$data = json_decode($data[0],TRUE);
	$Data = array();
	$id   = $data['id']; 
	$result = $this->employee->employeeDetails($id);
	if($result){
					//set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'success',
						'data'=>$result
					], REST_Controller::HTTP_OK);
				}else{
					//set the response and exit
					$this->response("No User Were Found .", REST_Controller::HTTP_BAD_REQUEST);
				}
}
/*
*post internship
*/
public function internship_post(){
	$data = $this->post();
	$data = json_decode($data[0],TRUE);
	$results = $this->intermship->Postinstermship($data);
        if(!empty($results)){
             $this->response([
                'status' => FALSE,
                'message' => 'success',
            ], REST_Controller::HTTP_NOT_FOUND);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'Post Intership Failed.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
}
/*
*login
*/
public function login_post(){ 
	$data = $this->post();  		
	$data = json_decode($data[0],TRUE);
 	$email = $data['email']; 
    $password = $data['password'];
	if(!empty($email) && !empty($password)){
	$result = $this->user->login($email,$password);
	if($result=== FALSE){
		$this->response(["message"=>"Invalid User Credentials ."], REST_Controller::HTTP_BAD_REQUEST);
	}else{
			$this->response([
						'status' => TRUE,
						'message' => 'success',
						'data'=>$result
					    ], REST_Controller::HTTP_OK);
				
	}
	}else{
		$this->response(["message"=>"Please Check User Is Not Authenticated "], REST_Controller::HTTP_BAD_REQUEST);
	}
	 
}
/*
*getinternships
*/
public function getinternships_get() {
$intermships = $this->intermship->getinternships();

if(!empty($intermships)){
$this->response($intermships, REST_Controller::HTTP_OK);
}else{
$this->response([
'status' => FALSE,
'message' => 'No Intermships  was  found.'
], REST_Controller::HTTP_NOT_FOUND);
}
} 
/*
*studentinternships
*/
public function studentinternship_post() {
	$data = $this->post(); 
	$data = json_decode($data[0]);
    $id   = $data->id; 
$intermships = $this->intermship->studentinternship($id);

if(!empty($intermships)){ 
$this->response($intermships, REST_Controller::HTTP_OK);
}else{
$this->response([
'status' => FALSE,
'message' => 'No Intermships  was  found.'
], REST_Controller::HTTP_NOT_FOUND);
}
}
/*
*intermshipActive
*/
public function intermshipActive_post(){
	$data = $this->post();
    $id   = $data['id'];
	$activePost = $this->intermship->activate($id);
	if($activePost){
		$this->response([
			'status' => TRUE,
			'message' => 'success.'
			], REST_Controller::HTTP_NOT_FOUND);
	}else{
		$this->response([
			'status' => FALSE,
			'message' => 'Failed.'
			], REST_Controller::HTTP_NOT_FOUND);
	}
}

/*
*intermshipDeactive
*/
public function intermshipDeactive_post(){
	$data = $this->post();
    $id   = $data['id']; 
	$activePost = $this->intermship->deactivate($id);
	if($activePost){
		$this->response([
			'status' => TRUE,
			'message' => 'success.'
			], REST_Controller::HTTP_NOT_FOUND);
	}else{
		$this->response([
			'status' => FALSE,
			'message' => 'Failed.'
			], REST_Controller::HTTP_NOT_FOUND);
	}
}
/*
*apply
*/
public function apply_post(){
	$data = $this->post();
	$data = (array)json_decode($data[0]);
	$activePost = $this->intermship->apply($data);
	if($activePost){
		$this->response([
			'status' => TRUE,
			'message' => 'success.'
			], REST_Controller::HTTP_NOT_FOUND);
	}else{
		$this->response([
			'status' => FALSE,
			'message' => 'Failed.'
			], REST_Controller::HTTP_NOT_FOUND);
	}
}
/*
*studentinternships
*/
public function studentinternships_post(){
	$data = $this->post();
	$data = (array)json_decode($data[0]);
	$activePost = $this->intermship->studentinternships($data);
	if($activePost){
		$this->response([
			'status' => TRUE,
			'message' => 'success.'
			], REST_Controller::HTTP_NOT_FOUND);
	}else{
		$this->response([
			'status' => FALSE,
			'message' => 'Failed.'
			], REST_Controller::HTTP_NOT_FOUND);
	}
}
}
?>