<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function index()
	{
           echo Modules::run('template/header');	                   
            $this->load->view('welcome/default');
	}
        
        public function configurator()
	{
           echo Modules::run('template/index');	                   
            
          $this->load->view('welcome/main');
	}        
}
