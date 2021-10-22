<?php
require __DIR__ . "/../db.php";

header("Content-Type: application/json");

if( !empty($_GET["genre"]) ) {
	$genre = $_GET["genre"];
	$databaseFiltered = [];

	foreach($database as $abc) {
		if( $genre == $abc["genre"] ) {
			$databaseFiltered[] = $abc;
		}
	}

	echo json_encode($databaseFiltered);
} else {
	echo json_encode($database);
}
// var_export($database);