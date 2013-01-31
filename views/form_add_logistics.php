<h2>Add a Logistic</h2>
<form class="form-horizontal" action="actions/add_logistics.php" method="post">
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
	    <?php echo input('tourney_dates','required') ?>
	  </div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-success"><i class="icon-plus-sign icon-white"></i>Add Tournament</button>
		<a href="./"><button type="button" class="btn">Cancel</button></a>
	</div> 
</form>