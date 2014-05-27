<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctl_main extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("model_main");
	}

 	//index page
	public function index(){
			// เมื่อไม่มีการ login //////
			$data =array(
				'title' => "CS_UDRU",
				'teacher' => $this->model_main->get_teacher(),
				'teacher_news' => $this->model_main->get_news(),
				);
		$this->load->view("cs_udru",$data);
	}


	public function page_teacher(){
		
		$data  = array(
			"title" => "อาจารย์ประจำสาขาวิชา",
			'teacher' => $this->model_main->get_teacher(),
			);

		$this->load->view("page_teacher",$data);
	}

	///back door
	public function admin(){
		
			$data  = array('title' => "จัดการข้อมูล" );
			$this->load->view("admin/admin",$data);
	}

	// page add teacher//
	public function add_teacher(){

			$data  = array('title' => "เพิ่อาจารย์");
			$this->load->view("admin/add_teacher",$data);
	
	}

	//add teacher db
	public function add_teacher_db(){		
		//input text fild//
		$this->model_main->create_teacher();  //create data file for database
		redirect('ctl_main/page_teacher','refresh');	
		//  upload file picture teacher
		

		// end upload file		
	}

	//add news
	public function add_news(){
		
			$data  = array('title' => "เพิ่มข่าว");
			$this->load->view("admin/add_news",$data);
		
	}

	//add news db
	public function add_news_db(){
		$this->model_main->create_news();
		redirect('ctl_main/index','refresh');			
	}

	public function page_news($news_id){	
		$data  = array(
			"title" => "อ่านข่าว",
			'teacher' => $this->model_main->get_teacher(),
			'teacher_news' => $this->model_main->get_news_id($news_id)
			);
		$this->load->view('page_news',$data);
	}
}
?>