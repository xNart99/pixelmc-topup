<?php
	$apikey = 'C6C2E5FD7038EE265CF5B3A881E2BF9C'; //API key, lấy từ website thesieutoc.net thay vào trong cặp dấu ''
	// database Mysql config
	$local_db = "localhost";
	$user_db = "root";
	$pass_db = "";
	$name_db = "api_thesieutoc";
	# đừng đụng vào 
  $conn = new mysqli($local_db, $user_db, $pass_db, $name_db);
  $conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }

?>
