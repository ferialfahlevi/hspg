<style>
	#framesum {
		width: 100%;
		height: 400px;
	}
</style>
<div class="container-fluid">

	<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h5 class="txt-dark"><?php echo $title;?> <i class="fa fa-home mr-20"></i></h5>
		</div>
		<div class="col-lg-5 col-sm-8 col-md-8 col-xs-12">
		</div>
		<div class="col-lg-4 col-sm-8 col-md-8 col-xs-12">
		</div>
	</div>
	<!-- /Title -->

	<!-- Row -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default card-view">
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<iframe id="framesum" src="<?php echo base_url().$data_center1;?>"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!-- Row -->

	<!-- Row -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-right">
						<a href="#" class="pull-left inline-block full-screen mr-15">
							<i class="zmdi zmdi-fullscreen"></i>
						</a>
					</div>
				</div>
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<iframe frameborder="0" scrolling="yes" seamless="seamless" style="display:block; width:100%; height:100vh;" src="<?php echo base_url().$data_center;?>" name="myFrame"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!-- Row -->

</div>