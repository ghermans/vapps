<?php

class Apps_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_last_ten_entries()
        {
                $query = $this->db->get('apps_group', 10);
                return $query->result_array();
        }

        public function insert_apps_cat_entry()
        {
                $this->apps_group_name    = $_POST['name']; 
                $this->dapps_group_date   = time();

                $this->db->insert('apps_group', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}