<?php
	$server = "us-cdbr-iron-east-01.cleardb.net";
	$username = "bb638a0b9e5724";
	$password = "3556cc19";
	$db = "heroku_5663ecc9ac15f3e";
    $conn = new mysqli($server, $username, $password, $db);
    mysqli_query($conn, "SET NAMES utf8");
	$office_id = 'หนอง';
	$sql = "SELECT * FROM tbl_improve WHERE detail LIKE '%".$office_id."%'";
	$query = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($query);
	echo $num;
?>
