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
				'name' => "",
				);
		}else{		/// เมื่อทำการ login ///////////
			$session_data = $this->session->userdata('logged_in');
			$data = array(	
				'username' => $session_data['teacher_user'],
				'name' => $session_data['teacher_name'],
				'title' => "CS_UDRU",
				'teacher' => $this->model_main->get_teacher(),
				'teacher_news' => $this->model_main->get_news(),
				);
		}
		$this->load->view("cs_udru",$data);
	}


		// public function login(){
		// 	if($this->session->userdata('logged_in')){
		// 		$session_data = $this->session->userdata('logged_in');
		// 		$data['username'] = $session_data['username']; // เมื่อสำเร็จแล้วให้เปลี่ยน title เป็น username
		// 		$data = array(	
		// 			'username' => $session_data['username'],
		// 			);
		// 		$this->load->view('cs_udru',$data);
		// 	}else{
		// 		// if no session redirect to login page
		// 		$this->load->view('login_form');
		// 	}	
		// }

	public function page_teacher(){
		$session_data = $this->session->userdata('logged_in');
		$data  = array(
			"title" => "อาจารย์ประจำสาขาวิชา",
			'teacher' => $this->model_main->get_teacher(),
			'name' => $session_data['teacher_name'],
			);

		$this->load->view("page_teacher",$data);
	}

	///back door
	public function admin(){
		if(!$this->session->userdata('logged_in')){
			$this->load->view('login_form');
		}else{
			$session_data = $this->session->userdata('logged_in');
			$data  = array('title' => "จัดการข้อมูล",'name' => $session_data['teacher_name'] );
			$this->load->view("admin/admin",$data);
		}
	}

	// page add teacher//
	public function add_teacher(){
		if(!$this->session->userdata('logged_in')){
			$this->load->view('login_form');
		}else{
			$session_data = $this->session->userdata('logged_in');
			$data  = array('title' => "เพิ่อาจารย์",'name' => $session_data['teacher_name'] );
			$this->load->view("admin/add_teacher",$data);
		}
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
		if(!$this->session->userdata('logged_in')){
			$this->load->view('login_form');
		}else{
			$session_data = $this->session->userdata('logged_in');
			$data  = array('title' => "เพิ่มข่าว",'name' => $session_data['teacher_name'] );
			$this->load->view("admin/add_news",$data);
		}
	}

	//add news db
	public function add_news_db(){
		$this->model_main->create_news();
		redirect('ctl_main/index');
	}

	public function page_news($news_id){	
	$session_data = $this->session->userdata('logged_in');
		$data  = array(
			"title" => "อ่านข่าว",
			'teacher_news' => $this->model_main->get_news_id($news_id),
			'name' => $session_data['teacher_name'],
			);
		$this->load->view('page_news',$data);
	}
}
?>