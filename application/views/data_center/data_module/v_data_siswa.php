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
														<th class="txt-dark">STATUS</th>
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
</html>

<script type="text/javascript">
	$('#refresh_siswa').on('click',function(){
		location.reload();
	});

	show_siswa();
	function show_siswa(){
		$.ajax({
			type    : 'ajax',
			url     : '<?php echo base_url();?>index.php/Data/show_siswa',
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
					if (data[i].STATUS == '1') {
						html +=
						'<td><span class="label label-success">AKTIF</span></td>';
					} else if (data[i].STATUS == '0')  {
						html +=
						'<td><span class="label label-warning">TIDAK AKTIF</span></td>';
					} else if (data[i].STATUS == '2')  {
						html +=
						'<td><span class="label label-primary">LULUS</span></td>';
					}
					html += 
					'<td><a href="<?php echo base_url('index.php/Data/siswa/');?>'+data[i].ID+'" class="btn btn-primary">LIHAT</a></td>'+
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