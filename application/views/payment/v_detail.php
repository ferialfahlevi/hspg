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
							<a href="#" id="refresh_table" class="btn btn-default btn-icon-anim btn-circle btn-sm pull-left inline-block refresh mr-15">
								<i class="zmdi zmdi-replay"></i>
							</a>
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
								<a data-toggle="dropdown" href="#" aria-expanded="false" role="button" class="dropdown-toggle btn btn-default btn-icon-anim btn-circle btn-sm pull-left inline-block mr-15">
									<i class="zmdi zmdi-more-vert"></i>
								</a>
								<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
									<li role="presentation"><a href="javascript:void(0)" data-toggle="modal" data-target="#update_spp"><i class="icon wb-reply" aria-hidden="true"></i>Update Pembayaran</a></li>
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
		<!-- Row -->
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default card-view panel-refresh">
					<div class="refresh-container">
						<div class="la-anim-1"></div>
					</div>
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Catatan</h6>
						</div>
						<div class="pull-right">
							<div class="pull-left inline-block dropdown">
								<a data-toggle="dropdown" href="#" aria-expanded="false" role="button" class="dropdown-toggle btn btn-default btn-icon-anim btn-circle btn-sm pull-left inline-block mr-15">
									<i class="zmdi zmdi-more-vert"></i>
								</a>
								<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
									<li role="presentation"><a href="javascript:void(0)" id="refresh_catatan" class="refresh"><i class="icon wb-reply" aria-hidden="true"></i>Refresh</a></li>
								<li role="presentation"><a href="javascript:void(0)" data-toggle="modal" data-target="#insert_catatan"><i class="icon wb-reply" aria-hidden="true"></i>Tambah Catatan</a></li>
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
												<th>Jenis Catatan</th>
												<th>Catatan</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody id="catatan">
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
<div class="modal fade" id="insert_catatan" tabindex="-1" role="dialog" aria-labelledby="update_spp">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Buat Catatan</h5>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label class="control-label mb-10">Jenis Catatan</label>
						<input type="text" class="form-control" id="recipient-name1">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="control-label mb-10">Catatan</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Update</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="update_spp" tabindex="-1" role="dialog" aria-labelledby="update_spp">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Update Pembayaran</h5>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label class="control-label mb-10">Bulan</label>
						<select class="form-control" id="bulan">
							<option>-- Pilih Bulan --</option>
						</select>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="control-label mb-10">Kekurangan</label>
						<input type="text" class="form-control" id="recipient-name1" placeholder="Rp.">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Update</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.refresh').on('click', function(){
		get_data();
	});

	dropdown_bulan();
	function dropdown_bulan() {
		$.ajax({
			type    : 'ajax',
			url  : "<?php echo base_url();?>payment/get_siswa_detail/<?php echo $this->uri->segment('3');?>/<?php echo $this->uri->segment('4');?>",
			async   : false,
			dataType : "JSON",
			success: function(data){
				for(i=0; i<data.length; i++){
					if (data[i].spp_juli == 0) {
						$('#bulan').append(new Option("Juli", "spp_juli"));
					} 

					if (data[i].spp_agustus == 0) {
						$('#bulan').append(new Option("Agustus", "spp_agustus"));
					} 

					if (data[i].spp_september == 0) {
						$('#bulan').append(new Option("September", "spp_september"));
					} 

					if (data[i].spp_oktober == 0) {
						$('#bulan').append(new Option("Oktober", "spp_oktober"));
					} 

					if (data[i].spp_november == 0) {
						$('#bulan').append(new Option("November", "spp_november"));
					} 

					if (data[i].spp_desember == 0) {
						$('#bulan').append(new Option("Desember", "spp_desember"));
					} 

					if (data[i].spp_januari == 0) {
						$('#bulan').append(new Option("Januari", "spp_januari"));
					} 

					if (data[i].spp_februari == 0) {
						$('#bulan').append(new Option("Februari", "spp_februari"));
					} 

					if (data[i].spp_maret == 0) {
						$('#bulan').append(new Option("Maret", "spp_maret"));
					} 

					if (data[i].spp_april == 0) {
						$('#bulan').append(new Option("April", "spp_april"));
					}

					if (data[i].spp_mei == 0) {
						$('#bulan').append(new Option("Mei", "spp_mei"));
					} 

					if (data[i].spp_juni == 0) {
						$('#bulan').append(new Option("Juli", "spp_juni"));
					}
				}
			}
		});
	}

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
						'<input type="text" class="form-control payment" id="exampleInputuname_2" placeholder="Rp.">'+
						'<div class="input-group-addon"><a href="#" class="btn_insert" data="pendaftaran"><i class="icon-check"></i></a></div>'+
						'<div class="input-group-addon"><a href="#" class="btn_quick" data="pendaftaran"><i class="icon-rocket"></i></a></div>'+
						'</div>';
					} else if (data[i].pendaftaran == 1){
						html_pendaftaran = '<div class="col-md-1"><a href="#"><span class="label label-success">Sudah</span></a></div>'+
						'<div class="col-md-1">'+
						'</div>';
					} else {
						html_pendaftaran = data[i].pendaftaran;
					} 
					$('#html_pendaftaran').html(html_pendaftaran);

					if (data[i].pangkal == 0) {
						html_pangkal = '<div class="input-group col-md-7">'+
						'<input type="text" class="form-control payment" id="exampleInputuname_2" placeholder="Rp.">'+
						'<div class="input-group-addon"><a href="#" class="btn_insert" data="pangkal"><i class="icon-check"></i></a></div>'+
						'<div class="input-group-addon"><a href="#" class="btn_quick" data="pangkal"><i class="icon-rocket"></i></a></div>'+
						'</div>';
					} else if (data[i].pangkal == 1) {
						html_pangkal = '<div class="col-md-1"><a href="#"><span class="label label-success">Sudah</span></a></div>'+
						'<div class="col-md-1">'+
						'</div>';
					}  else {
						html_pangkal = data[i].pangkal;
					} 
					$('#html_pangkal').html(html_pangkal);

					if (data[i].heregistrasi == 0) {
						html_heregistrasi = '<div class="input-group col-md-7">'+
						'<input type="text" class="form-control payment" id="exampleInputuname_2" placeholder="Rp.">'+
						'<div class="input-group-addon"><a href="#" class="btn_insert" data="heregistrasi"><i class="icon-check"></i></a></div>'+
						'<div class="input-group-addon"><a href="#" class="btn_quick" data="heregistrasi"><i class="icon-rocket"></i></a></div>'+
						'</div>';
					} else if (data[i].heregistrasi == 1) {
						html_heregistrasi = '<div class="col-md-1"><a href="#"><span class="label label-success">Sudah</span></a></div>'+
						'<div class="col-md-1">'+
						'</div>';
					}  else {
						html_heregistrasi = data[i].heregistrasi;
					} 
					$('#html_heregistrasi').html(html_heregistrasi);

					if (data[i].ujian == 0) {
						html_ujian = '<div class="input-group col-md-7">'+
						'<input type="text" class="form-control payment" id="exampleInputuname_2" placeholder="Rp.">'+
						'<div class="input-group-addon"><a href="#" class="btn_insert" data="ujian"><i class="icon-check"></i></a></div>'+
						'<div class="input-group-addon"><a href="#" class="btn_quick" data="ujian"><i class="icon-rocket"></i></a></div>'+
						'</div>';
					} else if (data[i].ujian == 1) {
						html_ujian = '<div class="col-md-1"><a href="#"><span class="label label-success">Sudah</span></a></div>'+
						'<div class="col-md-1">'+
						'</div>';
					}  else {
						html_ujian = data[i].ujian;
					} 
					$('#html_ujian').html(html_ujian);

					if (data[i].kegiatan_1 == 0) {
						html_kegiatan_1 = '<div class="input-group col-md-7">'+
						'<input type="text" class="form-control payment" id="exampleInputuname_2" placeholder="Rp.">'+
						'<div class="input-group-addon"><a href="#" class="btn_insert" data="kegiatan_1"><i class="icon-check"></i></a></div>'+
						'<div class="input-group-addon"><a href="#" class="btn_quick" data="kegiatan_1"><i class="icon-rocket"></i></a></div>'+
						'</div>';
					} else if (data[i].kegiatan_1 == 1) {
						html_kegiatan_1 = '<div class="col-md-1"><a href="#"><span class="label label-success">Sudah</span></a></div>'+
						'<div class="col-md-1">'+
						'</div>';
					}  else {
						html_kegiatan_1 = data[i].kegiatan_1;
					} 
					$('#html_kegiatan_1').html(html_kegiatan_1);

					if (data[i].kegiatan_2 == 0) {
						html_kegiatan_2 = '<div class="input-group col-md-7">'+
						'<input type="text" class="form-control payment" id="exampleInputuname_2" placeholder="Rp.">'+
						'<div class="input-group-addon"><a href="#" class="btn_insert" data="kegiatan_2"><i class="icon-check"></i></a></div>'+
						'<div class="input-group-addon"><a href="#" class="btn_quick" data="kegiatan_2"><i class="icon-rocket"></i></a></div>'+
						'</div>';
					} else if (data[i].kegiatan_2 == 1) {
						html_kegiatan_2 = '<div class="col-md-1"><a href="#"><span class="label label-success">Sudah</span></a></div>'+
						'<div class="col-md-1">'+
						'</div>';
					}  else {
						html_kegiatan_2 = data[i].kegiatan_2;
					} 
					$('#html_kegiatan_2').html(html_kegiatan_2);

					spp = '<tr>'+
					'<td></td>';

					if (data[i].spp_juli == 0) {
						spp += '<td>'+
						'<div class="dropup show-on-hover">'+
						'<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+
						'<span class="label label-danger">Belum</span>'+
						'</a>'+
						'<ul class="dropdown-menu">'+
						'<li><a href="#" class="btn_quick" data="spp_juli">Approve Pembayaran</a></li>'+
						'</ul>'+
						'</div>'+
						'</td>';

					} else if(data[i].spp_juli == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_juli+'</td>';
					}

					if (data[i].spp_agustus == 0) {
						spp += '<td>'+
						'<div class="dropup show-on-hover">'+
						'<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+
						'<span class="label label-danger">Belum</span>'+
						'</a>'+
						'<ul class="dropdown-menu">'+
						'<li><a href="#" class="btn_quick" data="spp_agustus">Approve Pembayaran</a></li>'+
						'</ul>'+
						'</div>'+
						'</td>';
					} else if(data[i].spp_agustus == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_agustus+'</td>';
					}

					if (data[i].spp_september == 0) {
						spp += '<td>'+
						'<div class="dropup show-on-hover">'+
						'<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+
						'<span class="label label-danger">Belum</span>'+
						'</a>'+
						'<ul class="dropdown-menu">'+
						'<li><a href="#" class="btn_quick" data="spp_september">Approve Pembayaran</a></li>'+
						'</ul>'+
						'</div>'+
						'</td>';
					} else if(data[i].spp_september == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_september+'</td>';
					}

					if (data[i].spp_oktober == 0) {
						spp += '<td>'+
						'<div class="dropup show-on-hover">'+
						'<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+
						'<span class="label label-danger">Belum</span>'+
						'</a>'+
						'<ul class="dropdown-menu">'+
						'<li><a href="#" class="btn_quick" data="spp_oktober">Approve Pembayaran</a></li>'+
						'</ul>'+
						'</div>'+
						'</td>';
					} else if(data[i].spp_oktober == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_oktober+'</td>';
					}

					if (data[i].spp_november == 0) {
						spp += '<td>'+
						'<div class="dropup show-on-hover">'+
						'<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+
						'<span class="label label-danger">Belum</span>'+
						'</a>'+
						'<ul class="dropdown-menu">'+
						'<li><a href="#" class="btn_quick" data="spp_november">Approve Pembayaran</a></li>'+
						'</ul>'+
						'</div>'+
						'</td>';
					} else if(data[i].spp_november == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_november+'</td>';
					}

					if (data[i].spp_desember == 0) {
						spp += '<td>'+
						'<div class="dropup show-on-hover">'+
						'<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+
						'<span class="label label-danger">Belum</span>'+
						'</a>'+
						'<ul class="dropdown-menu">'+
						'<li><a href="#" class="btn_quick" data="spp_desember">Approve Pembayaran</a></li>'+
						'</ul>'+
						'</div>'+
						'</td>';
					} else if(data[i].spp_desember == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_desember+'</td>';
					}

					if (data[i].spp_januari == 0) {
						spp += '<td>'+
						'<div class="dropup show-on-hover">'+
						'<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+
						'<span class="label label-danger">Belum</span>'+
						'</a>'+
						'<ul class="dropdown-menu">'+
						'<li><a href="#" class="btn_quick" data="spp_januari">Approve Pembayaran</a></li>'+
						'</ul>'+
						'</div>'+
						'</td>';
					} else if(data[i].spp_januari == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_januari+'</td>';
					}

					if (data[i].spp_februari == 0) {
						spp += '<td>'+
						'<div class="dropup show-on-hover">'+
						'<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+
						'<span class="label label-danger">Belum</span>'+
						'</a>'+
						'<ul class="dropdown-menu">'+
						'<li><a href="#" class="btn_quick" data="spp_februari">Approve Pembayaran</a></li>'+
						'</ul>'+
						'</div>'+
						'</td>';
					} else if(data[i].spp_februari == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_februari+'</td>';
					}

					if (data[i].spp_maret == 0) {
						spp += '<td>'+
						'<div class="dropup show-on-hover">'+
						'<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+
						'<span class="label label-danger">Belum</span>'+
						'</a>'+
						'<ul class="dropdown-menu">'+
						'<li><a href="#" class="btn_quick" data="spp_maret">Approve Pembayaran</a></li>'+
						'</ul>'+
						'</div>'+
						'</td>';
					} else if(data[i].spp_maret == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_maret+'</td>';
					}

					if (data[i].spp_april == 0) {
						spp += '<td>'+
						'<div class="dropup show-on-hover">'+
						'<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+
						'<span class="label label-danger">Belum</span>'+
						'</a>'+
						'<ul class="dropdown-menu">'+
						'<li><a href="#" class="btn_quick" data="spp_april">Approve Pembayaran</a></li>'+
						'</ul>'+
						'</div>'+
						'</td>';
					} else if(data[i].spp_april == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_april+'</td>';
					}

					if (data[i].spp_mei == 0) {
						spp += '<td>'+
						'<div class="dropup show-on-hover">'+
						'<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+
						'<span class="label label-danger">Belum</span>'+
						'</a>'+
						'<ul class="dropdown-menu">'+
						'<li><a href="#" class="btn_quick" data="spp_mei">Approve Pembayaran</a></li>'+
						'</ul>'+
						'</div>'+
						'</td>';
					} else if(data[i].spp_mei == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_mei+'</td>';
					}

					if (data[i].spp_juni == 0) {
						spp += '<td>'+
						'<div class="dropup show-on-hover">'+
						'<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+
						'<span class="label label-danger">Belum</span>'+
						'</a>'+
						'<ul class="dropdown-menu">'+
						'<li><a href="#" class="btn_quick" data="spp_juni">Approve Pembayaran</a></li>'+
						'</ul>'+
						'</div>'+
						'</td>';
					} else if(data[i].spp_juni == 1){
						spp += '<td><a href="#"><span class="label label-success">Sudah</span></a></td>';
					} else {
						spp += '<td>'+data[i].spp_juni+'</td>';
					}

					spp += '</tr>';
					$('#spp').html(spp);
					id_control_list = data[i].id_control_list;
				}
			}
		});
}

get_catatan();
function get_catatan(){
	$.ajax({
		type    : 'ajax',
		url  : "<?php echo base_url();?>payment/get_catatan/"+id_control_list,
		async   : false,
		dataType : "JSON",
		success: function(data){
			for(i=0; i<data.length; i++){
				catatan += '<tr>'+
				'<td></td>'+
				'<td>'+data[i].jenis_catatan+'</td>'+
				'<td>'+data[i].catatan+'</td>'+
				'<td>'+'<a href="javascript:void(0)" class="btn btn-danger btn-icon-anim btn-circle btn-sm pull-left inline-block mr-15">'+
				'<i class="fa fa-trash-o"></i></a>'+
				'</td>'+
				'</tr>';
			}
			$('#catatan').html(catatan);
		}
	});
}

$('.btn_quick').on('click', function(){
	var id = $(this).attr('data');
	var periode_control_list = "<?php echo $this->uri->segment('3');?>";
	var no_induk = "<?php echo $this->uri->segment('4');?>";
	var r = confirm("Apakah anda yakin untuk meng-approve pembayaran "+id+" ?");
	if (r == true) {
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url('payment/approve_pembayaran')?>",
			dataType : "JSON",
			data : {id:id, periode_control_list:periode_control_list, no_induk:no_induk},
			success: function(data){
				$('#update_spp').hide();
				alert("Sukses meng-update pembayaran "+id);
				location.reload();
				// get_data();
			},
			error: function(){
				alert('Error to update SPP');
			}
		});
	}
	return false;
});

$('.btn_insert').on('click', function(){
	var id = $(this).attr('data');
	var periode_control_list = "<?php echo $this->uri->segment('3');?>";
	var no_induk = "<?php echo $this->uri->segment('4');?>";
	var payment = $('.payment').val();
	var r = confirm("Apakah anda yakin untuk meng-update pembayaran "+id+" ?");
	if (r == true) {
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url('payment/approve_cicil')?>",
			dataType : "JSON",
			data : {id:id, payment:payment, periode_control_list:periode_control_list, no_induk:no_induk},
			success: function(data){
				$('#update_spp').hide();
				alert("Sukses meng-update pembayaran "+id);
				location.reload();
				// get_data();
			},
			error: function(){
				alert('Error to update SPP');
			}
		});
	}
	return false;
});
</script>