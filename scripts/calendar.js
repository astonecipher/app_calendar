$(document).ready(function() {

	$(".dates li").click(function() {
		var val = $(this).attr('id');
		
		if ($(this).attr('class').trim() != 'past' && $(this).attr('class').trim() != 'empty') {
			$.get('api.php?pid=getSchedule&date=' + val, function(data) {
				$('#schedule').html(data);
			});
			
			var dates = val.split('-');
			
			$('.modal-title').html("Schedule for: " + dates[1] + '/' + dates[2] + '/' + dates[0]);
			$('#test_form').modal('show');
		}
	});
	
//	$('.time_slot_add').click(function(){
//		alert("Time: " + $(this).attr('id'));
//	});
//
//
//	$('.time_slot_add').mouseover(function(){
//		alert("Time: " + $(this).attr('id'));
//	});
	
});
