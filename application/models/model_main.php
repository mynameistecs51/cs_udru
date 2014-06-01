<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_main extends CI_model {
	public function __construct(){
		parent::__construct();
	}



	public function create_teacher(){    ////////create teacher //////////
		///
		$config['upload_path'] = './image/pict_teacher/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '6144';
		//$config['encrypt_name'] = TRUE;
		$rand = rand(1111,9999);
		$date= date("Y-m-d");
		$config['file_name']  = $date.$rand;
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/add_teacher', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			//$this->model_main->create_teacher();  //create data file for database
			//$this->load->view('page_teacher', $data);
			// redirect('ctl_main/page_teacher/',$data);
		}
		//////////////////
		$username = $this->input->post('inputUser');
		$password = $this->input->post('inputPassword');
		$pername = $this->input->post('inputPername');
		$name = $this->input->post('inputName');
		$number = $this->input->post('inputNumber');
		$link = $this->input->post('inputURL');
		//$file = $this->input->post('userfile');

		///
		$insert = array(
			'teacher_id' => "",
			'teacher_user' => $username,
			'teacher_pwd' => $password,
			'teacher_preName' => $pername,
			'teacher_name' => $name,
			'teacher_number' => $number,
			'teacher_link' => $link,
			'teacher_pict' => $config['file_name'],
			);
		$query =  $this->db->insert('teacher',$insert);
		return true;
	}

/////เรียกดูข้อมูลอาจารย์
	public function get_teacher(){
		$query = $this->db->get('teacher');
		return $query->result();
	}

	//////add news db
	public function create_news(){
		$session_data = $this->session->userdata('logged_in');
		$news = array(
			'news_id' => " ",
			'news_head' => $this->input->post('input_headNews'),
			'news_container' => $this->input->post('input_contain_news'),
			'news_peoplePost' => $session_data['teacher_name'],
			'news_peoplePost_id' => $session_data['teacher_id'],
			'news_datePost' => date("Y-m-d H:i:s"),
			);
		$query =  $this->db->insert('teacher_news',$news);
		return true;
	}

	//get news
	public function get_news(){
		//$sql = "select * from teacher_news order by news_id desc";
		// $query = $this->db->get('teacher_news');
		// $query = $this->db->order_by('news_id', 'asc');
		//$query = $this->db->query($sql);

		$this->db->select('*');
		$this->db->from('teacher_news');
		$this->db->order_by("news_id", "desc"); 

		$query = $this->db->get();
		return $query->result();
	}

	public function get_news_id($news_id){
		$this->db->select('*');
		$this->db->from('teacher_news');
		$this->db->where('news_id', $news_id);

		$query = $this->db->get();
		
		return $query->result();
	}
}
?>