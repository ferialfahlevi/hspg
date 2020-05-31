<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Login | iTask HSPG</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/icon.ico">
	<link rel="icon" href="<?php echo base_url();?>assets/icon.ico" type="image/x-icon">

	<!-- vector map CSS -->
	<link href="<?php echo base_url();?>assets/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>



	<!-- Custom CSS -->
	<link href="<?php echo base_url();?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->

	<div class="wrapper pa-0">
		<header class="sp-header">
			<div class="sp-logo-wrap pull-left">
				<a href="index.html">
					<img class="brand-img mr-10" src="<?php echo base_url();?>assets/dist/img/logo.png" alt="brand"/>
					<span class="brand-text">iTask HSPG</span>
				</a>
			</div>
			<div class="clearfix"></div>
		</header>

		<!-- Main Content -->
		<div class="page-wrapper pa-0 ma-0 auth-page">
			<div class="container-fluid">
				<!-- Row -->
				<div class="table-struct full-width full-height">
					<div class="table-cell vertical-align-middle auth-form-wrap">
						<div class="auth-form  ml-auto mr-auto no-float">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="mb-30">
										<h3 class="text-center txt-dark mb-10">Login to iTask</h3>
									</div>	
									<div class="form-wrap">
										<?php echo $this->session->flashdata('salah_pass');?>
										<form action="<?php echo base_url('Login/do_login');?>" method="post">
											<div class="form-group">
												<label class="control-label mb-10" for="exampleInputEmail_2">Username</label>
												<input type="text" class="form-control" required="" id="exampleInputEmail_2" name="username" placeholder="Enter username">
											</div>
											<div class="form-group">
												<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
												<div class="clearfix"></div>
												<input type="password" class="form-control" required="" id="exampleInputpwd_2" name="password" placeholder="Enter password">
											</div>
											<div class="form-group text-center">
												<button type="submit" class="btn btn-success btn-rounded">sign in</button>
											</div>
										</form>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->	
			</div>

		</div>
		<!-- /Main Content -->
		
	</div>
	<!-- /#wrapper -->

	<!-- JavaScript -->

	<!-- jQuery -->
	<script src="<?php echo base_url();?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url();?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

	<!-- Slimscroll JavaScript -->
	<script src="<?php echo base_url();?>assets/dist/js/jquery.slimscroll.js"></script>

	<!-- Init JavaScript -->
	<script src="<?php echo base_url();?>assets/dist/js/init.js"></script>
</body>
</html>
