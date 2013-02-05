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
<?php
// Read all lines of the CSV file into an array
$lines = file('data/tourneys.csv',FILE_IGNORE_NEW_LINES);

// Get the line associated with the 'tourney' paramter in the QS
$tourney = explode(',',$lines[$_GET['tourney']]);
?>

<h2>Edit a Tourney</h2>
<form class="form-horizontal" action="actions/edit_tourney.php" method="post">
	<input type="hidden" name="linenum" value="<?php echo $_GET['tourney'] ?>" />
	<div class="control-group">
	  <label class="control-label" for="tourney_name">Tournament Name</label>
	  <div class="controls">
	    <?php echo input('tourney_name','required', $tourney[0]) ?>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label" for="tourney_location">Tournament Location</label>
	  <div class="controls">
	    <?php echo input('tourney_location','required', $tourney[1]) ?>
	  </div>
	</div>
	<div class="control-group">
	  <label class="control-label" for="tourney_dates">Tournament Dates</label>
	  <div class="controls">
	  	<label for="from">From</label>
		<?php echo input('from','required', $tourney[2]) ?>
		<label for="to">to</label>
		<?php echo input('to','required', $tourney[3]) ?>
	  </div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-warning"><i class="icon-edit icon-white"></i>Edit Tournament</button>
		<a href="./"><button type="button" class="btn">Cancel</button></a>
	</div> 
</form>