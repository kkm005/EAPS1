<?php
	$server = "us-cdbr-iron-east-01.cleardb.net";
	$username = "b58baa02f9ab8a";
	$password = "797139ad";
	$db = "heroku_ea07ab03ff13442";
    $conn = new mysqli($server, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_query($conn, "SET NAMES utf8");