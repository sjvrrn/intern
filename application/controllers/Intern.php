<?php
error_reporting(0);
 //https://www.codexworld.com/codeigniter-rest-api-web-services/
 require_once(APPPATH."controllers\unique.php");
class Intern extends CI_controller{
public function __construct(){
	header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	parent::__construct();
	$this->load->helper('url');
	  $this->load->library('curl');
	  $this->load->library('session');
	  $this->load->library('email');
}
/*
**inter index
*/
public function index(){
//--	
$this->load->view('intern/index');

} 
/*
**Student Register Form
*/
public function student_register(){
	
	$this->load->view('intern/student_registeration');
	
} 
/*
**student dashboard
*/
public function studentdashboard(){
	
	$this->load->view('intern/student_dashboard');
	
}
/*
*Employee Registeration
*/
public function employeeRegesteration(){
	$this->load->view('intern/employeeRegisteration');
}
/*
*aboutus
*/
public function aboutus(){
	
	$this->load->view('intern/aboutus');
}
/*
*contactus
*/
public function contactus(){
	
	$this->load->view('intern/contactus');
}
/*
*contactus
*/
public function trainingm(){
	
	$this->load->view('intern/training');
}
/*
*webdesigning
*/
public function webdesigning(){
	
	$this->load->view('intern/webdesigning');
}
/*
*webdevelopment
*/
public function webdevelopment(){
	
	$this->load->view('intern/webdevelopment');
}
/*
*digitalmarketing
*/
public function digitalmarketing(){
	
	$this->load->view('intern/digitalmarketing');
}
/*
*mobileapplication
*/
public function mobileapplication(){
	
	$this->load->view('intern/mobileapplication');
}
/*
*recruitment
*/
public function recruitment(){
	
	$this->load->view('intern/recruitment');
}
/*
*training
*/
public function training(){
	
	$this->load->view('intern/training');
}
/*
*consulting
*/
public function consulting(){
	
	$this->load->view('intern/consulting');
}
/*
*post intership
*/
public function postIntermship(){
	
	$this->load->view('intern/post_internship',$this->session->userdata());
	
}
/*
*Login
*/
public  function login(){
	$this->load->view('intern/login');
}
/*
*intermshipview
*/
public  function intermshipview(){
	 $url     = 'http://localhost/intern/api/example/getinternships';
	 $data    = array();
	 $intermships  = Common($data,$url,'get'); //print_r($intermships); die;
	 $data['intermships'] = json_decode($intermships);
	 //$this->session->set_flashdata('intermships',$data);
     $this->load->view('intern/intermshipview',$data);
}
/*
*profile
*/
public  function profile(){

	$this->load->view('intern/employee_dashboard',$this->session->userdata());
}
/*
*Logout
*/
public function logout(){
	
	$this->session->unset_userdata('logged_in');
	$this->session->sess_destroy();
	redirect('login');
	
}
/*
**student register
*/
public function student_registeration(){
	try{
	$data = $this->input->post();
	$data['state'] = 1; 
	$data[0] = json_encode($data); 
	$url = 'http://localhost/intern/api/example/users';
	$result = Common($data,$url,'post');
	if($result->message==="success"){
									  redirect('/login');
	}else{
		redirect('/registerations',array('message'=>'Registeration Faile Please Try Again'));
	}
	}catch(Exception $e){
		log_message('error',$e->getMessage());
		redirect('/login',array('message'=>'Registeration Faile Please Try Again'));
	}
}
/*
*EmployeeRegisteration
*/
public function EmployeeRegisteration(){ 
try{
    $data = array(
	       "first_name" => $this->input->post('first_name'),
		   "last_name" => $this->input->post('last_name'),
		   "email" => $this->input->post('email'),
		   "phone" => $this->input->post('phone'),
		   "password" => $this->input->post('password'),
		   "state"=>2
                  );
	$data[0] = json_encode($data); 
	$url = 'http://localhost/intern/api/example/users';
	$result = Common($data,$url,'post');
 	if($result->message==="success"){
		$company= array(
				  'userid' =>$result->id,
				  "name" => $this->input->post('company_name'),
				  "address" => $this->input->post('company_address')
				 );		
	$company[0] = json_encode($company);
	$url = 'http://localhost/intern/api/example/employee';
	$result = Common($company,$url,'post'); //print_r($result); 		 
	if($result->message==="success"){
		$data = array('message'=>$result->message);
		redirect('/login',$data);
	}
	
	}else{
	redirect('/registerations');
  } 
}catch(Exception $e){
		log_message('error',$e->getMessage());
		redirect('/registerations',array('message'=>'Registeration Faile Please Try Again'));
	}
}
/*
*Contact form
*/
public function contactm(){
	$name    = $this->input->post('name');
	$email   = $this->input->post('email');
	$message = $this->input->post('message'); 
	
	     $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'narayanaphp90@gmail.com', // change it to yours
  'smtp_pass' => 'abdulkalam', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);

        $message = '';
        $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('narayanaphp90@gmail.com'); // change it to yours
      $this->email->to('narayanaphp90@gmail.com');// change it to yours
      $this->email->subject('Resume from JobsBuddy for your Job posting');
      $this->email->message($message);
      if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }
	
}
/*
*login
*/
public function userLogin(){
	try{
	$data[0] = json_encode($this->input->post()); 
	$url     = 'http://localhost/intern/api/example/login';
	$result  = Common($data,$url,'post');
    if($result->message==="success"){
		$this->session->set_userdata('logged_in',TRUE);
		$data = (array)$result->data[0]; 
		$this->session->set_userdata($data);
		if($data['state']==1){
			
		$this->load->view('intern/student_dashboard',$data);
		
		}else{
			
			$this->load->view('intern/employee_dashboard',$data);
		} 
        
	}else{
		$data = array("message"=>$result->message);
		$this->load->view('intern/login',$data);	
	}
	}catch(Exception $e){
		log_message('error',$e->getMessage());
		redirect('intern/login',array('message'=>'Registeration Faile Please Try Again'));
	 }
	}
/*
*post_intership
*/
public function post_internship(){
	try{
	$id = $this->session->userdata('id'); 
	$data = $this->input->post();
	$data['userid'] = $id;
    $data[0] = json_encode($data);
	$url     = 'http://localhost/intern/api/example/internship';
	$result  = Common($data,$url,'post'); 
	$message = $result->message;
	if($message==="success"){
	 redirect('Interships','refresh');
	 }
	}catch(Exception $e){
		log_message('error',$e->getMessage());
		redirect('PostInterShip',array('message'=>'Registeration Faile Please Try Again'));
	}
}
/*
*intermshipactive
*/
public function intermshipactive(){   
    $data = $this->input->post(); 
	$data[0] = json_encode(array("id"=>$id));
	$url     = 'http://localhost/intern/api/example/intermshipActive';
	$result  = Common($data,$url,'post');  
    echo $result->message; 
}
/*
*intermship deactive
*/
public function intermshipdeactive(){
	$data = $this->input->post(); 
	$data[0] = json_encode(array("id"=>$id));
	$url     = 'http://localhost/intern/api/example/intermshipDeactive';
	$result  = Common($data,$url,'post');
	echo $result->message; 
}
/*
*applyintern
*/
public function applyintern(){ 
	 $url     = 'http://localhost/intern/api/example/studentinternship';
	 $data[0]    = json_encode(array("id"=>$this->session->userdata['id']));
	 $intermships  = Common($data,$url,'post'); //print_r($intermships); die;
	 $intermships['intermships'] = $intermships;
	 $intermships['intermships']['user_id']= $this->session->userdata['id'];
	 $this->load->view('intern/applyintern',$intermships); 
}
/*
*apply
*/
public function apply(){
	 ; 
	 $data[0] = json_encode(array('userid'=>$this->input->post('userid'),'postid'=>$this->input->post('postid')));
	 $url     = 'http://localhost/intern/api/example/apply';
	 $intermships  = Common($data,$url,'post');
	 echo $intermships->message; 
}

}
?>
