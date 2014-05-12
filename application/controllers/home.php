<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){		
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['id']; // เมื่อสำเร็จแล้วให้เปลี่ยน title เป็น username
				// $this->load->view('home_view',$data);
				// echo $data['title'];
				// echo "<br/>";
				echo var_dump($this->session->userdata('logged_in'));
				echo "<br/>";
				echo "<a href='home/logout'>Logout</a>";
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