<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'intern';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['registerations'] = 'intern/student_register';
$route['student_register']     = "intern/student_registeration";
$route['studentdb']      = 'intern/studentdashboard';
$route['logout']         = 'intern/logout';
$route['login']          = 'intern/login';
$route['employee']       = 'intern/employeeRegesteration';
$route['Employee_register']      = 'intern/EmployeeRegisteration';
$route['aboutus']        = 'intern/aboutus';
$route['contactus']      = 'intern/contactus';
$route['contactm']       = 'intern/contactm';
$route['training']       = 'intern/trainingm';
$route['internship']     = 'intern/post_internship'; 
$route['PostInterShip']     = 'intern/postIntermship';
$route['Login']          = 'intern/userLogin';
$route['webdesigningcompany']          = 'intern/webdesigning';
$route['webdevelopmentcompany']          = 'intern/webdevelopment';
$route['Digitalmarketingcompany']          = 'intern/digitalmarketing';
$route['MobileApplicationcompany']          = 'intern/mobileapplication';
$route['ITRecruitmentcompany']          = 'intern/recruitment';
$route['ITTrainingcompany']          = 'intern/training';
$route['ConsultingCompany']          = 'intern/consulting';
$route['Postinternship']     = 'intern/post_internship';
$route['Interships']      = 'intern/intermshipview';
$route['active']='intern/intermshipactive';
$route['deactive']='intern/intermshipdeactive';
$route['profile']      = 'intern/profile';
$route['applyintern'] = 'intern/applyintern';
$route['apply']       = 'intern/apply';