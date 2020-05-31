<?php
$current_month = date('m/01/Y');
	// $d = new DateTime($current_month); 

$last_day_month = date('m/d/Y');
?>
<div class="container-fluid">

	<!-- Title -->
	<div class="row heading-bg">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h5 class="txt-dark">TICKET <i class="fa fa-home mr-20"></i></h5>
		</div>
		<div class="col-lg-7 col-sm-8 col-md-8 col-xs-12">
		</div>
		<!-- Breadcrumb -->
		<div class="col-lg-2 col-sm-8 col-md-8 col-xs-12">
			<!-- <ol class="breadcrumb">
				<li><a href="index.html">Ticket</a></li>
				<li class="active"><a href="#"><span>Dashboard</span></a></li>
				<li class="active"><span>panel-wells</span></li>
			</ol> -->
			<button class="pull-right btn btn-primary refresh mr-15" data-toggle="modal" data-target="#generate_report">Generate Report</button>
		</div>
		<!-- /Breadcrumb -->
	</div>
	<!-- /Title -->

	<!-- Row -->
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
			<div class="panel panel-default card-view pa-0">
				<div class="panel-wrapper collapse in">
					<div class="panel-body pa-0">
						<div class="sm-data-box bg-green">
							<div class="container-fluid">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-xs-7 text-center pl-0 pr-0 data-wrap-left">
											<span class="txt-light weight-500 uppercase-font block font-13">RESPONSE TIME</span>
											<span class="block counter txt-light"><span class="counter-anim"></span></span>
										</div>
										<div class="col-xs-5 text-center  pl-0 pr-0 data-wrap-right">
											<i class="zmdi zmdi-trending-up txt-light data-right-rep-icon"></i>
										</div>
									</div>	
								</div>
								<div class="row text-center">
									<span class="txt-light"><span class="txt-light">46.41%</span>  Since Last Month</span>
									<div></div>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
			<div class="panel panel-default card-view pa-0">
				<div class="panel-wrapper collapse in">
					<div class="panel-body pa-0">
						<div class="sm-data-box bg-red">
							<div class="container-fluid">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-xs-7 text-center pl-0 pr-0 data-wrap-left">
											<span class="txt-light weight-500 uppercase-font block font-13">RECOVERY TIME</span>
											<span class="block counter txt-light"><span class="counter-anim"></span></span>
										</div>
										<div class="col-xs-5 text-center  pl-0 pr-0 data-wrap-right">
											<i class="zmdi zmdi-trending-down txt-light data-right-rep-icon"></i>
										</div>
									</div>	
								</div>
								<div class="row text-center">
									<span class="txt-light"><span>46.41%</span>  Since Last Month</span>
									<div></div>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
			<div class="panel panel-default card-view pa-0">
				<div class="panel-wrapper collapse in">
					<div class="panel-body pa-0">
						<div class="sm-data-box bg-purple">
							<div class="container-fluid">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-xs-7 text-center pl-0 pr-0 data-wrap-left">
											<span class="txt-light weight-500 uppercase-font block font-13">MISS RECOVERY TIME</span>
											<span class="txt-light block counter"><span class="counter-anim"></span></span>
										</div>
										<div class="col-xs-5 text-center  pl-0 pr-0 data-wrap-right">
											<i class="zmdi zmdi-money txt-light data-right-rep-icon"></i>
										</div>
									</div>	
								</div>
								<div class="row text-center">
									<span class="txt-light"><span>46.41%</span>  Since Last Month</span>
									<div></div>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
			<div class="panel panel-default card-view pa-0">
				<div class="panel-wrapper collapse in">
					<div class="panel-body pa-0">
						<div class="sm-data-box bg-green">
							<div class="container-fluid">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-xs-7 text-center pl-0 pr-0 data-wrap-left">
											<span class="txt-light weight-500 uppercase-font block font-13">MOST PRODUCT TICKET</span>
											<!-- <h6 class="txt-light"><small class="txt-light" id="most_product_ticket"></small></h6> -->
											<p class="txt-light" id="most_product_ticket" style="font-size:10px;"></p>
											<span class="block counter txt-light"><span class="counter-anim" id="COUNTOF_most_product_ticket"></span><span> Ticket</span></span>
										</div>
										<div class="col-xs-5 text-center  pl-0 pr-0 data-wrap-right">
											<i class="zmdi zmdi-trending-up txt-light data-right-rep-icon"></i>
										</div>
									</div>	
								</div>
								<div class="row text-center">
									<span class="txt-light"><span id="growth_most_product"></span>%  Since Last Month</span>
									<div></div>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
			<div class="panel panel-default card-view pa-0">
				<div class="panel-wrapper collapse in">
					<div class="panel-body pa-0">
						<div class="sm-data-box bg-red">
							<div class="container-fluid">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-xs-7 text-center pl-0 pr-0 data-wrap-left">
											<span class="txt-light weight-500 uppercase-font block font-13">FEWEST PRODUCT TICKET</span>
											<p class="txt-light" id="fewest_product_ticket" style="font-size:10px;"></p>
											<!-- <h6 class="txt-light"><small class="txt-light" id="fewest_product_ticket"></small></h6> -->
											<span class="block counter txt-light"><span class="counter-anim" id="COUNTOF_fewest_product_ticket"></span><span> Ticket</span></span>
										</div>
										<div class="col-xs-5 text-center  pl-0 pr-0 data-wrap-right">
											<i class="zmdi zmdi-trending-down txt-light data-right-rep-icon"></i>
										</div>
									</div>	
								</div>
								<div class="row text-center">
									<span class="txt-light"><span id="growth_fewest_product"></span>%  Since Last Month</span>
									<div></div>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
			<div class="panel panel-default card-view pa-0">
				<div class="panel-wrapper collapse in">
					<div class="panel-body pa-0">
						<div class="sm-data-box bg-purple">
							<div class="container-fluid">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-xs-7 text-center pl-0 pr-0 data-wrap-left">
											<span class="txt-light weight-500 uppercase-font block font-13">SUMMARY TICKET</span>
											<span class="txt-light block counter"><span class="counter-anim"><div id="summary_ticket"></div></span><span> Ticket</span></span>
										</div>
										<div class="col-xs-5 text-center  pl-0 pr-0 data-wrap-right">
											<i class="zmdi zmdi-money txt-light data-right-rep-icon"></i>
										</div>
									</div>	
								</div>
								<div class="row text-center">
									<span class="txt-light"><span id="growth_summary_ticket"></span>%  Since Last Month</span>
									<div></div>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
			<div class="panel panel-default card-view pa-0">
				<div class="panel-wrapper collapse in">
					<div class="panel-body pa-0">
						<div class="sm-data-box bg-green">
							<div class="container-fluid">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-xs-7 text-center pl-0 pr-0 data-wrap-left">
											<span class="txt-light weight-500 uppercase-font block font-13">CALL AGENT BEST PERFORMANCE</span>
											<span class="block counter txt-light"><span class="counter-anim"></span></span>
										</div>
										<div class="col-xs-5 text-center  pl-0 pr-0 data-wrap-right">
											<i class="zmdi zmdi-trending-up txt-light data-right-rep-icon"></i>
										</div>
									</div>	
								</div>
								<div class="row text-center">
									<span class="txt-light"><span class="txt-light">46.41%</span>  Since Last Month</span>
									<div></div>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
			<div class="panel panel-default card-view pa-0">
				<div class="panel-wrapper collapse in">
					<div class="panel-body pa-0">
						<div class="sm-data-box bg-red">
							<div class="container-fluid">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-xs-7 text-center pl-0 pr-0 data-wrap-left">
											<span class="txt-light weight-500 uppercase-font block font-13">HELPDESK BEST PERFORMANCE</span>
											<span class="block counter txt-light"><span class="counter-anim"></span></span>
										</div>
										<div class="col-xs-5 text-center  pl-0 pr-0 data-wrap-right">
											<i class="zmdi zmdi-trending-down txt-light data-right-rep-icon"></i>
										</div>
									</div>	
								</div>
								<div class="row text-center">
									<span class="txt-light"><span>46.41%</span>  Since Last Month</span>
									<div></div>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
			<div class="panel panel-default card-view pa-0">
				<div class="panel-wrapper collapse in">
					<div class="panel-body pa-0">
						<div class="sm-data-box bg-purple">
							<div class="container-fluid">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-xs-7 text-center pl-0 pr-0 data-wrap-left">
											<span class="txt-light weight-500 uppercase-font block font-13">LAYER 2 BEST PERFORMANCE</span>
											<span class="txt-light block counter"><span class="counter-anim"></span></span>
										</div>
										<div class="col-xs-5 text-center  pl-0 pr-0 data-wrap-right">
											<i class="zmdi zmdi-money txt-light data-right-rep-icon"></i>
										</div>
									</div>	
								</div>
								<div class="row text-center">
									<span class="txt-light"><span>46.41%</span>  Since Last Month</span>
									<div></div>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Row -->

	<!-- Row -->
	<div class="row">
		<div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
			<div class="panel panel-default card-view panel-refresh">
				<div class="refresh-container">
					<div class="la-anim-1"></div>
				</div>
				<div class="panel-heading">
					<div class="pull-left">
						<h5 class="panel-title txt-dark">Summary</h5>
						<h6 class="panel-title txt-dark">Most Product Ticket</h6>
					</div>
					<div class="pull-right">
						<div class="pull-left form-group mb-0">
							<input class="form-control pull-left inline-block input-daterange-datepicker" id="range_tanggal_product" type="text" name="daterange" value="<?php echo 
							$current_month;?> - <?php echo $last_day_month;?>"/>
						</div>
						<button class="btn  btn-primary btn-outline refresh mr-15" id="button_tanggal_product">Generate</button>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="flot-container" style="height:250px">
							<div id="count_product_ticket_chart" class="demo-placeholder"></div>
						</div>
						<br>
						<button class="btn btn-block  btn-primary btn-rounded" id="button_detail_product">View Detail</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
			<div class="panel panel-default card-view panel-refresh">
				<div class="refresh-container">
					<div class="la-anim-1"></div>
				</div>
				<div class="panel-heading">
					<div class="pull-left">
						<h5 class="panel-title txt-dark">Summary</h5>
						<h6 class="panel-title txt-dark">Ticket Channel</h6>
					</div>
					<div class="pull-right">
						<div class="pull-left form-group mb-0">
							<input class="form-control pull-left inline-block input-daterange-datepicker" id="range_tanggal_media" type="text" name="daterange" value="<?php echo 
							$current_month;?> - <?php echo $last_day_month;?>"/>
						</div>
						<button class="btn  btn-primary btn-outline refresh mr-15" id="button_tanggal_media">Generate</button>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="flot-container" style="height:250px">
							<div id="count_media_ticket_chart" class="demo-placeholder"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!-- Row -->
	<div class="modal fade" id="generate_report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h5 class="modal-title" id="exampleModalLabel1">Generate Daily Ticket Report</h5>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<div class="pull-left form-group mb-0">
								<!-- <input class="form-control pull-left inline-block input-daterange-datepicker" id="" type="text" name="daterange" value="<?php echo 
								$current_month;?> - <?php echo $last_day_month;?>"/> -->
								<input type="text" class="form-control pull-left input-daterange-timepicker" id="range_tanggal_" name="daterange" value=""/>
							</div>
							<button class="btn  btn-primary btn-outline refresh mr-15" id="">Generate</button>
						</div>
						<div class="form-group">
							<label for="message-text" class="control-label mb-10">Edit Report:</label>
							<textarea class="form-control" rows="10" id="message-text1"></textarea>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Send message</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="generate_detail_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h5 class="modal-title" id="exampleModalLabel1">Detail Most Product Ticket</h5>
				</div>
				<div class="modal-body">
					<div class="table-wrap mt-40">
						<div class="table-responsive">
							<table class="table table-hover table-bordered mb-0">
								<thead>
									<tr>
										<th>Product Name</th>
										<th>Total Ticket</th>
									</tr>
								</thead>
								<tbody id="show_table_detail_product">
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Send message</button>
				</div>
			</div>
		</div>
	</div>

</div>
<script type="text/javascript">
	summary_ticket();
	function summary_ticket(){
		var total_summary_ticket;
		var last_summary_ticket;

		$.ajax({
			type    : 'ajax',
			url     : '<?php echo base_url();?>dashboard/summary_ticket',
			async   : false,
			dataType    : 'json',
			success : function(data){
				
				var i;
				for(i=0; i<data.length; i++){
					total_summary_ticket = data[i].SUMMARY_TICKET;
				}
				$('#summary_ticket').html(total_summary_ticket);
			}
		});

		$.ajax({
			type    : 'ajax',
			url     : '<?php echo base_url();?>dashboard/summary_ticket/summary_ticket2',
			async   : false,
			dataType    : 'json',
			success : function(data){
				
				var i;
				for(i=0; i<data.length; i++){
					last_summary_ticket = data[i].SUMMARY_TICKET;
				}
			}
		});
		var calc = (((last_summary_ticket - total_summary_ticket)/total_summary_ticket)*100).toFixed(2); 
		var akhir;
		if (calc<0) {
			akhir = Math.abs(calc);
			$('#growth_summary_ticket').html("-"+akhir);
		} else {
			$('#growth_summary_ticket').html("+"+calc);
		}
		// alert(akhir);
	}

	fewest_product_ticket();
	function fewest_product_ticket(){
		var product;
		var total_jumlah_product;

		$.ajax({
			type    : 'ajax',
			url     : '<?php echo base_url();?>dashboard/fewest_product_ticket',
			async   : false,
			dataType    : 'json',
			success : function(data){
				var i;
				for(i=0; i<data.length; i++){
					product = data[i].PRODUCTNAME;
					total_jumlah_product = data[i].COUNTOF;
				}
				$('#fewest_product_ticket').html(product);
				$('#COUNTOF_fewest_product_ticket').html(total_jumlah_product);
			}
		});

		$.ajax({
			type    : "POST",
			url     : '<?php echo base_url();?>dashboard/fewest_product_ticket/fewest_product_ticket2',
			async   : false,
			dataType    : 'json',
			data : {product:product},
			success : function(data){
				var i;
				for(i=0; i<data.length; i++){
					last_jumlah_product = data[i].COUNTOF;
				}
				/*$('#most_product_ticket').html(product);
				$('#COUNTOF_most_product_ticket').html(jumlah_product);*/
			}
		});
		var calc = (((last_jumlah_product - total_jumlah_product)/total_jumlah_product)*100).toFixed(2); 
		var akhir;
		if (last_jumlah_product == 0) {
			$('#growth_fewest_product').html("0");
		}
		else if (calc<0) {
			akhir = Math.abs(calc);
			$('#growth_fewest_product').html("-"+akhir);
		} else {
			$('#growth_fewest_product').html("+"+calc);
		}
	}

	$('#button_detail_product').on('click',function(){
		var str=$('#range_tanggal_product').val();
		var newfirst = str.substring(0, 10);
		var newsecond = str.substring(13, 23);

		var temp1 = newfirst.split("/").reverse().join("-");
		var temp2 = newsecond.split("/").reverse().join("-");

		first_date = temp1.substring(0, 4)+'-'+temp1.substring(8, 10)+'-'+temp1.substring(5, 7);
		second_date = temp2.substring(0, 4)+'-'+temp2.substring(8, 10)+'-'+temp2.substring(5, 7);

		// alert(first_date);
		// alert(second_date);
		$.ajax({
			type    : 'ajax',
			url     : base+'dashboard/detail_product_ticket/'+first_date+'/'+second_date,
			async   : false,
			dataType    : 'json',
			success : function(data){
				var i;
				var html = '';
				var jumlah_ticket_product;
				$('#generate_detail_product').modal('show');
				for(i=0; i<data.length; i++){
					html += '<tr>'+
					'<td>'+data[i].PRODUCTNAME+'</td>'+
					'<td>'+data[i].COUNTOF+'</td>'+
					'</tr>';
				}
				$('#show_table_detail_product').html(html);
			}
		});
	});

	most_product_ticket();
	function most_product_ticket(){
		var product;
		var total_jumlah_product;

		$.ajax({
			type    : 'ajax',
			url     : '<?php echo base_url();?>dashboard/most_product_ticket',
			async   : false,
			dataType    : 'json',
			success : function(data){
				var i;
				for(i=0; i<data.length; i++){
					product = data[i].PRODUCTNAME;
					total_jumlah_product = data[i].COUNTOF;
				}
				$('#most_product_ticket').html(product);
				$('#COUNTOF_most_product_ticket').html(total_jumlah_product);
			}
		});

		$.ajax({
			type    : "POST",
			url     : '<?php echo base_url();?>dashboard/most_product_ticket/most_product_ticket2',
			async   : false,
			dataType    : 'json',
			data : {product:product},
			success : function(data){
				var i;
				for(i=0; i<data.length; i++){
					last_jumlah_product = data[i].COUNTOF;
				}
				/*$('#most_product_ticket').html(product);
				$('#COUNTOF_most_product_ticket').html(jumlah_product);*/
			}
		});
		var calc = (((last_jumlah_product - total_jumlah_product)/total_jumlah_product)*100).toFixed(2); 
		var akhir;
		if (calc<0) {
			akhir = Math.abs(calc);
			$('#growth_most_product').html("-"+akhir);
		} else {
			$('#growth_most_product').html("+"+calc);
		}

		/*if (r == true) {
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('payment/approve_pembayaran')?>",
				dataType : "JSON",
				data : {id:id, periode_control_list:periode_control_list, no_induk:no_induk},
				success: function(data){
					$('#update_spp').hide();
					alert("Sukses meng-update pembayaran "+id);
					location.reload();
					// get_data();
				},
				error: function(){
					alert('Error to update SPP');
				}
			});
		}*/
	}
</script>