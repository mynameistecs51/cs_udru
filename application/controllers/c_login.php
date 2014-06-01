<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_login extends CI_Controller {
    function index() {
    		$data = array(
    			'title' => "เข้าสู่ระบบ",
    			'class' => 'modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true"',
    			);
        $this->load->view('v_login',$data); //load view for login
    }
}
/* End of file c_login.php */
/* Location: ./application/controllers/c_login.php */
?>