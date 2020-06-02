<!DOCTYPE html>
<html>
<body style="background-color:white;">
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- Row -->
	<div class="row">
		<div class="col-lg-3 col-xs-12">
			<div class="panel panel-default card-view  pa-0">
				<div class="panel-heading">
					<div class="pull-left">
						<a href="<?php echo base_url('Data/siswa');?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Data Siswa</a>
					</div>
					<div class="pull-right">
						<!-- <a href="javascript:refresh_siswa();" class="btn btn-default btn-icon-anim btn-circle btn-sm"><i class="zmdi zmdi-replay"></i></a> -->
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">
					<div class="panel-body  pa-0">
						<?php foreach($data_siswa->result() as $row ): ?>
							<div class="profile-box">
								<div class="profile-info text-center">
									<h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-success"><?php echo $row->nama_siswa; $nama_siswa = $row->nama_siswa;?></h5>
									<h6 class="block capitalize-font pb-20">Kelas <?php echo $row->nama_kelas; ?></h6>
								</div>	
								<div class="social-info">
									<div class="row">
										<div class="col-xs-4 text-center">
											<span class="counts-text block">Jenjang</span>
											<span class="counts block head-font"><?php echo $row->jenjang; ?></span>
										</div>
										<div class="col-xs-4 text-center">
											<span class="counts-text block">Pendidikan</span>
											<span class="counts block head-font">
												<?php 
												if($row->jenis_pendidikan == '1'){
													echo 'Reguler';
												} elseif($row->jenis_pendidikan == '2'){
													echo 'Di Rumah';
												} elseif($row->jenis_pendidikan == '3'){
													echo 'Mandiri';
												} else {
													echo 'Error/%#';
												}?>
											</span>
										</div>
										<div class="col-xs-4 text-center">
											<span class="counts-text block">Status</span>
											<span class="counts block head-font">
												<?php 
												if($row->status == '0'){
													echo 'Tidak Aktif';
												} elseif($row->status == '1'){
													echo 'Aktif';
												} elseif($row->status == '2'){
													echo 'Lulus';
												} elseif($row->status == '3'){
													echo 'Pindah';
												}?>
											</span>
										</div>
									</div>
								</div>
								<div class="social-info">
									<div class="row">
										<div class="col-xs-4 text-center">
											<?php foreach($data_siswa->result() as $row ):?>
												<a href="<?php echo base_url('Doc/form_registrasi/')?><?php echo $row->id_siswa; ?>" class="btn btn-default btn-icon-anim btn-circle btn-sm"><i class="fa fa-print"></i></a>
											<?php endforeach; ?>
											<span class="counts-text block">Cetak Formulir</span>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#" class="btn btn-default btn-icon-anim btn-circle btn-sm"><i class="fa fa-money"></i></a>
											<span class="counts-text block">Kelola Pembayaran</span>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#" class="btn btn-default btn-icon-anim btn-circle btn-sm"><i class="fa fa-graduation-cap"></i></a>
											<span class="counts-text block">Kelola Nilai</span>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-xs-12">
			<div class="panel panel-default card-view pa-0">
				<div class="panel-wrapper collapse in">
					<div  class="panel-body pb-0">
						<div  class="tab-struct custom-tab-1">
							<ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
								<li class="active" role="presentation"><a  data-toggle="tab" id="profile_tab_8" role="tab" href="#tab_pembayaran" aria-expanded="false"><span>Pembayaran</span></a></li>
								<li  role="presentation" class="next"><a aria-expanded="true"  data-toggle="tab" role="tab" id="follo_tab_8" href="#tabx_nilai"><span>Nilai[ON DEVELOPMENT]</span></a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="photos_tab_8" role="tab" href="#tab_diri" aria-expanded="false"><span>Data Diri</span></a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="earning_tab_8" role="tab" href="#tab_wali" aria-expanded="false"><span>Data Wali</span></a></li>
							</ul>
							<div class="tab-content" id="myTabContent_8">
								<div  id="tab_pembayaran" class="tab-pane fade active in" role="tabpanel">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="panel panel-primary card-view">
											<div class="panel-heading small-panel-heading relative">
												<h6 class="panel-title txt-light text-center">PEMBAYARAN NON SPP</h6>
											</div>
										</div>
									</div>
									<div id="show_spp_pembayaran">
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="panel panel-primary card-view">
											<div class="panel-heading small-panel-heading relative">
												<h6 class="panel-title txt-light text-center">PEMBAYARAN SPP</h6>
											</div>
										</div>
									</div>
									<div id="show_non_spp_pembayaran">
									</div>
								</div>
								<div  id="tab_nilai" class="tab-pane fade" role="tabpanel">
									<div class="row">
										<div class="col-lg-12">
											<div class="followers-wrap">
												<ul class="followers-list-wrap">
													<li class="follow-list">
														<div class="follo-body">
															<div class="follo-data">
																<img class="user-img img-circle"  src="dist/img/user.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Clay Masse</span>
																	<span class="time block truncate txt-grey">No one saves us but ourselves.</span>
																</div>
																<button class="btn btn-success pull-right btn-xs fixed-btn">Follow</button>
																<div class="clearfix"></div>
															</div>
															<div class="follo-data">
																<img class="user-img img-circle"  src="dist/img/user1.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Evie Ono</span>
																	<span class="time block truncate txt-grey">Unity is strength</span>
																</div>
																<button class="btn btn-success btn-outline pull-right btn-xs fixed-btn">following</button>
																<div class="clearfix"></div>
															</div>
															<div class="follo-data">
																<img class="user-img img-circle"  src="dist/img/user2.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Madalyn Rascon</span>
																	<span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
																</div>
																<button class="btn btn-success btn-outline pull-right btn-xs fixed-btn">following</button>
																<div class="clearfix"></div>
															</div>
															<div class="follo-data">
																<img class="user-img img-circle"  src="dist/img/user3.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Mitsuko Heid</span>
																	<span class="time block truncate txt-grey">I’m thankful.</span>
																</div>
																<button class="btn btn-success pull-right btn-xs fixed-btn">Follow</button>
																<div class="clearfix"></div>
															</div>
															<div class="follo-data">
																<img class="user-img img-circle"  src="dist/img/user.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Ezequiel Merideth</span>
																	<span class="time block truncate txt-grey">Patience is bitter.</span>
																</div>
																<button class="btn btn-success pull-right btn-xs fixed-btn">Follow</button>
																<div class="clearfix"></div>
															</div>
															<div class="follo-data">
																<img class="user-img img-circle"  src="dist/img/user1.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">Jonnie Metoyer</span>
																	<span class="time block truncate txt-grey">Genius is eternal patience.</span>
																</div>
																<button class="btn btn-success btn-outline pull-right btn-xs fixed-btn">following</button>
																<div class="clearfix"></div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div  id="tab_diri" class="tab-pane fade" role="tabpanel">
									<div class="col-sm-12">
										<div class="panel-wrapper collapse in">
											<div class="panel-body">
												<div class="row">
													<div class="col-md-12">
														<div class="form-wrap">
															<form class="form-horizontal" role="form">
																<div class="form-body">
																	<?php foreach($data_siswa->result() as $row ): ?>
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
																							<input type="text" readonly class="form-control" value="<?php echo $row->no_induk; ?>" id="no_induk">
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

																		<div class="clearfix"></div>
																		<hr class="light-grey-hr"/>
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
																		<div class="clearfix"></div>
																		<hr class="light-grey-hr"/>
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
																			<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Log</h6>
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
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div  id="tab_wali" class="tab-pane fade" role="tabpanel">
									<div class="col-sm-12">
										<div class="panel-wrapper collapse in">
											<div class="panel-body">
												<div class="row">
													<div class="col-md-12">
														<div class="form-wrap">
															<form class="form-horizontal" role="form">
																<div class="form-body">
																	<?php $nilai = 1;?>
																	<?php foreach($wali_siswa->result() as $row ):?>
																		<div class="clearfix"></div>
																		<hr class="light-grey-hr"/>
																		<div id="wali_edit<?php echo $nilai;?>">
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
																		</div>
																		<?php $nilai++;?>
																	<?php endforeach; ?>
																	<?php if($nilai == '1'){
																		echo '<div class="pull-left">
																		<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Belum Ada Wali Siswa</h6>
																		</div>
																		<div class="pull-right">
																		<a href="javascript:modal_wali();" class="btn btn-primary btn-icon left-icon  mr-10"> <i class="zmdi zmdi-edit"></i> <span>Tambah Wali</span></a>
																		</div>';
																	} else if($nilai == '2'){
																		echo '<div class="pull-left">
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
						</div>
					</div>
				</div>
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
					if (data == true) {
						notif_sukses('Mengupdate data diri');
					} else if (data == false) {
						notif_gagal('Gagal Mengupdate');
					}
				},
				error: function(xhr, status, error){
					var errorMessage = xhr.status + ': ' + xhr.statusText
                    // alert('Error - ' + errorMessage);
                    notif_gagal(errorMessage);
                    // $('#errorMessage').html(errorMessage);
                }

            });
		}
		return false;
	});

	function notif_sukses(message){
		$.toast({
			heading: 'SUKSES',
			text: message,
			position: 'top-right',
			loaderBg:'#f2b701',
			icon: 'success',
			hideAfter: 3500, 
			stack: 6
		});
	}
	function notif_gagal(message){
		$.toast({
			heading: 'GAGAL',
			text: message,
			position: 'top-right',
			loaderBg:'#f2b701',
			icon: 'error',
			hideAfter: 3500
		});
	}

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
					if (data == true) {
						notif_sukses('Mengupdate alamat');
					} else if (data == false) {
						notif_gagal('Gagal Mengupdate');
					}
				},
				error: function(xhr, status, error){
					var errorMessage = xhr.status + ': ' + xhr.statusText
                    notif_gagal(errorMessage);
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
					if (data == true) {
						notif_sukses('Mengupdate info');
					} else if (data == false) {
						notif_gagal('Gagal Mengupdate');
					}
				},
				error: function(xhr, status, error){
					var errorMessage = xhr.status + ': ' + xhr.statusText
                    notif_gagal(errorMessage);
                }

            });
		}
		return false;
	});

	var latest_periode;
	periode();
	function periode(){
		$.ajax({
			url     : '<?php echo base_url();?>Payment/latest_periode',
			async   : false,
			dataType    : 'json',
			success : function(data){
				var i;
				var nama_periode;
				for(i=0; i<data.length; i++){
					latest_periode = data[i].id;
					nama_periode = data[i].nama_periode;
				}
				$('[name="periode_update"]').html(nama_periode);
			}
		});
	}

	get_spp();

	function get_spp(){
		id = '<?php echo $this->uri->segment('3');?>';
		periode = latest_periode;
		// alert(id+' '+periode);
		$.ajax({
			type    : "POST",
			url     : "<?php echo base_url('Payment/data_spp');?>",
			dataType    : 'json',
			data : {id:id, periode:periode},
			success : function(data){
				var i;
				var html = '';
				for(i=0; i<data.length; i++){
					html += '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">'+
					'<div class="panel panel-default card-view pa-0">'+
					'<div class="panel-wrapper collapse in">'+
					'<div class="panel-body pa-0">'+
					'<div class="sm-data-box bg-white">'+
					'<div class="container-fluid">'+
					'<div class="row">'+
					'<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">'+
					'<span class="txt-red block counter txt-dark">'+data[i].BULAN2+'</span>'+
					'<span class="weight-500 uppercase-font block font-13">Payment ID '+data[i].ID+'</span>'+
					'</div>'+
					'<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">';
					if (data[i].STATUS == '1') {
						html += '<span class="txt-red block counter txt-success">'+data[i].CATATAN+'</span>';
					} else if (data[i].STATUS == '0') {
						html += '<span class="txt-red block counter txt-danger">'+data[i].CATATAN+'</span>';
					} else if (data[i].STATUS == '2') {
						html += '<span class="txt-red block counter txt-warning">'+data[i].CATATAN+'</span>';
					}
					html+=
					'<span class="weight-500 uppercase-font txt-dark block font-13">Rp. '+data[i].JUMLAH+'</span>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div>';
				}
				$('#show_spp_pembayaran').html(html);
			}
		});
	}

	get_non_spp();

	function get_non_spp(){
		id = '<?php echo $this->uri->segment('3');?>';
		periode = latest_periode;
		// alert(id+' '+periode);
		$.ajax({
			type    : "POST",
			url     : "<?php echo base_url('Payment/data_non_spp');?>",
			dataType    : 'json',
			data : {id:id, periode:periode},
			success : function(data){
				var i;
				var html = '';
				for(i=0; i<data.length; i++){
					html += '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">'+
					'<div class="panel panel-default card-view pa-0">'+
					'<div class="panel-wrapper collapse in">'+
					'<div class="panel-body pa-0">'+
					'<div class="sm-data-box bg-white">'+
					'<div class="container-fluid">'+
					'<div class="row">'+
					'<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">'+
					'<span class="txt-red block counter txt-dark">'+data[i].PEMBAYARAN+'</span>'+
					'<span class="weight-500 uppercase-font block font-13">Payment ID '+data[i].ID+'</span>'+
					'</div>'+
					'<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">';
					if (data[i].STATUS == '1') {
						html += '<span class="txt-red block counter txt-success">'+data[i].CATATAN+'</span>';
					} else if (data[i].STATUS == '0') {
						html += '<span class="txt-red block counter txt-danger">'+data[i].CATATAN+'</span>';
					} else if (data[i].STATUS == '2') {
						html += '<span class="txt-red block counter txt-warning">'+data[i].CATATAN+'</span>';
					}
					html+=
					'<span class="weight-500 uppercase-font txt-dark block font-13">Rp. '+data[i].JUMLAH+'</span>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div>'+
					'</div>';
				}
				$('#show_non_spp_pembayaran').html(html);
			}
		});
	}
</script>