<?php

 /* Create MySQL Connection */
	
    $mysqli = new mysqli("server", "username", "password", "db_name"); 
    $uname = $_POST["username"];
	
    /* Ensure The MySQL Database Expects A String */
	
    $stmt = $mysqli->prepare("INSERT INTO table (column) VALUES (?)"); 
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
	
?>