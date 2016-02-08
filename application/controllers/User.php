<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Veriton
 */
class User extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
    }
    
    public function login(){  //หน้าล๊อคอิน
        $this->load->view('login_view');
    }
    
    public function sigup(){
        $this->load->view('sigup_em_view');
    }
}
