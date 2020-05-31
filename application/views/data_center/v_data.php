<!-- <style>
	iframe {
		width: 100%;
		height: 590px;
	}
</style> -->
<div class="container-fluid">

	<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h5 class="txt-dark">Data Center <i class="fa fa-home mr-20"></i></h5>
		</div>
	</div>
	<!-- /Title -->

	<!-- Row -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-left">
						<h5 class="txt-dark"><?php echo $title;?></h5>
					</div>
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