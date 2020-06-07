<div class="container-fluid">

	<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h5 class="txt-dark">Ringkasan Pendaftaran dan Pangkal</h5>
		</div>
		<div class="col-lg-5 col-sm-8 col-md-8 col-xs-12">
		</div>
		<!-- Breadcrumb -->
		<div class="col-lg-4 col-sm-8 col-md-8 col-xs-12">
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
						<!-- <button class="btn btn-warning" data-toggle="modal" data-target="#modal_insert_object">Bantuan</button> -->
						<select class="form-control inline-block" id="generate_periode" name="generate_periode">
							<!-- <option value="0">-Pilih Periode-</option> -->
						</select>
					</div>
					<div class="pull-right">
						<button aria-expanded="false" data-toggle="dropdown" class="btn btn-default btn-icon-anim btn-circle dropdown-toggle" type="button" onclick="javascript:refresh()"><i class="zmdi zmdi-replay"></i></button>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="table-wrap">
							<table class="table table-hover mb-0">
								<thead>
									<tr>
										<th class="txt-dark">ID</th>
										<th class="txt-dark">NAMA</th>
										<th class="txt-dark">NO INDUK</th>
										<th class="txt-dark">UANG PENDAFTARAN</th>
										<th class="txt-dark">UANG PANGKAL</th>
										<th class="txt-dark">PEMBAYARAN PANGKAL</th>
										<th class="txt-dark">SISA PIUTANG PANGKAL</th>
										<th class="txt-dark"></th>
									</tr>
								</thead>
								<tbody id="show_table_siswa">
								</tbody>
							</table>
						</div>									
					</div>
				</div>
			</div>	
		</div>
	</div>
	<!-- /Row -->
</div>
<div class="modal fade" id="modal_log_payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Log Uang Pangkal</h5>
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
	/*$('#generate_periode').on('change', function() {
		latest_periode = this.value;
		show_siswa();
	});
	$('#refresh_siswa').on('click',function(){
		show_siswa();
	});*/

	show_heregistrasi(latest_periode);
	function show_heregistrasi(latest_periode){
		var total_pendaftaran;
		var total_pangkal;
		var kekurangan_pangkal;
		$.ajax({
			type : "POST",
			url     : '<?php echo base_url();?>Payment/show_sum_pendaftaran',
			dataType : "JSON",
			data : {id_periode:latest_periode},
			success: function(data){
				total_pendaftaran = data[0].TOTAL_PENDAFTARAN;
				total_pangkal = data[0].TOTAL_PANGKAL;
				kekurangan_pangkal = data[0].KEKURANGAN_PANGKAL;
			}
		});
		$.ajax({
			type : "POST",
			url     : '<?php echo base_url();?>Payment/show_pendaftaran',
			dataType : "JSON",
			data : {id_periode:latest_periode},
			success: function(data){
				var i;
				var html = '';
				var status = '';
				for(i=0; i<data.length; i++){
					html += 
					'<tr>'+
					'<td>'+data[i].ID+'</td>';
					if (data[i].JENIS_PENDIDIKAN == '3') {
						html += '<td class="txt-danger"><a class="txt-danger" href="<?php echo base_url();?>Payment/payment/'+data[i].ID_SISWA+'/'+latest_periode+'">'+data[i].NAMA+'</a></td>';
					} else if (data[i].JENIS_PENDIDIKAN == '2') {
						html += '<td class="txt-primary"><a class="txt-primary" href="<?php echo base_url();?>Payment/payment/'+data[i].ID_SISWA+'/'+latest_periode+'">'+data[i].NAMA+'</a></td>';
					} else if (data[i].JENIS_PENDIDIKAN == '1') {
						html += '<td class="txt-success"><a class="txt-success" href="<?php echo base_url();?>Payment/payment/'+data[i].ID_SISWA+'/'+latest_periode+'">'+data[i].NAMA+'</a></td>';
					}
					html +=
					'<td>'+data[i].NIS+'</td>'+
					'<td>Rp. '+data[i].PENDAFTARAN+'</td>'+
					'<td>Rp. '+data[i].TOTAL_PANGKAL+'</td>'+
					'<td>Rp. '+data[i].DIBAYAR_PANGKAL+'</td>';
					if (data[i].KEKURANGAN_PANGKAL == 0) {
						html += '<td>LUNAS</td>';
					} else {
						html += '<td>Rp. '+data[i].KEKURANGAN_PANGKAL+'</td>';
					}
					html +=
					'<td>'+
					'<a href="javascript:log_payment('+data[i].ID+');" class="btn btn-warning btn-icon-anim btn-circle btn-sm"><i class="fa fa-clock-o"></i></a>'+
					'</td>'+
					'</tr>';
				}
				html += 
				'<tr">'+
				'<td>TOTAL</td>'+
				'<td></td>'+
				'<td></td>'+
				'<td>Rp. '+total_pendaftaran+'</td>'+
				'<td>Rp. '+total_pangkal+'</td>'+
				'<td>Rp. '+kekurangan_pangkal+'</td>'+
				'<td></td>'+
				'</tr>';
				$('#show_table_siswa').html(html);
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

	$('#generate_periode').on('change', function() {
		var qID = this.value;
		latest_periode = qID;
		show_heregistrasi(latest_periode);
		notif_sukses('Sukses menampilkan Heregistrasi', 'Jika total undefined mohon tekan tombol refresh');
	});

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
				}
			}
		});
	}

	function refresh(){
		show_heregistrasi(latest_periode);
	}

	function notif_sukses(message, id){
		$.toast({
			heading: message,
			text: id,
			position: 'top-right',
			loaderBg:'#f2b701',
			icon: 'success',
			hideAfter: 5000, 
			stack: 6
		});
	}
</script>