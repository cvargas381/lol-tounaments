<h2>All Tournaments</h2>
<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Location</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th></th>
			</tr>
		</thead>
	<tbody>
<?php
// Read all lines of the CSV file into an array
$lines = file('data/tourneys.csv',FILE_IGNORE_NEW_LINES);

// Counter variable for line number
$i = 0;

// Iterate over the array of lines
foreach($lines as $line) {
	$parts = explode(',',$line);
	$name = $parts[0];
	$location = $parts[1];
	$start_date = $parts[2];
	$end_date = $parts[3];
	echo '<tr>';
	echo 	"<td>$name</td>";
	echo 	"<td>$location</td>";
	echo 	"<td>$start_date</td>";
	echo 	"<td>$end_date</td>";
	// code for deleting confirmation
	$onclick = "return confirm('Are you sure you want to delete $name?')";
	echo 	"<td class=\"button\"><a href=\"./?p=form_edit_tourney&tourney=$i\" class=\"btn btn-warning\"><i class=\"icon-edit icon-white\"></i></a> <a onclick=\"$onclick\" href=\"./actions/delete_tourney.php?linenum=$i\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i></a></td>";
	echo '</tr>';

	$i++; // increment line number
}
?>
	</tbody>
</table>