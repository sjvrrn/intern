<?php
 //https://www.codexworld.com/codeigniter-rest-api-web-services/
class Intern extends CI_controller{
public function __construct(){
	parent::__construct();
	$this->load->helper('url');
	  $this->load->library('curl');
}
public function index(){

$this->load->view('intern/index');

} 
public function student_register(){
	
	$this->load->view('intern/student_registeration');
	
} 

public function student_registeration(){
	
	$fname    = $this->input->post('first_name');
	$lname = $this->input->post('last_name');
	$email = $this->input->post('email');
	$phone = $this->input->post('phone');
	/**rest api**/	
   //API URL
$url = 'http://localhost/intern/api/example/user/2';

//API key
$apiKey = 'CODEX@123';

//Auth credentials
$username = "admin";
$password = "1234";

 $userData = array(
    'first_name' => $fname,
    'last_name' => $lname,
    'email' => $email,
    'phone' =>$phone
);
//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $userData);
$result = curl_exec($ch);
print_r($result); 
//close cURL resource
curl_close($ch);
	/**rest end**/
	
}

}
?>