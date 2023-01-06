<?php 
	class DbConnect {
		
    
		public function connect() {
		$host = "localhost";
		$user = "durakathanapala_phonesite";
		$pass = "50cqT)Wqd3ZA";
		$db = "durakathanapala_phone";
		$con = mysqli_connect("localhost","durakathanapala_phonesite","50cqT)Wqd3ZA","durakathanapala_phone") or die("Couldn't connect");
		return $con;
		}
	}
 ?>