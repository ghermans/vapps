<?php

class Feedback extends MX_Controller {
        public function index()
        {
            echo Modules::run('template/header');
            $this->load->view("feedback/home");
        }
}

