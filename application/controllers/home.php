<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
	session_start();		// strart session

	class Home extends CI_Controller{
		function __construct(){
			parent::__construct();
		}

		public function index(){
			if($this->session->userdata('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
				$thsi->load->view('cs_udru',$data);
			}else{
				// if no session ,redirect to login page
				redirect('verifyLogin','refresh');
			}
		}

		public function logout(){
			$this->session->unset_userdata('logged_in');
			session_destroy();
			redirect('ctl_main','refresh');
		}
	}
	?>