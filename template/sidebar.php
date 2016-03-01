	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start ">
					<a href="index.html">
					<i class="icon-home"></i>
                                        <span class="title cloudFont" style="font-size: 16px"><b>หน้าแรก</b></span>
					</a>
				</li>
			<!--ใส่เมนูเพิ่มเติมตรงนี้-->
                                <li>  <!--ตั้งค่าระบบ-->
                                    <a href="javascript:;">
                                        <i class="icon-settings"></i>
                                        <span class="title cloudFont"style="font-size: 16px"><b>ตั้งค่าระบบ</b></span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">
                                                <i class="icon-link"></i>
                                                <b class="cloudFont" style="font-size: 15px">บริหารสิทธิ์ผู้ใช้งาน</b>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-link"></i>
                                                <b class="cloudFont" style="font-size: 15px" >จัดการสำนักงานย่อย</b>
                                            </a>
                                        </li>
                                         <li>
                                            <a href="#">
                                                <i class="icon-link"></i>
                                                <b class="cloudFont" style="font-size: 15px"  >เพิ่มลบพนักงาน</b>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-link"></i>
                                                <b class="cloudFont" style="font-size: 15px">เพิ่มลบรายการข้อมูล</b>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </li><!--.ตั้งค่าระบบ-->
                                <!--บันทึกข้อมูล-->
                                <li>
					<a href="javascript:;">
					<i class="icon-docs"></i>
                                        <span class="title"><b class="cloudFont" style="font-size: 16px">ข้อมูล</b></span>
                                        <span class="arrow"></span>
					</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">
                                                <i class="icon-link"></i>
                                                <b class="cloudFont" style="font-size: 15px">บันทึกรายได้รายจ่าย</b>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-link"></i>
                                                <b class="cloudFont" style="font-size: 15px">บันทึกงานที่ทำ</b>
                                            </a>
                                        </li>
                                    </ul>
				</li>
                                <!--บันทึกข้อมูล-->
				<!--ผล-->
                                <li>  <!--ตั้งค่าระบบ-->
                                    <a href="javascript:;">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title"><b class="cloudFont" style="font-size: 16px">รายงาน</b></span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">
                                                <i class="icon-link"></i>
                                                <b class="cloudFont" style="font-size: 15px">รายวัน</b>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-link"></i>
                                                <b class="cloudFont" style="font-size: 15px">รายเดือน</b>
                                            </a>
                                        </li>
                                         <li>
                                            <a href="#">
                                                <i class="icon-link"></i>
                                                <b class="cloudFont" style="font-size: 15px">รายปี</b>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                                <!--.ผล-->
                                
                                <!--ช่วยเหลือ-->
                                <li>  <!--ตั้งค่าระบบ-->
                                    <a href="javascript:;">
                                        <i class="icon-support"></i>
                                        <span class="title"><b class="cloudFont" style="font-size: 16px">ช่วยเหลือ</b></span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="<?php echo site_url();?>/help/manual">
                                                <i class="icon-link"></i>
                                                <b class="cloudFont" style="font-size: 15px">วิธีใช้งาน</b>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-link"></i>
                                                <b class="cloudFont" style="font-size: 15px">นำเข้าฐานข้อมูล</b>
                                            </a>
                                        </li>
                                         <li>
                                            <a href="#">
                                                <i class="icon-link"></i>
                                                <b class="cloudFont" style="font-size: 15px">ส่งออกฐานข้อมูล</b>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-link"></i>
                                                <b class="cloudFont" style="font-size: 15px">ติดต่อเรา</b>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                                    
                                <!--.ช่วยเหลือ-->
				
			
			
				
			
				
				
			
			

				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
