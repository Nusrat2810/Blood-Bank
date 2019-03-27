

<?php

//session_start(); //we need to start session in order to access it through CI

Class User_Authentication extends CI_Controller {

public function __construct() {
parent::__construct();

// Load form helper library
$this->load->helper('form');

// Load form validation library
$this->load->library('form_validation');

// Load session library
$this->load->library('session');

// Load database
$this->load->model('login_database');
}

// Show login page
//public function index() {
//$this->load->view('login_form');
//}

// Show registration page
//public function user_registration_show() {
//$this->load->view('registration_form');
//http://localhost/p-300/user_authentication/user_registration_show
//}

// Validate and store registration data in database
public function new_user_registration() {

// Check validation for user input in SignUp form
//$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
$this->form_validation->set_rules('Email', 'Email', 'trim|required|xss_clean');
$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');


if ($this->form_validation->run() == FALSE) {
$this->load->view('welcome_save');
} 
else {
$Name = $data_form['Name'];
$Gender = $data_form['Gender'];
$Age = $data_form['Age'];
$Blood = $data_form['Blood'];

	$Email = $data_form['Email'];
	$Number = $data_form['Number'];
	$District = $data_form['District'];
	$Area = $data_form['Area'];
			
			
		$Password = $data_form['password'];
		$Confirm = $data_form['confirm'];

$datas = array(
//'user_name' => $this->input->post('username'),
//'user_email' => $this->input->post('email_value'),
//'user_password' => $this->input->post('password')
	'Name' => $Name,
			 'Gender' => $Gender,
			 'Age' => $Age,
			 'Blood' => $Blood,

			 'Email' => $Email,
			 'Number' => $Number,
			 'District' => $District,
			 'Area' => $Area,
			 
			 'password' => $Password,
			 'confirm' => $Confirm
);
//$result = $this->login_database->registration_insert($data);
			$this->load->model('main_model');
			$result=$this->main_model->register($datas);
if ($result == TRUE) {
$data['message_display'] = 'Registration Successfully !';
$this->load->view('home');
} else {
$data['message_display'] = 'Username already exist!';
$this->load->view('welcome_save');
}
}
}

// Check for user login process
public function user_login_process() {

$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

if ($this->form_validation->run() == FALSE) {
if(isset($this->session->userdata['logged_in'])){
$this->load->view('admin_page');
}else{
$this->load->view('login_form');
}
} else {
$data = array(
'username' => $this->input->post('username'),
'password' => $this->input->post('password')
);
$result = $this->login_database->login($data);
if ($result == TRUE) {

$username = $this->input->post('username');
$result = $this->login_database->read_user_information($username);
if ($result != false) {
$session_data = array(
'username' => $result[0]->user_name,
'email' => $result[0]->user_email,
);
// Add user data in session
$this->session->set_userdata('logged_in', $session_data);
$this->load->view('admin_page');
}
} else {
$data = array(
'error_message' => 'Invalid Username or Password'
);
$this->load->view('login_form', $data);
}
}
}

// Logout from admin page
public function logout() {

// Removing session data
$sess_array = array(
'username' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$data['message_display'] = 'Successfully Logout';
$this->load->view('login_form', $data);
}

}

?>

