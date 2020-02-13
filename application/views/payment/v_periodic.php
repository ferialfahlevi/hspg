<!-- Main Content -->
<div class="page-wrapper">
	<div class="container-fluid">

		<!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h5 class="txt-dark">Payment Control List</h5>
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
			<div class="col-sm-12">
				<div class="panel panel-default card-view panel-refresh">
					<div class="refresh-container">
						<div class="la-anim-1"></div>
					</div>
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Periode <?php echo $this->uri->segment('3');?></h6>
						</div>
						<div class="pull-right">
							<a href="#" class="pull-left inline-block mr-15">
								<select class="form-control" id="periode">
									<option>-- Pilih Periode --</option>
								</select>
							</a>
							<a href="#" id="refresh_table" class="pull-left inline-block refresh mr-15">
								<i class="zmdi zmdi-replay"></i>
							</a>
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
												<th>Nama</th>
												<th>Overview SPP</th>
												<th>Tunggakan</th>
												<th>Detail</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>Nama</th>
												<th>Overview SPP</th>
												<th>Tunggakan</th>
												<th>Detail</th>
											</tr>
										</tfoot>
										<tbody id="show_data">
											
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
	dropdown_periode();
	function dropdown_periode() {
		$.ajax({
			type    : 'ajax',
			url     : '<?php echo base_url('master/list_periode');?>',
			async   : false,
			dataType: 'json',
			success : function(data){
				var html = '';
				var i;
				for(i=0; i<data.length; i++){
					$('#periode').append(new Option(data[i].nama_periode, data[i].periode));
				}
			}
		});
	}

	tampil_data_list();
	function tampil_data_list(){
		$.ajax({
			type    : 'ajax',
			url     : '<?php echo base_url();?>payment/list_control/<?php echo $this->uri->segment('3');?>',
			async   : false,
			dataType    : 'json',
			success : function(data){
				var html = '';
				var i;
				for(i=0; i<data.length; i++){
					html += '<tr>'+
					'<td>'+data[i].nama_siswa+'</td>'+
					'<td>';
					if (data[i].spp_juli == '0') {
						html += "<button class='btn btn-warning btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Juli'>J</button>";
					} else {
						html += "<button class='btn btn-success btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Juli'>J</button>";
					}

					if (data[i].spp_agustus == '0') {
						html += "<button class='btn btn-warning btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Agustus'>A</button>";
					} else {
						html += "<button class='btn btn-success btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Agustus'>A</button>";
					}

					if (data[i].spp_september == '0') {
						html += "<button class='btn btn-warning btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='September'>S</button>";
					} else {
						html += "<button class='btn btn-success btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='September'>S</button>";
					}

					if (data[i].spp_oktober == '0') {
						html += "<button class='btn btn-warning btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Oktober'>O</button>";
					} else {
						html += "<button class='btn btn-success btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Oktober'>O</button>";
					} 

					if (data[i].spp_oktober == '0') {
						html += "<button class='btn btn-warning btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='November'>N</button>";
					} else {
						html += "<button class='btn btn-success btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='November'>N</button>";
					}

					if (data[i].spp_desember == '0') {
						html += "<button class='btn btn-warning btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Desember'>D</button>";
					} else {
						html += "<button class='btn btn-success btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Desember'>D</button>";
					}

					if (data[i].spp_januari == '0') {
						html += "<button class='btn btn-warning btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Januari'>J</button>";
					} else {
						html += "<button class='btn btn-success btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Januari'>J</button>";
					}

					if (data[i].spp_februari == '0') {
						html += "<button class='btn btn-warning btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Februari'>F</button>";
					} else {
						html += "<button class='btn btn-success btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Februari'>F</button>";
					}

					if (data[i].spp_maret == '0') {
						html += "<button class='btn btn-warning btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Maret'>M</button>";
					} else {
						html += "<button class='btn btn-success btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Maret'>M</button>";
					}

					if (data[i].spp_april == '0') {
						html += "<button class='btn btn-warning btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='April'>A</button>";
					} else {
						html += "<button class='btn btn-success btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='April'>A</button>";
					}

					if (data[i].spp_mei == '0') {
						html += "<button class='btn btn-warning btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Mei'>M</button>";
					} else {
						html += "<button class='btn btn-success btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Mei'>M</button>";
					}

					if (data[i].spp_juni == '0') {
						html += "<button class='btn btn-warning btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Juni'>J</button>";
					} else {
						html += "<button class='btn btn-success btn-icon-anim btn-circle btn-sm' data-toggle='tooltip' data-placement='top' title='Juni'>J</button>";
					}

					html += '</td>'+
					'<td></td>'+
					'<td><a class="btn btn-primary btn-icon-anim btn-circle btn-sm" href="<?php echo base_url('payment/get_payment_detail/');?>'+data[i].periode_control_list+'/'+data[i].no_induk+'" data-toggle="tooltip" data-placement="top" title="Lihat Detail"><i class="fa fa-eye"></i></a</td>'+
					'</tr>';

				}
				$('#show_data').html(html);
			}
		});
	}
	$('#periode').on('change', function() {
		var qID = this.value;
		$(location).attr('href', "<?php echo base_url('payment/periodic/');?>"+qID);
	});
	$('#refresh_table').on('click', function(){
		tampil_data_list();
    });
</script>