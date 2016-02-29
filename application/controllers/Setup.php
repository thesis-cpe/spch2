<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Setup
 *
 * @author Veriton
 */
class Setup extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    /*สร้างเทียบเชิญ*/
    public function invite(){
       echo "set_invite";
    }
    /*ผู้จัดการสมัครสมาชิก*/
    public function manager(){
       echo "managerReg";
    }
    /*กำหนดสิทธิ์พนักงาน*/
    public function role(){
       echo "set_role";
    }
    /*นำเข้าพนักงาน*/
    public function employee(){
        $this->load->view('setup/setup_em_view');
    }
    /*สร้างสาขา*/
    public function branch(){
         echo "set_branch";
    }
    /*ตั้งค่าผู้รับผิดชอบประจำสาขา*/
    public function team(){
        echo "set_team";
    }
    /*สร้างหมวดหมู่และรายการ รายรับรายจ่าย*/
    public function cate(){
        echo "set_cate";
    }
     /*สร้างหมวดงานที่จะบันทึก*/
    public function work(){
        echo "set_work";
    }
}
