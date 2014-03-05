<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_main extends CI_model {
	public function __construct(){
		parent::__construct();
	}
	public function create_teacher($data){
		foreach ($data as $value) {
			echo $value;
		}
		
		//$query =  $this->db->insert('teacher',$insert);
		return true;
	}
}
?>