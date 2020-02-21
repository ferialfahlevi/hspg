<!-- Main Content -->
<div class="page-wrapper">
	<div class="container-fluid">

		<!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h5 class="txt-dark">Siswa Detail</h5>
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
			<div class="col-md-12">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Identitas Siswa</h6>
						</div>
						<div class="pull-right">
							<div class="pull-left inline-block dropdown">
								<a data-toggle="dropdown" href="#" aria-expanded="false" role="button" class="dropdown-toggle btn btn-default btn-icon-anim btn-circle btn-sm pull-left inline-block mr-15">
									<i class="zmdi zmdi-more-vert"></i>
								</a>
								<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
									<li role="presentation">
										<a href="javascript:void(0)" data-toggle="modal" data-target="#update_spp"><i class="icon wb-reply" aria-hidden="true"></i>Generate Periode Pembayaran</a>
									</li>
									<li role="presentation">
										<a href="javascript:void(0)" data-toggle="modal" data-target="#update_spp" class="btn_update"><i class="icon wb-reply" aria-hidden="true"></i>Submit</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<form class="form-horizontal" method="post">
										<div class="form-wrap">
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Nomor Induk</label>
															<div class="col-md-9">
																<input type="text" name="no_induk" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kelas</label>
															<div class="col-md-9">
																<select class="form-control" id="kelas" name="id_kelas">
																	
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Nama</label>
															<div class="col-md-9">
																<input type="text" name="nama_siswa" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tanggal Lahir</label>
															<div class="col-md-9">
																<input type="date" name="tanggal_lahir" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Jenis Kelamin</label>
															<div class="col-md-9">
																<select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="jk" name="jk_siswa">
																	
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tempat Lahir</label>
															<div class="col-md-9">
																<input type="text" name="tempat_lahir" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Agama</label>
															<div class="col-md-9">
																<select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="agama_siswa" name="agama">

																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Golongan Darah</label>
															<div class="col-md-9">
																<select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="goldar" name="gol_darah">
																	
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>

												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>Alamat</h6>
												<hr class="light-grey-hr"/>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Alamat</label>
															<div class="col-md-9">
																<input type="text" name="alamat_siswa" class="form-control">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kode Pos</label>
															<div class="col-md-9">
																<input type="text" name="kd_pos" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kota</label>
															<div class="col-md-9">
																<input type="text" name="kota" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Provinsi</label>
															<div class="col-md-9">
																<input type="text" name="provinsi" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kecamatan</label>
															<div class="col-md-9">
																<input type="text" name="kecamatan" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kelurahan</label>
															<div class="col-md-9">
																<input type="text" name="kelurahan" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->

												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Identitas Orang Tua (Ayah)</h6>
												<hr class="light-grey-hr"/>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Nama Ayah</label>
															<div class="col-md-9">
																<input type="text" name="nama_ayah" class="form-control">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Agama</label>
															<div class="col-md-9">
																<select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="agama_ayah" name="agama_ayah">
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tempat Lahir</label>
															<div class="col-md-9">
																<input type="text" name="tempat_lahir_ayah" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tanggal Lahir</label>
															<div class="col-md-9">
																<input type="date" name="tanggal_lahir_ayah" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">No. HP</label>
															<div class="col-md-9">
																<input type="text" name="no_hp_ayah" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Pekerjaan</label>
															<div class="col-md-9">
																<input type="text" name="pekerjaan_ayah" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
											</div>

											<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Identitas Orang Tua (Ibu)</h6>
											<hr class="light-grey-hr"/>
											<!-- /Row -->
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Nama Ibu</label>
														<div class="col-md-9">
															<input type="text" name="nama_ibu" class="form-control">
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Agama</label>
														<div class="col-md-9">
															<select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="agama_ibu" name="agama_ibu">
															</select>
														</div>
													</div>
												</div>
												<!--/span-->
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Tempat Lahir</label>
														<div class="col-md-9">
															<input type="text" name="tempat_lahir_ibu" class="form-control">
														</div>
													</div>
												</div>
												<!--/span-->
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Tanggal Lahir</label>
														<div class="col-md-9">
															<input type="date" name="tanggal_lahir_ibu" class="form-control">
														</div>
													</div>
												</div>
												<!--/span-->
											</div>
											<!-- /Row -->
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">No. HP</label>
														<div class="col-md-9">
															<input type="text" name="no_hp_ibu" class="form-control">
														</div>
													</div>
												</div>
												<!--/span-->
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Pekerjaan</label>
														<div class="col-md-9">
															<input type="text" name="pekerjaan_ibu" class="form-control">
														</div>
													</div>
												</div>
												<!--/span-->
											</div>
											<!-- /Row -->

											<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Informasi Lain</h6>
											<hr class="light-grey-hr"/>
											<!-- /Row -->
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">No. Telp</label>
														<div class="col-md-9">
															<input type="text" name="telp" class="form-control">
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Email</label>
														<div class="col-md-9">
															<input type="text" name="email" class="form-control">
														</div>
													</div>
												</div>
												<!--/span-->
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Status Siswa</label>
														<div class="col-md-9">
															<select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="status" name="status">
															</select>
														</div>
													</div>
												</div>
												<!--/span-->
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Jenis Pendidikan</label>
														<div class="col-md-9">
															<select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="jenis_pendidikan" name="jenis_pendidikan">
															</select>
														</div>
													</div>
												</div>
												<!--/span-->
											</div>
											<!-- /Row -->
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-3">Tahun Masuk</label>
														<div class="col-md-9">
															<input type="text" name="tahun_masuk" class="form-control">
														</div>
													</div>
												</div>
												<!--/span-->
											</div>
											<!-- /Row -->
										</div>
										<div class="form-actions mt-10">
											<div class="row">
												<div class="col-md-6">
													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<button type="submit" class="btn btn-success  mr-10 btn_update">Submit</button>
														</div>
													</div>
												</div>
												<div class="col-md-6"> </div>
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

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Pembayaran</h6>
						</div>
						<div class="pull-right">
							<div class="pull-left inline-block dropdown">
								<a data-toggle="dropdown" href="#" aria-expanded="false" role="button" class="dropdown-toggle btn btn-default btn-icon-anim btn-circle btn-sm pull-left inline-block mr-15">
									<i class="zmdi zmdi-more-vert"></i>
								</a>
								<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
									<li role="presentation">
										<a href="javascript:void(0)" data-toggle="modal" data-target="#update_spp"><i class="icon wb-reply" aria-hidden="true"></i>Generate Periode Pembayaran</a>
									</li>
									<li role="presentation">
										<a href="javascript:void(0)" data-toggle="modal" data-target="#update_spp" class="btn_update"><i class="icon wb-reply" aria-hidden="true"></i>Submit</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<form class="form-horizontal" method="post">
										<div class="form-wrap">
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Nomor Induk</label>
															<div class="col-md-9">
																<input type="text" name="no_induk" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kelas</label>
															<div class="col-md-9">
																<select class="form-control" id="kelas" name="id_kelas">
																	
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Nama</label>
															<div class="col-md-9">
																<input type="text" name="nama_siswa" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tanggal Lahir</label>
															<div class="col-md-9">
																<input type="date" name="tanggal_lahir" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Jenis Kelamin</label>
															<div class="col-md-9">
																<select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="jk" name="jk_siswa">
																	
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tempat Lahir</label>
															<div class="col-md-9">
																<input type="text" name="tempat_lahir" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Agama</label>
															<div class="col-md-9">
																<select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="agama_siswa" name="agama">

																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Golongan Darah</label>
															<div class="col-md-9">
																<select class="form-control" data-placeholder="Choose a Category" tabindex="1" id="goldar" name="gol_darah">
																	
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>

												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>Alamat</h6>
												<hr class="light-grey-hr"/>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Alamat</label>
															<div class="col-md-9">
																<input type="text" name="alamat_siswa" class="form-control">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kode Pos</label>
															<div class="col-md-9">
																<input type="text" name="kd_pos" class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kota</label>
															<div class="col-md-9">
																<input type="text" name="kota" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Provinsi</label>
															<div class="col-md-9">
																<input type="text" name="provinsi" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kecamatan</label>
															<div class="col-md-9">
																<input type="text" name="kecamatan" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kelurahan</label>
															<div class="col-md-9">
																<input type="text" name="kelurahan" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
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
<script type="text/javascript">
	get_detail_siswa();
	function get_detail_siswa(){
		$.ajax({
			type    : 'ajax',
			url  : "<?php echo base_url();?>master/get_siswa_detail/"+<?php echo $this->uri->segment('3');?>,
			async   : false,
			dataType : "JSON",
			success: function(data){
				dropdown_kelas();
				function dropdown_kelas(){
					$('#kelas').append(new Option(data.nama_kelas, data.id_kelas));
					$('#kelas').append(new Option("== Pilih Kelas ==", "0"));
					$('#kelas').append(new Option("I", "1"));
					$('#kelas').append(new Option("II", "2"));
					$('#kelas').append(new Option("III", "3"));
					$('#kelas').append(new Option("IV", "4"));
					$('#kelas').append(new Option("V", "5"));
					$('#kelas').append(new Option("VI", "6"));
					$('#kelas').append(new Option("VII", "7"));
					$('#kelas').append(new Option("VIII", "8"));
					$('#kelas').append(new Option("IX", "9"));
					$('#kelas').append(new Option("X IPA", "10P"));
					$('#kelas').append(new Option("X IPS", "10S"));
					$('#kelas').append(new Option("XI IPA", "11P"));
					$('#kelas').append(new Option("XI IPS", "11S"));
					$('#kelas').append(new Option("XII IPA", "12P"));
					$('#kelas').append(new Option("XII IPS", "12S"));
				}
				dropdown_jk();
				function dropdown_jk(){
					if (data.jk_siswa == 'P') {
						jenis_kelamin = 'Perempuan';
					} else if (data.jk_siswa == 'L') {
						jenis_kelamin = 'Laki-laki';
					}
					$('#jk').append(new Option(jenis_kelamin, data.jk_siswa));
					$('#jk').append(new Option("== Jenis Kelamin ==", "0"));
					$('#jk').append(new Option("Laki-laki", "L"));
					$('#jk').append(new Option("Perempuan", "P"));
				}
				dropdown_agama();
				function dropdown_agama(){
					$('#agama_siswa').append(new Option(data.agama, data.agama));
					$('#agama_siswa').append(new Option("== Pilih Agama ==", "0"));
					$('#agama_siswa').append(new Option("Islam", "Islam"));
					$('#agama_siswa').append(new Option("Kristen", "Kristen"));
					$('#agama_siswa').append(new Option("Katolik", "Katolik"));
					$('#agama_siswa').append(new Option("Hindu", "Hindu"));
					$('#agama_siswa').append(new Option("Buddha", "Buddha"));
					$('#agama_siswa').append(new Option("Konghucu", "Konghucu"));
				}
				dropdown_goldar();
				function dropdown_goldar(){
					$('#goldar').append(new Option(data.gol_darah, data.gol_darah));
					$('#goldar').append(new Option("== Pilih Golongan Darah ==", "0"));
					$('#goldar').append(new Option("A", "A"));
					$('#goldar').append(new Option("B", "B"));
					$('#goldar').append(new Option("AB", "AB"));
					$('#goldar').append(new Option("O", "O"));
				}
				dropdown_agama_ayah();
				function dropdown_agama_ayah(){
					$('#agama_ayah').append(new Option(data.agama_ayah, data.agama_ayah));
					$('#agama_ayah').append(new Option("== Pilih Agama ==", "0"));
					$('#agama_ayah').append(new Option("Islam", "Islam"));
					$('#agama_ayah').append(new Option("Kristen", "Kristen"));
					$('#agama_ayah').append(new Option("Katolik", "Katolik"));
					$('#agama_ayah').append(new Option("Hindu", "Hindu"));
					$('#agama_ayah').append(new Option("Buddha", "Buddha"));
					$('#agama_ayah').append(new Option("Konghucu", "Konghucu"));
				}
				dropdown_agama_ibu();
				function dropdown_agama_ibu(){
					$('#agama_ibu').append(new Option(data.agama_ibu, data.agama_ibu));
					$('#agama_ibu').append(new Option("== Pilih Agama ==", "0"));
					$('#agama_ibu').append(new Option("Islam", "Islam"));
					$('#agama_ibu').append(new Option("Kristen", "Kristen"));
					$('#agama_ibu').append(new Option("Katolik", "Katolik"));
					$('#agama_ibu').append(new Option("Hindu", "Hindu"));
					$('#agama_ibu').append(new Option("Buddha", "Buddha"));
					$('#agama_ibu').append(new Option("Konghucu", "Konghucu"));
				}
				dropdown_jenis_pendidikan();
				function dropdown_jenis_pendidikan(){
					if (data.jenis_pendidikan == '1') {
						jp = 'Reguler';
					} else if (data.jenis_pendidikan == '2'){
						jp = 'Di Rumah';
					} else {
						jp = 'Mandiri';
					}
					$('#jenis_pendidikan').append(new Option(jp, data.jenis_pendidikan));
					$('#jenis_pendidikan').append(new Option("== Pilih Pendidikan ==", "0"));
					$('#jenis_pendidikan').append(new Option("Reguler", "1"));
					$('#jenis_pendidikan').append(new Option("Di Rumah", "2"));
					$('#jenis_pendidikan').append(new Option("Mandiri", "3"));
				}
				dropdown_status();
				function dropdown_status(){
					$('#status').append(new Option(data.status, data.status));
					$('#status').append(new Option("== Pilih Status ==", "0"));
					$('#status').append(new Option("AKTIF", "AKTIF"));
					$('#status').append(new Option("TIDAK AKTIF", "TIDAK AKTIF"));
				}

				$.each(data,function(){
					$('[name="no_induk"]').val(data.no_induk);
					$('[name="nama_siswa"]').val(data.nama_siswa);
					$('[name="nama_kelas"]').val(data.nama_kelas);
					$('[name="id_kelas"]').val(data.id_kelas);

					$('[name="jk_siswa"]').val(data.jk_siswa);

					$('[name="gol_darah"]').val(data.gol_darah);
					$('[name="tempat_lahir"]').val(data.tempat_lahir);
					$('[name="tanggal_lahir"]').val(data.tanggal_lahir);
					$('[name="alamat_siswa"]').val(data.alamat_siswa);
					$('[name="kd_pos"]').val(data.kd_pos);
					$('[name="kecamatan"]').val(data.kecamatan);
					$('[name="kelurahan"]').val(data.kelurahan);
					$('[name="kota"]').val(data.kota);
					$('[name="provinsi"]').val(data.provinsi);

					$('[name="nama_ayah"]').val(data.nama_ayah);
					$('[name="nama_ibu"]').val(data.nama_ibu);
					$('[name="no_hp_ayah"]').val(data.no_hp_ayah);
					$('[name="no_hp_ibu"]').val(data.no_hp_ibu);
					$('[name="pekerjaan_ayah"]').val(data.pekerjaan_ayah);
					$('[name="pekerjaan_ibu"]').val(data.pekerjaan_ibu);

					$('[name="tanggal_lahir_ayah"]').val(data.tanggal_lahir_ayah);
					$('[name="tanggal_lahir_ibu"]').val(data.tanggal_lahir_ibu);

					$('[name="tempat_lahir_ayah"]').val(data.tempat_lahir_ayah);
					$('[name="tempat_lahir_ibu"]').val(data.tempat_lahir_ibu);


					$('[name="telp"]').val(data.telp);
					$('[name="email"]').val(data.email);
					$('[name="status"]').val(data.status);
					$('[name="tahun_masuk"]').val(data.tahun_masuk);
				});
			}
		});
}

	//Simpan data siswa
	$('.btn_update').on('click',function(){
		var no_induk 	= $('[name="no_induk"]').val();
		var nama_siswa 	= $('[name="nama_siswa"]').val();
		var id_kelas 	= $('[name="id_kelas"]').val();
		var jk_siswa 	= $('[name="jk_siswa"]').val();
		var agama 		= $('[name="agama"]').val();
		var gol_darah 	= $('[name="gol_darah"]').val();
		var tempat_lahir= $('[name="tempat_lahir"]').val();
		var tanggal_lahir 	= $('[name="tanggal_lahir"]').val();
		var alamat_siswa= $('[name="alamat_siswa"]').val();
		var kota 		= $('[name="kota"]').val();
		var kd_pos		= $('[name="kd_pos"]').val();
		var provinsi 	= $('[name="provinsi"]').val();
		var kecamatan 	= $('[name="kecamatan"]').val();
		var kelurahan 	= $('[name="kelurahan"]').val();

		var nama_ayah 	= $('[name="nama_ayah"]').val();
		var tempat_lahir_ayah 	= $('[name="tempat_lahir_ayah"]').val();
		var tanggal_lahir_ayah 	= $('[name="tanggal_lahir_ayah"]').val();
		var agama_ayah 	= $('[name="agama_ayah"]').val();
		var no_hp_ayah 	= $('[name="no_hp_ayah"]').val();
		var pekerjaan_ayah	= $('[name="pekerjaan_ayah"]').val();

		var nama_ibu 	= $('[name="nama_ibu"]').val();
		var tempat_lahir_ibu	= $('[name="tempat_lahir_ibu"]').val();
		var tanggal_lahir_ibu 	= $('[name="tanggal_lahir_ibu"]').val();
		var agama_ibu 	= $('[name="agama_ibu"]').val();
		var no_hp_ibu 	= $('[name="no_hp_ibu"]').val();
		var pekerjaan_ibu	= $('[name="pekerjaan_ibu"]').val();

		var telp 		= $('[name="telp"]').val();
		var email 		= $('[name="email"]').val();
		var status 		= $('[name="status"]').val();
		var jenis_pendidikan 	= $('[name="jenis_pendidikan"]').val();
		var tahun_masuk = $('[name="tahun_masuk"]').val();

		/*if (<?php echo $this->uri->segment('2');?> == 'add_siswa') {
			alert("tambah!");
		} else {
			alert("update!");
		}*/

		var r = confirm("Apakah anda yakin untuk update data siswa?");
		if (r == true) {

		$.ajax({
			type : "POST",
			url  : "<?php echo base_url('master/update_siswa')?>",
			dataType : "JSON",
			data : {no_induk:no_induk , nama_siswa:nama_siswa, id_kelas:id_kelas, jk_siswa:jk_siswa, agama:agama, gol_darah:gol_darah, tempat_lahir:tempat_lahir, tanggal_lahir:tanggal_lahir, alamat_siswa:alamat_siswa, kota:kota, kd_pos:kd_pos, provinsi:provinsi, kecamatan:kecamatan, kelurahan:kelurahan, nama_ayah:nama_ayah, tempat_lahir_ayah:tempat_lahir_ayah, tanggal_lahir_ayah:tanggal_lahir_ayah, agama_ayah:agama_ayah, no_hp_ayah:no_hp_ayah, pekerjaan_ayah:pekerjaan_ayah, nama_ibu:nama_ibu, tempat_lahir_ibu:tempat_lahir_ibu, tanggal_lahir_ibu:tanggal_lahir_ibu, agama_ibu:agama_ibu, no_hp_ibu:no_hp_ibu, pekerjaan_ibu:pekerjaan_ibu, telp:telp, email:email, status:status, jenis_pendidikan:jenis_pendidikan, tahun_masuk:tahun_masuk},
			success: function(data){
				alert('sukses!');
			},
			error: function(xhr, status, error){
				var errorMessage = xhr.status + ': ' + xhr.statusText
                    // alert('Error - ' + errorMessage);
                    $('#errorMessage').html(errorMessage);
                }

            });
		}
		return false;
	});
</script>