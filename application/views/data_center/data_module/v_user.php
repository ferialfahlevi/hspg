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
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<button class="btn btn-primary" data-toggle="modal" data-target="#modal_insert_user">Tambah User Admin</button>
								</div>
								<div class="pull-right">
									<a href="#" class="pull-left inline-block refresh mr-15" id="refresh_pendidik">
										<i class="zmdi zmdi-replay"></i>
									</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">

									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_2" class="table table-hover mb-0">
												<thead>
													<tr>
														<th class="txt-dark">Nama</th>
														<th class="txt-dark">usernamename</th>
														<th class="txt-dark">Status</th>
														<th class="txt-dark">Hak Akses</th>
														<th class="txt-dark"></th>
													</tr>
												</thead>
												<tbody id="show_table_user">
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
		</div>
	</div>
	<!-- /Row -->
</body>
<div class="modal fade" id="modal_insert_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Insert New User</h5>
			</div>
			<div class="modal-body">
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="form-wrap">
									<form>
										<div class="form-group">
											<div class="col-lg-12">
												<div class="col-lg-6">
													<div class="form-group">
														<label class="control-label mb-10" for="exampleInputuname_1">Nama</label>
														<input class="form-control inline-block" id="nama_user" type="text"/>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label class="control-label mb-10" for="exampleInputuname_1">Username</label>
														<input class="form-control inline-block" id="username" type="text"/>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-12">
												<div class="col-lg-12">
													<div class="form-group">
														<label class="control-label mb-10" for="exampleInputuname_1">Status</label>
														<select class="form-control">
															<option value="1">Aktif</option>
															<option value="0">Tidak Aktif</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-lg-12">
												<div class="col-lg-12">
													<label class="control-label mb-10 text-left">Hak Akses</label>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="col-lg-6">
													<div class="checkbox checkbox-primary">
														<input id="prev_edit_payment" type="checkbox" value="1">
														<label for="checkbox1">
															Edit Payment
														</label>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="checkbox checkbox-primary">
														<input id="prev_tambah_payment" type="checkbox" value="1">
														<label for="checkbox2">
															Tambah Payment
														</label>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="col-lg-6">
													<div class="checkbox checkbox-primary">
														<input id="prev_edit_siswa" type="checkbox" value="1">
														<label for="checkbox1">
															Edit Siswa
														</label>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="checkbox checkbox-primary">
														<input id="prev_tambah_siswa" type="checkbox" value="1">
														<label for="checkbox2">
															Tambah Siswa
														</label>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="col-lg-6">
													<div class="checkbox checkbox-primary">
														<input id="prev_admin" type="checkbox" value="1">
														<label for="checkbox1">
															Manage Admin
														</label>
													</div>
												</div>
												<div class="col-lg-6">
													<!-- <div class="checkbox checkbox-primary">
														<input id="checkbox2" type="checkbox">
														<label for="checkbox2">
															Manage Admin
														</label>
													</div> -->
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
	$('#refresh_pendidik').on('click',function(){
		show_user();
	});

	show_user();
	function show_user(){
		$.ajax({
			url     : '<?php echo base_url();?>Data/show_user',
			async   : false,
			dataType    : 'json',
			success : function(data){
				var i;
				var html = '';
				var status = '';
				for(i=0; i<data.length; i++){
					html += 
					'<tr">'+
					'<td>'+data[i].nama_user+'</td>'+
					'<td>'+data[i].username+'</td>';
					if (data[i].status == '1') {
						html +=
						'<td><span class="label label-success">AKTIF</span></td>';
					} else if (data[i].status == '0')  {
						html +=
						'<td><span class="label label-default">TIDAK AKTIF</span></td>';
					}
					html +=
					'<td>';
					if (data[i].prev_edit_payment == '1') {
						html +=
						'<span class="label label-info">Edit Payment</span>';
					}
					if (data[i].prev_tambah_payment == '1') {
						html +=
						'<span class="label label-info">Tambah Payment</span>';
					}
					if (data[i].prev_edit_siswa == '1') {
						html +=
						'<span class="label label-info">Edit Siswa</span>';
					}
					if (data[i].prev_tambah_siswa == '1') {
						html +=
						'<span class="label label-info">Tambah Siswa</span>';
					}
					if (data[i].prev_admin == '1') {
						html +=
						'<span class="label label-info">Manage Admin</span>';
					}
					html +=
					'</td>';
					html += 
					'<td><a href="#" class="btn btn-primary btn-icon-anim btn-circle btn-sm"><i class="fa fa-eye"></i></a></td>'+
					'</tr>';
					html += 
					'</tr>';
				}
				$('#show_table_user').html(html);
			}
		});
	}

	$('#button_clear_siswa').on('click', function() {
		var elements = document.getElementsByTagName("input");
		for (var ii=0; ii < elements.length; ii++) {
			if (elements[ii].type == "text") {
				elements[ii].value = "";
			}
		}
	});

	$('#button_insert_siswa').on('click', function() {
		var prev_admin;
		if ($('#prev_admin').is(":checked")) {
			prev_admin	= '1';
		} else {
			prev_admin	= '0';
		}
		var prev_tambah_siswa;
		if ($('#prev_tambah_siswa').is(":checked")) {
			prev_tambah_siswa	= '1';
		} else {
			prev_tambah_siswa	= '0';
		}

		var prev_tambah_payment;
		if ($('#prev_tambah_payment').is(":checked")) {
			prev_tambah_payment	= '1';
		} else {
			prev_tambah_payment	= '0';
		}
		var prev_edit_siswa;
		if ($('#prev_edit_siswa').is(":checked")) {
			prev_edit_siswa	= '1';
		} else {
			prev_edit_siswa	= '0';
		}
		var prev_edit_payment;
		if ($('#prev_edit_payment').is(":checked")) {
			prev_edit_payment	= '1';
		} else {
			prev_edit_payment	= '0';
		}
		var nama_user		=$('#nama_user').val();

		var r = confirm("Apakah anda yakin untuk menambah user baru?");
		if (r == true) {
			alert(nama_user+' '+prev_admin);
			/*$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Settings/insert_list_object')?>",
				dataType : "JSON",
				data : {nama_object:nama_object, ket:ket},
				success: function(data){
					alert('sukses!');
					$('#modal_insert_user').modal('hide');
					show_user();
				},
				error: function(xhr, status, error){
					var errorMessage = xhr.status + ': ' + xhr.statusText
                    // alert('Error - ' + errorMessage);
                    $('#errorMessage').html(errorMessage);
                }

            });*/
        }
        return false;
    });
</script>