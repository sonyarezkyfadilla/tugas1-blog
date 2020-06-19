<?php

include_once "app/controller.php";
include_once "app/Album.php";

$album = new Album();

if ($_POST['tsimpan']) {
	$album->tambah();
	header("location:index.php?page=tampil_album");

}

if ($_POST['tedit']) {
	$album->update();
	header("location:index.php?page=tampil_album");

}

if ($_GET['delete-id']) {
	$album->hapus($_GET['delete-id']);
	header("location:index.php?page=tampil_album");

}