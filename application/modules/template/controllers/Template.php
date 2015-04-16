<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

    	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('auth/ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
                $this->load->model('apps/apps_model');
                
	}
	public function index()
	{
	  $this->load->view('template/header_default');
	}
        
	public function header()
	{
         $data['groups'] = $this->apps_model->get_last_ten_entries();
            
	  $this->load->view('template/header', $data);
	}
        
	public function footer()
	{
	  $this->load->view('template/footer');
	}        
        
    
}
