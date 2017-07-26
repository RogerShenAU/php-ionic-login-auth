<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");

require_once('inc/functions.php');

$json_params = file_get_contents("php://input");
$data = json_decode($json_params);

$results = "";

if (!empty((array) $data)) {
	if(!empty($data->username) && !empty($data->password)){

		$username = $data->username;
		$password = $data->password;
		$results = phpIonicLoginAuthValidateLogin($username, $password);
	}else{
		$results = array(
			"result" => "Error - data incomplete!",
		);
	}
}else{ // no data post

	$results = array(
		"result" => "Error - no data!",
		);
}

header('Content-Type: application/json');
$jsonData = json_encode($results);
echo $jsonData;
