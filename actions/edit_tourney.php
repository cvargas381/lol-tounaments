<?php
session_start();
// Read file into array
$lines = file('../data/tourneys.csv',FILE_IGNORE_NEW_LINES);

// Replace line with new values 
$lines[$_POST['linenum']] = "{$_POST['tourney_name']},{$_POST['tourney_location']},{$_POST['tourney_dates']}";

// Create the string to write to the file
$data_string = implode("\n",$lines);

// Write the string to the file, overwriting the current contents
$f = fopen('../data/tourneys.csv','w');

// (2) write the new tourney's info to the file
fwrite($f,$data_string);

// (3) close the file
fclose($f);

$_SESSION['message'] = array(
	'text' => 'Your tournament has been edited.',
	'type' => 'info'
	);

// Redirect to homepage
header('Location:../');

?>