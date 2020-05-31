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
									<button class="btn btn-primary" data-toggle="modal" data-target="#modal_insert_object">Tambah Pengajar Baru</button>
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
														<th class="txt-dark">NIK Pendidik</th>
														<th class="txt-dark">Nama Pendidik</th>
														<th class="txt-dark">Status</th>
														<th class="txt-dark">Aksi</th>
													</tr>
												</thead>
												<tbody id="show_table_pendidik">
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
<div class="modal fade" id="modal_insert_object" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h5 class="modal-title" id="exampleModalLabel1">Insert New Data</h5>
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
													<div class="col-lg-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Host</label>
															<input class="form-control inline-block" id="nama_object_insert" placeholder="VMS Priok" type="text"/>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputuname_1">Keterangan</label>
															<input class="form-control inline-block" id="ket_insert" placeholder="4xx" type="text"/>
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
				<button type="button" id="button_clear_object" class="btn btn-default">Clear</button>
				<button type="button" id="button_insert_object" class="btn btn-primary">Insert</button>
			</div>
		</div>
	</div>
</div>
</html>
<script type="text/javascript">
	$('#refresh_pendidik').on('click',function(){
		location.reload();
	});

	show_pendidik();
	function show_pendidik(){
		$.ajax({
			type    : 'ajax',
			url     : '<?php echo base_url();?>index.php/Data/show_pendidik',
			async   : false,
			dataType    : 'json',
			success : function(data){
				var i;
				var html = '';
				var status = '';
				for(i=0; i<data.length; i++){
					html += 
					'<tr">'+
					'<td>'+data[i].NIK+'</td>'+
					'<td>'+data[i].NAMA+'</td>';
					if (data[i].STATUS == '1') {
						html +=
						'<td><span class="label label-success">AKTIF</span></td>';
					} else if (data[i].STATUS == '0')  {
						html +=
						'<td><span class="label label-default">TIDAK AKTIF</span></td>';
					}
					html += 
					'<td><a href="<?php echo base_url('index.php/Data/pendidik/');?>'+data[i].ID+'" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>'+
					'</tr>';
				}
				$('#show_table_pendidik').html(html);
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
		var nama_object		=$('#nama_object_insert').val();
		var ket		=$('#ket_insert').val();

		var r = confirm("Apakah anda yakin untuk insert data?");
		if (r == true) {

			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('index.php/Settings/insert_list_object')?>",
				dataType : "JSON",
				data : {nama_object:nama_object, ket:ket},
				success: function(data){
					alert('sukses!');
					$('#modal_insert_object').modal('hide');
					show_object();
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