<?php

	$host = "localhost";
    $username = "root";
    $pass = "";
	$dbname = "kominfo";
    try {
        $dinas = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
        $dinas->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception){
        die("Connection error: " . $exception->getMessage());
    }
?>
