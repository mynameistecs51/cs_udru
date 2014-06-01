<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('m_login','',TRUE);
        $this->load->library('session');
    }
 
    function index() {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['teacher_name'];
            $data['id'] = $session_data['teacher_id'];
            //$this->load->view('admin/admin', $data);
            $this->load->view('admin/admin',$data);
        } else {
        //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
    }
 
    function logout() {
         //remove all session data
         $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect('ctl_main', 'refresh');
     }
 
}
/* End of file c_home.php */
?>