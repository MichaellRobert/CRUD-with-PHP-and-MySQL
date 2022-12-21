<?php
	include 'proses.php';
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$proses = new Proses();
		$proses->delete($id);
		header('location:index.php');
	}
?>