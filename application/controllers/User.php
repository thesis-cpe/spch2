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

    public function administrator() { //admin
    }

    public function login() {  //หน้าล๊อคอิน
        $this->load->view('user/login_view');
    }

    public function logout() { //ออกจากระบบ
    }

    /* นำเข้าข้อมูล */

    public function sigup_em() {  //สมัครพนักงาน
        //$this->load->view('user/sigup_em_view');
        $this->load->view('layout_blank_page');
    }

    public function sigup_cus() { //สมัครลูกค้า
    }

    public function add_branch() { //ลงทะเบียนสาขา   พร้อมแต่งตั้งคนดูแลเลย หรือข้ามไปก่อนแล้วรอการอัพเดต
    }

    /* แก้ไขข้อมูล */

    public function edit_em() {  //แก้ไขพนักงาน
    }

    public function edit_cus() { //แก้ไขลูกค้า
    }

    public function edit_branch() { //แก้ไขสาขา
    }

    /* ลบ ข้อมูล */

    public function del_em() {  //ลบพนักงาน
    }

    public function del_cus() { //ลบลูกค้า
    }

    public function del_branch() { //ลบสาขา
    }

}
