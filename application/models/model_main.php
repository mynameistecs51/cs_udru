<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_main extends CI_model {
	public function __construct(){
		parent::__construct();
	}
	public function create_teacher(){
		$username = $this->input->post('inputUser');
		$password = $this->input->post('inputPassword');
		$pername = $this->input->post('inputPername');
		$name = md5($this->input->post('inputName'));
		$number = $this->input->post('inputNumber');
		$link = $this->input->post('inputURL');
		//$file = $this->input->post('userfile');

		$insert = array(
			'teacher_id' => "",
			'teacher_user' => $username,
			'teacher_pwd' => $password,
			'teacher_preName' => $pername,
			'teacher_name' => $name,
			'teacher_number' => $number,
			'teacher_link' => $link,
			'teacher_pict' => $name,
			);
		$query =  $this->db->insert('teacher',$insert);
		return true;
	}

/////เรียกดูข้อมูลอาจารย์
	public function get_teacher(){
		$query = $this->db->get('teacher');
		return $query->result();
	}
}
?>