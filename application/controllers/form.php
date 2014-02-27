<?php

class Form extends CI_Controller {

	function index(){
      $this->form_validation->set_message('required', 'Your custom message here');
      $this->form_validation->set_error_delimiters('<div class="alert">', '</div>');
		
		if ($this->form_validation->run('signup') == FALSE){
			$this->load->view('myform');
		}
		else{
			$this->load->view('formsuccess');
		}
	}
}
?>