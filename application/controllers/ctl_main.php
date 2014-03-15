<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctl_main extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("model_main");
	}

 	//index page
	public function index(){
		$data['title'] = "cs_udru";
		$data['teacher'] = $this->model_main->get_teacher();

		$this->load->view("cs_udru",$data);
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

		//  upload file picture teacher
		$config['upload_path'] = './image/pict_teacher/';
		$config['file_name'] = $this->input->post('inputName');
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '6144';
		$config['encrypt_name'] = TRUE;
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			foreach ($this->upload->data() as $key => $value) {
				# code...
				echo $key ."=".$value."<br/>";
			}
			echo "<hr>".$this->upload->display_errors();
			echo "error1";
			$this->load->view('admin/add_teacher', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->model_main->create_teacher();  //create data file for database
			//$this->load->view('page_teacher', $data);
			redirect('ctl_main/page_teacher/',$data);
		}
		// end upload file		
	}

	public function redirect(){
		redirect('www.google.com');
	}
}
?>