<?php

include_once "app/controller.php";
include_once "app/Photos.php";

$photos = new Photos();

if ($_POST['tsimpan']) {
	$photos->tambah();
	header("location:index.php?page=tampil_photos");

}

if ($_POST['tedit']) {
	$photos->update();
	header("location:index.php?page=tampil_photos");

}

if ($_GET['delete-id']) {
	$photos->delete($_GET['delete-id']);
	header("location:index.php?page=tampil_photos");

}