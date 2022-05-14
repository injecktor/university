<?php
	$mysqli = false;
	function connectDB(){
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "", "test");
	}

	function closeDB(){
		global $mysqli;
		$mysqli->close();
	}
	
?>