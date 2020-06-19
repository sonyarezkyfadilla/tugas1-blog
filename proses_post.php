<?php

include_once "app/controller.php";
include_once "app/Post.php";

$post = new Post();

if ($_POST['tsimpan']) {
	$post->tambah();
	header("location:index.php?page=tampil_post");

}

if ($_POST['tedit']) {
	$post->update();
	header("location:index.php?page=tampil_post");

}

if ($_GET['delete-id']) {
	$post->delete($_GET['delete-id']);
	header("location:index.php?page=tampil_post");

}