<?php session_start() ?>
<?php
// validate that each piece of info was provided
if($_POST['tourney_name'] != '' && $_POST['tourney_location'] != '' && $_POST['tourney_dates'] != '') {

	// Add this band to the CSV File
	// (1) open the file for writing
	$f = fopen('../data/tourneys.csv','a');

	// (2) write the new band's info to the file
	fwrite($f,"\n{$_POST['tourney_name']},{$_POST['tourney_location']},{$_POST['tourney_dates']}");

	// (3) close the file
	fclose($f);

	$_SESSION['message'] = array(
		'text' => 'Your tournament has been added.',
		'type' => 'success'
		);

	// Redirect to homepage
	header('Location:../');
} else {
	// Store submitted data into session data
	$_SESSION['POST'] = $_POST;

	// Store message 	
	$_SESSION['message'] = array(
		'text' => 'Please prove all required information.',
		'type' => 'error'
		);

	// Redirect to the form
	header('Location:../?p=form_add_tourney');
}