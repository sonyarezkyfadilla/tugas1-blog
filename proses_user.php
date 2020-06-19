<?php

// Config
require_once "inc/config.php";

$user = new App\User();

if ($_POST['btn-simpan']) {
	$user->input();
	header("location:dashboard.php?page=tampil_user");
}

if ($_POST['btn-update']) {
	$user->update();
	header("location:dashboard.php?page=tampil_user");
}
