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
									<a href="<?php echo base_url('Data/siswa');?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Data Siswa</a>
								</div>
								<div class="pull-right">
									<a href="javascript:refresh_siswa();" class="btn btn-default btn-icon-anim btn-circle btn-sm"><i class="zmdi zmdi-replay"></i></a>
									<?php foreach($data_siswa->result() as $row ):?>
									<a href="<?php echo base_url('Doc/form_registrasi/')?><?php echo $row->id_siswa; ?>" class="btn btn-default btn-icon-anim btn-circle btn-sm"><i class="fa fa-print"></i></a>
									<?php endforeach; ?>
								</div>
								<!-- <div class="col-sm-2">
									<a href="<?php echo base_url('Data/siswa');?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Data Siswa</a>
								</div>
								<div class="col-sm-6">
									<select class="form-control inline-block" id="jenis_pembayaran" name="generate_periode">
										<option value="0">-Pilih Jenis Pembayaran-</option>
										<option value="0">-Pilih Periode-</option>
										<option value="0">-Pilih Periode-</option>
										<option value="0">-Pilih Periode-</option>

									</select>
								</div>
								<div class="col-sm-6">
									<select class="form-control inline-block" id="generate_periode" name="generate_periode">
									</select>
								</div>
								<div class="col-sm-1">
									
								</div> -->
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
											<div class="form-wrap">
												<form class="form-horizontal" role="form">
													<div class="form-body">
														<?php 
														foreach($data_siswa->result() as $row ):
															?>
															<div class="pull-left">
																<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Data Diri Siswa</h6>
															</div>
															<div class="pull-right">
																<a href="javascript:edit_datadiri();" class="btn btn-info btn-icon left-icon  mr-10"> <i class="zmdi zmdi-edit"></i> <span>Edit</span></a>
															</div>
															<div class="clearfix"></div>
															<hr class="light-grey-hr"/>
															<div id="sukses_update_diri">
																<div class="alert alert-success alert-dismissable">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
																	<i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">Yay! Data Diri berhasil diupdate.</p> 
																	<div class="clearfix"></div>
																</div>
															</div>
															<div id="data_diri_read">
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Nama:</label>
																			<div class="col-md-9">
																				<p class="form-control-static" id="nama_read"> <?php echo $row->nama_siswa; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Nomor Induk:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->no_induk; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!-- /Row -->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Jenis Kelamin:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php if ($row->jk_siswa == 'P') {
																					echo "Perempuan";
																				} elseif ($row->jk_siswa == 'L') {
																					echo "Laki - Laki";
																				} else {
																					echo "INVALID JENIS KELAMIN";
																				}?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Golongan Darah:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->gol_darah; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!-- /Row -->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Tempat Lahir:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->tempat_lahir; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Tanggal Lahir:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"><?php echo date('d F Y', strtotime($row->tanggal_lahir)); ?></p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!-- /Row -->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Agama:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->nama_agama; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Telp:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->telp; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!-- /Row -->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Email:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->email; ?></p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id="data_diri_edit">
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Nama:</label>
																			<div class="col-md-9">
																				<input id="id_siswa" type="hidden" class="form-control" value="<?php echo $row->id_siswa; ?>" id="id_siswa">
																				<input type="text" class="form-control" value="<?php echo $row->nama_siswa; ?>" id="nama_siswa">
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Nomor Induk:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->no_induk; ?>" id="no_induk">
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!-- /Row -->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Jenis Kelamin:</label>
																			<div class="col-md-9">
																				<select class="form-control inline-block" id="jk_siswa">
																					<option value="<?php echo $row->jk_siswa; ?>">
																						<?php if ($row->jk_siswa == 'P') {
																							echo "Perempuan";
																						} elseif ($row->jk_siswa == 'L') {
																							echo "Laki - Laki";
																						} else {
																							echo "-- INVALID JENIS KELAMIN --";
																						}?>
																					</option>
																					<option value="0">-- Pilih Jenis Kelamin --</option>
																					<option value="L">Laki-Laki</option>
																					<option value="P">Perempuan</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Golongan Darah:</label>
																			<div class="col-md-9">
																				<select class="form-control inline-block" id="gol_darah">
																					<option value="<?php echo $row->gol_darah; ?>"><?php echo $row->gol_darah; ?></option>
																					<option value="0">-- Pilih Golongan Darah --</option>
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
																<!-- /Row -->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Tempat Lahir:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->tempat_lahir; ?>" id="tempat_lahir">
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Tanggal Lahir:</label>
																			<div class="col-md-9">
																				<input type="date" class="form-control" value="<?php echo $row->tanggal_lahir; ?>" id="tanggal_lahir">
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!-- /Row -->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Agama:</label>
																			<div class="col-md-9">
																				<!-- <input type="text" class="form-control" value="<?php echo $row->nama_agama; ?>" id="agama"> -->
																				<select class="form-control inline-block" id="agama" name="agama">
																					<option value="<?php echo $row->agama; ?>"><?php echo $row->nama_agama; ?></option>
																					<option value="0">-- Pilih Agama --</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Telp:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->telp; ?>" id="telp">
																			</div>
																		</div>
																	</div>
																</div>
																<!-- /Row -->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Email:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->email; ?>" id="email">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="form-actions mt-10">
																	<div class="row">
																		<div class="col-md-6">
																			<div class="row">
																				<div class="col-md-offset-3 col-md-9">
																					<button type="submit" class="btn btn-success btn-icon left-icon  mr-10" id="update_data_diri"> <i class="zmdi zmdi-edit"></i> <span>Edit Data Diri</span></button>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6"> </div>
																	</div>
																</div>
															</div>

															<div class="seprator-block"></div>

															<div class="pull-left">
																<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Alamat Siswa</h6>
															</div>
															<div class="pull-right">
																<a href="javascript:edit_alamat();" class="btn btn-info btn-icon left-icon  mr-10"> <i class="zmdi zmdi-edit"></i> <span>Edit</span></a>
															</div>
															<div class="clearfix"></div>
															<hr class="light-grey-hr"/>
															<div id="sukses_update_alamat">
																<div class="alert alert-success alert-dismissable">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
																	<i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">Yay! Data Diri berhasil diupdate.</p> 
																	<div class="clearfix"></div>
																</div>
															</div>
															<div id="alamat_read">
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Alamat:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->alamat_siswa; ?> </p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kota:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->kota; ?></p>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kelurahan:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->kelurahan; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kecamatan:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->kecamatan; ?></p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!-- /Row -->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Provinsi:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->provinsi; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kode Pos:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->kd_pos; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
															</div>
															<div id="alamat_edit">
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Alamat:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->alamat_siswa; ?>" id="alamat_siswa">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kota:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->kota; ?>" id="kota">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kelurahan:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->kelurahan; ?>" id="kelurahan">
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kecamatan:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->kecamatan; ?>" id="kecamatan">
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!-- /Row -->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Provinsi:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->provinsi; ?>" id="provinsi">
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kode Pos:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->kd_pos; ?>" id="kd_pos">
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<div class="form-actions mt-10">
																	<div class="row">
																		<div class="col-md-6">
																			<div class="row">
																				<div class="col-md-offset-3 col-md-9">
																					<button type="submit" class="btn btn-success btn-icon left-icon  mr-10" id="update_alamat"> <i class="zmdi zmdi-edit"></i> <span>Edit Alamat</span></button>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6"> </div>
																	</div>
																</div>
															</div>

															<div class="seprator-block"></div>

															<div class="pull-left">
																<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Status Sekolah</h6>
															</div>
															<div class="pull-right">
																<a href="javascript:edit_other();" class="btn btn-info btn-icon left-icon  mr-10"> <i class="zmdi zmdi-edit"></i> <span>Edit</span></a>
															</div>
															<div class="clearfix"></div>
															<hr class="light-grey-hr"/>
															<div id="sukses_update_info">
																<div class="alert alert-success alert-dismissable">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
																	<i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">Yay! Data berhasil diupdate.</p> 
																	<div class="clearfix"></div>
																</div>
															</div>
															<div id="other_read">
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Status Siswa:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php 
																				if($row->status == '0'){
																					echo '<span class="label label-warning">TIDAK AKTIF</span>';
																				} elseif($row->status == '1'){
																					echo '<span class="label label-success">AKTIF</span>';
																				} elseif($row->status == '2'){
																					echo '<span class="label label-primary">LULUS</span>';
																				}?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Jenis Pendidikan:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php 
																				if($row->jenis_pendidikan == '1'){
																					echo '<span class="label label-default">REGULER</span>';
																				} elseif($row->jenis_pendidikan == '2'){
																					echo '<span class="label label-primary">DI RUMAH</span>';
																				} elseif($row->jenis_pendidikan == '3'){
																					echo '<span class="label label-danger">MANDIRI</span>';
																				} else {
																					echo 'Error Jenis Pendidikan Please Check Data';
																				}?></p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!-- /Row -->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kelas:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->nama_kelas; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Periode:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->periode; ?> </p>
																			</div>
																		</div>
																	</div>
																</div>
																<!-- /Row -->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Jenjang:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->jenjang; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Semester:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php if ($row->semester == '1') {
																					echo "Gasal";
																				} elseif ($row->semester == '2') {
																					echo "Genap";
																				} else {
																					echo "Semester Error, Please Check Data";
																				}?> </p>
																			</div>
																		</div>
																	</div>
																</div>
																<!-- /Row -->
															</div>
															<div id="other_edit">
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Status Siswa:</label>
																			<div class="col-md-9">
																				<select class="form-control inline-block" id="status">
																					<option value="<?php echo $row->status; ?>">
																						<?php if ($row->status == '0') {
																							echo "Tidak Aktif";
																						} elseif ($row->status == '1') {
																							echo "Aktif";
																						} elseif ($row->status == '2') {
																							echo "Lulus";
																						}?>
																					</option>
																					<option value="-">-- Pilih Jenis Kelamin --</option>
																					<option value="0">Tidak Aktif</option>
																					<option value="1">Aktif</option>
																					<option value="1">Lulus</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Jenis Pendidikan:</label>
																			<div class="col-md-9">
																				<select class="form-control inline-block" id="jenis_pendidikan">
																					<option value="<?php echo $row->jenis_pendidikan; ?>">
																						<?php if ($row->jenis_pendidikan == '1') {
																							echo "Reguler";
																						} elseif ($row->jenis_pendidikan == '2') {
																							echo "Di Rumah";
																						} elseif ($row->jenis_pendidikan == '3') {
																							echo "Mandiri";
																						}?>
																					</option>
																					<option value="-">-- Pilih Jenis Pendidikan --</option>
																					<option value="1">Reguler</option>
																					<option value="2">Di Rumah</option>
																					<option value="3">Mandiri</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kelas:</label>
																			<div class="col-md-9">
																				<!-- <input type="text" class="form-control" value="<?php echo $row->nama_kelas; ?>" id="nama_kelas"> -->
																				<select class="form-control inline-block" id="kelas">
																					<option value="<?php echo $row->kode_kelas; ?>"><?php echo $row->nama_kelas; ?></option>
																					<option value="-">-- Pilih Kelas --</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Periode:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->kota; ?>" id="kota">
																			</div>
																		</div>
																	</div>
																</div>
																<!-- /Row -->
																<div class="form-actions mt-10">
																	<div class="row">
																		<div class="col-md-6">
																			<div class="row">
																				<div class="col-md-offset-3 col-md-9">
																					<button type="submit" class="btn btn-success btn-icon left-icon  mr-10" id="update_info"> <i class="zmdi zmdi-edit"></i> <span>Edit Info</span></button>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6"> </div>
																	</div>
																</div>
															</div>
															<div class="seprator-block"></div>

															<div class="pull-left">
																<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Meta Data</h6>
															</div>
															<div class="clearfix"></div>
															<hr class="light-grey-hr"/>
															<div id="other_read">
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Created Date:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->date_created; ?> </p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Updated Date:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->date_updated; ?></p>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Created By:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->created_by; ?></p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Tahun Masuk:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->tahun_masuk; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!-- /Row -->
															</div>
														<?php endforeach; ?>
														<?php $nilai = 1;?>
														<?php 
														foreach($wali_siswa->result() as $row ):
															?>
															<div class="seprator-block"></div>

															<div class="pull-left">
																<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Wali Siswa</h6>
															</div>
															<div class="pull-right">
																<a href="javascript:;" data="<?php echo $nilai;?>" name="edit_wali" class="btn btn-info btn-icon left-icon  mr-10"> <i class="zmdi zmdi-edit"></i> <span>Edit</span></a>
															</div>
															<div class="clearfix"></div>
															<hr class="light-grey-hr"/>
															<div id="wali_read<?php echo $nilai;?>">
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Nama Wali:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->nama_wali; ?> </p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Jenis Wali:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php if ($row->jenis_wali == '1') {
																					echo 'Ibu';
																				} elseif ($row->jenis_wali == '2') {
																					echo 'Ayah';
																				} ?></p>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Tempat Lahir:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->tempat_lahir_wali; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Tanggal Lahir:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo date('d F Y', strtotime($row->tanggal_lahir_wali)); ?></p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!-- /Row -->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Agama Wali:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->nama_agama; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kota:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->kota_wali; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kode Pos:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->kode_pos_wali; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Provinsi:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->provinsi_wali; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kecamatan:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->kecamatan_wali; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kelurahan:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->kelurahan_wali; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Pekerjaan:</label>
																			<div class="col-md-9">
																				<p class="form-control-static"> <?php echo $row->pekerjaan_wali; ?> </p>
																			</div>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																	</div>
																	<!--/span-->
																</div>
															</div>
															<!-- <div id="wali_edit<?php echo $nilai;?>">
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Nama Wali:</label>
																			<div class="col-md-9">
																				<input type="hidden" class="form-control" value="<?php echo $row->id_wali; ?>" id="id_wali">
																				<input type="hidden" class="form-control" value="<?php echo $nilai; ?>" id="nilai<?php echo $nilai; ?>">
																				<input type="text" class="form-control" value="<?php echo $row->nama_wali; ?>" id="nama_wali">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Jenis Wali:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->jenis_wali; ?>" id="jenis_wali">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Tempat Lahir:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->tempat_lahir_wali; ?>" id="tempat_lahir_wali">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Tanggal Lahir:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->tanggal_lahir_wali; ?>" id="tanggal_lahir_wali">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Agama Wali:</label>
																			<div class="col-md-9">
																				<select class="form-control inline-block" id="agama_wali" name="agama_wali">
																					<option value="<?php echo $row->agama_wali; ?>"><?php echo $row->nama_agama; ?></option>
																					<option value="0">-- Pilih Agama --</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kota:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->kota_wali; ?>" id="kota_wali">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kode Pos:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->kode_pos_wali; ?>" id="kode_pos_wali">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Provinsi:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->provinsi_wali; ?>" id="provinsi_wali">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kecamatan:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->kecamatan_wali; ?>" id="kecamatan_wali">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Kelurahan:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->kelurahan_wali; ?>" id="kelurahan_wali">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label col-md-3">Pekerjaan:</label>
																			<div class="col-md-9">
																				<input type="text" class="form-control" value="<?php echo $row->pekerjaan_wali; ?>" id="pekerjaan_wali">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																	</div>
																</div>
																<div class="form-actions mt-10">
																	<div class="row">
																		<div class="col-md-6">
																			<div class="row">
																				<div class="col-md-offset-3 col-md-9">
																					<button type="submit" class="btn btn-success btn-icon left-icon  mr-10" data="<?php echo $nilai;?>" name="update_wali"> <i class="zmdi zmdi-edit"></i> <span>Edit Wali</span></button>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6"> </div>
																	</div>
																</div>
															</div> -->
															<?php $nilai++;?>
														<?php endforeach; ?>
														<?php if($nilai == '1'){
															echo '<div class="seprator-block"></div>

															<div class="pull-left">
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Belum Ada Wali Siswa</h6>
															</div>
															<div class="pull-right">
															<a href="javascript:modal_wali();" class="btn btn-primary btn-icon left-icon  mr-10"> <i class="zmdi zmdi-edit"></i> <span>Tambah Wali</span></a>
															</div>';
														} else if($nilai == '2'){
															echo '<div class="seprator-block"></div>

															<div class="pull-left">
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Tambah Wali Siswa</h6>
															</div>
															<div class="pull-right">
															<a href="javascript:modal_wali();" class="btn btn-primary btn-icon left-icon  mr-10"> <i class="zmdi zmdi-edit"></i> <span>Tambah Wali</span></a>
															</div>';
														}?>
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
<div class="modal fade" id="modal_add_wali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Add New Wali</h5>
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
													<div class="col-lg-12">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Jenis Wali</label>
															<select class="form-control inline-block" id="jenis_wali" name="jenis_wali">
																<option value="--">-- Jenis Wali --</option>
																<option value="AYAH">Ayah</option>
																<option value="IBU">Ibu</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-12">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Nama Wali</label>
															<input class="form-control inline-block" id="ket_insert" type="text"/>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Tempat Lahir Wali</label>
															<input class="form-control inline-block" id="nama_object_insert" type="text"/>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Tanggal Lahir Wali</label>
															<input class="form-control inline-block" id="ket_insert" type="date"/>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Agama Wali</label>
															<select class="form-control inline-block" id="ins_agama_wali" name="agama_wali">
																<option value="0">-- Agama Wali --</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Pekerjaan</label>
															<input class="form-control inline-block" id="ket_insert" type="text"/>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-12">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Nomor Hp Wali</label>
															<input class="form-control inline-block" id="nama_object_insert" type="text"/>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Alamat Wali</label>
															<input class="form-control inline-block" id="nama_object_insert" type="text"/>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Kota</label>
															<input class="form-control inline-block" id="ket_insert" type="text"/>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Kode Pos</label>
															<input class="form-control inline-block" id="nama_object_insert" type="text"/>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Provinsi</label>
															<input class="form-control inline-block" id="ket_insert" type="text"/>
														</div>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Kecamatan</label>
															<input class="form-control inline-block" id="nama_object_insert" type="text"/>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Kelurahan</label>
															<input class="form-control inline-block" id="ket_insert" type="text"/>
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
				<button type="button" id="button_clear_siswa" class="btn btn-default">Clear</button>
				<button type="button" id="button_insert_siswa" class="btn btn-primary">Insert</button>
			</div>
		</div>
	</div>
</div>
</html>
<script type="text/javascript">

	dropdown_agama('#ins_agama_wali');
	dropdown_agama('#agama_wali');
	dropdown_agama('#agama');
	var data_diri_read = document.getElementById("data_diri_read");
	var data_diri_edit = document.getElementById("data_diri_edit");
	data_diri_read.style.display = "block";
	data_diri_edit.style.display = "none";
	function edit_datadiri(){
		if (data_diri_read.style.display === "none") {

		} else {
			data_diri_read.style.display = "none";
			data_diri_edit.style.display = "block";
		}
	}

	var alamat_read = document.getElementById("alamat_read");
	var alamat_edit = document.getElementById("alamat_edit");
	alamat_read.style.display = "block";
	alamat_edit.style.display = "none";
	function edit_alamat(){
		if (alamat_read.style.display === "none") {

		} else {
			alamat_read.style.display = "none";
			alamat_edit.style.display = "block";
		}
	}

	var other_read = document.getElementById("other_read");
	var other_edit = document.getElementById("other_edit");
	other_read.style.display = "block";
	other_edit.style.display = "none";
	function edit_other(){
		if (other_read.style.display === "none") {

		} else {
			other_read.style.display = "none";
			other_edit.style.display = "block";
		}
	}

	var notif_update_diri = document.getElementById("sukses_update_diri");
	var notif_update_alamat = document.getElementById("sukses_update_alamat");
	var notif_update_info = document.getElementById("sukses_update_info");
	notif_update_diri.style.display = "none";
	notif_update_alamat.style.display = "none";
	notif_update_info.style.display = "none";
	/*function edit_other(){
		if (other_read.style.display === "none") {

		} else {
			other_read.style.display = "none";
			notif_update.style.display = "block";
		}
	}*/

	var nilai1 = $('#nilai1').val();
	var nilai2 = $('#nilai2').val();

	/*var wali_read1 = document.getElementById("wali_read1");
	var wali_edit1 = document.getElementById("wali_edit1");
	wali_read1.style.display = "block";
	wali_edit1.style.display = "none";

	var wali_read2 = document.getElementById("wali_read2");
	var wali_edit2 = document.getElementById("wali_edit2");
	wali_read2.style.display = "block";
	wali_edit2.style.display = "none";*/

	function dropdown_agama(param){
		$.ajax({
			url     : '<?php echo base_url();?>Data/dropdown_agama',
			async   : false,
			dataType: 'json',
			success : function(data){
				var html = '';
				var i;
				var satu = 1;
				for(i=0; i<data.length; i++){
					$(''+param+'').append(new Option(data[i].nama_agama, data[i].id));
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
				var html = '';
				var i;
				var satu = 1;
				for(i=0; i<data.length; i++){
					$('#kelas').append(new Option(data[i].NAMA_KELAS, data[i].ID_KELAS));
				}
			}
		});
	}

	function modal_wali(){
		$('#modal_add_wali').modal('show');
	}

	$('[name="edit_wali"]').on('click',function(){
		var id = $(this).attr('data');

		if (id=='1') {
			if (wali_read1.style.display === "none") {
			} else {
				wali_read1.style.display = "none";
				wali_edit1.style.display = "block";
			}
		} else if (id='2') {
			if (wali_read2.style.display === "none") {
			} else {
				wali_read2.style.display = "none";
				wali_edit2.style.display = "block";
			}
		}

	});

	function refresh_siswa(){
		location.reload();
	}

	$('[name="update_wali"]').on('click', function() {
		var id = $(this).attr('data');
		alert(id);
		return false;
	});

	$('#update_data_diri').on('click', function() {
		var id_siswa	=$('#id_siswa').val();
		var nama_siswa	=$('#nama_siswa').val();
		var no_induk	=$('#no_induk').val();
		var jk_siswa	=$('#jk_siswa').val();
		var gol_darah	=$('#gol_darah').val();
		var tempat_lahir=$('#tempat_lahir').val();
		var tanggal_lahir=$('#tanggal_lahir').val();
		var agama 		=$('#agama').val();
		var telp 		=$('#telp').val();
		var email		=$('#email').val();

		var r = confirm("Apakah anda yakin untuk update data "+nama_siswa+"?");
		if (r == true) {

			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Data/update_data_siswa')?>",
				dataType : "JSON",
				data : {id_siswa:id_siswa , nama_siswa:nama_siswa, no_induk:no_induk, jk_siswa:jk_siswa, gol_darah:gol_darah, tempat_lahir:tempat_lahir, tanggal_lahir:tanggal_lahir, agama:agama, telp:telp, email:email},
				success: function(data){
					notif_update_diri.style.display = "block";
					// alert('sukses!');
					// location.reload();
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

	$('#update_alamat').on('click', function() {
		var id_siswa	=$('#id_siswa').val();
		var nama_siswa	=$('#nama_siswa').val();
		var alamat_siswa=$('#alamat_siswa').val();
		var kota		=$('#kota').val();
		var kelurahan	=$('#kelurahan').val();
		var kecamatan	=$('#kecamatan').val();
		var provinsi 	=$('#provinsi').val();
		var kd_pos 		=$('#kd_pos').val();

		var r = confirm("Apakah anda yakin untuk update alamat "+nama_siswa+"?");
		if (r == true) {

			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Data/update_alamat_siswa')?>",
				dataType : "JSON",
				data : {id_siswa:id_siswa , alamat_siswa:alamat_siswa, kota:kota, kelurahan:kelurahan, kecamatan:kecamatan, provinsi:provinsi, kd_pos:kd_pos},
				success: function(data){
					notif_update_alamat.style.display = "block";
					// location.reload();
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

	$('#update_info').on('click', function() {
		var id_siswa	=$('#id_siswa').val();
		var nama_siswa	=$('#nama_siswa').val();
		var status		=$('#status').val();
		var jenis_pendidikan	=$('#jenis_pendidikan').val();

		var r = confirm("Apakah anda yakin untuk update info "+nama_siswa+"?");
		if (r == true) {

			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Data/update_info_siswa')?>",
				dataType : "JSON",
				data : {id_siswa:id_siswa, status:status, jenis_pendidikan:jenis_pendidikan},
				success: function(data){
					notif_update_info.style.display = "block";
					// location.reload();
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