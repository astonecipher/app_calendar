$(document).ready(
		function() {

			$('.time_slot_add').click(
					function() {
						var time = $(this).attr('id').replace('_', ':');
						
						$("#appTime").val(time);
						$('#setApp').modal('show');
//						$(this).removeClass('glyphicon glyphicon-plus time_slot_add');
						
					});

			

			
			
		});
