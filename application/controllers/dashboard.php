<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function index(){
		if($this->session->userdata('logged_in')){
			$data["page"] = "Dashboard";
	    	$session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];
		    $this->load->view('dashboard', $data);
		}
	   	else
	   	{
	   		$data["page"] = "Login";
	   		$this->load->library('form_validation');
		   	$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		   	$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

		   	if($this->form_validation->run() == FALSE){
		     	//Field validation failed.&nbsp; User redirected to login page
		     	$this->load->view('dashboard', $data);
		   	}
	   	}
	}
	function logout(){
	   	$this->session->unset_userdata('logged_in');
	   	session_destroy();
	   	redirect('dashboard', 'refresh');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

