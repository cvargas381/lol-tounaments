<?php
// Must be called first to have access to any session data
session_start();

// "Import" functions
require('functions.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
		<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<title>LoL Tournament Logistics</title>
	</head>
	<body>
		<div id="wrapper" class="container">
			<header>
				<?php include('layout/header.php') ?>
			</header>
			<nav>
				<?php include('layout/nav.php') ?>
			</nav>
			<section role="main">
				<?php include('layout/main.php') ?>
			</section>
			<footer>
				<?php include('layout/footer.php') ?>
			</footer>
		</div>
	</body>
</html>