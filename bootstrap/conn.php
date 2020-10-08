<?php

// conectar com o banco de dados
		$servername = "localhost";
		$username = "root";
		$password = "";
		$bd = "escola2";

		
		$conn = new mysqli($servername, $username, $password, $bd);  
		// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
		
?>