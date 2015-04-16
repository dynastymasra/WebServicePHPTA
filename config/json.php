<?php
	$db = "webservice_db";
	$localhost = "localhost";
	$user = "root";
	$password = "sandiahsan";

	$connection = @mysqli_connect($db,$localhost,$user,$password);

	if (!$connection) die("error connection".mysqli_connect_error());
		
	$sql = "SELECT * FROM ws_location";
	$result = mysqli_query($connection, $sql);
	$array_location = array();

	while ($data = mysqli_fetch_assoc($result)) {
		$array_location[]=$data;
	}

	echo json_encode($array_location);

?>