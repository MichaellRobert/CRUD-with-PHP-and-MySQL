<?php
	include 'proses.php';
	if(isset($_POST['Save'])) {
		$name = $_POST['name'];
		$class = $_POST['class'];
		$nim = $_POST['nim'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$proses = new Proses();
		$proses->tambah_data($name, $class, $nim, $address, $email, $phone);
		header('location:index.php');
	}


?>