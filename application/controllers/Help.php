<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Help
 *
 * @author Veriton
 */
class Help extends CI_Controller {
   public function __construct() {
        parent::__construct();
    }
    
    public function manual(){
        $this->load->view('help/manual_view');
        
    }
    /*นำเข้าข้อมูลเดิม*/
    public function import(){
        
    }
    /*ส่งออกข้อมูล*/
     public function export(){
        
    }
    /*บันทีกเนื้อหาลง db*/
    public function content(){
        $this->input->post('');
    }
}
