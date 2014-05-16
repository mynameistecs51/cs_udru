<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Verifylogin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_main','',TRUE);
	}

	function index(){
			// load library form validation

		$this->form_validation->set_rules('username','Username','trim|required|xss_clean');
		$this->form_validation->set_rules('password','Password','trim|required|xss_clean|callback_check_database');

		if($this->form_validation->run() == FALSE){
				// field validation faile
			$this->load->view('login_form');
		}else{
				//login success
			redirect('home','refresh');			
		}
	}

	function check_database($password){
			//fild validation succeed
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		//query database
		$result = $this->model_main->login($username,$password);

		if($result){
			$sess_array = array();
			foreach ($result as $row => $key) {
				$sess_array = array(
					'id' => $key->teacher_id,
					'teacher_user' => $key->teacher_user,
					'teacher_name' => $key->teacher_name,
					);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return TRUE;
		}else{
			$this->form_validation->set_message('Check_database','Invalid Username or Password');
			return false;
		}
	}
}
?>