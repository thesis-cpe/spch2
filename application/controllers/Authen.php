<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Authen
 *
 * @author Veriton
 */
class Authen extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    /*เข้าสู่ระบบ*/
    public function login(){
         $this->load->view('authen/login_view');
       
    }
    /*ออกจากระบบ*/
    public function logout(){
       
    }
    
}
