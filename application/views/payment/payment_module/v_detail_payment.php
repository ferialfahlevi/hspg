<!DOCTYPE html>
<html>
<body style="background-color:white;">
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- Row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default card-view">
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<a href="<?php echo base_url('Payment/payment');?>" class="btn btn-info"><i class="fa fa-arrow-left"></i> Data Payment</a>
								</div>
								<div class="pull-right">
									<button aria-expanded="false" data-toggle="dropdown" class="btn btn-info btn-circle btn-sm" type="button" onclick="javascript:refresh_payment()" data-toggle='tooltip' data-placement='top' title='REFRESH'><i class="zmdi zmdi-replay txt-light"></i></button>
									<a data-toggle="modal" data-target="#generate_invoice" class="btn btn-info btn-circle btn-sm" type="button" data-toggle='tooltip' data-placement='top' title='CETAK INVOICE'> <i class="fa fa-print txt-light"></i></a>
									<a data-toggle="modal" data-target="#quick_update" class="btn btn-info btn-circle btn-sm" type="button" data-toggle='tooltip' data-placement='top' title='QUICK EDIT NOMINAL'> <i class="fa fa-edit txt-light"></i></a>
									<div class="inline-block dropdown">
										<button aria-expanded="false" data-toggle="dropdown" class="btn btn-info btn-circle btn-sm" type="button"><i class="fa fa-ellipsis-v txt-light"></i></button>
										<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu" id="list_periode">
										</ul>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
											<div class="form-wrap">
												<form class="form-horizontal" role="form">
													<div class="form-body">
														<div class="pull-left">
															<h6 class="txt-dark capitalize-font" id="ringkasan_spp"><i class="zmdi zmdi-account mr-10"></i>Ringkasan Pembayaran SPP <?php foreach($periode->result() as $row ):?><?php echo $row->PERIODE;?><?php endforeach; ?></h6>
														</div>
														<div class="pull-right">
															<?php foreach($nama_siswa->result() as $row ):?>
																<h6 class="txt-dark capitalize-font"><a id="nama_siswa" href="<?php echo base_url('Data/siswa/').$row->id_siswa;?>"><?php echo $row->nama_siswa;?></a></h6>
																<input class="form-control inline-block" id="id_siswa" value="<?php echo $row->id_siswa;?>" type="hidden"/>
															<?php endforeach; ?>
														</div>
														<div class="clearfix"></div>
														<hr class="light-grey-hr"/>
														<div class="table-wrap">
															<table class="table table-hover mb-0">
																<thead>
																	<tr id="show_spp">
																	</tr>
																</thead>
																<tbody>
																	<tr id="show_spp_detail">
																	</tr>
																</tbody>
															</table>
														</div>	
														<div class="seprator-block"></div>
														<div class="pull-left">
															<h6 class="txt-dark capitalize-font" id="ringkasan_non_spp"><i class="zmdi zmdi-account mr-10"></i>Ringkasan Pembayaran Administrasi <?php foreach($periode->result() as $row ):?><?php echo $row->PERIODE;?><?php endforeach; ?></h6>
														</div>
														<div class="pull-right">
															<?php foreach($nama_siswa->result() as $row ):?>
																<h6 class="txt-dark capitalize-font"><a id="nama_siswa" href="<?php echo base_url('Data/siswa/').$row->id_siswa;?>"><?php echo $row->nama_siswa;?></a></h6>
																<input class="form-control inline-block" id="id_siswa" value="<?php echo $row->id_siswa;?>" type="hidden"/>
															<?php endforeach; ?>
														</div>
														<div class="clearfix"></div>
														<hr class="light-grey-hr"/>
														<div class="table-wrap">
															<table class="table table-hover mb-0">
																<thead>
																	<tr id="show_non_spp">
																	</tr>
																</thead>
																<tbody>
																	<tr id="show_non_spp_detail">
																	</tr>
																</tbody>
															</table>
														</div>	
														<div class="seprator-block"></div>
														<div class="pull-left">
															<h6 class="txt-dark capitalize-font" id="detail_spp"><i class="zmdi zmdi-account mr-10"></i>Pembayaran SPP <?php foreach($periode->result() as $row ):?><?php echo $row->PERIODE;?><?php endforeach; ?></h6>
														</div>
														<div class="pull-right">
															<?php foreach($nama_siswa->result() as $row ):?>
																<h6 class="txt-dark capitalize-font"><a id="nama_siswa" href="<?php echo base_url('Data/siswa/').$row->id_siswa;?>"><?php echo $row->nama_siswa;?></a></h6>
																<input class="form-control inline-block" id="id_siswa" value="<?php echo $row->id_siswa;?>" type="hidden"/>
															<?php endforeach; ?>
														</div>
														<div class="clearfix"></div>
														<hr class="light-grey-hr"/>
														<div class="table-wrap">
															<table class="table table-hover mb-0">
																<thead>
																	<tr>
																		<th class="txt-dark">Kode</th>
																		<th class="txt-dark">Bulan</th>
																		<th class="txt-dark">Jumlah Harus Dibayar</th>
																		<th class="txt-dark">Kekurangan</th>
																		<th class="txt-dark">Catatan</th>
																		<th class="txt-dark"></th>
																	</tr>
																</thead>
																<tbody id="detail_show_spp_detail">
																</tbody>
															</table>
														</div>		

														<div class="seprator-block"></div>

														<div class="pull-left">
															<h6 class="txt-dark capitalize-font" id="detail_non_spp"><i class="zmdi zmdi-account mr-10"></i>Pembayaran Administrasi <?php foreach($periode->result() as $row ):?><?php echo $row->PERIODE;?><?php endforeach; ?></h6>
														</div>
														<div class="pull-right">
															<?php foreach($nama_siswa->result() as $row ):?>
																<h6 class="txt-dark capitalize-font"><a href="<?php echo base_url('Data/siswa/').$row->id_siswa;?>"><?php echo $row->nama_siswa;?></a></h6>
															<?php endforeach; ?>
														</div>
														<div class="clearfix"></div>
														<hr class="light-grey-hr"/>
														<div class="table-wrap">
															<table class="table table-hover mb-0">
																<thead>
																	<tr>
																		<th class="txt-dark">Kode</th>
																		<th class="txt-dark">Pembayaran</th>
																		<th class="txt-dark">Jumlah Harus Dibayar</th>
																		<th class="txt-dark">Kekurangan</th>
																		<th class="txt-dark">Catatan</th>
																		<th class="txt-dark"></th>
																	</tr>
																</thead>
																<tbody id="detail_show_non_spp_detail">
																</tbody>
															</table>
														</div>	

													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->
			</div>	
		</div>
	</div>
	<!-- /Row -->
</body>
</html>
<div class="modal fade" id="modal_log_payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Log</h5>
			</div>
			<div class="modal-body">
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="form-wrap">
									<form>
										<div class="col-lg-12">
											<div class="form-group">
												<div class="table-wrap">
													<table class="table table-hover mb-0">
														<thead>
															<tr>
																<th class="txt-dark">Aktivitas</th>
																<th class="txt-dark">Nominal</th>
																<th class="txt-dark">Tanggal</th>
																<th class="txt-dark">Diupdate Oleh</th>
															</tr>
														</thead>
														<tbody id="show_log">
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.modal -->
<div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Update Pembayaran <p id="nama_pembayaran"></p></h5>
			</div>
			<div class="modal-body">
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="form-wrap">
									<form>
										<div class="col-lg-12">
											<div class="form-group">
												<div class="table-wrap">
													<table class="table table-hover mb-0">
														<thead>
															<tr>
																<th class="txt-dark">Jumlah Yang Harus Dibayar</th>
																<th class="txt-dark">Kekurangan</th>
															</tr>
														</thead>
														<tbody id="show_detail_payment">
														</tbody>
													</table>
												</div>	
												<div class="clearfix"></div>
												<hr class="light-grey-hr"/>
												<div class="col-lg-12">
													<div class="col-lg-12">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Jumlah Yang Ingin Dibayar</label>
															<input class="form-control inline-block" id="id_payment" type="hidden"/>
															<input class="form-control inline-block" id="jumlah_pembayaran" type="hidden"/>
															<input class="form-control inline-block" id="kekurangan" type="hidden"/>
															<input class="form-control inline-block" id="amount" type="text"/>
														</div>
													</div>
													<div class="col-lg-12">
														<button class="btn btn-default btn-rounded" type="button" onclick="quick_set('500000')" data="500000">Rp. 500.000</button>
														<button class="btn btn-default btn-rounded" type="button" onclick="quick_set('1000000')" data="1000000">Rp. 1.000.000</button>
														<button class="btn btn-default btn-rounded" type="button" onclick="quick_set('2500000')" data="2500000">Rp. 2.500.000</button>
														<button class="btn btn-default btn-rounded" type="button" onclick="quick_set('5000000')" data="5000000">Rp. 5.000.000</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="button_clear_siswa" class="btn btn-default">Clear</button>
				<button type="button" id="update_payment" class="btn btn-primary">Update</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_new_payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Generate Pembayaran<p id="nama_pembayaran"></p></h5>
			</div>
			<div class="modal-body">
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="form-wrap">
									<form>
										<div class="col-lg-12">
											<div class="form-group">
												<div class="col-lg-12">
													<div class="form-group">
														<label class="control-label mb-10" for="exampleInputuname_1">Periode</label>
														<select class="form-control inline-block" id="generate_periode" name="generate_periode">
															<option value="0">-Pilih Periode-</option>
														</select>
														<span class="help-block" id="status_periode"></span> 
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" onclick="generate_periode()" id="btn_generate_periode" class="btn btn-primary">Generate Pembayaran</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_edit_payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Edit Pembayaran <p id="nama_pembayaran_ed"></p></h5>
			</div>
			<div class="modal-body">
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="form-wrap">
									<form>
										<div class="col-lg-12">
											<div class="form-group">
												<div class="col-lg-12">
													<div class="form-group">
														<label class="control-label mb-10" for="exampleInputuname_1">Jumlah Yang Harus Dibayar</label>
														<input class="form-control inline-block" id="jumlah_payment_ed" type="text"/>
														<input class="form-control inline-block" id="id_payment_ed" type="hidden"/>
													</div>
												</div>
												<div class="col-lg-12">
													<button class="btn btn-default btn-rounded" type="button" onclick="quick_set2('500000')" data="500000">Rp. 500.000</button>
													<button class="btn btn-default btn-rounded" type="button" onclick="quick_set2('1000000')" data="1000000">Rp. 1.000.000</button>
													<button class="btn btn-default btn-rounded" type="button" onclick="quick_set2('2500000')" data="2500000">Rp. 2.500.000</button>
													<button class="btn btn-default btn-rounded" type="button" onclick="quick_set2('5000000')" data="5000000">Rp. 5.000.000</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" onclick="edit_payment()" class="btn btn-primary">Edit Pembayaran</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="generate_invoice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Cetak Invoice Pembayaran</h5>
			</div>
			<div class="modal-body">
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="form-wrap">
									<form>
										<div class="col-lg-12">
											<div class="form-group">
												<div class="table-wrap">
													<table class="table table-hover mb-0">
														<thead>
															<tr>
																<th class="txt-dark">Pembayaran Belum Lunas</th>
																<th class="txt-dark">Kekurangan</th>
																<th class="txt-dark"></th>
															</tr>
														</thead>
														<tbody id="unpaid_table">
														</tbody>
													</table>
												</div>	
												<div class="clearfix"></div>
												<p><i>Catatan: </i> Jika pembayaran tidak ada, mohon dicek JUMLAH HARUS DIBAYAR pada tiap pembayaran</p>
												<hr class="light-grey-hr"/>
												<div class="col-lg-12">
													<div class="col-lg-12">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Jatuh Tempo</label>
															<input class="form-control inline-block" type="date" id="jatuh_tempo" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="btn_generate_invoice" class="btn btn-primary">Cetak Invoice</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="quick_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Quick Update Nominal Pembayaran</h5>
			</div>
			<div class="modal-body">
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="form-wrap">
									<form>
										<div class="col-lg-12">
											<div class="form-group">
												<div class="table-wrap">
													<table class="table table-hover mb-0">
														<thead>
															<tr>
																<th class="txt-dark">Pembayaran</th>
																<th class="txt-dark">Nominal Yang Harus Dibayar</th>
																<th class="txt-dark"></th>
															</tr>
														</thead>
														<tbody id="show_quick_edit">
														</tbody>
													</table>
												</div>	
												<div class="clearfix"></div>
												<hr class="light-grey-hr"/>
												<div class="col-lg-12">
													<div class="col-lg-12">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Edit Nominal</label>
															<input class="form-control inline-block" type="text" id="edit_nominal" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="btn_edit_nominal" class="btn btn-primary">Edit Nominal</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var latest_periode;
	periode();
	function periode(){
		$.ajax({
			url     : '<?php echo base_url();?>Payment/latest_periode',
			async   : false,
			dataType    : 'json',
			success : function(data){
				var i;
				for(i=0; i<data.length; i++){
					latest_periode = data[i].id;
				}
			}
		});
	}

	document.getElementById("btn_generate_periode").disabled = true;
	/*NOTIF*/
	function notif_sukses(message, id){
		$.toast({
			heading: message,
			text: 'Payment ID: '+id,
			position: 'top-right',
			loaderBg:'#f2b701',
			icon: 'success',
			hideAfter: 3500, 
			stack: 6
		});
	}
	function notif_gagal(message, id){
		$.toast({
			heading: message,
			text: 'Payment ID: '+id,
			position: 'top-right',
			loaderBg:'#f2b701',
			icon: 'error',
			hideAfter: 3500
		});
	}

	/*GET SPP*/
	get_spp(latest_periode);
	function get_spp(periode_dipilih){
		id = '<?php echo $this->uri->segment('3');?>';
		periode = periode_dipilih;
		$.ajax({
			type    : "POST",
			url     : "<?php echo base_url('Payment/data_spp');?>",
			dataType    : 'json',
			data : {id:id, periode:periode},
			success : function(data){
				var i;
				var header = '';
				var detail = '';
				var show_detail = '';
				var quick_edit = '';
				for(i=0; i<data.length; i++){
					header += 
					'<th class="txt-dark">'+data[i].SINGKAT+'</th>';
					if (data[i].STATUS == '1') {
						detail += '<td><span class="label label-primary" data-toggle="tooltip" data-placement="top" title="Sudah Dibayar"><i class="fa fa-check"></i></span></td>';
					} else if (data[i].STATUS == '0') {
						detail += '<td><span class="label label-danger" data-toggle="tooltip" data-placement="top" title="Belum Dibayar"><i class="fa fa-times"></i></span></td>';
					} else if (data[i].STATUS == '2') {
						detail += '<td><span class="label label-warning" data-toggle="tooltip" data-placement="top" title="'+data[i].KEKURANGAN+'"><i class="fa fa-exclamation"></i></span></td>';
					}

					show_detail +=
					'<tr>'+
					'<td>'+data[i].ID+'</td>'+
					'<td>'+data[i].BULAN2+'</td>'+
					'<td>Rp. '+data[i].JUMLAH+'</td>'+
					'<td>Rp. '+data[i].KEKURANGAN+'</td>';
					if (data[i].STATUS == '1') {
						show_detail += '<td><span class="label label-primary">'+data[i].CATATAN+'</span></td>';
					} else if (data[i].STATUS == '0') {
						show_detail += '<td><span class="label label-danger">'+data[i].CATATAN+'</span></td>';
					} else if (data[i].STATUS == '2') {
						show_detail += '<td><span class="label label-warning">'+data[i].CATATAN+'</span></td>';
					}
					show_detail += '<td>'+
					'<div class="btn-group">'+
					'<div class="dropdown">'+
					'<button aria-expanded="false" data-toggle="dropdown" class="btn btn-success btn-circle dropdown-toggle" type="button"> <i class="fa fa-usd"></i></button>'+
					'<ul role="menu" class="dropdown-menu">';
					if (data[i].STATUS == '2') {
						show_detail += '<li><a href="javascript:set_lunas('+data[i].ID+');" name="set_lunas">Bayar Lunas</a></li>'+
						/*'<li><a href="javascript:void(0);" data="'+data[i].ID+'" name="update_payment">Bayar Sebagian</a></li>'+*/
						'<li class="divider"></li>';
					} else if (data[i].STATUS == '0') {
						show_detail += '<li><a href="javascript:set_lunas('+data[i].ID+');" name="set_lunas">Bayar Lunas</a></li>'+
						/*'<li><a href="javascript:void(0);" data="'+data[i].ID+'" name="update_payment">Bayar Sebagian</a></li>'+*/
						'<li><a href="javascript:edit_payment_button('+data[i].ID+');" name="edit_payment">Edit Pembayaran</a></li>'+
						'<li class="divider"></li>';
					} 
					show_detail += '<li><a href="javascript:reset_payment('+data[i].ID+');" name="reset_payment">Reset Pembayaran</a></li>'+
					/*'<li><a href="javascript:log_payment('+data[i].ID+');" name="log_payment">Lihat Log</a></li>'+*/
					'</ul>'+
					'<button class="btn btn-success btn-circle dropdown-toggle" onclick="javascript:log_payment('+data[i].ID+');" type="button" data-toggle="tooltip" data-placement="top" title="LOG Pembayaran"> <i class="fa fa-history"></i></button>'+
					'</div>'+
					'</div>'+
					'</td>'+
					'</tr>';

					quick_edit += 
					'<tr">'+
					'<td>'+data[i].BULAN2+'</td>';
					quick_edit +=
					'<td>Rp. '+data[i].JUMLAH+'</td>'+
					'<td>'+
					'<div class="checkbox checkbox-success">'+
					'<input name="nominal_edit" id="checkbox_nominal'+i+'" type="checkbox" value="'+data[i].ID+'">'+
					'<label for="checkbox_nominal'+i+'">'+
					'Tambahkan'+
					'</label>'+
					'</div>'+
					'</td>'+
					'</tr>';
				}
				$('#show_spp').html(header);
				$('#show_spp_detail').html(detail);
				$('#detail_show_spp_detail').html(show_detail);
				$('#show_quick_edit').html(quick_edit);
			}
		});
	}

	get_non_spp(latest_periode);
	function get_non_spp(periode_dipilih){
		id = '<?php echo $this->uri->segment('3');?>';
		periode = periode_dipilih;
		// '<?php echo $this->uri->segment('4');?>';
		// alert(id+' '+periode);
		$.ajax({
			type    : "POST",
			url     : "<?php echo base_url('Payment/data_non_spp');?>",
			dataType    : 'json',
			data : {id:id, periode:periode},
			success : function(data){
				var i;
				var header = '';
				var detail = '';
				var show_detail = '';
				for(i=0; i<data.length; i++){
					header += 
					'<th class="txt-dark">'+data[i].PEMBAYARAN+'</th>';
					if (data[i].STATUS == '1') {
						detail += '<td><span class="label label-primary">'+data[i].CATATAN+'</span></td>';
					} else if (data[i].STATUS == '0') {
						detail += '<td><span class="label label-danger">'+data[i].CATATAN+'</span></td>';
					} else if (data[i].STATUS == '2') {
						detail += '<td><span class="label label-warning" data-toggle="tooltip" data-placement="top" title="Belum Lunas">'+data[i].KEKURANGAN+'</i></span></td>';
					}
					show_detail +=
					'<tr>'+
					'<td>'+data[i].ID+'</td>'+
					'<td>'+data[i].PEMBAYARAN+'</td>'+
					'<td>Rp. '+data[i].JUMLAH+'</td>'+
					'<td>Rp. '+data[i].KEKURANGAN+'</td>';
					if (data[i].STATUS == '1') {
						show_detail += '<td><span class="label label-primary">'+data[i].CATATAN+'</span></td>';
					} else if (data[i].STATUS == '0') {
						show_detail += '<td><span class="label label-danger">'+data[i].CATATAN+'</span></td>';
					} else if (data[i].STATUS == '2') {
						show_detail += '<td><span class="label label-warning">'+data[i].CATATAN+'</span></td>';
					}
					show_detail += '<td>'+
					'<div class="btn-group">'+
					'<div class="dropdown">'+
					'<button aria-expanded="false" data-toggle="dropdown" class="btn btn-success btn-circle dropdown-toggle" type="button"> <i class="fa fa-usd"></i></button>'+
					'<ul role="menu" class="dropdown-menu">';
					if (data[i].STATUS == '2') {
						show_detail += '<li><a href="javascript:set_lunas('+data[i].ID+');" name="set_lunas">Bayar Lunas</a></li>'+
						'<li><a href="javascript:update_payment_button('+data[i].ID+');" name="update_payment">Bayar Sebagian</a></li>'+
						'<li class="divider"></li>';
					} else if (data[i].STATUS == '0') {
						show_detail += '<li><a href="javascript:set_lunas('+data[i].ID+');" name="set_lunas">Bayar Lunas</a></li>'+
						'<li><a href="javascript:update_payment_button('+data[i].ID+');" name="update_payment">Bayar Sebagian</a></li>'+
						'<li><a href="javascript:edit_payment_button('+data[i].ID+');" name="edit_payment">Edit Pembayaran</a></li>'+
						'<li class="divider"></li>';
					} 
					show_detail += '<li><a href="javascript:reset_payment('+data[i].ID+');" name="reset_payment">Reset Pembayaran</a></li>'+
					'</ul>'+
					'<button class="btn btn-success btn-circle dropdown-toggle" onclick="javascript:log_payment('+data[i].ID+');" type="button" data-toggle="tooltip" data-placement="top" title="LOG Pembayaran"> <i class="fa fa-history"></i></button>'+
					'</div>'+
					'</div>'+
					'</td>'+
					'</tr>';
				}
				$('#show_non_spp').html(header);
				$('#show_non_spp_detail').html(detail);
				$('#detail_show_non_spp_detail').html(show_detail);
			}
		});
	}

	dropdown_periode();
	function dropdown_periode(){
		$.ajax({
			url     : '<?php echo base_url();?>Payment/dropdown_periode',
			async   : false,
			dataType: 'json',
			success : function(data){
				var html = '';
				var i;
				var satu = 1;
				for(i=0; i<data.length; i++){
					$('#generate_periode').append(new Option(data[i].nama_periode, data[i].id));
					
					if (i > 0) {
						html += 
						'<li role="presentation"><a href="javascript:periode_ke('+data[i].id+')" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>PEMBAYARAN '+data[i].nama_periode+'</a></li>';
					} else {
						html += 
						'<li role="presentation"><a href="javascript:void(0)" data-toggle="modal" data-target="#modal_new_payment" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Memunculkan Payment</a></li><li class="divider"></li>';
						html += 
						'<li role="presentation"><a href="javascript:periode_ke('+data[i].id+')" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>PEMBAYARAN '+data[i].nama_periode+'</a></li>';
					}
				}
				$('#list_periode').html(html);
			}
		});
	}

	function periode_ke(id){
		latest_periode = id;
		get_spp(latest_periode);
		get_non_spp(latest_periode);
		show_unpaid(latest_periode);
		var periode;
		/*alert(nama_periode)*/
		$.ajax({
			type    : "POST",
			url     : "<?php echo base_url('Payment/periode_ke/');?>",
			dataType    : 'json',
			data : {id:id},
			success : function(data){
				var i;
				for(i=0; i<data.length; i++){
					notif_sukses('Pembayaran untuk '+data[i].NAMA_PERIODE, '');
					$('#ringkasan_spp').html('<i class="zmdi zmdi-account mr-10"></i>Ringkasan Pembayaran SPP '+data[i].PERIODE);
					$('#ringkasan_non_spp').html('<i class="zmdi zmdi-account mr-10"></i>Ringkasan Pembayaran Administrasi '+data[i].PERIODE);
					$('#detail_spp').html('<i class="zmdi zmdi-account mr-10"></i>Pembayaran SPP '+data[i].PERIODE);
					$('#detail_non_spp').html('<i class="zmdi zmdi-account mr-10"></i>Pembayaran Administrasi '+data[i].PERIODE);
				}
				// alert(data[0].nama_periode);
			},
			error: function(xhr, status, error){
				var errorMessage = xhr.status + ': ' + xhr.statusText;
				notif_gagal(errorMessage, id);
            }
         });
	}

	function quick_set(nilai) {
		$('#amount').val(nilai);
	}

	function quick_set2(nilai) {
		$('#jumlah_payment_ed').val(nilai);
	}

	/*REFRESH*/
	function refresh_payment(){
		get_spp(latest_periode);
		get_non_spp(latest_periode);
		show_unpaid(latest_periode);
	}

	function edit_payment(){
		var message = 'Sukses mengedit nominal payment';
		var id	=$('#id_payment_ed').val();
		var jumlah	=$('#jumlah_payment_ed').val();
		$.ajax({
			type    : "POST",
			url     : "<?php echo base_url('Payment/edit_payment/');?>",
			dataType    : 'json',
			data : {id:id, jumlah:jumlah},
			success : function(data){
				$('#modal_edit_payment').modal('hide');
				if (data == true) {
					notif_sukses(message, id);
				} else if (data == false) {
					notif_gagal('Unable to process', id);
				}
			},
			error: function(xhr, status, error){
				var errorMessage = xhr.status + ': ' + xhr.statusText;
				notif_gagal(errorMessage, id);
                }
            });
		refresh_payment();
	}

	function generate_periode(){
		var id_periode	=$('#generate_periode').val();
		var id_siswa	=$('#id_siswa').val();
		$.ajax({
			type    : "POST",
			url     : "<?php echo base_url('Payment/generate_periode/');?>",
			dataType    : 'json',
			data : {id_siswa:id_siswa, id_periode:id_periode},
			success : function(data){
				alert("Sukses men-generate payment");
			},
			error: function(xhr, status, error){
				var errorMessage = xhr.status + ': ' + xhr.statusText;
				alert('Error - ' + errorMessage);
                }
            });
		refresh_payment();
	}

	function set_lunas(id){
		var message = 'Sukses melunaskan pembayaran';
		var jenis_log = 'lunas';
		var r = confirm("Apakah anda yakin untuk melunaskan pembayaran?");
		if (r == true) {
			$.ajax({
				type    : "POST",
				url     : "<?php echo base_url('Payment/set_lunas/');?>",
				dataType    : 'json',
				data : {id:id},
				success : function(data){
					/*alert(data);*/
					if (data == true) {
						notif_sukses(message, id);
					} else if (data == false) {
						notif_gagal('Unable to process', id);
					}
				},
				error: function(xhr, status, error){
					var errorMessage = xhr.status + ': ' + xhr.statusText
				// alert('Error - ' + errorMessage);
				notif_gagal(errorMessage, id);
                    // $('#errorMessage').html(errorMessage);
                }
            });
			update_log(id, '0', jenis_log);
			refresh_payment();
		}
	}

	function reset_payment(id){
		var message = 'Sukses me-reset pembayaran';
		var r = confirm("Apakah anda yakin untuk me-reset pembayaran?");
		if (r == true) {
			$.ajax({
				type    : "POST",
				url     : "<?php echo base_url('Payment/reset_payment/');?>",
				dataType    : 'json',
				data : {id:id},
				success : function(data){
					if (data == true) {
						notif_sukses(message, id);
					} else if (data == false) {
						notif_gagal('Unable to process', id);
					}
				}, error: function(xhr, status, error){
					var errorMessage = xhr.status + ': ' + xhr.statusText
				// alert('Error - ' + errorMessage);
				notif_gagal(errorMessage, id);
                    // $('#errorMessage').html(errorMessage);
                }
            });
			$.ajax({
				type    : "POST",
				url     : "<?php echo base_url('Payment/delete_log_payment/');?>",
				dataType    : 'json',
				data : {id:id},
				success : function(data){
					// alert('SUKSES');
				}
			});
			update_log(id, '0', 'reset');
			refresh_payment();
		}
	}

	show_unpaid();
	function show_unpaid(){
		id = '<?php echo $this->uri->segment('3');?>';
		periode = '<?php echo $this->uri->segment('4');?>';

		$.ajax({
			type    : "POST",
			url     : "<?php echo base_url('Payment/show_unpaid/');?>",
			dataType    : 'json',
			data : {id:id, id_periode:periode},
			success : function(data){
				var i;
				var html = '';
				for(i=0; i<data.length; i++){
					html += 
					'<tr">';
					if (data[i].jenis_payment == '7') {
						html += '<td>'+data[i].PEMBAYARAN+' Bulan '+data[i].NAMA_BULAN+'</td>';
					} else {
						html += '<td>'+data[i].PEMBAYARAN+'</td>';
					}
					html +=
					'<td>Rp. '+data[i].KEKURANGAN+'</td>'+
					'<td>'+
					'<div class="checkbox checkbox-success">'+
					'<input name="today_check" id="checkbox'+i+'" type="checkbox" value="'+data[i].ID+'">'+
					'<label for="checkbox'+i+'">'+
					// data[i].PEMBAYARAN+
					// 'checkbox'+i+
					'Tambahkan'+
					'</label>'+
					'</div>'+
					'</td>'+
					'</tr>';
				}
				$('#unpaid_table').html(html);
			}
		});
	}
	$('#btn_generate_invoice').on('click', function() {
		/*alert("CEK");
		var checkedValue = document.querySelector('.invoice_checkbox:checked').value;
		alert(checkedValue);*/
		var id = '<?php echo $this->uri->segment('3');?>';
		var jatuh_tempo =$('#jatuh_tempo').val();
		var ck_string = "";
		$.each($("input[name='today_check']:checked"), function(){  
			// ck_string += "~"+$(this).val();
			ck_string += " or p.id = '"+$(this).val()+"'";
		});
		if (ck_string){
			ck_string = ck_string .substring(4);
			// alert(ck_string);
			$.ajax({
				type : "POST",
				url     : '<?php echo base_url('Doc/invoice/');?>',
				// dataType : "JSON",
				data : {kondisi:ck_string, id_siswa:id, jatuh_tempo:jatuh_tempo},
				success: function(data){
					notif_sukses('Sukses mencetak invoice', '');
				}
			});
		}else{
			alert('Pilih setidaknya satu pembayaran');
		}
	});
	$('#update_payment').on('click', function() {
		var message = 'Sukses meng-update pembayaran';
		var id	=$('#id_payment').val();
		var dibayar	=$('#amount').val();
		var jumlah	=$('#jumlah_pembayaran').val();
		var kekurangan	=$('#kekurangan').val();
		var jenis_log_update = 'update';
		var jenis_log_lunas = 'lunas';
		// alert(kekurangan+'<'+dibayar);
		if (dibayar == kekurangan) {
			var r = confirm("Apakah anda yakin untuk melunaskan pembayaran?");
			if (r == true) {
				$.ajax({
					type    : "POST",
					url     : "<?php echo base_url('Payment/set_lunas/');?>",
					dataType    : 'json',
					data : {id:id},
					success : function(data){
						if (data == true) {
							notif_sukses(message, id);
						} else if (data == false) {
							notif_gagal('Unable to process', id);
						}
					}, error: function(xhr, status, error){
						var errorMessage = xhr.status + ': ' + xhr.statusText
						// alert('Error - ' + errorMessage);
						notif_gagal(errorMessage, id);
                    		// $('#errorMessage').html(errorMessage);
                    	}
                    });
				update_log(id, dibayar, jenis_log_update);
				update_log(id, '0', jenis_log_lunas);
				refresh_payment();
			}/*
		} else if (kekurangan > dibayar) {
			// alert(dibayar+kekurangan);
			alert("Jumlah yang dibayar melebihi jumlah kekurangan");*/
		} else /*if (dibayar < kekurangan)*/{
			var r = confirm("Apakah anda yakin untuk update pembayaran?");
			if (r == true) {
				$.ajax({
					type : "POST",
					url  : "<?php echo base_url('Payment/update_payment')?>",
					dataType : "JSON",
					data : {id:id, dibayar:dibayar},
					success : function(data){
						if (data == true) {
							notif_sukses(message, id);
						} else if (data == false) {
							notif_gagal('Unable to process', id);
						}
					}, error: function(xhr, status, error){
						var errorMessage = xhr.status + ': ' + xhr.statusText
				// alert('Error - ' + errorMessage);
				notif_gagal(errorMessage, id);
                    // $('#errorMessage').html(errorMessage);
                }
            });
				update_log(id, dibayar, jenis_log_update);
				refresh_payment();
			}
		}
		$('#modal_update').modal('hide');
	});
	$('#btn_edit_nominal').on('click', function() {
		/*alert("CEK");
		var checkedValue = document.querySelector('.invoice_checkbox:checked').value;
		alert(checkedValue);*/
		var nominal = '0';
		var id = '<?php echo $this->uri->segment('3');?>';
		nominal =$('#edit_nominal').val();
		var ck_string = "";
		$.each($("input[name='nominal_edit']:checked"), function(){  
			// ck_string += "~"+$(this).val();
			ck_string += " or id = '"+$(this).val()+"'";
		});
		if (ck_string){
			ck_string = ck_string .substring(4);
			// alert(ck_string);
			// alert(id);
			$.ajax({
				type : "POST",
				url     : '<?php echo base_url('Payment/edit_nominal');?>',
				// dataType : "JSON",
				data : {kondisi:ck_string, nominal:nominal, id:id},
				success: function(data){
					get_spp(latest_periode);
					notif_sukses('Mengupdate nominal pembayaran', '');
				}
			});
		}else{
			alert('Pilih setidaknya satu spp');
		}
	});
	$('#generate_periode').on('change', function() {
		var qID = this.value;
		var id_siswa	=$('#id_siswa').val();
		if (qID == '0') {
			$('#status_periode').html("INVALID PERIODE");
			document.getElementById("btn_generate_periode").disabled = true;
		} else{
			$.ajax({
				type    : "POST",
				url     : "<?php echo base_url('Payment/check_periode/');?>",
				dataType    : 'json',
				data : {id_siswa:id_siswa, id_periode:qID},
				success : function(data){
					if (data == true) {
						$('#status_periode').html("Data Periode Sudah ada");
						document.getElementById("btn_generate_periode").disabled = true;
					} else {
						$('#status_periode').html(" ");
						document.getElementById("btn_generate_periode").disabled = false;
					}
				}
			});
		}
	});

	function update_log(id_payment, nominal, jenis_log){
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url('Payment/update_log_payment')?>",
			// dataType : "JSON",
			data : {id_payment:id_payment, nominal:nominal, jenis_log:jenis_log},
			success: function(data){
				// alert('sukses!');
			}
		});
	}

	function update_payment_button(id){
		$('#modal_update').modal('show');
		$.ajax({
			type    : "POST",
			url     : "<?php echo base_url('Payment/get_payment/');?>",
			dataType    : 'json',
			data : {id:id},
			success : function(data){
				var i;
				var html = '';
				var nama_pembayaran = '';
				var bulan;
				for(i=0; i<data.length; i++){
					html += 
					'<tr">'+
					'<td>Rp. '+data[i].JUMLAH+'</td>'+
					'<td>Rp. '+data[i].KEKURANGAN+'</td>'+
					'</tr>';
					if (data[i].BULAN == '0') {
						bulan = '';
					} else {
						bulan = data[i].NAMA_BULAN;
					}
					nama_pembayaran += data[i].PEMBAYARAN+' '+bulan;
					$('#nama_pembayaran').html(nama_pembayaran);
					$('#id_payment').val(data[i].ID);
					$('#jumlah_pembayaran').val(data[i].JUMLAH);
					$('#kekurangan').val(data[i].KEKURANGAN2);
				}
				$('#show_detail_payment').html(html);
			}
		});
	}

	function log_payment(id){
		$('#modal_log_payment').modal('show');
		$.ajax({
			type    : "POST",
			url     : "<?php echo base_url('Payment/get_log_payment/');?>",
			dataType    : 'json',
			data : {id_payment:id},
			success : function(data){
				var i;
				var html = '';
				for(i=0; i<data.length; i++){
					html += 
					'<tr">'+
					'<td>'+data[i].JENIS_LOG+'</td>'+
					'<td>'+data[i].NOMINAL+'</td>'+
					'<td>'+data[i].TANGGAL_LOG+'</td>'+
					'<td>'+data[i].USER+'</td>'+
					'</tr>';
				}
				$('#show_log').html(html);
			}
		});
	}

	function edit_payment_button(id){
		$('#modal_edit_payment').modal('show');
		$.ajax({
			type    : "POST",
			url     : "<?php echo base_url('Payment/get_payment/');?>",
			dataType    : 'json',
			data : {id:id},
			success : function(data){
				var i;
				var html = '';
				var nama_pembayaran = '';
				var bulan;
				for(i=0; i<data.length; i++){
					$('#nama_pembayaran_ed').html(nama_pembayaran);
					$('#id_payment_ed').val(data[i].ID);
					$('#jumlah_payment_ed').val(data[i].JUMLAH2);
				}
			}
		});
	}
</script>