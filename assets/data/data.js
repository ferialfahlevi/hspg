var base = 'http://10.8.3.93:8083/dashboard_ops/index.php/';

$(function() {
	"use strict";

	$('[name="detail_ticket2"]').on('click',function(){
		var id = $(this).attr('data');
		$('#detail_ticket').modal('show');
		$.ajax({
			type    : "POST",
			url     : base+'Ticket/ticket_detail',
			async   : false,
			dataType    : 'json',
			data : {ticket:id},
			success : function(data){
				var i;
				for(i=0; i<data.length; i++){
					$('#no_ticket').html(data[i].TICKET_NO);
					$('#title').html(data[i].TITLE);
					$('#product_name').val(data[i].PRODUCTNAME);
					$('#priority').val(data[i].PRIORITY);
					$('#severity').val(data[i].SEVERITY);
					$('#category').val(data[i].CATEGORY);
					$('#media').val(data[i].CF_931);
					$('#open_time').val(data[i].OPEN_TIME);
					$('#close_time').val(data[i].CLOSE_TIME);
					$('#status').val(data[i].STATUS);
					$('#ticket_category').val(data[i].CF_933);
				}
			}
		});
	});

	$('[name="detail_ticket"]').on('click',function(){
		var id = $(this).attr('data');
		$('#detail_ticket').modal('show');
		$.ajax({
			type    : "POST",
			url     : base+'Ticket/ticket_detail',
			async   : false,
			dataType    : 'json',
			data : {ticket:id},
			success : function(data){
				var i;
				for(i=0; i<data.length; i++){
					$('#no_ticket').html(data[i].TICKET_NO);
					$('#title').html(data[i].TITLE);
					$('#product_name').val(data[i].PRODUCTNAME);
					$('#priority').val(data[i].PRIORITY);
					$('#severity').val(data[i].SEVERITY);
					$('#category').val(data[i].CATEGORY);
					$('#media').val(data[i].CF_931);
					$('#open_time').val(data[i].OPEN_TIME);
					$('#close_time').val(data[i].CLOSE_TIME);
					$('#status').val(data[i].STATUS);
					$('#ticket_category').val(data[i].CF_933);
				}
			}
		});
	});

});