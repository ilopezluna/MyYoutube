<?php
	$uri = 'localhost';
	$database = 'DATABASE_NAME';
	$user = 'DATABASE_USER';
	$password = 'DATABASE_TABLE';
	$videosTable = 'videos';
	$videoUrl = 'url';
	$videoDate = 'videoDate';
	$videoCity = 'province';
	$videoEmail = 'email';
	
	$videosSelectQuery = "select * from ".$videosTable." " ;
	$videosInsertQuery = "insert into ".$videosTable." (".$videoUrl.", ".$videoDate.", ".$videoCity.", ".$videoEmail.") values ";
	
	$maxCols = 5;
	$maxRows = 5;
?>