<?php 
	
// for page redirections
function redirect($location){

	header("Location:$location");
} 

// for retrieve data
function query(){

	global $connection;
	return mysqli_query($connection, $sql);
}

// Check query validity
function confirm($result){
	global $connection;
	if (!$result) {
		die("QUERY FAILED". mysqli_error($connection));
	}
}

// for prevent sql injections
function escape_string($string){

	global $connection;
	return mysqli_real_escape_string($connection, $string);
}

// for fetch the array result
function fetch_array($result){

	return mysqli_fetch_array($result);
}

?>