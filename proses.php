<?php
	include 'database.php';
	class Proses extends Database{
		public function __construct(){
			$this->conn = $this->koneksi();
		}
		public function tampil_data(){
			$sql = "SELECT *FROM student";
			$bind = $this->conn->query($sql);
			while ($obj=$bind->fetch_object()){
				$baris[] = $obj;
			}
			if(!empty($baris)){
				return $baris;
			}
		}
		public function tambah_data($name, $class, $nim, $address, $email, $phone){
			$sql = "INSERT INTO student (name, class, nim, address, email, phone) VALUES ('$name', '$class', '$nim', '$address', '$email', '$phone')";
			$this->conn->query($sql);
		}
		public function edit($id){
			$sql = "SELECT * FROM student WHERE id='$id'";
			$bind = $this->conn->query($sql);
			while ($obj = $bind->fetch_object()){
				$baris = $obj;
			}
			return $baris; 
		}
		public function edit_data($id, $name, $class, $nim, $address, $email, $phone){
			$sql = "UPDATE student SET name='$name', class='$class', nim='$nim', address='$address', email='$email', phone='$phone' WHERE id='$id'";
			$this->conn->query($sql);
		}
		public function delete($id){
			$sql = "DELETE FROM student WHERE id='$id'";
			$this->conn->query($sql);
		}
	}
?>