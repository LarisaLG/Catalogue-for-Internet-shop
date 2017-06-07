<?php 

include 'config.php';
include 'functions.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Catalogue</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<a href="/catalogApple/">Main</a>
	<div class="wrapper">
		<div class="sidebar">SIDEBAR</div>
		<div class="content">
			<?php print_arr($categories);?>
		</div>
	</div>
</body>
</html>