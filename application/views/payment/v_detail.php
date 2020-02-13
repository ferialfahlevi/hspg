<!-- Main Content -->
<div class="page-wrapper">
	<div class="container-fluid">

		<!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h5 class="txt-dark">Payment Detail</h5>
			</div>
			<!-- Breadcrumb -->
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="index.html">Dashboard</a></li>
					<li><a href="#"><span>table</span></a></li>
					<li class="active"><span>data-table</span></li>
				</ol>
			</div>
			<!-- /Breadcrumb -->
		</div>
		<!-- /Title -->

		<!-- Row -->
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default card-view panel-refresh">
					<div class="refresh-container">
						<div class="la-anim-1"></div>
					</div>
					<div class="panel-heading">
						<div class="pull-left">
							<h3 class="mb-20 weight-500" id="nama_siswa"></h3>
							<h6 class="panel-title txt-dark"><?php echo $this->uri->segment('3');?></h6>
						</div>
						<div class="pull-right">
							<a href="#" class="pull-left inline-block refresh mr-15 refresh">
								<i class="zmdi zmdi-replay"></i>
							</a>
							<div class="pull-left inline-block dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
									<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Devices</a></li>
									<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>General</a></li>
									<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Referral</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-wrap">
										<form class="form-horizontal" role="form">
											<div class="form-body">
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<p class="col-md-3">Pendaftaran:</p>
															<div id="html_pendaftaran"></div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<p class="col-md-3">Uang Pangkal:</p>
															<div id="html_pangkal"></div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<p class="col-md-3">Heregistrasi:</p>
															<div id="html_heregistrasi"></div>
															<!-- <div class="col-md-9">
																<p class="form-control-static"> Male </p>
															</div> -->
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<p class="col-md-3">Ujian:</p>
															<div id="html_ujian"></div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<p class="col-md-3">Uang Kegiatan 1:</p>
															<div id="html_kegiatan_1"></div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<p class="col-md-3">Uang Kegiatan 2:</p>
															<div id="html_kegiatan_2"></div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">SPP Control</h6>
						</div>
						<div class="pull-right">
							<div class="pull-left inline-block dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
									<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Devices</a></li>
									<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>General</a></li>
									<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Referral</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="table-wrap">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th></th>
												<th>Juli</th>
												<th>Agustus</th>
												<th>September</th>
												<th>Oktober</th>
												<th>November</th>
												<th>Desember</th>
												<th>Januari</th>
												<th>Februari</th>
												<th>Maret</th>
												<th>April</th>
												<th>Mei</th>
												<th>Juni</th>
											</tr>
										</thead>
										<tbody id="spp">
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- /Row -->
	</div>

	<!-- Footer -->
	<footer class="footer container-fluid pl-30 pr-30">
		<div class="row">
			<div class="col-sm-12">
				<p>2017 &copy; Magilla. Pampered by Hencework</p>
			</div>
		</div>
	</footer>
	<!-- /Footer -->

</div>
<!-- /Main Content -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														<h5 class="modal-title" id="exampleModalLabel1">New message</h5>
													</div>
													<div class="modal-body">
														<form>
															<div class="form-group">
																<label for="recipient-name" class="control-label mb-10">Recipient:</label>
																<input type="text" class="form-control" id="recipient-name1">
															</div>
															<div class="form-group">
																<label for="message-text" class="control-label mb-10">Message:</label>
																<textarea class="form-control" id="message-text1"></textarea>
															</div>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Send message</button>
													</div>
												</div>
											</div>
										</div>
<script type="text/javascript">
	$('.refresh').on('click', function(){
		get_data();
	});
	get_data();
	function get_data(){
		$.ajax({
			type    : 'ajax',
			url  : "<?php echo base_url();?>payment/get_siswa_detail/<?php echo $this->uri->segment('3');?>/<?php echo $this->uri->segment('4');?>",
			async   : false,
			dataType : "JSON",
			success: function(data){
				for(i=0; i<data.length; i++){
					$('#nama_siswa').text(data[i].nama_siswa);
					if (data[i].pendaftaran == 0) {
						html_pendaftaran = '<div class="input-group col-md-7">'+
						'<input type="text" class="form-control" id="exampleInputuname_2" placeholder="Rp.">'+
						'<div class="input-group-addon"><a href="#"><i class="icon-check"></i></a></div>'+
						'<div class="input-group-addon"><a href="#"><i class="icon-rocket"></i></a></div>'+
						'</div>';
					} else {
						html_pendaftaran = '<div class="col-md-1"><a href="#"><span class="label label-success">Sudah</span></a></div>'+
						'<div class="col-md-1">'+
						'</div>';
					} 
					$('#html_pendaftaran').html(html_pendaftaran);

					if (data[i].pangkal == 0) {
						html_pangkal = '<div class="input-group col-md-7">'+
						'<input type="text" class="form-control" id="exampleInputuname_2" placeholder="Rp.">'+
						'<div class="input-group-addon"><a href="#"><i class="icon-check"></i></a></div>'+
						'<div class="input-group-addon"><a href="#"><i class="icon-rocket"></i></a></div>'+
						'</div>';
					} else {
						html_pangkal = '<div class="col-md-1"><a href="#"><span class="label label-success">Sudah</span></a></div>'+
						'<div class="col-md-1">'+
						'</div>';
					} 
					$('#html_pangkal').html(html_pangkal);

					if (data[i].heregistrasi == 0) {
						html_heregistrasi = '<div class="input-group col-md-7">'+
						'<input type="text" class="form-control" id="exampleInputuname_2" placeholder="Rp.">'+
						'<div class="input-group-addon"><a href="#"><i class="icon-check"></i></a></div>'+
						'<div class="input-group-addon"><a href="#"><i class="icon-rocket"></i></a></div>'+
						'</div>';
					} else {
						html_heregistrasi = '<div class="col-md-1"><a href="#"><span class="label label-success">Sudah</span></a></div>'+
						'<div class="col-md-1">'+
						'</div>';
					} 
					$('#html_heregistrasi').html(html_heregistrasi);

					if (data[i].ujian == 0) {
						html_ujian = '<div class="input-group col-md-7">'+
						'<input type="text" class="form-control" id="exampleInputuname_2" placeholder="Rp.">'+
						'<div class="input-group-addon"><a href="#"><i class="icon-check"></i></a></div>'+
						'<div class="input-group-addon"><a href="#"><i class="icon-rocket"></i></a></div>'+
						'</div>';
					} else {
						html_ujian = '<div class="col-md-1"><a href="#"><span class="label label-success">Sudah</span></a></div>'+
						'<div class="col-md-1">'+
						'</div>';
					} 
					$('#html_ujian').html(html_ujian);

					if (data[i].kegiatan_1 == 0) {
						html_kegiatan_1 = '<div class="input-group col-md-7">'+
						'<input type="text" class="form-control" id="exampleInputuname_2" placeholder="Rp.">'+
						'<div class="input-group-addon"><a href="#"><i class="icon-check"></i></a></div>'+
						'<div class="input-group-addon"><a href="#"><i class="icon-rocket"></i></a></div>'+
						'</div>';
					} else {
						html_kegiatan_1 = '<div class="col-md-1"><a href="#"><span class="label label-success">Sudah</span></a></div>'+
						'<div class="col-md-1">'+
						'</div>';
					} 
					$('#html_kegiatan_1').html(html_kegiatan_1);

					if (data[i].kegiatan_2 == 0) {
						html_kegiatan_2 = '<div class="input-group col-md-7">'+
						'<input type="text" class="form-control" id="exampleInputuname_2" placeholder="Rp.">'+
						'<div class="input-group-addon"><a href="#"><i class="icon-check"></i></a></div>'+
						'<div class="input-group-addon"><a href="#"><i class="icon-rocket"></i></a></div>'+
						'</div>';
					} else {
						html_kegiatan_2 = '<div class="col-md-1"><a href="#"><span class="label label-success">Sudah</span></a></div>'+
						'<div class="col-md-1">'+
						'</div>';
					} 
					$('#html_kegiatan_2').html(html_kegiatan_2);

					spp = '<tr>'+
					'<td></td>';

					if (data[i].spp_juli == 0) {
						spp += '<td><a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><span class="label label-danger">Belum</span></a></td>';
					} else if(data[i].spp_juli == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_juli+'</td>';
					}

					if (data[i].spp_agustus == 0) {
						spp += '<td><a href="#"><span class="label label-danger">Belum</span></a></td>';
					} else if(data[i].spp_agustus == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_agustus+'</td>';
					}

					if (data[i].spp_september == 0) {
						spp += '<td><a href="#"><span class="label label-danger">Belum</span></a></td>';
					} else if(data[i].spp_september == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_september+'</td>';
					}

					if (data[i].spp_oktober == 0) {
						spp += '<td><a href="#"><span class="label label-danger">Belum</span></a></td>';
					} else if(data[i].spp_oktober == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_oktober+'</td>';
					}

					if (data[i].spp_november == 0) {
						spp += '<td><a href="#"><span class="label label-danger">Belum</span></a></td>';
					} else if(data[i].spp_november == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_november+'</td>';
					}

					if (data[i].spp_desember == 0) {
						spp += '<td><a href="#"><span class="label label-danger">Belum</span></a></td>';
					} else if(data[i].spp_desember == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_desember+'</td>';
					}

					if (data[i].spp_januari == 0) {
						spp += '<td><a href="#"><span class="label label-danger">Belum</span></a></td>';
					} else if(data[i].spp_januari == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_januari+'</td>';
					}

					if (data[i].spp_februari == 0) {
						spp += '<td><a href="#"><span class="label label-danger">Belum</span></a></td>';
					} else if(data[i].spp_februari == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_februari+'</td>';
					}

					if (data[i].spp_maret == 0) {
						spp += '<td><a href="#"><span class="label label-danger">Belum</span></a></td>';
					} else if(data[i].spp_maret == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_maret+'</td>';
					}

					if (data[i].spp_april == 0) {
						spp += '<td><a href="#"><span class="label label-danger">Belum</span></a></td>';
					} else if(data[i].spp_april == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_april+'</td>';
					}

					if (data[i].spp_mei == 0) {
						spp += '<td><a href="#"><span class="label label-danger">Belum</span></a></td>';
					} else if(data[i].spp_mei == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_mei+'</td>';
					}

					if (data[i].spp_juli == 0) {
						spp += '<td><a href="#"><span class="label label-danger">Belum</span></a></td>';
					} else if(data[i].spp_juli == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_juli+'</td>';
					}

					spp += '</tr>';
					$('#spp').html(spp);
				}
			}
		});
}
</script>