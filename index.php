<?php
include 'classes/Calendar.php';
 
$calendar = new Calendar();
?>
<!doctype html>
<html>
<head>

<link href="styles/calendar_style.css?ver=1" type="text/css"
	rel="stylesheet" />
<script
	src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>

<link rel="stylesheet" type="text/css"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<script src='scripts/calendar.js?ver1'></script>
</head>
<body>
	<div class="container">

		<div class='col-md-6 col-md-offset-3'>
		<h2 style='text-align: center;'>My Calendar</h2>
			<?php echo $calendar->show(); ?>
		</div>

	</div>

<!-- Modal -->
<div id="test_form" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body" id='schedule'>
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
<!--         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
    </div>

  </div>
</div>


	<script
		src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js'></script>
	<script
		src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>

</body>
</html>



