<!DOCTYPE html>
<html>
<head>
	<title>UJIAN TENGAH SEMESTER</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
</head>
<body>
	
	<div>
		
		<!-- ini untuk header -->
	<div class="header.php">
		
		<img src="layout/assets/images/header.jpg">
	</div>

	<!-- ini untuk menu -->
	<div class="menu">
		<center>
			<a href="index.php">HOME</a>
			<a href="index.php?page=tampil_category">CATEGORY</a>
			<a href="index.php?page=tampil_post">POST</a>
			<a href="index.php?page=tampil_photos">PHOTOS</a>
			<a href="index.php?page=tampil_album">ALBUM</a>
			<a href="login.php" class="logout">LOGOUT</a>
		</center>
	</div>


	<!-- ini untuk utama -->
	<div class="main">

	<?php

	if (isset($_GET['page'])) {
		include $_GET['page'] . ".php";
	} else{
		include "main.php";
	}

		?>
	</div>

	<!-- ini untuk footer -->
	<div class="footer">

		copyright &copy; 2020. Programmed by Sonya Rezky Fadilla Lubis 
	</div>
</div>

</body>
</html>