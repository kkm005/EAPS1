<?php
	$server = "us-cdbr-iron-east-01.cleardb.net";
	$username = "bb638a0b9e5724";
	$password = "3556cc19";
	$db = "heroku_5663ecc9ac15f3e";
    $conn = new mysqli($server, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_query($conn, "SET NAMES utf8");
	mysql_query("SET character_set_results=utf8");
	mysql_query("SET character_set_client='utf8'");
	mysql_query("SET character_set_connection='utf8'");
	mysql_query("collation_connection = utf8_unicode_ci");
	mysql_query("collation_database = utf8_unicode_ci");
	mysql_query("collation_server = utf8_unicode_ci");
?>