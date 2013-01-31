<?php
// Read all lines of the CSV file into an array
$lines = file('data/tourney.csv',FILE_IGNORE_NEW_LINES);

// Get the line associated with the 'tourney' paramter in the QS
$tourney = explode(',',$lines[$_GET['tourney']]);
?>

<h2>Edit a Tourney</h2>
<form class="form-horizontal" action="actions/add_tourney.php" method="post">
	<input type="hidden" name="linenum" value="<?php echo $_GET['band'] ?>" />
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
	    <?php echo input('tourney_dates','required', $tourney[2]) ?>
	  </div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-warning"><i class="icon-edit icon-white"></i>Edit Tournament</button>
		<a href="./"><button type="button" class="btn">Cancel</button></a>
	</div> 
</form>