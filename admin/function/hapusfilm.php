<?php
	include ("include/koneksi.php");
	$id = $_GET['id'];
	$sql = "DELETE FROM film WHERE id_film = '$id'";

	$koneksi -> query($sql);
	header("location: movies.php");
?>
