var base = 'http://10.8.3.93:8083/dashboard_ops/index.php/';

$(function() {
	"use strict";
	var first_date, second_date;

	$('#button_tanggal_media').on('click', function() {
		var str=$('#range_tanggal_media').val();
		var newfirst = str.substring(0, 10);
		var newsecond = str.substring(13, 23);

		var temp1 = newfirst.split("/").reverse().join("-");
		var temp2 = newsecond.split("/").reverse().join("-");

		first_date = temp1.substring(0, 4)+'-'+temp1.substring(8, 10)+'-'+temp1.substring(5, 7);
		second_date = temp2.substring(0, 4)+'-'+temp2.substring(8, 10)+'-'+temp2.substring(5, 7);

		media_ticket(first_date, second_date);

	});

	$('#button_tanggal_product').on('click', function() {
		var str=$('#range_tanggal_product').val();
		var newfirst = str.substring(0, 10);
		var newsecond = str.substring(13, 23);

		var temp1 = newfirst.split("/").reverse().join("-");
		var temp2 = newsecond.split("/").reverse().join("-");

		first_date = temp1.substring(0, 4)+'-'+temp1.substring(8, 10)+'-'+temp1.substring(5, 7);
		second_date = temp2.substring(0, 4)+'-'+temp2.substring(8, 10)+'-'+temp2.substring(5, 7);

		product_ticket(first_date, second_date);

	});

	media_ticket();
	function media_ticket(first_date, second_date){
		var color_array = ["#2DCE98", "#F53C56", "#11CDEF", "#FEB969"];
		var pie_data = [];
		if (typeof first_date === 'undefined' && typeof second_date === 'undefined') {
			$.ajax({
				type    : 'ajax',
				url     : base+'Ticket/count_media_ticket',
				async   : false,
				dataType    : 'json',
				success : function(data){
					var i;
					for(i=0; i<data.length; i++){
						// objection = data[i].JUMLAH_TIKET_OBJECTION;
						pie_data.push({
							label: data[i].CF_931+", "+data[i].COUNTOF+" Ticket",
							data: data[i].COUNTOF,
							color: color_array[i]
						});
					}
				}
			});
		} else {
			$.ajax({
				type    : 'ajax',
				url     : base+'Ticket/count_media_ticket/'+first_date+'/'+second_date,
				async   : false,
				dataType    : 'json',
				success : function(data){
					var i;
					for(i=0; i<data.length; i++){
						// objection = data[i].JUMLAH_TIKET_OBJECTION;
						pie_data.push({
							label: data[i].CF_931+", "+data[i].COUNTOF+" Ticket",
							data: data[i].COUNTOF,
							color: color_array[i]
						});
					}
				}
		});
		}
		
		//Pie Chart
		if( $('#count_media_ticket_chart').length > 0 ){

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
		$.plot($("#count_media_ticket_chart"), pie_data, pie_op);
	}
}

product_ticket();
function product_ticket(first_date, second_date){
	
	var pie_data = [];
	var color_array = ["#2DCE98", "#F53C56", "#11CDEF", "#FEB969", "#7764E4"];
	if (typeof first_date === 'undefined' && typeof second_date === 'undefined') {
		$.ajax({
			type    : 'ajax',
			url     : base+'Ticket/count_product_ticket',
			async   : false,
			dataType    : 'json',
			success : function(data){
				var i;
				for(i=0; i<data.length; i++){
					// objection = data[i].JUMLAH_TIKET_OBJECTION;
					pie_data.push({
						label: data[i].PRODUCTNAME+", "+data[i].COUNTOF+" Ticket",
						data: data[i].COUNTOF,
						color: color_array[i]
					});
				}
			}
		});
	} else {
		$.ajax({
			type    : 'ajax',
			url     : base+'Ticket/count_product_ticket/'+first_date+'/'+second_date,
			async   : false,
			dataType    : 'json',
			success : function(data){
				var i;
				for(i=0; i<data.length; i++){
					// objection = data[i].JUMLAH_TIKET_OBJECTION;
					pie_data.push({
						label: data[i].PRODUCTNAME+", "+data[i].COUNTOF+" Ticket",
						data: data[i].COUNTOF,
						color: color_array[i]
					});
				}
			}
		});
	}
		//Pie Chart
		if( $('#count_product_ticket_chart').length > 0 ){

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
		$.plot($("#count_product_ticket_chart"), pie_data, pie_op);
	}
}

coba();
function coba(){
	if( $('#chart_6').length > 0 ){
		var ctx6 = document.getElementById("chart_6").getContext("2d");
		var data6 = {
			 labels: [
			"organic",
			"Referral",
			"Other"
		],
		datasets: [
			{
				data: [200,50,250],
				backgroundColor: [
					"#0f4fa8",
					"#09a275",
					"#f2b701",
				],
				hoverBackgroundColor: [
					"#0f4fa8",
					"#09a275",
					"#f2b701",
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



		/*var pie_data = [{
			label: "Complain"+" "+"complaint"+" Ticket",
			data: 10,
			color: "#2DCE98",
			
		}, {
			label: "Inquiry"+" "+"inquiry"+" Ticket",
			data: 10,
			color: "#F53C56",
		}, {
			label: "Request"+" "+"request"+" Ticket",
			data: 10,
			color:"#11CDEF",
		}, {
			label: "Objection"+" "+"objection"+" Ticket",
			data: 10,
			color:"#FEB969",
		}];*/
	});