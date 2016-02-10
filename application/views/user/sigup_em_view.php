<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 4.0.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>ระบบรายงานผลดำเนินงาน</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>metronic/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>metronic/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>metronic/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>metronic/theme/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>metronic/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>metronic/theme/assets/global/plugins/select2/select2.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url();?>metronic/theme/assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>metronic/theme/assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>metronic/theme/assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url();?>metronic/theme/assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>metronic/theme/assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<?php include_once  'template/header.php';?>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
        <?php include_once 'template/sidebar.php';?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>บริหารพนักงาน <small>ลงทะเบียนพนักงาน</small></h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<div class="page-toolbar">
					<!-- BEGIN THEME PANEL -->
					<div class="btn-group btn-theme-panel">
						<a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
					  <!--	<i class="icon-settings"></i> -->
						</a>
						<div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<h3>THEME</h3>
									<ul class="theme-colors">
										<li class="theme-color theme-color-default active" data-theme="default">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Dark Header</span>
										</li>
										<li class="theme-color theme-color-light" data-theme="light">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Light Header</span>
										</li>
									</ul>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12 seperator">
									<h3>LAYOUT</h3>
									<ul class="theme-settings">
										<li>
											 Theme Style
											<select class="layout-style-option form-control input-small input-sm">
												<option value="square" selected="selected">Square corners</option>
												<option value="rounded">Rounded corners</option>
											</select>
										</li>
										<li>
											 Layout
											<select class="layout-option form-control input-small input-sm">
												<option value="fluid" selected="selected">Fluid</option>
												<option value="boxed">Boxed</option>
											</select>
										</li>
										<li>
											 Header
											<select class="page-header-option form-control input-small input-sm">
												<option value="fixed" selected="selected">Fixed</option>
												<option value="default">Default</option>
											</select>
										</li>
										<li>
											 Top Dropdowns
											<select class="page-header-top-dropdown-style-option form-control input-small input-sm">
												<option value="light">Light</option>
												<option value="dark" selected="selected">Dark</option>
											</select>
										</li>
										<li>
											 Sidebar Mode
											<select class="sidebar-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
										<li>
											 Sidebar Menu
											<select class="sidebar-menu-option form-control input-small input-sm">
												<option value="accordion" selected="selected">Accordion</option>
												<option value="hover">Hover</option>
											</select>
										</li>
										<li>
											 Sidebar Position
											<select class="sidebar-pos-option form-control input-small input-sm">
												<option value="left" selected="selected">Left</option>
												<option value="right">Right</option>
											</select>
										</li>
										<li>
											 Footer
											<select class="page-footer-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- END THEME PANEL -->
				</div>
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="index.html">ข้อมูลในระบบ</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">บริหารพนักงาน</a>
					
				</li>
				
			</ul> 
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box blue" id="form_wizard_1">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-user"></i> ลงทะเบียนพนักงาน - <span class="step-title">
								Step 1 of 3</span>
							</div>
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
								</a>
							<!--	<a href="#portlet-config" data-toggle="modal" class="config">
								</a> -->
								<a href="javascript:;" class="reload">
								</a>
							<!--	<a href="javascript:;" class="remove">
								</a>  -->
							</div>
						</div>
						<div class="portlet-body form">
							<form action="#" class="form-horizontal" id="submit_form" method="POST">
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li>
												<a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
												1 </span>
												<span class="desc">
												<i class="fa fa-check"></i> ตั้งค่าบัญชี </span>
												</a>
											</li>
											<li>
												<a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
												<span class="desc">
												<i class="fa fa-check"></i> ข้อมูลการติดต่อ </span>
												</a>
											</li>
											
											<li>
												<a href="#tab4" data-toggle="tab" class="step">
												<span class="number">
												3 </span>
												<span class="desc">
												<i class="fa fa-check"></i> ยืนยันข้อมูล </span>
												</a>
											</li>
										</ul>
										<div id="bar" class="progress progress-striped" role="progressbar">
											<div class="progress-bar progress-bar-success">
											</div>
										</div>
										<div class="tab-content">
											<div class="alert alert-danger display-none">
												<button class="close" data-dismiss="alert"></button>
												โปรดตรวจสอบข้อมูลว่าครบถ้วนหรือไม่
											</div>
											<div class="alert alert-success display-none">
												<button class="close" data-dismiss="alert"></button>
												Your form validation is successful!
											</div>
											<div class="tab-pane active" id="tab1">
												<h4 class="block">กำหนดบัญชีผู้ใช้ของคุณ</h4>
												<div class="form-group">
													<label class="control-label col-md-3">ชื่อผู้ใช้ <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="username1"/>
														<span class="help-block">
														กำหนดชื่อผู้ใช้ของคุณ </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">รหัสผ่าน <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="password" class="form-control" name="password" id="submit_form_password"/>
														<span class="help-block">
														กำหนดรหัสผ่านของคุณ อย่างน้อย 6 อักขระ </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">ยืนยันรหัสผ่าน <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="password" class="form-control" name="rpassword"/>
														<span class="help-block">
														ยืนยันรหัสผ่าน โปรดกรอกให้ตรงกัน </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">อีเมล์ <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="email"/>
														<span class="help-block">
														กำหนดอีเมล์ของคุณ เพื่อแก้ไขรหัสผ่านหากคุณลืม</span>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab2">
												<h3 class="block">Provide your profile details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">ชื่อเต็ม <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="fullname"/>
														<span class="help-block">
														ระบุชื่อเต็มของผู้ใช้งาน </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">หมายเลขโทรศัพท์ <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="phone"/>
														<span class="help-block">
														ระบุหมายเลขโทรศัพท์ของคุณ </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">เพศ <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="radio-list">
															<label>
															<input type="radio" name="gender" value="M" data-title="Male"/>
															ชาย </label>
															<label>
															<input type="radio" name="gender" value="F" data-title="Female"/>
															หญิง </label>
														</div>
														<div id="form_gender_error">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">หน่วยงาน <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="company"/>
														<span class="help-block">
														ระบุหน่วยงาน </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">ที่อยู่ <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
													<!--	<input type="text" class="form-control" name="city"/> -->
                                                                                                                <textarea class="form-control" rows="5" name="addr"></textarea>
														<span class="help-block">
														ระบุที่อยู่ของคุณ </span>
													</div>
												</div>
												
												<div class="form-group">
													<label class="control-label col-md-3">หมายเหตุ</label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="remarks"></textarea>
													</div>
												</div>
											</div>
										
											<div class="tab-pane" id="tab4">
												<h3 class="block">ยืนยันข้อมูล</h3>
												<h4 class="form-section">ข้อมูลบัญชี</h4>
												<div class="form-group">
													<label class="control-label col-md-3">ชื่อผู้ใช้:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="username1">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">อีเมล์:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="email">
														</p>
													</div>
												</div>
												<h4 class="form-section">ข้อมูลติดต่อ</h4>
												<div class="form-group">
													<label class="control-label col-md-3">ชื่อเต็ม:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="fullname">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">เพศ:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="gender">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">โทรศัพท์:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="phone">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">หน่วยงาน:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="company">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">ที่อยู่:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="addr">
														</p>
													</div>
												</div>
												
												<div class="form-group">
													<label class="control-label col-md-3">หมายเหตุ:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="remarks">
														</p>
													</div>
												</div>
												
												
												
												
												
												
											</div>
										</div>
									</div>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<a href="javascript:;" class="btn default button-previous">
												<i class="m-icon-swapleft"></i> ก่อนหน้า </a>
												<a href="javascript:;" class="btn blue button-next">
												ต่อไป <i class="m-icon-swapright m-icon-white"></i>
												</a>
												<a href="javascript:;" class="btn green button-submit">
												บันทึก <i class="m-icon-swapright m-icon-white"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
  <?php include_once 'template/footer.php';?>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo base_url();?>metronic/theme/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>metronic/theme/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url();?>metronic/theme/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>metronic/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>metronic/theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>metronic/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>metronic/theme/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>metronic/theme/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>metronic/theme/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>metronic/theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url();?>metronic/theme/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>metronic/theme/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>metronic/theme/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url();?>metronic/theme/assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url();?>metronic/theme/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>metronic/theme/assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>metronic/theme/assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>metronic/theme/assets/admin/pages/scripts/form-wizard.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   FormWizard.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>