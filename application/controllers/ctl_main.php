<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctl_main extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

 	//index page
	public function index(){
		$data['title'] = "cs_udru";
		$this->load->view("cs_udru",$data);
	}

	public function page_teacher(){
		$data["title"] = "อาจารย์ประจำสาขาวิชา";
		$this->load->view("page_teacher",$data);
	}
}
?>