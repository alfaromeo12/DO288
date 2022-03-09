<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = getenv("MYSQL_SERVICE_NAME");
$databaseName = getenv("MYSQL_DATABASE");
$databaseUsername = getenv("MYSQL_USER");
$databasePassword = getenv("MYSQL_PASSWORD");
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
