<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $title;?> | iTask HSPG</title>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/icon.ico">
	<link rel="icon" href="<?php echo base_url();?>assets/icon.ico" type="image/x-icon">

	<!-- vector map CSS -->
	<link href="<?php echo base_url();?>assets/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<!-- Fancy-Buttons CSS -->
	<link href="<?php echo base_url();?>assets/dist/css/fancy-buttons.css" rel="stylesheet" type="text/css">

	<!-- Morris Charts CSS -->
	<link href="<?php echo base_url();?>assets/vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>

	<!-- Data table CSS -->
	<link href="<?php echo base_url();?>assets/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>assets/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

	<!-- Bootstrap Colorpicker CSS -->
	<link href="<?php echo base_url();?>assets/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css"/>

	<!-- Bootstrap Datetimepicker CSS -->
	<link href="<?php echo base_url();?>assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>

	<!-- Bootstrap Daterangepicker CSS -->
	<link href="<?php echo base_url();?>assets/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css"/>

	<!-- Custom CSS -->
	<link href="<?php echo base_url();?>assets/dist/css/style.css" rel="stylesheet" type="text/css">

	<!-- jQuery -->
	<script src="<?php echo base_url();?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>

	<!-- Moment JavaScript -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendors/bower_components/moment/min/moment-with-locales.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url();?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Data table JavaScript -->
	<script src="<?php echo base_url();?>assets/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>assets/dist/js/dataTables-data.js"></script>

	<!-- Morris Charts JavaScript -->
	<script src="<?php echo base_url();?>assets/vendors/bower_components/raphael/raphael.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/bower_components/morris.js/morris.min.js"></script>

	<!-- ChartJS JavaScript -->
	<script src="<?php echo base_url();?>assets/vendors/chart.js/Chart.min.js"></script>

	<!-- Flot Charts JavaScript -->
	<script src="<?php echo base_url();?>assets/vendors/bower_components/Flot/excanvas.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/bower_components/Flot/jquery.flot.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/bower_components/Flot/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/bower_components/Flot/jquery.flot.resize.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/bower_components/Flot/jquery.flot.time.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/bower_components/Flot/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/bower_components/Flot/jquery.flot.crosshair.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
	<div class="wrapper theme-1-active pimary-color-red">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="<?php echo base_url();?>">
							<img class="brand-img" src="<?php echo base_url();?>assets/dist/img/logo.png" alt="brand"/>
							<span class="brand-text">iTask HSPG</span>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><?php echo $_SESSION['logged_in']['nama_user'];?>  <img src="<?php echo base_url();?>assets/dist/img/profile.png" alt="user_auth" class="user-auth-img img-circle"/></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="<?php echo base_url('index.php/Routes/settings');?>"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="<?php echo base_url('index.php/Login/logout');?>"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Menu</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="<?php if($menu == 'dashboard'){ echo 'active';}?>" href="<?php echo base_url('');?>"><div class="pull-left"><i class="fa fa-desktop mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
				</li>
				<li>
					<a class="<?php if($menu == 'data'){ echo 'active';}?>" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="fa fa-book mr-20"></i><span class="right-nav-text">Data Center</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="dashboard_dr" class="collapse collapse-level-1">
						<!-- <li>
							<a class="<?php if($submenu == 'data_siswa'){ echo 'active-page';}?>" href="<?php echo base_url('index.php/Routes/siswa');?>">Data Siswa</a>
						</li> -->
						<li>
							<a class="<?php if($submenu == 'siswa'){ echo 'active-page';}?>" href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv2">Siswa<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
							<ul id="dropdown_dr_lv2" class="collapse collapse-level-2">
								<li>
									<a class="<?php if($submenu2 == 'data_siswa'){ echo 'active-page';}?>" href="<?php echo base_url('index.php/Routes/siswa');?>">Data Siswa</a>
								</li>
								<li>
									<a class="<?php if($submenu2 == 'tambah_siswa'){ echo 'active-page';}?>" href="<?php echo base_url('index.php/Routes/tambah_siswa');?>">Tambah Siswa Baru</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="<?php if($submenu == 'data_pengajar'){ echo 'active-page';}?>" href="<?php echo base_url('index.php/Routes/pengajar');?>">Data Pengajar</a>
						</li>
						<li>
							<a class="<?php if($submenu == 'data_user'){ echo 'active-page';}?>" href="<?php echo base_url('index.php/Routes/user');?>">Data User</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="<?php if($menu == 'payment'){ echo 'active';}?>" href="<?php echo base_url('index.php/Routes/payment');?>"><div class="pull-left"><i class="fa fa-money mr-20"></i><span class="right-nav-text">Payment</span></div><div class="clearfix"></div></a>
				</li>
				<li>
					<a class="<?php if($menu == 'settings'){ echo 'active';}?>" href="<?php echo base_url('index.php/Routes/settings');?>"><div class="pull-left"><i class="fa fa-gears mr-20"></i><span class="right-nav-text">Settings</span></div><div class="clearfix"></div></a>
				</li>
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->

		<!-- Main Content -->
		<div class="page-wrapper">