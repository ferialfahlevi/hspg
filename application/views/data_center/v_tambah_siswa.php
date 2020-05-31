<div class="container-fluid">

	<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h5 class="txt-dark">Tambah Siswa <i class="fa fa-child mr-20"></i></h5>
		</div>
		<div class="col-lg-5 col-sm-8 col-md-8 col-xs-12">
		</div>
		<!-- Breadcrumb -->
		<div class="col-lg-4 col-sm-8 col-md-8 col-xs-12">
		</div>
		<!-- /Breadcrumb -->
	</div>
	<!-- /Title -->
	<?php echo $this->session->flashdata('sukses');?>
	<!-- Row -->
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default card-view">
				<div class="panel-group accordion-struct accordion-style-1" id="accordion_3" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading_11">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_3" href="#collapse_11" aria-expanded="false"  ><div class="icon-ac-wrap pr-20"><span class="plus-ac"><i class="ti-plus"></i></span><span class="minus-ac"><i class="ti-minus"></i></span></div>Generate Nomor Induk Siswa</a>
						</div>
						<div id="collapse_11" class="panel-collapse collapse" role="tabpanel">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-12">
											<div class="row">
												<div class="col-sm-4">
													<select class="form-control" id="kode_cabang">
														<option value="09">Jakarta Selatan</option>
													</select>
													<span class="help-block">Cabang</span> 
												</div>
												<div class="col-sm-4">
													<select class="form-control" id="jenjang">
														<option value="00">-- Pilih Jenjang --</option>
														<option value="01">SD</option>
														<option value="02">SMP</option>
														<option value="03">SMA IPA</option>
														<option value="04">SMA IPS</option>
													</select>
													<span class="help-block">Jenjang</span> 
												</div>
												<div class="col-sm-4">
													<button class="btn btn-block  btn-success btn-rounded" onclick="generate_nik()" id="button_detail_product"> Generate NIS </button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-default card-view">
				<div class="panel-group accordion-struct accordion-style-1" id="accordion_2" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading_12">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_2" href="#collapse_12" aria-expanded="false" ><div class="icon-ac-wrap pr-20"><span class="plus-ac"><i class="ti-plus"></i></span><span class="minus-ac"><i class="ti-minus"></i></span></div>Tata Cara Penggunaan</a>
						</div>
						<div id="collapse_12" class="panel-collapse collapse" role="tabpanel">
							<div class="panel-body pa-15"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Row -->
	<form action="<?php echo base_url('Data/insert_siswa');?>" method="POST">
		<!-- Row -->
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Data Diri</h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="form-wrap">
										<div class="form-group">
											<label class="control-label mb-10 text-left">Nomor Induk</label>
											<input type="text" class="form-control" id="nomor_induk_insert" name="nomor_induk_insert" required>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Nama Lengkap</label>
													<input type="text" class="form-control" id="nama_lengkap_insert" name="nama_lengkap_insert" required>
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Nama Panggilan</label>
													<input type="text" class="form-control" id="nama_panggilan_insert" name="nama_panggilan_insert">
												</div>
											</div>
											<!--/span-->
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Tempat Lahir</label>
													<input type="text" class="form-control" id="tempat_lahir_insert" required name="tempat_lahir_insert">
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Tanggal Lahir</label>
													<input type="date" class="form-control" id="tanggal_lahir_insert" name="tanggal_lahir_insert" required>
												</div>
											</div>
											<!--/span-->
										</div>
										<div class="form-group">
											<label class="control-label mb-10 text-left">Jenis Kelamin</label>
											<select class="form-control inline-block" id="jk_kelamin_insert" name="jk_kelamin_insert">
												<option value="0">-- Pilih Jenis Kelamin --</option>
												<option value="L">Laki-Laki</option>
												<option value="P">Perempuan</option>
											</select>
										</div>
										<div class="row">
											<div class="col-md-6">
												<label class="control-label mb-10 text-left">Agama</label>
												<select class="form-control inline-block" id="agama_insert" name="agama_insert">
													<option value="0">-- Pilih Agama --</option>
												</select>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Golongan Darah</label>
													<select class="form-control inline-block" id="gol_darah_insert" name="gol_darah_insert">
														<option value="0">-- Pilih Golongan Darah --</option>
														<option value="A">A</option>
														<option value="B">B</option>
														<option value="AB">AB</option>
														<option value="O">O</option>
													</select>
												</div>
											</div>
											<!--/span-->
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Hobi</label>
													<input type="text" class="form-control" id="hobi_insert" name="hobi_insert">
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Cita-Cita</label>
													<input type="text" class="form-control" id="cita_cita_insert" name="cita_cita_insert">
												</div>
											</div>
											<!--/span-->
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Alasan</label>
													<textarea class="form-control" rows="2" id="alasan_insert" name="alasan_insert"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Tempat Tinggal</h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="form-wrap">
										<div class="form-group">
											<label class="control-label mb-10 text-left">Alamat</label>
											<textarea class="form-control" rows="5" name="alamat_insert"></textarea>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Kelurahan</label>
													<input type="text" class="form-control" name="kelurahan_insert">
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Kecamatan</label>
													<input type="text" class="form-control" name="kecamatan_insert">
												</div>
											</div>
											<!--/span-->
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Kota</label>
													<input type="text" class="form-control" name="kota_insert">
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Provinsi</label>
													<input type="text" class="form-control" name="provinsi_insert">
												</div>
											</div>
											<!--/span-->
										</div>
										<div class="form-group">
											<label class="control-label mb-10 text-left">Kode Pos</label>
											<input type="text" class="form-control" name="kd_pos_insert">
										</div>
									</div>
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
			<div class="col-md-12">
				<div class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="form-wrap">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">No. Telp</label>
													<input type="text" class="form-control" name="telp_insert">
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Email</label>
													<input type="text" class="form-control" name="email_insert">
												</div>
											</div>
											<!--/span-->
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Status Siswa</label>
													<select class="form-control inline-block" id="status_siswa" name="status_insert">
														<option value="0">-- Status --</option>
														<option value="1">Aktif</option>
														<option value="0">Tidak Aktif</option>
														<option value="2">Lulus</option>
													</select>
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Jenis Pendidikan</label>
													<select class="form-control inline-block" id="jenis_pendidikan" name="jenis_pendidikan_insert">
														<option value="1">-- Pilih Jenis Pendidikan --</option>
														<option value="1">Reguler</option>
														<option value="2">Di Rumah</option>
														<option value="3">Mandiri</option>
													</select>
												</div>
											</div>
											<!--/span-->
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Kelas</label>
													<select class="form-control inline-block" id="kelas" name="kelas_insert">
														<option value="0">-- Pilih Kelas --</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
											</div>
											<!--/span-->
										</div>
										<div class="form-actions mt-10">
											<button type="submit" class="btn btn-success  mr-10"> Tambah Siswa Baru</button>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Row -->
	</form>
</div>
<script type="text/javascript">
	dropdown_agama();
	function dropdown_agama(){
		$.ajax({
			url     : '<?php echo base_url();?>Data/dropdown_agama',
			async   : false,
			dataType: 'json',
			success : function(data){
				var i;
				for(i=0; i<data.length; i++){
					$('#agama_insert').append(new Option(data[i].nama_agama, data[i].id));
				}
			}
		});
	}

	dropdown_kelas();
	function dropdown_kelas(){
		$.ajax({
			url     : '<?php echo base_url();?>Data/dropdown_kelas',
			async   : false,
			dataType: 'json',
			success : function(data){
				var i;
				for(i=0; i<data.length; i++){
					$('#kelas').append(new Option(data[i].NAMA_KELAS, data[i].ID_KELAS));
				}
			}
		});
	}

	function generate_nik(){
		var kode_cabang	=$('#kode_cabang').val();
		var jenjang	=$('#jenjang').val();
		var current_year = '<?php echo date('y');?>';
		// var current_year = '19';
		// alert(current_year);
		if (jenjang == '00') {
			alert("Pilih jenjang yang benar");
		} else {
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Data/generate_nik')?>",
				dataType : "JSON",
				data : {kode_cabang:kode_cabang, jenjang:jenjang, current_year:current_year},
				success: function(data){
					var final;
					if (data.length == 0) {
						final = kode_cabang+'.'+current_year+'.'+jenjang+'.'+'001';
					} else if (data.length > 0) {
						var i;
						var str;
						var nik;
						for(i=0; i<data.length; i++){
							str = data[i].LAST;
							nik = data[i].NIK;
							total = data[i].TOTAL;
						}
						if (str.substring(0, 2) == '00') {
							baru = '00'+total;
							if (baru.length > 3) {
								// alert(nik+'0'+total);
								final = nik+'0'+total;
							} else {
								// alert(nik+'00'+total);
								final = nik+'00'+total;
							}
						} else if (str.substring(0, 1) == '0') {
							baru = '0'+total;
							if (baru.length>3) {
								// alert(nik+total);
								final = nik+total;
							} else {
								// alert(nik+'0'+total);
								final = nik+'0'+total;
							}
						} else {
							// alert(nik+total);
							final = nik+total;
						}
					}
					$('#nomor_induk_insert').val(final);
					alert('SUKSES');

				},
				error: function(xhr, status, error){
					var errorMessage = xhr.status + ': ' + xhr.statusText
					alert('Error - ' + errorMessage);
                    // $('#errorMessage').html(errorMessage);
                }

            });
		}
	}
</script>