<?php

class Data extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    /*DashBoard*/
    public function index() {
        
    }
    /*รายรับ รายจ่าย*/
    public function assets(){
        $this->load->view('data/insert_data_view');
    }
    /*บันทึกราการงานที่ทำ*/
    public function work(){
        
    }
    /*รายงานสินทรัพย์*/
     public function report_assets(){
        
    }
    
    /*รายงานงานที่ทำ*/
    public function report_work(){
        
    }
    
    /*รายงานพนักงาน*/
    public function user(){
        
    }
    
    
    

   
}
