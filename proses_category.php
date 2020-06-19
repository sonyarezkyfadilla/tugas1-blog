<?php

include_once "app/controller.php";
include_once "app/Category.php";

$category = new Category();

if ($_POST['tsimpan']) {
	$category->tambah();
	header("location:index.php?page=tampil_category");

}

if ($_POST['tedit']) {
	$category->update();
	header("location:index.php?page=tampil_category");

}

if ($_GET['delete-id']) {
	$category->hapus($_GET['delete-id']);
	header("location:index.php?page=tampil_category");
}

?>