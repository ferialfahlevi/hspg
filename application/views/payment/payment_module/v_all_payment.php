
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
									<h6 class="txt-dark" id="show_periode"></h6>
								</div>
								<div class="pull-right">
									<a href="javascript:;" id="refresh_siswa" class="btn refresh btn-default btn-icon-anim btn-circle btn-sm"><i class="zmdi zmdi-replay"></i></a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th class="txt-dark">NAMA</th>
														<th class="txt-dark">SUMMARY PEMBAYARAN</th>
														<th class="txt-dark"></th>
														<!-- <th class="txt-dark">AKSI</th> -->
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
					nama_periode = data[i].nama_periode;
				}
				// varperiode = latest_periode;
				$('#show_periode').html(nama_periode);
				show_siswa(latest_periode);
			}
		});
	}
	$('#refresh_siswa').on('click',function(){
		show_siswa();
	});

	// show_siswa(latest_periode);
	function show_siswa(){
		// alert(periode);
		$.ajax({
			type : "POST",
			url     : '<?php echo base_url();?>Payment/show_payment',
			async   : false,
			dataType    : 'json',
			data : {id_periode:latest_periode},
			success : function(data){
				var i;
				var status = '';
				var html = '';
				for(i=0; i<data.length; i++){
					id_siswa = data[i].ID_SISWA;
					html += 
					'<tr onclick="see_payment('+data[i].ID_SISWA+','+latest_periode+')">';
					if (data[i].PENDIDIKAN == '3') {
						html += '<td class="txt-danger">'+data[i].NAMA+'</td>';
					} else if (data[i].PENDIDIKAN == '2') {
						html += '<td class="txt-primary">'+data[i].NAMA+'</td>';
					} else if (data[i].PENDIDIKAN == '1') {
						html += '<td class="txt-success">'+data[i].NAMA+'</td>';
					}
					html +=
					'<td>';
		            html += 
		            '<button class="btn ';
		            if (data[i].PENDAFTARAN == 1) {
		            	html+= 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="PENDAFTARAN">UP</button>'+
		            '<button class="btn ';
		            if (data[i].PANGKAL == '1') {
		            	html+= 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="PANGKAL">UP</button>'+
		            '<button class="btn ';
		            if (data[i].HEREGISTRASI == '1') {
		            	html+= 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="HEREGISTRASI">HER</button>'+
		            '<button class="btn ';
		            if (data[i].UJIAN == '1') {
		            	html+= 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="UJIAN">UJIAN</button>'+
		            '<button class="btn ';
		            if (data[i].KEGIATAN1 == '1') {
		            	html+= 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="KEGIATAN 1">K1</button>'+
		            '<button class="btn ';
		            if (data[i].KEGIATAN2 == '1') {
		            	html+= 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="KEGIATAN 2">K2</button>'+
		            '|';
		            html +=
		            '<button class="btn ';
		            if (data[i].JULI == '1') {
		            	html += 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="JULI">JUL</button>'+
		            '<button class="btn ';
		            if (data[i].AGUSTUS == '1') {
		            	html += 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="AGUSTUS">AUG</button>'+
		            '<button class="btn ';
		            if (data[i].SEPTEMBER == '1') {
		            	html += 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="SEPTEMBER">SEP</button>'+
		            '<button class="btn ';
		            if (data[i].OKTOBER == '1') {
		            	html += 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="OKTOBER">OCT</button>'+
		            '<button class="btn ';
		            if (data[i].NOVEMBER == '1') {
		            	html += 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="NOVEMBER">NOV</button>'+
		            '<button class="btn ';
		            if (data[i].DESEMBER == '1') {
		            	html += 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="DESEMBER">DEC</button>'+
		            '<button class="btn ';
		            if (data[i].JANUARI == '1') {
		            	html += 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="JANUARI">JAN</button>'+
		            '<button class="btn ';
		            if (data[i].FEBRUARI == '1') {
		            	html += 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="FEBRUARI">FEB</button>'+
		            '<button class="btn ';
		            if (data[i].MARET == '1') {
		            	html += 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="MARET">MAR</button>'+
		            '<button class="btn ';
		            if (data[i].APRIL == '1') {
		            	html += 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="APRIL">APR</button>'+
		            '<button class="btn ';
		            if (data[i].MEI == '1') {
		            	html += 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="MEI">MEI</button>'+
		            '<button class="btn ';
		            if (data[i].JUNI == '1') {
		            	html += 'btn-success';
		            } else {
		            	html += 'btn-warning';
		            }
		            html +=
		            ' btn-circle dropdown-toggle" onclick="javascript:;" type="button" data-toggle="tooltip" data-placement="top" title="JUNI">JUN</button>';
					html += '</td>';
					html +=
					'<td><a href="<?php echo base_url('Payment/payment/');?>'+data[i].ID_SISWA+'/'+latest_periode+'" class="btn btn-primary btn-icon-anim btn-circle btn-sm"><i class="fa fa-eye"></i></a></td>'+
					'</tr>';
				}
				$('#show_table_siswa').html(html);
			}
		});
	}

	function see_payment(id, latest_periode){
		window.location.assign("<?php echo base_url('Payment/payment/');?>"+id+"/"+latest_periode);
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
</script>