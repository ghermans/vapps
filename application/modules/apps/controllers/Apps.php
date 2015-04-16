<?php
class Apps extends MX_Controller {

            public function __construct()
        {
                parent::__construct();
                $this->load->model('apps_model');
        }
        
        public function index()
        {
            echo Modules::run('template/header');
            
            $this->load->view("apps/home");
        }
        
        public function create_apps()
        {
            echo Modules::run('template/header');	                   
            echo 'Add a new application!';
        }         

        public function groups()
        {
             $data['groups'] = $this->apps_model->get_last_ten_entries();
            echo Modules::run('template/header');	
             
            $this->load->view("apps/groups", $data);
        }
        
        public function create_group()
        {
            echo Modules::run('template/header');	                   
            echo 'Create a new group!';
        }        
        

        
}