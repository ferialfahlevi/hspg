
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
									<!-- <button class="btn btn-warning" data-toggle="modal" data-target="#modal_insert_object">Bantuan</button> -->
									<select class="form-control inline-block" id="generate_periode" name="generate_periode">
										<!-- <option value="0">-Pilih Periode-</option> -->
									</select>
								</div>
								<div class="pull-right">
									<a href="#" class="pull-left inline-block refresh mr-15" id="refresh_siswa">
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
														<th class="txt-dark">NAMA</th>
														<th class="txt-dark">NO INDUK</th>
														<th class="txt-dark">KELAS</th>
														<th class="txt-dark">AKSI</th>
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
				<button type="button" id="button_clear_siswa" class="btn btn-default">Clear</button>
				<button type="button" id="button_insert_siswa" class="btn btn-primary">Insert</button>
			</div>
		</div>
	</div>
</div>
</html>

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
	$('#generate_periode').on('change', function() {
		latest_periode = this.value;
		show_siswa();
	});
	$('#refresh_siswa').on('click',function(){
		show_siswa();
	});

	show_siswa();
	function show_siswa(periode){
		
		$.ajax({
			url     : '<?php echo base_url();?>Data/show_payment_siswa',
			async   : false,
			dataType    : 'json',
			success : function(data){
				var i;
				var html = '';
				var status = '';
				for(i=0; i<data.length; i++){
					html += 
					'<tr">';
					if (data[i].PENDIDIKAN == '3') {
						html += '<td class="txt-danger">'+data[i].NAMA+'</td>';
					} else if (data[i].PENDIDIKAN == '2') {
						html += '<td class="txt-primary">'+data[i].NAMA+'</td>';
					} else if (data[i].PENDIDIKAN == '1') {
						html += '<td class="txt-success">'+data[i].NAMA+'</td>';
					}
					html +=
					'<td>'+data[i].NO_INDUK+'</td>'+
					'<td>'+data[i].KELAS+'</td>';
					// '<td>'+data[i].STATUS+'</td>'+
					html +=
					'<td><a href="<?php echo base_url('Payment/payment/');?>'+data[i].ID+'/'+latest_periode+'" class="btn btn-primary">LIHAT</a></td>'+
					'</tr>';
				}
				$('#show_table_siswa').html(html);
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
				url  : "<?php echo base_url('Settings/insert_list_object')?>",
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
</script>