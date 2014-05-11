<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_main','',TRUE);
	}

	public function index(){
		echo "aaa";
		// load form validation //
		//$this->load->library('form_validate');

		 $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		 $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');

		if($this->form_validation->run() == FALSE){
			// field validate fail //
			echo "111";
			$this->load->view('login_view');
		}else{
			redirect('home','refresh');
		}
	}

	public function  check_database($password){
		//field validation succeed
		$username = $this->input->post('username');

		//query the database
		$result = $this->model_main->login($username,$password);

		if($result){
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'id' => $row->teacher_id,
					'username' => $row->teacher_user,
					);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return TRUE;
		}else{
			$ths->form_validation->set_message('check_database','Invalid username or password');
			return FALSE;
		}
	}

}
?>