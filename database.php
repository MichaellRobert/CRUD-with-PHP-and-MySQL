<?php 
	class Database {
		public function koneksi() {
			$host = "localhost";
			$database = "studentform";
			$username = "root";
			$password = "";

			$connect = new mysqli($host, $username, $password, $database);
			return $connect;
		}
	}

 ?>