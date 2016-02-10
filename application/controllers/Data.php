<?php

class Data extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    /* นำเข้า */

    public function add() {
        $this->load->view('data/insert_data_view');
    }

    /* แก้ไข */

    public function edit() {
        
    }

    /* ลบ */

    public function delete() {
        
    }

}
