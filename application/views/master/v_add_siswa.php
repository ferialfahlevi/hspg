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
							<button type="submit" class="btn btn-success  mr-10 btn_update">Submit</button>
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
																	<option value="--">-- Kelas --</option>
																	<option value="1">I</option>
																	<option value="2">II</option>
																	<option value="3">III</option>
																	<option value="4">IV</option>
																	<option value="5">V</option>
																	<option value="6">VI</option>
																	<option value="7">VII</option>
																	<option value="8">VIII</option>
																	<option value="9">IX</option>
																	<option value="10P">X IPA</option>
																	<option value="10S">X IPS</option>
																	<option value="11P">XI IPA</option>
																	<option value="11S">XI IPS</option>
																	<option value="12P">XII IPA</option>
																	<option value="12S">XII IPS</option>
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
																	<option value="--">-- Jenis Kelamin --</option>
																	<option value="L">Laki - laki</option>
																	<option value="P">Perempuan</option>
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
																	<option value="--">-- Agama --</option>
																	<option value="Islam">Islam</option>
																	<option value="Kristen">Kristen</option>
																	<option value="Katolik">Katolik</option>
																	<option value="Hindu">Hindu</option>
																	<option value="Buddha">Buddha</option>
																	<option value="Konghucu">Konghucu</option>
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
																	<option value="--">-- Gol. Darah --</option>
																	<option value="A">A</option>
																	<option value="B">B</option>
																	<option value="AB">AB</option>
																	<option value="O">O</option>
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
																	<option value="--">-- Agama --</option>
																	<option value="Islam">Islam</option>
																	<option value="Kristen">Kristen</option>
																	<option value="Katolik">Katolik</option>
																	<option value="Hindu">Hindu</option>
																	<option value="Buddha">Buddha</option>
																	<option value="Konghucu">Konghucu</option>
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
																<option value="--">-- Agama --</option>
																<option value="Islam">Islam</option>
																<option value="Kristen">Kristen</option>
																<option value="Katolik">Katolik</option>
																<option value="Hindu">Hindu</option>
																<option value="Buddha">Buddha</option>
																<option value="Konghucu">Konghucu</option>
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
																<option value="0">-- Status --</option>
																<option value="AKTIF">AKTIF</option>
																<option value="TIDAK AKTIF">TIDAK AKTIF</option>
																<option value="LULUS">LULUS</option>
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
																<option value="0">-- Jenis Pendidikan --</option>
																<option value="1">REGULER</option>
																<option value="2">DI RUMAH</option>
																<option value="3">TANPA GURU</option>
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

		var r = confirm("Apakah anda yakin untuk tambah data siswa?");
		if (r == true) {

			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('master/insert_siswa')?>",
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