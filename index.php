<?php
// Must be called first to have access to any session data
session_start();

// "Import" functions
require('functions.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="jquery-ui-1.10.0.custom/css/dot-luv/jquery-ui-1.10.0.custom.css" />
		<script src="jquery-ui-1.10.0.custom/js/jquery-1.9.0.js"></script>
		<script src="jquery-ui-1.10.0.custom/js/jquery-ui-1.10.0.custom.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<title>LoL Tournaments</title>
	</head>
	<body>
		<nav>
			<?php include('layout/nav.php') ?>
		</nav>
		<div id="wrapper" class="container">
			<header>
				<?php include('layout/header.php') ?>
			</header>
			<section role="main">
				<?php include('layout/main.php') ?>
			</section>
			<footer>
				<?php include('layout/footer.php') ?>
			</footer>
		</div>
	</body>
</html>