var base = 'http://10.8.3.93:8083/dashboard_ops/index.php/';

$(function() {
	"use strict";

	chart_condition();
	function chart_condition(){
		var dataBulan = [];
		var dataGangguan = [];
		var dataSupport = [];
		$.ajax({
				type    : 'ajax',
				url     : base+'Ticket/ticket_condition',
				async   : false,
				dataType    : 'json',
				success : function(data){
					var i;
					var j;
					var html = '';
					for(i=0; i<data.length; i++){
						for(j=0; j<data[i].length; j++){
							dataBulan.push(
								data[i][j].BULAN
							);
							dataGangguan.push(
								data[i][j].GANGGUAN
							);
							dataSupport.push(
								data[i][j].SUPPORT
							);
						}
					}
					$('#total_ticket_sekarang').html(data[0][0].TOTAL_TICKET);
					//chart_weekly();total_ticket_sekarang
				} //str.substring(9, 18)
			});
		if( $('#chart_2').length > 0 ){
			var ctx2 = document.getElementById("chart_2").getContext("2d");
			var data2 = {
				labels: dataBulan,
				datasets: [
				{
					label: "Support",
					backgroundColor: "rgba(242,183,1,1)",
					borderColor: "rgba(242,183,1,1)",
					data: dataSupport
				},
				{
					label: "Gangguan",
					backgroundColor: "rgba(220,0,48,1)",
					borderColor: "rgba(220,0,48,1)",
					data: dataGangguan
				}
				]
			};

			var hBar = new Chart(ctx2, {
				type:"horizontalBar",
				data:data2,

				options: {
					tooltips: {
						mode:"label"
					},
					scales: {
						yAxes: [{
							stacked: true,
							gridLines: {
								color: "#878787",
							},
							ticks: {
								fontFamily: "Roboto",
								fontColor:"#878787"
							}
						}],
						xAxes: [{
							stacked: true,
							gridLines: {
								color: "#878787",
							},
							ticks: {
								fontFamily: "Roboto",
								fontColor:"#878787"
							}
						}],

					},
					elements:{
						point: {
							hitRadius:40
						}
					},
					animation: {
						duration:	3000
					},
					responsive: true,
					maintainAspectRatio:false,
					legend: {
						display: false,
					},

					tooltip: {
						backgroundColor:'rgba(33,33,33,1)',
						cornerRadius:0,
						footerFontFamily:"'Roboto'"
					}

				}
			});
		}
	}

	chart_total();
	function chart_total(){
		var dataNew = [];
		$.ajax({
				type    : 'ajax',
				url     : base+'Ticket/total_ticket',
				async   : false,
				dataType    : 'json',
				success : function(data){
					var i;
					var j;
					var html = '';
					for(i=0; i<data.length; i++){
						for(j=0; j<data[i].length; j++){
							dataNew.push({
								period: data[i][j].BULAN,
								ticket: data[i][j].TOTAL_TICKET
							});
						}
					}
					$('#total_ticket_sekarang').html(data[0][0].TOTAL_TICKET);
					//chart_weekly();total_ticket_sekarang
				} //str.substring(9, 18)
			});

		if($('#morris_extra_line_chart').length > 0) {
			var lineChart = Morris.Line({
				element: 'morris_extra_line_chart',
				data: dataNew ,
				xkey: 'period',
				ykeys: ['ticket'],
				labels: ['ticket'],
				pointSize: 2,
				fillOpacity: 0,
				lineWidth:2,
				pointStrokeColors:['#f2b701', '#b10058', '#0f4fa8'],
				behaveLikeLine: true,
				gridLineColor: '#878787',
				hideHover: 'auto',
				lineColors: ['#f2b701', '#b10058', '#0f4fa8'],
				resize: true,
				redraw: true,
				gridTextColor:'#878787',
				gridTextFamily:"Roboto",
				parseTime: false
			});
		}
	}

	$('#submit_weekly_report').on('click', function() {
		var bulan_report=$('#bulan_report').val();
		// var minggu_report=$('#minggu_report').val();
		weekly_report(bulan_report);
		// alert(bulan_report);
	});


	weekly_report();
	function weekly_report(bulan_report){
		var MEDIA_CALL, MEDIA_EMAIL, MEDIA_EOS, MEDIA_WHATSAPP;
		// var pie_data = [];
		if (typeof bulan_report === 'undefined') {
			$.ajax({
				type    : 'ajax',
				url     : base+'Ticket/weekly_report',
				async   : false,
				dataType    : 'json',
				success : function(data){
					var i;
					var html = '';
					for(i=0; i<data.length; i++){
						$('#AVAILABILITY_WEEK').html(data[i].AVAILABILITY);
						$('#HANDLING_TICKET_WEEK').html(data[i].HANDLING_TICKET);
						$('#SUPPORT_TICKETS').html(data[i].SUPPORT_TICKETS);
						$('#INCIDENT_TICKETS').html(data[i].INCIDENT_TICKETS);
						$('#TOTAL_TICKET').html(data[i].TOTAL_TICKET);
						MEDIA_CALL = data[i].MEDIA_CALL;
						MEDIA_EMAIL = data[i].MEDIA_EMAIL;
						MEDIA_EOS = data[i].MEDIA_EOS;
						MEDIA_WHATSAPP = data[i].MEDIA_WHATSAPP;
						$('#AVERAGE_RESPONSE').html(data[i].AVERAGE_RESPONSE);
						$('#AVERAGE_RECOVERY').html(data[i].AVERAGE_RECOVERY);
						$('#PERIODE').html(data[i].PERIODE);
					}
					$('#MEDIA_CALL').html(MEDIA_CALL);
					$('#MEDIA_EMAIL').html(MEDIA_EMAIL);
					$('#MEDIA_EOS').html(MEDIA_EOS);
					$('#MEDIA_WHATSAPP').html(MEDIA_WHATSAPP);
					//chart_weekly();
				} //str.substring(9, 18)
			});
		} else {
			$.ajax({
				type    : "POST",
				url     : base+'Ticket/weekly_report/param',
				async   : false,
				dataType    : 'json',
				data : {bulan:bulan_report},
				success : function(data){
					var i;
					var html = '';
					for(i=0; i<data.length; i++){
						$('#AVAILABILITY_WEEK').html(data[i].AVAILABILITY);
						$('#HANDLING_TICKET_WEEK').html(data[i].HANDLING_TICKET);
						$('#SUPPORT_TICKETS').html(data[i].SUPPORT_TICKETS);
						$('#INCIDENT_TICKETS').html(data[i].INCIDENT_TICKETS);
						$('#TOTAL_TICKET').html(data[i].TOTAL_TICKET);
						MEDIA_CALL = data[i].MEDIA_CALL;
						MEDIA_EMAIL = data[i].MEDIA_EMAIL;
						MEDIA_EOS = data[i].MEDIA_EOS;
						MEDIA_WHATSAPP = data[i].MEDIA_WHATSAPP;
						$('#AVERAGE_RESPONSE').html(data[i].AVERAGE_RESPONSE);
						$('#AVERAGE_RECOVERY').html(data[i].AVERAGE_RECOVERY);
						$('#PERIODE').html(data[i].PERIODE);
					}
					$('#MEDIA_CALL').html(MEDIA_CALL);
					$('#MEDIA_EMAIL').html(MEDIA_EMAIL);
					$('#MEDIA_EOS').html(MEDIA_EOS);
					$('#MEDIA_WHATSAPP').html(MEDIA_WHATSAPP);
					//chart_weekly();
					$('#pilih_bulan').modal('hide');
					alert("Berhasil");
				}
			});
		}

		/***Pie Chart***/
		if( $('#media_ticket_chart').length > 0 ){
			var pie_data = [{
				label: "Call Center",
				data: MEDIA_CALL,
				color: "#0F4FA8",

			}, {
				label: "E-Mail",
				data: MEDIA_EMAIL,
				color: "#09A275",
			}, {
				label: "Engineer On Site",
				data: MEDIA_EOS,
				color:"#F2B701",
			}, {
				label: "WhatsApp",
				data: MEDIA_WHATSAPP,
				color:"#DC0030",
			}];

			var pie_op = {
				series: {
					pie: {
						innerRadius: 0.5,
						show: true,
						stroke: {
							width: 0,
						}
					}
				},
				legend : {
					backgroundColor: 'transparent',
				},
				grid: {
					hoverable: true
				},
				color: null,
				tooltip: true,
				tooltipOpts: {
				content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
				shifts: {
					x: 20,
					y: 0
				},
				defaultTheme: false
			},
		};
		$.plot($("#media_ticket_chart"), pie_data, pie_op);
	}

	if( $('#media_ticket_chart').length > 0 ){

		var pie_op = {
			series: {
				pie: {
					innerRadius: 0.5,
					show: true,
					stroke: {
						width: 0,
					}
				}
			},
			legend : {
				backgroundColor: 'transparent',
			},
			grid: {
				hoverable: true
			},
			color: null,
			tooltip: true,
			tooltipOpts: {
					content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
					shifts: {
						x: 20,
						y: 0
					},
					defaultTheme: false
				},
			};
			$.plot($("#media_ticket_chart"), pie_data, pie_op);
		}
	}

	function chart_weekly(){
		if($('#morris_extra_bar_chart').length > 0){
			// Morris bar chart
			Morris.Bar({
				element: 'morris_extra_bar_chart',
				data: chart_data,
				xkey: 'y',
				ykeys: ['call', 'email', 'eos', 'whatsapp'],
				labels: ['CALL', 'EMAIL', 'EOS', 'WHATSAPP'],
				barColors:['#0f4fa8', '#09A275', '#f2b701', '#dc0030'],
				hideHover: 'auto',
				gridLineColor: '#878787',
				resize: true,
				barGap:7,
				gridTextColor:'#878787',
				gridTextFamily:"Roboto"
			});
		}
	}

	chart_category();
	function chart_category(){
		var objection = 1;
		var complaint = 1;
		var inquiry = 1;
		var request = 1;

		var color_back = ["#0f4fa8", "#09a275", "#f2b701", "#DC0030"];

		$.ajax({
			type    : 'ajax',
			url     : base+'Ticket/ticket_category',
			async   : false,
			dataType    : 'json',
			success : function(data){
				var i;
				var html = '';
				for(i=0; i<data.length; i++){
					if (data[i].CF_933 == 'Inquiry') {
						inquiry = data[i].COUNTOF;
					} else if(data[i].CF_933 == 'Objection') {
						objection = data[i].COUNTOF;
					} else if(data[i].CF_933 == 'Complaint') {
						complaint = data[i].COUNTOF;
					} else if(data[i].CF_933 == 'Request') {
						request = data[i].COUNTOF;
					} 
				}
				$('#complaint_val').html(complaint);
				$('#inquiry_val').html(inquiry);
				$('#objection_val').html(objection);
				$('#request_val').html(request);
			} //str.substring(9, 18)
		});

		if( $('#chart_6').length > 0 ){
			var ctx6 = document.getElementById("chart_6").getContext("2d");
			var data6 = {
				labels: [
				"Complaint",
				"Inquiry",
				"Request",
				"Objection"
				],
				datasets: [
				{
					data: [complaint,inquiry,request,objection],
					backgroundColor: [
					"#0f4fa8",
					"#09a275",
					"#f2b701",
					"#DC0030",
					],
					hoverBackgroundColor: [
					"#0f4fa8",
					"#09a275",
					"#f2b701",
					"#DC0030",
					]
				}]
			};

			var pieChart  = new Chart(ctx6,{
				type: 'pie',
				data: data6,
				options: {
					animation: {
						duration:	3000
					},
					responsive: true,
					maintainAspectRatio:false,
					legend: {
						display:false
					},
					tooltip: {
						backgroundColor:'rgba(33,33,33,1)',
						cornerRadius:0,
						footerFontFamily:"'Roboto'"
					},
					elements: {
						arc: {
							borderWidth: 0
						}
					}
				}
			});
		}
	}
});