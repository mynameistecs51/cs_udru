<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctl_main extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("model_main");
	}

 	//index page
	public function index(){
		if(!$this->session->userdata('logged_in')){  /// เมื่อเข้ามาจะเช็ค login
			// เมื่อไม่มีการ login //////
			$data =array(
				'title' => "CS_UDRU",
				'teacher' => $this->model_main->get_teacher(),
				'teacher_news' => $this->model_main->get_news(),
				'username' => "",
				);
		}else{		/// เมื่อทำการ login ///////////
			$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username']; // เมื่อสำเร็จแล้วให้เปลี่ยน title เป็น username
				$data = array(	
					'username' => $session_data['username'],
					'title' => "CS_UDRU",
					'teacher' => $this->model_main->get_teacher(),
					'teacher_news' => $this->model_main->get_news(),
					);
			}
			$this->load->view("cs_udru",$data);
		}


		public function login(){
			if($this->session->userdata('logged_in')){
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username']; // เมื่อสำเร็จแล้วให้เปลี่ยน title เป็น username
				$data = array(	
					'username' => $session_data['username'],
					);
				$this->load->view('cs_udru',$data);
			}else{
				// if no session redirect to login page
				$this->load->view('login_form');
			}	
		}

		public function page_teacher(){
			$data["title"] = "อาจารย์ประจำสาขาวิชา";
			$data['teacher'] = $this->model_main->get_teacher();

			$this->load->view("page_teacher",$data);
		}

	///back door
		public function admin(){
			$data['title'] = "จัดการข้อมูล";
			$this->load->view("admin/admin",$data);
		}

	// page add teacher//
		public function add_teacher(){
			$data['title'] = "เพิ่มข้อมูลอาจารย์";
			$this->load->view("admin/add_teacher",$data);
		}

	//add teacher db
		public function add_teacher_db(){		
		//input text fild//
		$this->model_main->create_teacher();  //create data file for database
		redirect('ctl_main/page_teacher/',$data);
		//  upload file picture teacher
		

		// end upload file		
	}

	//add news
	public function add_news(){
		$data['title'] = "เพิ่มข่าว";
		$this->load->view('admin/add_news',$data);
	}

	//add news db
	public function add_news_db(){
		$this->model_main->create_news();
		redirect('ctl_main/index');
	}
}
?>