<?php
    $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'ujikom';
	
	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('gagal terhubung ke database');
?>