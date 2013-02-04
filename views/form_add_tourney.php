<!--functin for date widget-->
<script>
  $(function() {
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
  </script>
<h2>Add a Tournament</h2>
<form class="form-horizontal" action="actions/add_tourney.php" method="post">
	<div class="control-group">
	  <label class="control-label" for="tourney_name">Tournament Name</label>
	  <div class="controls">
	    <?php echo input('tourney_name','required') ?>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label" for="tourney_location">Tournament Location</label>
	  <div class="controls">
	    <?php echo input('tourney_location','required') ?>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label" for="tourney_dates">Tournament Dates</label>
	  <div class="controls">
	    <label for="from">From</label>
		<?php echo input('from','required') ?>
		<label for="to">to</label>
		<?php echo input('to','required') ?>
	  </div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-success"><i class="icon-plus-sign icon-white"></i>Add Tournament</button>
		<a href="./"><button type="button" class="btn">Cancel</button></a>
	</div> 
</form>