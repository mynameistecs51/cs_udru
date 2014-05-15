<?php 
ob_start();
 session_start();
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_main');
	}

	function index(){		
		if($this->session->userdata('logged_in')){
			// $session_data = $this->session->userdata('logged_in');
			// 	$data['username'] = $session_data['username']; // เมื่อสำเร็จแล้วให้เปลี่ยน title เป็น username
			// 	$data = array(					
			// 		'title' => "CS_UDRU",
			// 		'teacher' => $this->model_main->get_teacher(),
			// 		'teacher_news' => $this->model_main->get_news(),
			// 		'username' => $session_data['username'],
			// 		);
			// 	$this->load->view('cs_udru',$data);
			redirect('ctl_main','refresh');
		}else{
				// if no session redirect to login page
			redirect('ctl_main/login','refresh');
		}
	}

	function logout(){
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('ctl_main','refresh');
	}
}
?>